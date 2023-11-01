<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editbackuploc_lang.php
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
$l['ftp_error-1'] = 'Doména nebyla nalezena';
$l['ftp_error-2'] = 'Přihlašovací údaje k FTP jsou nesprávné';
$l['ftp_error-3'] = 'Zadaná cesta k FTP neexistuje';
$l['ftp_error'] = 'Nebylo možné připojit se k FTP serveru';
$l['no_ftp_user'] = 'Nebyl specifikován uživatel FTP';
$l['no_backup_loc'] = 'Nebylo specifikováno umístění záloh';
$l['no_backup_loc_name'] = 'No backup location name was specified';
$l['no_protocol'] = 'Neplatný protokol';
$l['no_server_host'] = 'Nebyl specifikován server host';
$l['record_exists'] = 'Toto umístění záloh již existuje';

//Theme Strings
$l['<title>'] = 'Upravit umístění záloh';
$l['edit_backup'] = 'Upravit umístění záloh';
$l['location_name'] = 'Název umístění';
$l['location_name_exp'] = 'Zvolte si název pro toto umístění záloh';
$l['protocol'] = 'Protokol';
$l['protocol_exp'] = 'Select the protocol by which '.APP.' will communicate';
$l['server_host'] = 'Server Host (Required)';
$l['server_host_exp'] = 'Enter the server host e.g. ftp.mydomain.com';
$l['port'] = 'Port';
$l['port_exp'] = 'Enter the port to connect (default FTP port is <b>21</b>)';
$l['ftp_user'] = 'Uživatelské jméno';
$l['ftp_user_exp'] = 'Uživatelské jméno FTP účtu';
$l['ftp_pass'] = 'Heslo';
$l['ftp_pass_exp'] = 'Heslo FTP účtu';
$l['backup_loc'] = 'Umístění záloh';
$l['rel_backup_loc_exp'] = 'Relativní cesta z adresáře uživatele, např. /backups';
$l['abs_backup_loc_exp'] = 'Absolutní cesta k adresáři záloh, např. /home/UŽIVATELSKÉ_JMÉNO/backups';
$l['dropbox_backup_loc_exp'] = 'Adresář záloh, např. /backups. Můžete nechat volné, v tom případě si aplikace zvolí vlastní adresář.';
$l['edit_backup_loc'] = 'Uložit změny';
$l['backup_loc_saved'] = 'Podrobnosti umístění záloh byly uloženy';
$l['ftp'] = 'FTP';
$l['return_settings'] = 'Zpět k nastavení';
$l['invalid_backup_loc'] = 'Cesta k adresáři záloh není absolutní. Zadejte absolutní cestu'; 
$l['no_pass_pri'] = 'Please provide either a passoword or private key'; 
$l['off_rbackup'] = 'Zálohy na vzdáleném úložišti jsou zakázány správcem';
$l['no_backup_loc_id'] = 'ID lokace zálohy nebylo zadáno';
$l['invalid_backup_loc_id'] = 'ID lokace zálohy je neplatné';

$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = 'Autorizace';
$l['dropbox_authorize'] = 'Re-Autorizace';
$l['dropbox_authorization_exp'] = 'Klikněte pro opakovanou autorizace přístupu '.APP.' APP k vašemu Dropbox účtu. Klikněte na tlačítko <b>Re-Autorizace</b> a pokračujte dle instrukcí. Poznamenejte si vygenerovaný kód a zadejte jej do políčka <b>Autorizační kód</b>  níže';
$l['dropbox_code'] = 'Autorizační kód';
$l['dropbox_code_exp'] = 'Zadejte kód vygenerovaný po zmáčknutí tlačítka <b>Re-Autorizace</b> výše';
$l['dropbox_auth_tooltip'] = 'Stiskněte toto tlačítko pro autorizaci přístupu Dropbox';
$l['no_dropbox_access'] = 'Prosím autorizujte '.APP.' App ve vašem Dropboxu';
$l['token_gen_failed'] = 'Vytváření přístupové tokenu Dropbox se nezdařilo';
$l['dropbox_backup_loc'] = 'Umístění záloh (volitelné)';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = 'Autorizační metoda';
$l['auth_password_exp'] = 'Zvolte autorizační metodu';
$l['private_key'] = 'Privátní klíč';
$l['private_key_exp'] = 'Vložte privátní klíč zde';
$l['passphrase'] = 'Přístupová fráze';
$l['passphrase_exp'] = 'Passphrase for the private key (Optional)';
$l['auth_method_pass'] = 'Heslo';
$l['auth_method_key'] = 'SSH klíč';

$l['gdrive'] = 'Google Disk';
$l['rbackup_protocol_disabled'] = 'Zálohy na <b>&soft-1;</b> jsou zakázány správcem';

$l['webdav'] = 'WebDAV';
$l['webdav_port_exp'] = 'Zvolte port pro připojení (výchozí WebDAV port je <b>80</b> pro nezabezpečené a <b>443</b> pro zabezpečené připojení)';
$l['webdav_ftp_user_exp'] = 'Uživatelské jméno vašeho WebDAV účtu';
$l['webdav_ftp_pass_exp'] = 'Heslo vašeho WebDAV účtu';
$l['webdav_backup_loc_exp'] = 'Relative path from WebDAV user\'s directory e.g. /backups';
$l['webdav_server_host_exp'] = 'Zadejte server host, např. webdav.mojedomena.com';
$l['no_webdav_connect'] = 'Nepodařilo se připojit k WebDAV serveru';