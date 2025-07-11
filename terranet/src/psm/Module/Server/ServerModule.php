<?php

/**
 * PHP TERRANET MONITORING
 * Monitor your servers and websites.
 *
 * This file is part of PHP TERRANET MONITORING.
 * PHP TERRANET MONITORING is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP TERRANET MONITORING is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP TERRANET MONITORING.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     phpservermon
 * @author      Pepijn Over <pep@mailbox.org>
 * @copyright   Copyright (c) 2008-2017 Pepijn Over <pep@mailbox.org>
 * @license     http://www.gnu.org/licenses/gpl.txt GNU GPL v3
 * @version     Release: v3.5.2
 * @link        http://www.phpservermonitor.org/
 * @since       phpservermon 3.0
 **/

namespace psm\Module\Server;

use psm\Module\ModuleInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ServerModule implements ModuleInterface
{

    public function load(ContainerBuilder $container)
    {
    }

    public function getControllers()
    {
        return array(
            'server' => __NAMESPACE__ . '\Controller\ServerController',
            'log' => __NAMESPACE__ . '\Controller\LogController',
            'status' => __NAMESPACE__ . '\Controller\StatusController',
            'update' => __NAMESPACE__ . '\Controller\UpdateController',
        );
    }
}
