<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addbackuploc_lang.php
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

//Error Strings
$l['ftp_error-1'] = 'Nie można rozwiązać nazwy domeny';
$l['ftp_error-2'] = 'Logowanie niemożliwe za pomocą podanych danych';
$l['ftp_error-3'] = 'Podana ścieżka FTP nie istnieje';
$l['ftp_error'] = 'Połączenie z FTP nie było możliwe';
$l['no_ftp_user'] = 'Nie sprecyzowano użytkownika FTP';
$l['no_backup_loc'] = 'Nie sprecyzowano lokalizacji Backup';
$l['no_backup_loc_name'] = 'No backup location name was specified';
$l['no_protocol'] = 'Nieprawidłowy Protokół';
$l['no_server_host'] = 'Nie sprecyzowano hosta serwera';
$l['record_exists'] = 'Lokalizacja backup o tej samej ścieżce już istnieje';

//Theme Strings
$l['<title>'] = 'Dodaj Lokalizację Backup';
$l['location_name'] = 'Nazwa Lokalizacji';
$l['location_name_exp'] = 'Wybierz nazwę lokalizacji backup do własnego użytku';
$l['protocol'] = 'Protokół';
$l['protocol_exp'] = 'Select the protocol by which '.APP.' will communicate';
$l['server_host'] = 'Server Host (Required)';
$l['server_host_exp'] = 'Enter the server host e.g. ftp.mydomain.com';
$l['port'] = 'Port';
$l['port_exp'] = 'Enter the port to connect (default FTP port is <b>21</b>)';
$l['ftp_user'] = 'Użytkownik';
$l['ftp_user_exp'] = 'Nazwa użytkownika konta FTP';
$l['ftp_pass'] = 'Hasło';
$l['ftp_pass_exp'] = 'Hasło do konta FTP';
$l['backup_loc'] = 'Lokalizacja Backupu';
$l['rel_backup_loc_exp'] = 'Ścieżka względna do lokalizacji FTP użytkownika, np. /backups';
$l['abs_backup_loc_exp'] = 'Ścieżka bezwzględna do lokalizacji backup, np. /home/USERNAME/backups'; 
$l['dropbox_backup_loc_exp'] = 'Lokalizacja Backup, np. /backups. Możesz pozostawić pole puste, aby zezwolić APP na wybranie ścieżki.';
$l['add_backup_loc'] = 'Dodaj Lokalizację Backup';
$l['backup_loc_saved'] = 'Backup Location added successfully';
$l['ftp'] = 'FTP';
$l['return_settings'] = 'Powrót do Ustawień';
$l['invalid_backup_loc'] = 'Ścieżka backup nie jest ścieżką bezwzględną. Wprowadź ścieżkę bezwzględną'; 
$l['no_pass_pri'] = 'Wprowadź hasło lub klucz prywatny'; 
$l['off_rbackup'] = 'Backup w lokalizacji zdalnej jest wyłączony przez Admina';
$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = 'Autoryzacja';
$l['dropbox_authorize'] = 'Authorize';
$l['dropbox_authorization_exp'] = 'Grant '.APP.' APP access to create backups in your Dropbox account. Click on the <b>Authorize</b> button and follow the steps. Make a note of the code generated and enter the same in the <b>Auth Code</b> text box below';
$l['dropbox_code'] = 'Auth Code';
$l['dropbox_code_exp'] = 'Enter the code generated after allowing access via <b>Authorize</b> button above';
$l['dropbox_auth_tooltip'] = 'Wciśnij przycisk, aby autoryzować Dropbox Access';
$l['no_dropbox_access'] = 'Autoryzuj '.APP.' w swoim Dropbox';
$l['token_gen_failed'] = 'Generowanie żetonu dostępowego Dropbox nie powiodło się';
$l['dropbox_backup_loc'] = 'Lokalizacja Backup (opcjonalnie)';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = 'Metoda autentykacji';
$l['auth_password_exp'] = 'Wybierz metodę autentykacji';
$l['private_key'] = 'Klucz Prywatny';
$l['private_key_exp'] = 'Wklej Prywatny Klucz tutaj';
$l['passphrase'] = 'Fraza klucz';
$l['passphrase_exp'] = 'Passphrase for the private key (Optional)';
$l['auth_method_pass'] = 'Hasło';
$l['auth_method_key'] = 'Klucz SSH';

$l['gdrive'] = 'Google Drive';
$l['gdrive_auth_message'] = 'You will be prompted to authorize '.APP.' to access your Google Drive on submitting the form';
$l['gdrive_token_gen_failed'] = 'Failed to generate Google Drive Access Token';
$l['gdrive_err_access_denied'] = 'It seems you cancelled the authorization process';

$l['ampps_notify_premium'] = 'Funkcja jest dostępna w wersji premium AMPPS. Zakup <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['rbackup_protocol_disabled'] = 'Backup w <b>&soft-1;</b> jest wyłączony przez Admina'; 

$l['webdav'] = 'WebDAV';
$l['webdav_port_exp'] = 'Wprowadź port do połączenia (standardowy port WebDAV to <b>80</> dla niezabezpieczonego i <b>443</b> na zabezpieczonego połączenia)';
$l['webdav_ftp_user_exp'] = 'Nazwa użytkownika konta WebDAV';
$l['webdav_ftp_pass_exp'] = 'Hasło do konta WebDAV';
$l['webdav_backup_loc_exp'] = 'Ścieżka z lokalizacji użytkownika WebDAV np. /backups';
$l['webdav_server_host_exp'] = 'Wprowadź host serwera np. webdav.mojadomena.pl';
$l['no_webdav_connect'] = 'Połączenie z serwerem WebDAV nie powiodło się';

