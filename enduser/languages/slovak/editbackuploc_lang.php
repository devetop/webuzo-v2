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
$l['ftp_error-1'] = 'Doména sa nenašla';
$l['ftp_error-2'] = 'Prihlasovacie údaje k FTP sú nesprávne';
$l['ftp_error-3'] = 'Zadaná cesta k FTP neexistuje';
$l['ftp_error'] = 'Nepodarilo sa pripojiť k FTP serveru';
$l['no_ftp_user'] = 'Nebol zadaný užívateľ FTP';
$l['no_backup_loc'] = 'Nebolo zadané umiestnenie záloh';
$l['no_backup_loc_name'] = 'No backup location name was specified';
$l['no_protocol'] = 'Neplatný protokol';
$l['no_server_host'] = 'Nebol zadaný server host';
$l['record_exists'] = 'Toto umiestnenie záloh už existuje';

//Theme Strings
$l['<title>'] = 'Upraviť umiestnenie záloh';
$l['edit_backup'] = 'Upraviť umiestnenie záloh';
$l['location_name'] = 'Názov umiestnenia';
$l['location_name_exp'] = 'Zvoľte si názov pre toto umiestnenie záloh';
$l['protocol'] = 'Protokol';
$l['protocol_exp'] = 'Select the protocol by which '.APP.' will communicate';
$l['server_host'] = 'Server Host (Required)';
$l['server_host_exp'] = 'Enter the server host e.g. ftp.mydomain.com';
$l['port'] = 'Port';
$l['port_exp'] = 'Enter the port to connect (default FTP port is <b>21</b>)';
$l['ftp_user'] = 'Užívateľské meno';
$l['ftp_user_exp'] = 'Užívateľské meno FTP účtu';
$l['ftp_pass'] = 'Heslo';
$l['ftp_pass_exp'] = 'Heslo FTP účtu';
$l['backup_loc'] = 'Umiestnenie záloh';
$l['rel_backup_loc_exp'] = 'Relatívna cesta z adresára užívateľa, napr. /backups';
$l['abs_backup_loc_exp'] = 'Absolútna cesta k adresári záloh, napr. /home/UŽÍVATEĽSKÉ_MENO/backups';
$l['dropbox_backup_loc_exp'] = 'Adresár záloh, napr. /backups. Môžete nechať voľné, v tom prípade si aplikácia zvolí vlastný adresár.';
$l['edit_backup_loc'] = 'Uložiť zmeny';
$l['backup_loc_saved'] = 'Podrobnosti umiestnenia záloh boli uložené';
$l['ftp'] = 'FTP';
$l['return_settings'] = 'Späť k nastaveniu';
$l['invalid_backup_loc'] = 'Cesta k adresári záloh nie je absolútna. Zadajte absolútnu cestu'; 
$l['no_pass_pri'] = 'Please provide either a passoword or private key'; 
$l['off_rbackup'] = 'Zálohy na vzdialenom úložisku sú zakázané správcom';
$l['no_backup_loc_id'] = 'ID umiestnenia zálohy nebolo zadané';
$l['invalid_backup_loc_id'] = 'ID umiestnenia zálohy je neplatné';

$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = 'Autorizácia';
$l['dropbox_authorize'] = 'Re-Autorizácia';
$l['dropbox_authorization_exp'] = 'Kliknite pre opakovanú autorizáciu prístupu '.APP.' APP k vášmu Dropbox účtu. Kliknite na tlačidlo <b>Re-Autorizácia</b> a pokračujte podľa inštrukcií. Poznamenajte si vygenerovaný kód a zadajte ho do políčka <b>Autorizační kód</b>  nižšie';
$l['dropbox_code'] = 'Autorizačný kód';
$l['dropbox_code_exp'] = 'Zadajte kód vygenerovaný po stlačení tlačidla <b>Re-Autorizácie</b> vyššie';
$l['dropbox_auth_tooltip'] = 'Stlačte toto tlačidlo pre autorizáciu prístupu Dropboxu';
$l['no_dropbox_access'] = 'Prosím autorizujte '.APP.' App vo vašom Dropboxu';
$l['token_gen_failed'] = 'Vytvorenie prístupového tokenu Dropbox sa nepodarilo';
$l['dropbox_backup_loc'] = 'Umiestnenie záloh (voliteľné)';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = 'Autorizačná metóda';
$l['auth_password_exp'] = 'Zvoľte autorizačnú metódu';
$l['private_key'] = 'Privátny kľúč';
$l['private_key_exp'] = 'Vložte privátny kľúč tu';
$l['passphrase'] = 'Prístupová fráza';
$l['passphrase_exp'] = 'Passphrase for the private key (Optional)';
$l['auth_method_pass'] = 'Heslo';
$l['auth_method_key'] = 'SSH klíč';

$l['gdrive'] = 'Google Disk';
$l['rbackup_protocol_disabled'] = 'Zálohy na <b>&soft-1;</b> sú zakázané správcom';

$l['webdav'] = 'WebDAV';
$l['webdav_port_exp'] = 'Zvoľte port pre pripojenie (prednastavený WebDAV port je <b>80</b> pre nezabezpečené a <b>443</b> pre zabezpečené pripojenie)';
$l['webdav_ftp_user_exp'] = 'Užívateľské meno vášho WebDAV účtu';
$l['webdav_ftp_pass_exp'] = 'Heslo vášho WebDAV účtu';
$l['webdav_backup_loc_exp'] = 'Relatívna cesta z adresára užívateľa WebDAV, napr. /backups';
$l['webdav_server_host_exp'] = 'Zadajte server host, napr. webdav.mojedomena.com';
$l['no_webdav_connect'] = 'Nepodarilo sa pripojiť k WebDAV serveru';