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

$l['no_info_file'] = 'Az INFO.XML fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['incompatible'] = 'A szoftver egy magasabb verziójú  '.APP.' -t igényel! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_install'] = 'Az INSTALL.XML fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_functions'] = 'Az INSTALL FUNCTIONS fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_softdomain'] = 'Nem választotta ki a domain nevet a szoftver telepítéséhez.';
$l['wrong_softdomain'] = 'Nem található a kiválasztott domain útvonal.';
$l['softdirectory_exists'] = 'A megadott könyvtárnév már létezik! Kérjük, adjon meg egy másik könyvtár nevet.';
$l['no_space'] = 'Nincs elegendő hely a szoftver telepítéséhez!';
$l['no_softdb'] = 'Az adatbázis nem lett megosztva.';
$l['database_exists'] = 'Az adatbázis már létezik. Kérjük, válasszon másik nevet.';
$l['databaseuser_exists'] = 'Az adatbázis felhasználó már létezik. Kérjük, válasszon másik adatbázis nevet.';
$l['db_name_long'] = 'Az adatbázis neve nem lehet hosszabb 7 karakternél. Kérjük, válasszon rövidebb adatbázis nevet.';
$l['db_limit_crossed'] = 'A létrehozható adatbázisok számát elérte, így a telepítés nem folytatható.';
$l['no_field'] = 'A mező <b>&soft-1;</b> kitöltése kötelező.';
$l['error_adddb'] = 'Az adatbázist nem lehetett létrehozni';
$l['error_adduser'] = 'Hiba történt az új adatbázis felhasználó hozzáadásakor';
$l['no_package'] = 'A telepítési csomag nem található!';
$l['no_decompress'] = 'A fájlok kicsomagolásakor néhány hiba lépett fel.';
$l['mail_new_ins'] = 'A &soft-1; telepítése megtörtént. A telepítés részletei az alábbiakban olvashatóak:';
$l['mail_path'] = 'Útvonal';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Admin Felhasználó név';
$l['mail_pass'] = 'Admin Jelszó';
$l['mail_db'] = 'MySQL Adatbázis';
$l['mail_dbuser'] = 'MySQL DB Felhasználó';
$l['mail_dbhost'] = 'MySQL DB Hoszt';
$l['mail_dbpass'] = 'MySQL DB Jelszó';
$l['mail_time'] = 'Telepítési idő';
$l['mail_subject'] = '&soft-1; telepítése';
$l['no_cron_min'] = 'Nem lett megadva Cron perc';
$l['no_cron_hour'] = 'Nem lett megadva Cron óra';
$l['no_cron_day'] = 'Nem lett megadva Cron nap';
$l['no_cron_month'] = 'Nem lett megadva Cron hónap';
$l['no_cron_weekday'] = 'Nem lett megadva Cron hét napja';
$l['wrong_cron_min'] = 'Rossz Cron perc. A következőnek kell lennie: 0-59 vagy egy <b>*</b>';
$l['wrong_cron_hour'] = 'Rossz Cron óra. A következőnek kell lennie: 0-23 vagy egy <b>*</b>';
$l['wrong_cron_day'] = 'Rossz Cron nap. A következőnek kell lennie: 1-31 vagy egy  <b>*</b>';
$l['wrong_cron_month'] = 'Rossz Cron hónap. A következőnek kell lennie: 1-12 vagy egy <b>*</b>';
$l['wrong_cron_weekday'] = 'Rosszul lett megadva a Cron hét napja. A következőnek kell lennie: 0-7 vagy egy <b>*</b>';
$l['mail_cron'] = 'Cron Job';
$l['no_datadir'] = 'Nem lett megadva Adat Könyvtár';
$l['datadir_exists'] = 'A megadott adat könyvtár létezik. Kérjük, adjon meg egy másikat.';
$l['no_decompress_data'] = 'Az ADAT fájlok kicsomagolásakor hiba lépett fel.';
$l['mail_datadir'] = 'Adat Könyvtár';
$l['some_files_exist'] = 'A telepítés nem folytatható, mert a következő fájlok már léteznek a célmappában:';
$l['delete_files'] = 'Kérjük, törölje a fájlokat vagy válasszon egy másik könyvtárat.';
$l['overwrite_exist'] = '<b>VAGY</b><br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Válassza a checkboxot az összes fájl áttekintéséhet és folytassa</span></b>';
$l['www_files_exist'] = 'A telepítés nem folytatható, mert a következő fájlok már léteznek a WEB könyvtárban:';
$l['no_decompress_www'] = 'A Web fájlok kicsomagolásakor hiba lépett fel.';
$l['no_config_perl_path'] = 'Hiba történt a CGI fájlok konfigurálásakor.';
$l['mail_wwwdir'] = 'Web Könyvtár';
$l['checking_data'] = 'A megadott adatok ellenőrzése';
$l['unzipping_files'] = 'Fájlok és mappák másolása';
$l['unzipping_datadir'] = 'Adat fájlok kicsomagolása';
$l['prop_db'] = 'Adatbázis terjesztése';
$l['finishing_process'] = 'Telepítés befejezése';
$l['wait_note'] = '<b>MEGJEGYZÉS:</b> Eltarthat 3-4 percig. Kérjük, ne hagyja el az oldalt, amíg a folyamatjelző el nem éri a 100 %-ot';
$l['softdirectory_invalid'] = 'A megadott könyvtárnév érvénytelen.';
$l['softdatadir_invalid'] = 'A megadott adat könyvtár érvénytelen.';
$l['wwwdir_invalid'] = 'A beírt WWW könyvtár érvénytelen.';
$l['err_pass_strength'] = 'A jelszónak ennél erősebbnek kell lennie';
$l['no_https'] = 'Nem található megbízható SSL Tanúsítvány';
$l['err_dbprefix'] = 'A táblázat előtagja érvénytelen. A következőnek kell lennie: a-z vagy A-Z vagy 0-9 vagy _';
$l['no_perl_install'] = 'PERL nincs telepítve. A telepítéshez, kérjük kattintson  <a href="'.$globals['index'].'act=apps&app=19">ide</a>';
$l['no_mysql_install'] = 'MySQL nincs telepítve. A telepítéshez kérjük kattintson ide  <a href="'.$globals['index'].'act=apps&app=16">here</a>"';
$l['auto_backup_not_allowed'] = 'Az automatikus biztonsági mentés gyakoriság kiválasztása érvénytelen';
$l['invalid_script'] = 'Érvénytelen szkript azonosító';
$l['not_perl_script'] = 'This script is not in PERL';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Telepítés';
$l['overview'] = 'Áttekintés';
$l['features'] = 'Jellemzők';
$l['demo'] = 'Demó';
$l['ratings'] = 'Értékelések';
$l['import'] = 'Importál';
$l['software_ver'] = 'Verzió';
$l['space_req'] = 'Hely szükséges';
$l['available_space'] = 'Rendelkezésre álló hely';
$l['req_space'] = 'Szükséges hely';
$l['mb'] = 'MB';
$l['software_support'] = 'Szoftver Támogatás';
$l['support_link'] = 'Támogatási oldal meglátogatása';
$l['support_note'] = 'Megjegyzés: A Softaculus nem ad támogatást bármilyen szoftverhez.';
$l['setup'] = 'Szoftver Telepítése';
$l['choose_domain'] = 'Válasszon Domain nevet';
$l['choose_domain_exp'] = 'Kérjük, válassza ki a domain nevet a szoftver telepítéséhez.';
$l['in_directory'] = 'Könyvtárban';
$l['in_directory_exp'] = 'A könyvtár relatív a domain névhez, és  <b>nem létezik</b>. Például: Telepíteni a  http://mydomain/dir/ helyről, a típus  <b>dir</b>. Telepíteni csak itt http://mydomain/ hagyjuk üresen.';
$l['database_name'] = 'Adatbázis név';
$l['database_name_exp'] = 'Írja be az adatbázis nevét a telepítéshez';
$l['softcopy_note'] = '<b>MEGJEGYZÉS</b>: Ez a szoftver szükséges, hogy telepíteni tudja a saját telepítési segédprogramját. Kérjük, látogasson el az URL címre, ami látható lesz és be kell másolnia, hogy a telepítés folyamata befejeződhessen.';
$l['softsubmit'] = 'Telepítés';
$l['congrats'] = 'Gratulálunk, a szoftver telepítése sikeres volt';
$l['succesful'] = 'sikeresen telepítve';
$l['admin_url'] = 'Adminisztratív URL';
$l['setup_continue'] = 'Azonban a telepítés be lesz fejezve a szoftver segítségével is. A telepítés befejezéséhez, kérjük látogasson le a következő URL címre';
$l['enjoy'] = 'Reméljük, hogy a telepítési folyamat könnyű volt.';
$l['install_notes'] = 'Az alábbiakban néhány fontos megjegyzés. Ajánljuk, hogy olvassa el ezeket';
$l['please_note'] = '<b>MEGJEGYZÉS</b>: A '.APP.' csak egy automatikus szoftver telepítő és nem nyújt támogatást egyes szoftver csomagokhoz. Kérjük, látogasson el a vendor\ szoftver weboldalára a támogatásért!';
$l['regards'] = 'Üdvözlettel';
$l['softinstaller'] = 'Softaculus automata telepítő';
$l['return'] = 'Vissza az Áttekintéshez';
$l['current_ins'] = 'Jelenlegi Telepítések';
$l['link'] = 'Link';
$l['ins_time'] = 'Telepítési idő';
$l['version'] = 'Verzió';
$l['upd_to'] = 'Verzió frissítése';
$l['remove'] = 'Eltávolítás';
$l['no_info'] = 'Nincs információ';
$l['randpass'] = 'Véletlenszerű jelszó generálása';
$l['ratesoft'] = 'Értékelje ezt a szkriptet';
$l['reviews'] = 'Vélemények';
$l['reviewsoft'] = 'Vélemény írása';
$l['readreviews'] = 'Vélemények olvasása';
$l['reviews_exp'] = 'Más felhasználók által írt vélemények olvasása';
$l['cron_job'] = 'Cron Job';
$l['cron_job_exp'] = 'Ennek a szkriptnek szüksége van a CRON szolgáltatásra a munkához. Kérjük, adja meg a CRON időzítést. Ha ezt nem tudja, hagyja változatlanul!';
$l['cron_min'] = 'Perc';
$l['cron_hour'] = 'Óra';
$l['cron_day'] = 'Nap';
$l['cron_month'] = 'Hónap';
$l['cron_weekday'] = 'Hét napja';
$l['datadir'] = 'Adat Könyvtár';
$l['datadir_exp'] = 'Ez a szkript előírja, hogy az adatokat mappában tárolja, amihez nem lehet az interneten keresztül hozzáférni. Ez a saját mappában lesz létrehozva. Azaz, ha megadja <b>datadir</b>, a következő jön létre - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = 'Csak betűkből és számokból állhat az Adatbázis neve.';
$l['overwrite'] = 'Fájlok Felülírása';
$l['ins_emailto'] = 'E-mail telepítés részletei ';
$l['choose_protocol'] = 'Válasszon Protokollt';
$l['choose_protocol_exp'] = 'Ha oldala rendelkezik SSl-el, kérjük, válassza a HTTPS protokollt.';
$l['clone'] = 'Clone';
$l['backup'] = 'Biztonsági mentés';
$l['options'] = 'Beállítások';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Értesítsen '.$globals['sn'].' új verziójáról';
$l['notifyversion'] = 'Köszönjük az értesítést az új verzióról. A lehető leghamarabb meg fogjuk tekinteni';
$l['del_insid'] = 'Biztos benne, hogy el akarja távolítani a kiválasztott telepítéseket? A művelet visszafordíthatatlan. \nNem lesz több megerősítő kérdés.';
$l['rem_inst_id'] = 'Telepítés Eltávolítása - ';
$l['no_sel_inst'] = 'Nincs(enek) kijelölve telepítés(ek) eltávolításra.';
$l['inst_remvd'] = 'A kijelölt telepítés(ek) eltávolításra került(ek).  Az oldal most frissülni fog!';
$l['remove'] = 'Eltávolítás';
$l['go'] = 'Mehet';
$l['screenshots'] = 'Képernyőkép';
$l['downloading'] = 'Csomag letöltése';
$l['installing'] = 'Szkript telepítése';
$l['editdetail'] = 'Részletek szerkesztése';
$l['wwwdir'] = 'Web Könyvtár';
$l['wwwdir_exp'] = 'A könyvtár a weben keresztül elérhető';
$l['publish'] = 'Közzététel az interneten';
$l['release_date'] = 'Kiadás dátuma';
$l['adv_option'] = 'Haladó beállítások';
$l['disable_notify_update'] = 'Frissítési értesítések tiltása';
$l['exp_disable_notify_update'] = 'Ha ki van jelölve, akkor nem fog e-mailt kapni az elérhető frissítésekről.';
$l['prog_installing'] = 'Telepítés'; // Dont remove trailing space
$l['prog_install_complete'] = 'Telepítés sikeres volt.';
$l['bad'] = 'Rossz';
$l['good'] = 'Jó';
$l['strong'] = 'Erős';
$l['short'] = 'Rövid';
$l['strength_indicator'] = 'Erősség mutató';
$l['auto_backup'] = 'Automated backups';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'If the backup rotation limit is reached '.APP.' will delete the oldest backup for this installation and create a new backup. The backups will utilize your space so choose the backup rotation as per the space available on your server';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['unlimited'] = 'Unlimited';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Recently Upgraded';
$l['act_clone'] = 'Recently Cloned';
$l['act_backup'] = 'Recently Backed up';
$l['act_install'] = 'Recently Installed';
$l['act_edit'] = 'Recently Edited';
$l['act_import'] = 'Recently Imported';
$l['act_restore'] = 'Recently Restored';
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Free developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Tell your friends about your new site';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['with_selected'] = 'With Selected';
$l['related_scripts'] = 'Related Scripts';

