<?php
define('PSM_CRON', true);
require_once __DIR__ . '/../src/bootstrap.php';
use psm\Service\Database;
use psm\Util\Server\Updater\StatusUpdater;

function ping($host, $port, $type, $id, Database $db) {
    $exit_code = 0;
    $rtime = 0;
    $timeout = 2; // Timeout 2 detik

    if ('service' === $type) {
        $handle = @fsockopen($host, $port, $errno, $errstr, $timeout);
        $start_time = microtime(true);
        $exit_code = $handle ? 0 : 1;
        if ($handle) { @fclose($handle); }
        $end_time = microtime(true);
        $rtime = ($end_time - $start_time) * 1000;
    } else {
        $command = (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')
            ? 'ping -n 1 -w ' . ($timeout * 1000) . ' ' . escapeshellarg($host)
            : 'ping -c 1 -W ' . $timeout . ' ' . escapeshellarg($host);

        $start_time = microtime(true);
        exec($command, $output, $exit_code);
        $end_time = microtime(true);
        $rtime = ($end_time - $start_time) * 1000;
    }

    if (0 !== $exit_code) {
        $statusUpdater = new StatusUpdater($id, $db);
        $statusUpdater->update();
    } else {
        $sth = $db->prepare('UPDATE psm_servers SET `notification` = 0 WHERE `id` = :id');
        $sth->execute([':id' => $id]);
    }

    $sth = $db->prepare('INSERT INTO psm_logs (`id_server`, `timestamp`, `status`, `rtime`) VALUES (:id, :timestamp, :status, :rtime)');
    $sth->execute([':id' => $id, ':timestamp' => date('Y-m-d H:i:s'), ':status' => (0 === $exit_code) ? 1 : 0, ':rtime' => round($rtime, 2)]);

    $sth = $db->prepare('UPDATE psm_servers SET `rtime` = :rtime, `last_online` = CASE WHEN :status = 1 THEN NOW() ELSE `last_online` END, `last_offline` = CASE WHEN :status = 0 THEN NOW() ELSE `last_offline` END WHERE id = :id');
    $sth->execute([':rtime' => round($rtime, 2), ':status' => (0 === $exit_code) ? 1 : 0, ':id' => $id]);

    return ['status' => $exit_code, 'rtime' => $rtime];
}

$sth = $db->prepare('SELECT `id`, `host`, `port`, `type` FROM psm_servers WHERE `disabled` = 0');
$sth->execute();
$results = $sth->fetchAll();

if (count($results) > 0) {
    foreach ($results as $row) {
        ping($row['host'], $row['port'], $row['type'], $row['id'], $db);
    }
}
