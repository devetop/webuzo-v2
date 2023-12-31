<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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

$l['no_info_file'] = 'Die INFO.XML Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['incompatible'] = 'Die Software erfordert eine höhere Version von '.APP.'! Bitte melden Sie dies dem Server Administrator.';
$l['no_install'] = 'Die INSTALL.XML Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['no_functions'] = 'Die INSTALL FUNCTIONS Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['no_softdomain'] = 'Sie haben keine Domain ausgewählt auf der die Software installiert werden soll.';
$l['wrong_softdomain'] = 'Der Pfad der Domain die Sie ausgewählt habe konnte nicht gefunden werden.';
$l['softdirectory_exists'] = 'Das Verzeichnis, das Sie angegeben haben, existiert bereits! Bitte geben Sie einen anderen Verzeichnisnamen an.';
$l['no_space'] = 'Es ist nicht genügend Speicherplatz vorhanden, um diese Software zu installieren!';
$l['no_softdb'] = 'Es wurde keine Datenbank angegeben.';
$l['database_exists'] = 'Die Datenbank existiert bereits. Bitte geben Sie einen anderen Namen an.';
$l['databaseuser_exists'] = 'Der Datenbank Benutzer existiert bereits. Bitte geben Sie einen anderen Namen an.';
$l['db_name_long'] = 'Der Datenbank Name darf maximal 7 Buchstaben enthalten. Bitte geben Sie einen kürzeren Datenbank Namen an.';
$l['db_limit_crossed'] = 'Die maximale Anzahl an Datenbanken wurde erreicht, deshalb kann die Installation nicht fortgesetzt werden.';
$l['no_field'] = 'Das Feld <b>&soft-1;</b> ist erforderlich und muss ausgefüllt werden.';
$l['error_adddb'] = 'Die Datenbank konnte nicht angelegt werden.';
$l['error_adduser'] = 'Es ist ein Fehler beim hinzufügen eines Benutzers zur neuen Datenbank aufgetreten.';
$l['no_package'] = 'Das Installationspaket konnte nicht gefunden werden!';
$l['no_decompress'] = 'Es sind einige Fehler beim entpacken der Paket Dateien aufgetreten.';
$l['mail_new_ins'] = 'Eine neue Installation von &soft-1; wurde abgeschlossen. Die Details der Installation sind unten aufgeführt:';
$l['mail_path'] = 'Pfad';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Admin Benutzername';
$l['mail_pass'] = 'Admin Passwort';
$l['mail_db'] = 'MySQL Datenbank';
$l['mail_dbuser'] = 'MySQL DB Benutzer';
$l['mail_dbhost'] = 'MySQL DB Host';
$l['mail_dbpass'] = 'MySQL DB Passwort';
$l['mail_time'] = 'Installationszeit';
$l['mail_subject'] = 'Neue Installation von &soft-1;';
$l['no_cron_min'] = 'Es wurde keine Cron Minute angegeben';
$l['no_cron_hour'] = 'Es wurde keine Cron Stunde angegeben';
$l['no_cron_day'] = 'Es wurde kein Cron Tag angegeben';
$l['no_cron_month'] = 'Es wurde kein Cron Monat angegeben';
$l['no_cron_weekday'] = 'Es wurde kein Cron Wochentag angegeben';
$l['wrong_cron_min'] = 'Cron Minute ist falsch. Gültige Werte sind 0-59 oder ein <b>*</b>';
$l['wrong_cron_hour'] = 'Cron Stunde ist falsch. Gültige Werte sind 0-23 oder ein <b>*</b>';
$l['wrong_cron_day'] = 'Cron Tag ist falsch. Gültige Werte sind 1-31 oder ein <b>*</b>';
$l['wrong_cron_month'] = 'Cron Monat ist falsch. Gültige Werte sind 1-12 oder ein <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron Wochentag ist falsch. Gültige Werte sind 0-7 oder ein <b>*</b>';
$l['mail_cron'] = 'Cron Job';
$l['no_datadir'] = 'Es wurde kein Datenverzeichnis angegeben';
$l['datadir_exists'] = 'Das Datenverzeichnis existiert bereits. Bitte geben Sie ein anderes an.';
$l['no_decompress_data'] = 'Es sind einige Fehler beim entpacken der Daten Dateien aufgetreten.';
$l['mail_datadir'] = 'Daten Verzeichnis';
$l['some_files_exist'] = 'Die Installation kann nicht fortgesezt werden, weil folgende Dateien im Zielordner bereits existieren: ';
$l['delete_files'] = 'Bitte löschen Sie diese Dateien oder wählen einen anderen Ordner.';
$l['overwrite_exist'] = '<b>ODER</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">aktivieren Sie die Checkbox um alle Dateien zu überschreiben und fortzufahren</span></b>';
$l['www_files_exist'] = 'Die Installation kann nicht fortgesezt werden, weil folgende Dateien im Web Verzeichnis bereits existieren:';
$l['no_decompress_www'] = 'Es sind einige Fehler beim entpacken der Web Dateien aufgetreten.';
$l['no_config_perl_path'] = 'Ein Fehler ist während der Konfiguration der CGI Dateien aufgetreten.';
$l['mail_wwwdir'] = 'Web Verzeichnis';
$l['checking_data'] = 'Überprüfe die angegebenen Daten';
$l['unzipping_files'] = 'Kopiere Dateien und Ordner';
$l['unzipping_datadir'] = 'Entpacke Daten Dateien';
$l['prop_db'] = 'Aktualisiere die Datenbank';
$l['finishing_process'] = 'Installation wird abgeschlossen';
$l['wait_note'] = '<b>HINWEIS:</b> Dies kann einige Minuten in Anspruch nehmen. Bitte verlassen Sie diese Seite NICHT, bis der Status Balken 100% zeigt.';
$l['softdirectory_invalid'] = 'Das angegebene Verzeichnis ist ungültig.';
$l['softdatadir_invalid'] = 'Das Daten Verzeichnis ist ungültig.';
$l['wwwdir_invalid'] = 'Das www Verzeichnis ist ungültig.';
$l['err_pass_strength'] = 'Das Passwort muss eine größere Stärke haben als ';
$l['no_https'] = 'Es wurde kein gültiges SSL Zertifikat gefunden';
$l['err_dbprefix'] = 'Das Tabellen Prefix ist ungültig. Gültige Werte sind a-z oder A-Z oder 0-9 oder _';
$l['no_perl_install'] = 'PERL ist nicht installiert. Um es zu installieren, klicken Sie bitte <a href="'.$globals['index'].'act=apps&app=19">hier</a>';
$l['no_mysql_install'] = 'MySQL ist nicht installiert. Um es zu installieren, klicken Sie bitte <a href="'.$globals['index'].'act=apps&app=16">hier</a>';
$l['auto_backup_not_allowed'] = 'Die Backup Frequenz, die Sie gewählt haben, die ungültig';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installieren';
$l['overview'] = 'Übersicht';
$l['features'] = 'Eigenschaften';
$l['demo'] = 'Demo';
$l['ratings'] = 'Bewertungen';
$l['import'] = 'Importieren';
$l['software_ver'] = 'Version';
$l['space_req'] = 'erforderlicher Speicherplatz';
$l['available_space'] = 'verfügbarer Speicherplatz';
$l['req_space'] = 'erforderlicher Speicherplatz';
$l['mb'] = 'MB';
$l['software_support'] = 'Software Support';
$l['support_link'] = 'Support Seite besuchen';
$l['support_note'] = 'Hinweis: '.APP.' bietet keinerlei Support für die Software an';
$l['setup'] = 'Software Setup';
$l['choose_domain'] = 'Domain auswählen';
$l['choose_domain_exp'] = 'Bitte wähen Sie die Domain aus, auf der die Software installiert werden soll.';
$l['in_directory'] = 'In Verzeichnis';
$l['in_directory_exp'] = 'Das Verzeichnis ist relativ zur Domain und <b>sollte nicht existieren</b>. Z.B. um Software unter http://meinedomain/verzeichnis/ zu installieren, reicht die Angabe <b>verzeichnis</b>. Um direkt unter http://meinedomain/ zu installieren kann das Feld leer gelassen werden.';
$l['database_name'] = 'Datenbank Name';
$l['database_name_exp'] = 'Geben Sie einen Namen für die Datenbank ein, die für die Installation erstellt werden soll.';
$l['softcopy_note'] = '<b>HINWEIS</b>: Diese Software erfordert eine Installation über ihr eigenes Installationstool. Bitte besuchen Sie die URL, die angezeigt wird, sobald alle Dateien kopiert wurden, um den Installationsprozess abzuschließen.';
$l['softsubmit'] = 'Installieren';
$l['congrats'] = 'Glückwunsch, die Software wurde erfolgreich installiert.';
$l['succesful'] = 'wurde erfolgreich installiert unter';
$l['admin_url'] = 'Administrative URL';
$l['setup_continue'] = 'Das Setup wird von der Software selbst abgeschlossen. Um die Installation abzuschließen besuchen Sie bitte die folgende URL';
$l['enjoy'] = 'Wir hoffe, dass der Installationsprozess einfach war.';
$l['install_notes'] = 'Im Folgenden ein paar wichtige Informationen. Wir empfehlen dringend, diese zu lesen:';
$l['please_note'] = '<b>HINWEIS</b>: '.APP.' ist nur ein Auto Installer und stellt keinen Support für die Software Pakete zur Verfügung. Bitte besuchen Sie die Webseite der Software / Anwendung für Support!';
$l['regards'] = 'Mit freundlichen Grüßen';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Zurück zur Übersicht';
$l['current_ins'] = 'Aktuelle Installationen';
$l['link'] = 'Link';
$l['ins_time'] = 'Installationszeit';
$l['version'] = 'Version';
$l['upd_to'] = 'Upgrade auf Version';
$l['remove'] = 'entfernen';
$l['no_info'] = 'Keine Info';
$l['randpass'] = 'Zufallspasswort generieren';
$l['ratesoft'] = 'Diese Anwendung bewerten';
$l['reviews'] = 'Berichte';
$l['reviewsoft'] = 'einen Bericht schreiben';
$l['readreviews'] = 'Berichte lesen';
$l['reviews_exp'] = 'Berichte von anderen Benutzern lesen und';
$l['cron_job'] = 'CRON Job';
$l['cron_job_exp'] = 'Diese Anwendung erfordert einen CRON Job um funktionieren zu können. Bitte geben Sie die Zeiten für den CRON Job an. Wenn Sie sich nicht sicher sind, lassen Sie alles auf Voreinstellung!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Stunde';
$l['cron_day'] = 'Tag';
$l['cron_month'] = 'Monat';
$l['cron_weekday'] = 'Wochentag';
$l['datadir'] = 'Daten Verzeichnis';
$l['datadir_exp'] = 'Diese Anwendung erfordert es seine Daten in einem Ordner zu speichern, der per Internet nicht erreichbar ist. Dieser wird in Ihrem home Verzeichnis angelegt. Das heißt, wenn <b>datenverzeichnis</b> angegeben wird, wird folgender Ordner ersstellt - /home/benutzername/<b>datenverzeichnis</b>';
$l['db_alpha_num'] = 'Es sind nur alpha numerische Buchstaben für den Datenbank Namen erlaubt.';
$l['overwrite'] = 'Dateien überschreiben';
$l['ins_emailto'] = 'E-Mail mit Installationsdetails an';
$l['choose_protocol'] = 'Protokoll auswählen';
$l['choose_protocol_exp'] = 'Wenn Ihre Seite SSL benutzt, wählen Sie bitte das HTTPS Protokoll.';
$l['clone'] = 'Klonen';
$l['backup'] = 'Sicherung';
$l['options'] = 'Optionen';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Benachrichtige '.$globals['sn'].' über eine neue Verison';
$l['notifyversion'] = 'Vielen Dank, dass Sie sich über die neue Verison informiert haben. Wir werden dies so bald wie möglich prüfen.';
$l['del_insid'] = 'Sind Sie sicher, dass Sie die gewählten Installationen entfernen wollen? Die Installation wird unwiderruflich gelöscht werden. \nEs werden keine weiteren Bestätigungen gefordert!';
$l['rem_inst_id'] = 'Entferne Installation - ';
$l['no_sel_inst'] = 'Es wurden keine Installationen zum Entfernen markiert.';
$l['inst_remvd'] = 'Die ausgewählten Installationen wurden entfernt. Die Seite wird jetzt neu geladen!';
$l['remove'] = 'entfernen';
$l['go'] = 'Los';
$l['screenshots'] = 'Screenshots';
$l['downloading'] = 'Lade Paket herunter';
$l['installing'] = 'Installiere Anwendung';
$l['editdetail'] = 'Details bearbeiten';
$l['wwwdir'] = 'Web Verzeichnis';
$l['wwwdir_exp'] = 'Ein Verzeichnis, das vom Internet aus zugänglich ist.';
$l['publish'] = 'Veröffentliche im Internet';
$l['release_date'] = 'Veröffentlichungsdatum';
$l['adv_option'] = 'Erweiterte Optionen';
$l['disable_notify_update'] = 'Update Benachrichtigungen deaktivieren';
$l['exp_disable_notify_update'] = 'Wenn diese Option gesetzt ist, werden Sie keine E-Mail Benachrichtigung über zur Verfügung stehende Updates für diese Installation erhalten.';
$l['prog_installing'] = 'Installiere '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation vollständig.';
$l['bad'] = 'Schlecht';
$l['good'] = 'Gut';
$l['strong'] = 'Stark';
$l['short'] = 'Kurz';
$l['strength_indicator'] = 'Stärke Anzeige';
$l['auto_backup'] = 'Automatische Backups';
$l['exp_auto_backup'] = APP.' wird automatische Backups via Cron durchführen in der Häfigkeit, die Sie einstellen.';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'Wenn das Backup Ratations Limit erreicht ist, wird '.APP.' das älteste Backup für diese Installation löschen und ein neues Backup anlegen. Die Backups werden Ihren Speicherplatz benutzen, daher wählen Sie bitte eine Rotation entsprechend Ihres verfügbaren Speicherplatzes auf dem Server.';
$l['no_backup'] = 'Nicht sichern';
$l['daily'] = 'Einmal am Tag';
$l['weekly'] = 'Einmal in der Woche';
$l['monthly'] = 'Einmal im Monat';
$l['unlimited'] = 'unbegrenzt';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Zuletzt aktualisiert';
$l['act_clone'] = 'Zuletzt geklont';
$l['act_backup'] = 'Zuletzt gesichert';
$l['act_install'] = 'Zuletzt installiert';
$l['act_edit'] = 'Zuletzt bearbeitet';
$l['act_import'] = 'Zuletzt importiert';
$l['act_restore'] = 'Zuletzt zurück gesichert';
$l['ampps_download'] = 'Sie können <b>&soft-1;</b> auf Ihrem <b>desktop</b> entwickeln, indem Sie unser kostenloses Developer Tool Softaculous AMPPS benutzen. Klicken Sie <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>hier</b></a> um es herunter zu laden <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Erzähle Deinen Freunden von Deiner neuen Seite';
$l['err_auto_backup_limit'] = 'Die auto Backup Rotation darf nicht über <b>&soft-1;</b> liegen';
$l['select_domain'] = 'Domain auswählen';
$l['with_selected'] = 'Mit ausgewählter';
$l['related_scripts'] = 'ähnliche Anwendungen';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['install_now'] = 'Jetzt installieren';
$l['my_apps'] = 'Meine Applikationen';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['custom_autobackup'] = 'Custom';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['quick_install'] = 'Quick Install';
$l['custom_install'] = 'Custom Install';

$l['outdated_script'] = '<b>&soft-1;</b> has not been updated for more than two years and may no longer be maintained or supported by the script vendor';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';

$l['rbackup_disabled'] = 'Backup on remote locations is disabled by Admin';
$l['rbackup_protocol_disabled'] = 'Backup on <b>&soft-1;</b> is disabled by Admin';