$l['soft_ins_exists'] = 'Nyilvántartásunk szerint már létezik egy telepítés a &soft-1; címen. Az alkalmazás újratelepítéséhez távolítsa el a meglévő telepítést!';
$l['install_now'] = 'Telepítés most';
$l['my_apps'] = 'Alkalmazásaim';

$l['backup_location'] = 'Mentési hely';
$l['backup_location_exp'] = 'Válassza ki a telepítés mentése során használni kívánt mentési helyet';
$l['default'] = 'Alapértelmezett';
$l['invalid_backup_location'] = 'A megadott mentési hely nem létezik';
$l['local_folder'] = 'Helyi mappa';

$l['custom_autobackup'] = 'Egyéni';
$l['custom_autobackup_cron'] = 'Automatikus mentések cron időzítése';
$l['custom_autobackup_cron_exp'] = 'Kérjük, adja meg az automatikus mentések CRON időzítését';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Az automatikus mentés cron perce hibás. Érvényes érték: 0-59 vagy a *';
$l['wrong_autobackup_cron_hour'] = 'Az automatikus mentés cron órája hibás. Érvényes érték: 0-23 vagy a *';
$l['wrong_autobackup_cron_day'] = 'Az automatikus mentés cron napja hibás. Érvényes érték: 0-31 vagy a *';
$l['wrong_autobackup_cron_month'] = 'Az automatikus mentés cron hónapja hibás. Érvényes érték: 0-12 vagy a *';
$l['wrong_autobackup_cron_weekday'] = 'Az automatikus mentés cron hét napjai hibásak. Érvényes érték: 0-7 vagy a *';

$l['quick_install'] = 'Gyors telepítés';
$l['custom_install'] = 'Egyéni telepítés';

$l['outdated_script'] = 'A(z) <b>&soft-1;</b> több mint két éve nem került frissítésre, hogy a szkript gyártója már nem támogatja';
$l['ampps_notify_premium'] = 'Ez a szolgáltatás az AMPPS prémium verziójában érhető el. Kérjük, vásárolja meg az <b><a href="https://ampps.com/clients">AMPPS Premium</a></b> verziót';

$l['choose_url'] = 'Válasszon telepítési URL-t';
$l['choose_url_exp'] = 'Kérjük, a szoftver telepítéséhez válassza ki az URL címet';

$l['error_max_ins_script'] = 'Elérte a szkriptenként megengedett maximális (<b>&soft-1;</b>) mentés számot.';

$l['rbackup_disabled'] = 'Az adminisztrátor letiltotta a távoli helyre történő mentést';
$l['rbackup_protocol_disabled'] = 'Az adminisztrátor letiltotta a(z) <b>&soft-1;</b> helyre történő mentést';
