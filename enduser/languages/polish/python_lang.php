<?php

//////////////////////////////////////////////////////////////
//===========================================================
// python_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$l['python_message'] = 'Python nie jest zainstalowany. Aby go zainstalować kliknij <a href="'.$globals['index'].'act=apps&app=29">tutaj</a>';
$l['python_title'] = 'Python nie jest zainstalowany na Twoim serwerze';
$l['no_info_file'] = 'Plik INSTALL.XML nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['incompatible'] = 'Oprogramowanie wymaga wyższej wersji '. APP.'! Prosimy o wysłanie zgłoszenia do administratora serwera.';
$l['no_install'] = 'Plik INSTALL.XML nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_functions'] = 'Plik INSTALL FUNCTIONS nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_softdomain'] = 'Nie wybrałeś domeny do zainstalowania oprogramowania.';
$l['wrong_softdomain'] = 'Nie można odnaleźć ścieżki wybranej domeny.';
$l['softdirectory_exists'] = 'Ścieżka, którą wprowadziłeś już istnieje! Prosimy wprowadzić inną.';
$l['no_space'] = 'Nie masz wystarczającej ilości wolnej powierzchni, aby zainstalować oprogramowanie!';
$l['no_softdb'] = 'Baza danych nie została wysłana.';
$l['database_exists'] = 'Baza danych już istnieje. Proszę wybrać inną nazwę.';
$l['databaseuser_exists'] = 'Użytkownik bazy danych już istnieje. Proszę wybrać inną nazwę bazy danych.';
$l['db_name_long'] = 'Nazwa bazy danych nie może być dłuższa niż 7 liter. Prosimy, wybrać krótszą nazwę bazy danych.';
$l['db_limit_crossed'] = 'Została osiągnięta maksymalna liczba baz danych, którą możesz utworzyć, w takim wypadku instalacja nie może być kontynuowana.';
$l['no_field'] = 'Pole <b>&soft-1;</b> jest wymagana i musi być wypełnione.';
$l['error_adddb'] = 'Nie można utworzyć bazy danych';
$l['error_adduser'] = 'Wystąpił błąd podczas dodawania użytkownika do nowej bazy danych';
$l['no_package'] = 'Nie znaleziono pakietu instalacyjnego!';
$l['no_decompress'] = 'Było kilka błędów podczas dekompresji plików pakietu.';
$l['mail_new_ins'] = 'Nowa instalacja &soft-1; została zakończona. Poniżej przedstawiono szczegóły dotyczące instalacji:';
$l['mail_path'] = 'Ścieżka';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Nazwa użytkownika admin';
$l['mail_pass'] = 'Dane logowania Admin';
$l['mail_db'] = 'Bazy danych MySQL';
$l['mail_dbuser'] = 'Użytkownik MySQL DB';
$l['mail_dbhost'] = 'Host MySQL DB';
$l['mail_dbpass'] = 'Hasło MySQL DB';
$l['mail_time'] = 'Czas instalacji';
$l['mail_subject'] = 'Nowa instalacja programu &soft-1;';
$l['no_cron_min'] = 'Nie została określona minuta dla crona';
$l['no_cron_hour'] = 'Nie została określona godzina dla crona';
$l['no_cron_day'] = 'Nie został określony dzień dla crona';
$l['no_cron_month'] = 'Nie został określony miesiąc dla crona';
$l['no_cron_weekday'] = 'Nie został określony dzień powszedni dla crona';
$l['wrong_cron_min'] = 'Źle podana minuta. Prawidłowa wartość to 0-59 lub <b>*</b>';
$l['wrong_cron_hour'] = 'Źle podana godzina. Prawidłowa wartość to 0-23 lub <b>*</b>';
$l['wrong_cron_day'] = 'Źle podany dzień. Prawidłowa wartość to: 1-31 lub w <b>*</b>';
$l['wrong_cron_month'] = 'Źle podany miesiąc. Prawidłowa wartość to: 1-12 lub <b>*</b>';
$l['wrong_cron_weekday'] = 'Źle podany dzień powszedni. Prawidłowa wartość to 0-7 lub <b>*</b>';
$l['mail_cron'] = 'Zadanie CRON';
$l['no_datadir'] = 'Nie został określony katalog danych';
$l['datadir_exists'] = 'Dodany katalog danych już nie istnieje. Określ inny katalog.';
$l['no_decompress_data'] = 'Było kilka błędów podczas dekompresji plików DATA.';
$l['mail_datadir'] = 'Katalog danych';
$l['some_files_exist'] = 'Instalacja nie może być kontynuowana, ponieważ w folderze docelowym istnieją następujące pliki:';
$l['delete_files'] = 'Proszę usunąć te pliki lub wybrać inny katalog.';
$l['overwrite_exist'] = '<b>LUB</b> < br / > <input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">zaznacz pole wyboru, aby nadpisać wszystkie pliki i kontynuować dalej</span></b>';
$l['checking_data'] = 'Sprawdzenia zatwierdzonych danych';
$l['unzipping_files'] = 'Kopiowanie plików i katalogów';
$l['unzipping_datadir'] = 'Rozpakowaniu plików danych';
$l['prop_db'] = 'Propagowanie w bazie danych';
$l['finishing_process'] = 'Kończenie instalacji';
$l['wait_note'] = '<b>Uwaga:</b> To może zająć 3-4 minuty. Prosimy nie zamykać tej strony do momentu, aż pasek postępu zapełni się w 100%';
$l['no_hostname'] = 'Podaj nazwę hosta bazy danych';
$l['no_dbusername'] = 'Wprowadź swoją nazwę użytkownika bazy danych';
$l['no_dbuserpass'] = 'Podaj hasło bazy danych';
$l['softdirectory_invalid'] = 'Wprowadzone ścieżka jest nieprawidłowa.';
$l['softdatadir_invalid'] = 'Katalogu danych, który wpisałeś jest niepoprawny.';
$l['no_dir'] = 'Proszę podać nazwę katalogu.';
$l['err_pass_strength'] = 'Siła hasła musi być większa niż';
$l['no_https'] = 'Nie znaleziono zaufanego certyfikatu SSL';
$l['err_dbprefix'] = 'Prefiks tabeli jest nieprawidłowy. Prawidłowe wartości to a-z lub A-Z lub 0-9 lub _';
$l['no_mysql_install'] = 'MySQL jest niezainstalowany. Aby go zainstalować kliknij <a href="'.$globals['index'].'act=apps&app=16">tutaj</a>';
$l['auto_backup_not_allowed'] = 'Wybrana częstotliwość automatycznego backupu jest nieprawidłowa';
$l['invalid_script'] = 'Nieprawidłowy ID skryptu';
$l['not_python_script'] = 'This script is not in Python';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instaluj';
$l['overview'] = 'Podgląd';
$l['features'] = 'Funkcje';
$l['demo'] = 'Demo';
$l['ratings'] = 'Oceny';
$l['import'] = 'Importuj';
$l['software_ver'] = 'Wersja';
$l['space_req'] = 'Wymagana ilość powierzchni';
$l['available_space'] = 'Dostępna przestrzeń';
$l['req_space'] = 'Wymagana przestrzeń';
$l['mb'] = 'MB';
$l['software_support'] = 'Wsparcie dla software-u';
$l['support_link'] = 'Odwiedź stronę pomocy technicznej';
$l['support_note'] = 'Uwaga: Softaculous nie zapewnia wsparcia dla jakiegokolwiek oprogramowania.';
$l['setup'] = 'Instalacji oprogramowania';
$l['choose_domain'] = 'Wybierz domenę';
$l['choose_domain_exp'] = 'Proszę wybrać domenę do zainstalowania oprogramowania.';
$l['in_directory'] = 'W katalogu';
$l['in_directory_exp'] = 'Katalog jest powiązany z Twoją domeną i <b>nie powinien istnieć</b>. Np.: Aby dokonać instalacji w http://mydomain/dir/ wpisz tylko <b>dir</b>.';
$l['database_name'] = 'Nazwa bazy danych';
$l['database_name_exp'] = 'Wpisz nazwę bazy danych, która ma być użyta do instalacji';
$l['softcopy_note'] = '<b>Uwaga</b>: Ten program wymaga do instalacji użycia swoich własnych narzędzi instalacyjnych. Prosimy odwiedź adres URL, który pojawi się po skopiowaniu plików, aby zakończyć proces instalacji.';
$l['softsubmit'] = 'Instaluj';
$l['congrats'] = 'Gratulacje, oprogramowanie zostało pomyślnie zainstalowane';
$l['succesful'] = 'został pomyślnie zainstalowane w';
$l['admin_url'] = 'Administracyjny adres URL';
$l['setup_continue'] = 'Jednakże, proces instalacji zostanie zakończony przez oprogramowanie. Aby zakończyć instalację, odwiedź następujący adres URL';
$l['enjoy'] = 'Mamy nadzieję, że proces instalacji był łatwy.';
$l['install_notes'] = 'Oto kilka ważnych uwag. Sugerujemy aby się z nimi zapoznać';
$l['please_note'] = '<b>Uwaga</b>: '.APP.' jest automatyczny instalatorem oprogramowania i nie zapewnia wsparcia dla poszczególnych pakietów. Odwiedź witrynę sieci web w celu uzyskania wsparcia!';
$l['regards'] = 'Podziękowania';
$l['softinstaller'] = 'Autoinstalator '.APP.'';
$l['return'] = 'Powrót do przegladu';
$l['current_ins'] = 'Obecna instalacja';
$l['link'] = 'Link';
$l['ins_time'] = 'Czas instalacji';
$l['version'] = 'Wersja';
$l['upd_to'] = 'Upgrade do wersji';
$l['remove'] = 'Usuń';
$l['no_info'] = 'Brak informacji';
$l['randpass'] = 'Generuj losowe hasło';
$l['ratesoft'] = 'Oceń ten skrypt';
$l['reviews'] = 'Opinie';
$l['reviewsoft'] = 'Napisz recenzję';
$l['readreviews'] = 'Przeczytaj Opinie';
$l['reviews_exp'] = 'Przeczytaj recenzje napisane przez innych użytkowników i';
$l['cron_job'] = 'Zadanie CRON';
$l['cron_job_exp'] = 'Ten skrypt wymaga CRONA do pracy. Proszę określić chronometraż CRON. Jeśli nie masz odpowiedniej wiedzy, zostaw to tak jak jest!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Godzina';
$l['cron_day'] = 'Dzień';
$l['cron_month'] = 'Miesiąc';
$l['cron_weekday'] = 'Dni powszednie';
$l['datadir'] = 'Katalog danych';
$l['datadir_exp'] = 'Ten skrypt wymaga do przechowywania swoich danych katalogu, który nie jest dostępny za pośrednictwem Internetu. W takim wypadku zostanie on utworzony w Twoim katalogu homr, np.: jeśli określisz <b>datadir</b> poniżej będzie utworzony - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = 'W nazwie bazy danych można używać tylko znaków alfanumerycznych.';
$l['overwrite'] = 'Nadpisz pliki';
$l['ins_emailto'] = 'Szczegóły instalacji e-mail do';
$l['choose_protocol'] = 'Wybierz protokół';
$l['choose_protocol_exp'] = 'Jeśli witryna posiada SSL to wybierz protokół HTTPS.';
$l['clone'] = 'Klon';
$l['backup'] = 'Backup';
$l['options'] = 'Opcje';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Powiadom '. $globals [sn].' o nowej wersji';
$l['notifyversion'] = 'Dziękujemy za informację o nowej wersji. Zapoznamy się z nią najszybciej jak to będzie możliwe';
$l['del_insid'] = 'Czy na pewno chcesz usunąć wybrane instalacje? Operacja będzie nieodwracalna. \nNie będzie żadnego dalszego potwierdzenia.';
$l['rem_inst_id'] = 'Usuwanie instalacji-';
$l['no_sel_inst'] = 'Nie została zaznaczona żadna instalacja do usunięcia.';
$l['inst_remvd'] = 'Wybrane instalacje zostały usunięte. Strony będą teraz ponownie załadowane!';
$l['remove'] = 'Usuń';
$l['go'] = 'Idź';
$l['screenshots'] = 'Zrzuty ekranu';
$l['downloading'] = 'Pobieranie pakietu';
$l['installing'] = 'Instalacja skryptu';
$l['editdetail'] = 'Edytowanie szczegółów';
$l['publish'] = 'Publikowanie w Internecie';
$l['hostname'] = 'Nazwa hosta bazy danych';
$l['hostname_exp'] = 'MySQL hostname (głównie <b>localhost</b>)';
$l['dbusername'] = 'Nazwa użytkownika bazy danych';
$l['dbusername_exp'] = 'Nazwa użytkownika MySQL';
$l['dbuserpass'] = 'Hasło bazy danych';
$l['dbuserpass_exp'] = 'Hasło użytkownika MySQL';
$l['database_name_exp_aefer'] = 'Wpisz nazwę bazy danych, która ma być użyta instalacji';
$l['sel_version'] = 'Wybierz wersję';
$l['choose_version_exp'] = 'Proszę wybrać wersję do instalacji.';
$l['choose_version'] = 'Wybierz wersję, którą chcesz zainstalować';
$l['select'] = 'Wybierz';
$l['release_date'] = 'Data wydania';
$l['adv_option'] = 'Zaawansowane opcje';
$l['disable_notify_update'] = 'Wyłącz powiadomienia o aktualizacji';
$l['exp_disable_notify_update'] = 'Jeśli zostawisz zaznaczone, nie otrzymasz żadnych wiadomość e-mail z powiadomieniem o dostępnych aktualizacjach dla tej instalacji.';
$l['prog_installing'] = 'Instaluje'; // Dont remove trailing space
$l['prog_install_complete'] = 'Instalacja zakończona.';
$l['bad'] = 'Zły';
$l['good'] = 'Dobry';
$l['strong'] = 'Mocne';
$l['short'] = 'Krótkie';
$l['strength_indicator'] = 'Wskaźnik siły';

