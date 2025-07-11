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
 * @author      Arkadiusz Klenczar <a.klenczar@gmail.com>
 * @copyright   Copyright (c) 2008-2017 Pepijn Over <pep@mailbox.org>
 * @license     http://www.gnu.org/licenses/gpl.txt GNU GPL v3
 * @version     Release: v3.5.2
 * @link        http://www.phpservermonitor.org/
 **/

$sm_lang = array(
    'name' => 'Polski - Polish',
    'locale' => array(
        '0' => 'pl_PL.UTF-8',
        '1' => 'pl_PL',
        '2' => 'polski',
        '3' => 'polski',
    ),
    'locale_tag' => 'pl',
    'locale_dir' => 'ltr',
    'system' => array(
        'title' => 'TERRANET MONITORING',
        'install' => 'Instalacja',
        'action' => 'Akcja',
        'save' => 'Zapisz',
        'edit' => 'Edycja',
        'delete' => 'Usuń',
        'date' => 'Data',
        'message' => 'Wiadomość',
        'yes' => 'Tak',
        'no' => 'Nie',
        'insert' => 'Wstaw',
        'add_new' => 'Dodaj',
        'update_available' => 'Nowa wersja ({version}) jest dostępna do pobrania z <a
 href="https://github.com/phpservermon/phpservermon/releases/latest" target="_blank"
 rel="noopener">http://www.phpservermonitor.org</a>.',
        'back_to_top' => 'Do góry',
        'go_back' => 'Wstecz',
        'ok' => 'OK',
        'cancel' => 'Anuluj',
        'short_day_format' => '%B %e',
        'long_day_format' => '%B %e, %Y',
        'yesterday_format' => 'Wczoraj o %k:%M',
        'other_day_format' => '%A o %k:%M',
        'never' => 'Nigdy',
        'hours_ago' => '%d godzin temu',
        'an_hour_ago' => 'godzinę temu',
        'minutes_ago' => '%d minut temu',
        'a_minute_ago' => 'minutę temu',
        'seconds_ago' => '%d sekund temu',
        'a_second_ago' => 'sekundę temu',
    ),
    'menu' => array(
        'config' => 'Konfiguracja',
        'server' => 'Serwery',
        'server_log' => 'Logi',
        'server_status' => 'Status',
        'server_update' => 'Aktualizuj',
        'user' => 'Użytkownicy',
        'help' => 'Pomoc',
    ),
    'users' => array(
        'user' => 'Użytkownik',
        'name' => 'Nazwa',
        'user_name' => 'Login',
        'password' => 'Hasło',
        'password_repeat' => 'Powtórz hasło',
        'password_leave_blank' => 'Pozostaw puste aby zaniechać zmian',
        'level' => 'Poziom',
        'level_10' => 'Administrator',
        'level_20' => 'Użytkownik',
        'level_description' => '<b>Administratorzy</b> posiadają pełny dostęp: mogą zarządzać serwerami,
 użytkownikami oraz edytować konfigurację globalną.<br><b>Użytkownicy</b> mogą
 podejrzeć serwer oraz uruchomić aktualizację statusu dla serwerów do nich
 przypisanych.',
        'mobile' => 'Telefon',
        'email' => 'Email',
        'pushover' => 'Pushover',
        'pushover_description' => 'Pushover jest usługą szybkich notyfikacji. Sprawdź <a
 href="https://pushover.net/" target="_blank">ich stronę</a> po więcej informacji.',
        'pushover_key' => 'Pushover Key',
        'pushover_device' => 'Urządzenie dla Pushover',
        'pushover_device_description' => 'Nazwa urządzenia do którego wysłać powiadomienie. Pozostaw puste aby
 wysłać do wszystkich urządzeń.',
        'delete_title' => 'Usuń użytkownika',
        'delete_message' => 'Czy jesteś pewny że chcesz usunąć użytkownika \'%1\'?',
        'deleted' => 'Użytkownik usunięty.',
        'updated' => 'Użytkownik zaktualizowany.',
        'inserted' => 'Użytkownik dodany.',
        'profile' => 'Profil',
        'profile_updated' => 'Twój profil został zaktualizowany.',
        'error_user_name_bad_length' => 'Login musi mieć od 2 do 64 znaków.',
        'error_user_name_invalid' => 'Login może zawierać tylko litery (a-z, A-Z), cyfry (0-9), kropki (.) oraz znak
 podkreślenia (_).',
        'error_user_name_exists' => 'Wybrana nazwa użytkownika jest już używana.',
        'error_user_email_bad_length' => 'Email powinien mieć od 5 do 255 znaków.',
        'error_user_email_invalid' => 'Wprowadzony adres email jest nieprawidłowy.',
        'error_user_level_invalid' => 'Wybrany poziom uprawnień użytkownika jest nieprawidłowy.',
        'error_user_no_match' => 'Użytkownik nie został odnaleziony.',
        'error_user_password_invalid' => 'Wprowadzone hasło jest nieprawidłowe.',
        'error_user_password_no_match' => 'Wprowadzone hasła są różne.',
    ),
    'log' => array(
        'title' => 'Logi',
        'type' => 'Typ',
        'status' => 'Status',
        'email' => 'Email',
        'sms' => 'SMS',
        'pushover' => 'Pushover',
        'no_logs' => 'Brak logów',
        'clear' => 'Wyczyść log',
        'delete_title' => 'Wyczyść log',
        'delete_message' => 'Czy na pewno chcesz usunąć <b>wszystkie</b> dzienniki?',
    ),
    'servers' => array(
        'server' => 'Server',
        'status' => 'Status',
        'label' => 'Etykieta',
        'domain' => 'Domena/IP',
        'timeout' => 'Timeout',
        'timeout_description' => 'Liczba sekund do odczekania na odpowiedź serwera.',
        'port' => 'Port',
        'type' => 'Typ',
        'type_website' => 'Strona',
        'type_service' => 'Usługa',
        'pattern' => 'Wyszukiwane wyrażenie/wzorzec',
        'pattern_description' => 'Jeśli wzorzec nie zostanie odnaleziony, status zostanie ustawiony na  offline.
 Wyrażenia regularne są dozwolone.',
        'last_check' => 'Ostatnie sprawdzenie',
        'last_online' => 'Ostatnio online',
        'last_offline' => 'Ostatnio offline',
        'monitoring' => 'Monitorowany',
        'no_monitoring' => 'Brak monitoringu',
        'email' => 'Email',
        'send_email' => 'Wyślij Email',
        'sms' => 'SMS',
        'send_sms' => 'Wyślij SMS',
        'pushover' => 'Pushover',
        'users' => 'Użytkownicy',
        'delete_title' => 'Usuń serwer',
        'delete_message' => 'Czy jesteś pewny że chcesz usunąć serwer \'%1\'?',
        'deleted' => 'Serwer usunięty.',
        'updated' => 'Serwer zaktualizowany.',
        'inserted' => 'Server dodany.',
        'latency' => 'Opóźnienie',
        'latency_max' => 'Opóźnienie (maksymalne)',
        'latency_min' => 'Opóźnienie (minimalne)',
        'latency_avg' => 'Opóźnienie (średnie)',
        'uptime' => 'Czas dostępności',
        'year' => 'Rok',
        'month' => 'Miesiąc',
        'week' => 'Tydzień',
        'day' => 'Dzień',
        'hour' => 'Godzina',
        'warning_threshold' => 'Próg ostrzeżeń',
        'warning_threshold_description' => 'Ilość wymaganych niepowodzeń przed oznaczeniem serwera jako offline.',
        'chart_last_week' => 'Ostatni tydzień',
        'chart_history' => 'Historia',
        'chart_day_format' => '%Y-%m-%d',
        'chart_long_date_format' => '%Y-%m-%d %H:%M:%S',
        'chart_short_date_format' => '%m/%d %H:%M',
        'chart_short_time_format' => '%H:%M',
        'warning_notifications_disabled_sms' => 'Powiadomienia SMS są wyłączone.',
        'warning_notifications_disabled_email' => 'Powiadomienia Email są wyłączone.',
        'warning_notifications_disabled_pushover' => 'Powiadomienia Pushover są wyłączone.',
        'error_server_no_match' => 'Nie odnaleziono serwera.',
        'error_server_label_bad_length' => 'Etykieta musi mieć pomiędzy 1 a 255 znaków.',
        'error_server_ip_bad_length' => 'Domena/IP musi mieć pomiędzy 1 a 255 znaków.',
        'error_server_ip_bad_service' => 'Adres IP jest nieprawidłowy.',
        'error_server_ip_bad_website' => 'Adres URL jest nieprawidłowy.',
        'error_server_type_invalid' => 'Wybrany typ serwera jest nieprawidłowy.',
        'error_server_warning_threshold_invalid' => 'Próg ostrzeżeń musi być liczbą całkowitą większą od 0.',
    ),
    'config' => array(
        'general' => 'Ogólne',
        'language' => 'Język',
        'show_update' => 'Sprawdzić aktualizacje?',
        'email_status' => 'Pozwól na wysyłkę email',
        'email_from_email' => 'Email z adresu',
        'email_from_name' => 'Email od(nazwa)',
        'email_smtp' => 'Włącz SMTP',
        'email_smtp_host' => 'SMTP host',
        'email_smtp_port' => 'SMTP port',
        'email_smtp_security' => 'SMTP security',
        'email_smtp_security_none' => 'None',
        'email_smtp_username' => 'SMTP login',
        'email_smtp_password' => 'SMTP hasło',
        'email_smtp_noauth' => 'Pozostaw puste dla braku autentykacji',
        'sms_status' => 'Pozwól na wysyłkę SMS',
        'sms_gateway' => 'Bramka SMS',
        'sms_gateway_username' => 'Login do bramki',
        'sms_gateway_password' => 'Hasło do bramki',
        'sms_from' => 'Numer nadawcy',
        'pushover_status' => 'Pozwól na wysyłkę notyfikacji Pushover',
        'pushover_description' => 'Pushover jest usługą ułatwiającą otrzymywanie powiadomień w czasie
 rzeczywistym. Sprawdź <a href="https://pushover.net/" target="_blank">ich stronę</a> aby uzyskać
 więcej informacji.',
        'pushover_clone_app' => 'Kliknij tutaj aby stworzyć aplikację korzystającą z Pushover',
        'pushover_api_token' => 'Pushover App API Token',
        'pushover_api_token_description' => 'Zanim zaczniesz używać Pushover, musisz <a href="%1$s" target="_blank"
 rel="noopener"> zarejestrować aplikację</a> na ich stronie internetowej
 i wpisać tutaj App API Token.',
        'alert_type' => 'Wybierz kiedy chcesz być powiadomiony.',
        'alert_type_description' => '<b>Zmiana statusu:</b> Otrzymasz powiadomienie gdy serwer zmieni status. Z online
 -> offline lub offline -> online.<br><br /><b>Offline:</b> Otrzymasz
 powiadomienie gdy serwer zmieni status na offline po raz pierwszy. Na przykład,
 Twój cronjob uruchamia się co 15 minut, a Twój serwer przestaje odpowiadać o
 13 i nie działa do 18. Otrzymasz *TYLKO* jedno powiadomienie o
 13.<br><br><b>Zawsze:</b> Otrzymasz powiadomienie za każdym razem gdy skrypt
 zostanie uruchomiony a strona będzie niedostępna.',
        'alert_type_status' => 'Zmiana statusu',
        'alert_type_offline' => 'Offline',
        'alert_type_always' => 'Zawsze',
        'log_status' => 'Status logowania',
        'log_status_description' => 'Jeśli status logowania ustawiony jest na TRUE, monitor będzie logował
 wydarzenia.',
        'log_email' => 'Emaile wysłane przez skrypt',
        'log_sms' => 'SMS wysłane przez skrypt',
        'log_pushover' => 'Notyfikacje Pushover wysłane przez skrypt',
        'updated' => 'Konfiguracja została zaktualizowana.',
        'tab_email' => 'Email',
        'tab_sms' => 'SMS',
        'tab_pushover' => 'Pushover',
        'settings_email' => 'Ustawienia Email',
        'settings_sms' => 'Ustawienia SMS',
        'settings_pushover' => 'Ustawienia Pushover',
        'settings_notification' => 'Ustawienia powiadomień',
        'settings_log' => 'Ustawienia Logowania',
        'auto_refresh' => 'Auto-odświeżanie',
        'auto_refresh_description' => 'Auto-odświeżanie strony serwera.<br><span class="small">Czas w sekundach, dla
 czasu 0 strona nie będzie odświeżana.</span>',
        'seconds' => 'sekund',
        'test' => 'Test',
        'test_email' => 'Email zostanie wysłany na adres podany w Twoim profilu.',
        'test_sms' => 'SMS zostanie wysłany na numer podany w Twoim profilu.',
        'test_pushover' => 'Powiadomienie Pushover zostanie wysłany na klucz użytkownika/urządzenie podane w Twoim
 profilu..',
        'send' => 'Wyślij',
        'test_subject' => 'Test',
        'test_message' => 'Testowa wiadomość',
        'email_sent' => 'Email wysłany',
        'email_error' => 'Błąd podczas wysyłania emaila',
        'sms_sent' => 'Sms wysłany',
        'sms_error' => 'Błąd podczas wysyłania sms. %s',
        'sms_error_nomobile' => 'Nie udało się wysłać testowego SMS: brak poprawnego telefonu w Twoim profilu.',
        'pushover_sent' => 'Powiadomienie Pushover wysłane.',
        'pushover_error' => 'Błąd podczas wysyłania powiadomienia Pushover: %s',
        'pushover_error_noapp' => 'Błąd podczas wysyłania testowego powiadomienia: brak Pushover App API token w
 konfuguracji globalnej.',
        'pushover_error_nokey' => 'Błąd podczas wysyłania testowego powiadomienia: brak Pushover key na Twoim
 profilu.',
        'log_retention_period' => 'Czas rotacji logów',
        'log_retention_period_description' => 'Liczba dni przez którą należy przetrzymywać logi powiadomień i
 archiwizować uptime serwera. Wpisz 0 aby wyłączyć czyszczenie
 logów.',
        'log_retention_days' => 'dni',
    ),
    'notifications' => array(
        'off_sms' => 'Serwer \'%LABEL%\' przestał odpowiadać: ip=%IP%, port=%PORT%. Błąd=%ERROR%',
        'off_email_subject' => 'Uwaga: Serwer \'%LABEL%\' nie odpowiada',
        'off_email_body' => 'Błąd połączenia do serwera:<br><br>Serwer: %LABEL%<br>IP: %IP%<br>Port:
 %PORT%<br>Błąd: %ERROR%<br>Data: %DATE%',
        'off_pushover_title' => 'Serwer \'%LABEL%\' nie odpowiada',
        'off_pushover_message' => 'Błąd połączenia do serwera:<br><br>Serwer: %LABEL%<br>IP: %IP%<br>Port:
 %PORT%<br>Błąd: %ERROR%<br>Data: %DATE%',
        'on_sms' => 'Serwer \'%LABEL%\' działa poprawnie: ip=%IP%, port=%PORT%, it was down for
 %LAST_OFFLINE_DURATION%',
        'on_email_subject' => 'Uwaga: Serwer \'%LABEL%\' działa poprawnie',
        'on_email_body' => 'Serwer \'%LABEL%\' znów odpowiada, it was down for
 %LAST_OFFLINE_DURATION%:<br><br>Serwer: %LABEL%<br>IP: %IP%<br>Port: %PORT%<br>Data:
 %DATE%',
        'on_pushover_title' => 'Serwer \'%LABEL%\' działa poprawnie',
        'on_pushover_message' => 'Serwer \'%LABEL%\' znów działa poprawnie, it was down for
 %LAST_OFFLINE_DURATION%:<br><br>Serwer: %LABEL%<br>IP: %IP%<br>Port: %PORT%<br>Data:
 %DATE%',
    ),
    'login' => array(
        'welcome_usermenu' => 'Witaj, %user_name%',
        'title_sign_in' => 'Zaloguj się',
        'title_forgot' => 'Zapomniałeś hasła?',
        'title_reset' => 'Zresetuj hasło',
        'submit' => 'Zapisz',
        'remember_me' => 'Zapamiętaj mnie',
        'login' => 'Zaloguj',
        'logout' => 'Wyloguj',
        'username' => 'Login',
        'password' => 'Hasło',
        'password_repeat' => 'Powtórz hasło',
        'password_forgot' => 'Zapomniałeś hasła?',
        'password_reset' => 'Zresetuj hasło',
        'password_reset_email_subject' => 'Zresetuj hasło do monitoringu',
        'password_reset_email_body' => 'Aby zresetować hasło użyj tego linku. Ważność linku to jedna
 godzina.<br><br>%link%',
        'error_user_incorrect' => 'Brak użytkownika o takim loginie.',
        'error_login_incorrect' => 'Login lub hasło jest błędne.',
        'error_login_passwords_nomatch' => 'Podane hasła nie pasują do siebie.',
        'error_reset_invalid_link' => 'Podany link do zmiany hasła jest nieprawidłowy.',
        'success_password_forgot' => 'Email został wysłany do Ciebie z informacjami dotyczącymi zresetowania
 hasła.',
        'success_password_reset' => 'Twoje hasło zostało pomyślnie zmienione. Zaloguj się.',
    ),
    'error' => array(
        '401_unauthorized' => 'Brak autoryzacji',
        '401_unauthorized_description' => 'Nie masz odpowiednich praw dostępu by przeglądać tę stronę.',
    ),
);