$l['auto_backup'] = 'Automatyczne backupy';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Rotacja backupu';
$l['exp_auto_backup_rotation'] = 'Jeśli osiągnięty zostanie limit rotacji backupu '. APP.' będzie usuwany najstarszy backup tej instalacji i na jego miejsce będzie utworzony nowy. Backupy zużywają Twoją przestrzeń więc wybierz rotację backupu zgodnie z aktualnym zużyciem';
$l['no_backup'] = 'Brak backupu';
$l['daily'] = 'Raz dziennie';
$l['weekly'] = 'Raz w tygodniu';
$l['monthly'] = 'Raz w miesiącu';
$l['unlimited'] = 'Nieograniczony';
$l['changelog'] = 'Rejestr zmian';
$l['act_upgrade'] = 'Niedawno zaktualizowane';
$l['act_clone'] = 'Niedawno sklonowane';
$l['act_backup'] = 'Niedawno zbackupowane';
$l['act_install'] = 'Niedawno zainstalowane';
$l['act_edit'] = 'Ostatnio edytowane';
$l['act_import'] = 'Ostatnio importowane';
$l['act_restore'] = 'Ostatnio przywrócone';

$l['install_tweet_sub'] = 'Poinformuj swoich znajomych o nowej witrynie';
$l['err_auto_backup_limit'] = 'Rotacja automatycznego backupu nie może być większa niż <b>&soft-1;</b>';
$l['select_domain'] = 'Wybierz domenę';
$l['with_selected'] = 'Z wybranych';
$l['related_scripts'] = 'Powiązane sktypty';
$l['install_now'] = 'Instaluj';
$l['my_apps'] = 'Moje aplikacje';

$l['soft_ins_exists'] = 'Według naszych rekordów instalacja już istnieje w &soft-1;. Aby re-instalować aplikację musisz ją wcześniej usunąć!';
$l['no_python_support'] = 'Python script installation is not supported on this panel';

$l['choose_url'] = 'Wybierz URL instalacji';
$l['choose_url_exp'] = 'Wybierz URL do zainstalowania oprogramowania';

$l['error_max_ins_script'] = 'Osiągnąłeś maksymalną liczbę (<b>$soft-1;</b> instalacji dozwolonych na skrypt';