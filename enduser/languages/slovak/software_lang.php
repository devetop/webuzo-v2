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

$l['no_info_file'] = 'Súbor INFO.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['incompatible'] = 'Softvér požaduje vyššiu verziu '.APP.'! Prosím, oznámte to správcovi servera.';
$l['no_install'] = 'Súbor INSTALL.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['no_functions'] = 'Súbor INSTALL FUNCTIONS nebol nájdený ! Prosím, oznámte to správcovi servera.';
$l['no_remove_functions'] = 'Súbor REMOVE FUNCTIONS nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['no_softdomain'] = 'Nevybrali ste doménu pre inštaláciu softvéru.';
$l['wrong_softdomain'] = 'Cesta domény, ktorú ste vybrali, nebola nájdená.';
$l['softdirectory_exists'] = 'Priečinok, ktorý ste zadali, už existuje! Prosím, zadajte iný názov priečinku.';
$l['no_space'] = 'Nemáte dostatočný priestor pre inštaláciu tohto softvéru.';
$l['no_softdb'] = 'Databáza nebola poslaná.';
$l['database_exists'] = 'Databáza už existuje. Prosím, vyberte iný názov.';
$l['databaseuser_exists'] = 'Používateľ databázy už existuje. Prosím, vyberte iné meno.';
$l['db_name_long'] = 'Názov databázy nemôže mať viac ako 7 písmen. Prosím, vyberte kratší názov databázy.';
$l['db_limit_crossed'] = 'Bol dosiahnutý najväčší počet databáz, ktorý môžete vytvoriť, takže inštalácia nemôže pokračovať.';
$l['no_field'] = 'Políčko <b>&soft-1;</b> je požadované a musí byť vyplnené.';
$l['error_adddb'] = 'Databáza nemohla byť vytvorená';
$l['error_adduser'] = 'Pri pridávaní používateľa do databázy sa vyskytla chyba';
$l['no_package'] = 'Inštalačný balíček nebol nájdený !';
$l['no_decompress'] = 'Pri dekompresii súborov balíčka sa vyskytli chyby.';
$l['mail_new_ins'] = 'Nová inštalácia &soft-1; bola dokončená. Detaily inštalácie sú zobrazené nižšie:';
$l['mail_path'] = 'Cesta';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'URL správcu';
$l['mail_admin'] = 'Používateľské meno správcu';
$l['mail_pass'] = 'Heslo správcu';
$l['mail_db'] = 'MySQL databáza';
$l['mail_dbuser'] = 'Prihlasovacie meno MySQL DB';
$l['mail_dbhost'] = 'Host MySQL DB';
$l['mail_dbpass'] = 'Heslo MySQL DB';
$l['mail_time'] = 'Čas inštalácie';
$l['mail_subject'] = 'Nová inštalácia &soft-1;';
$l['no_cron_min'] = 'Žiadna Cron minúta nebola určená';
$l['no_cron_hour'] = 'Žiadna Cron hodina nebola určená';
$l['no_cron_day'] = 'Žiadny Cron deň nebol určený';
$l['no_cron_month'] = 'Žiadny Cron mesiac nebol určený';
$l['no_cron_weekday'] = 'Žiadny Cron deň týždňa nebol určený';
$l['wrong_cron_min'] = 'Cron minúta je nesprávna. Platné hodnoty sú 0-59 alebo <b>*</b>';
$l['wrong_cron_hour'] = 'Cron hodina je nesprávna. Platné hodnoty sú 0-23 alebo <b>*</b>';
$l['wrong_cron_day'] = 'Cron deň je neplatný. Platné hodnoty sú 1-31 alebo <b>*</b>';
$l['wrong_cron_month'] = 'Cron mesiac je nesprávny. Platné hodnoty sú 1-12 alebo <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron deň týždňa je neplatný. Platné hodnoty sú 0-7 alebo <b>*</b>';
$l['mail_cron'] = 'CRON úloha';
$l['no_datadir'] = 'Nebol určený priečinok dát';
$l['datadir_exists'] = 'Zadaný priečinok dát exstuje. Prosím, určite iný.';
$l['no_decompress_data'] = 'Pri rozbaľovaní priečinka dát sa vyskytli chyby.';
$l['mail_datadir'] = 'Priečinok dát';
$l['some_files_exist'] = 'Inštalácia nemôže pokračovať, pretože v cieľovom priečinku už existujú nasledujúce súbory:';
$l['delete_files'] = 'Prosím, odstráňte tieto súbory, alebo zvoľte iný priečinok.';
$l['overwrite_exist'] = '<b>ALEBO</b><br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Označte políčko pre prepísanie všetkých súborov a pokračovanie</span></b>';
$l['checking_data'] = 'Kontrola zadaných údajov';
$l['unzipping_files'] = 'Kopírovanie súborov a priečinkov';
$l['unzipping_datadir'] = 'Rozbaľovanie súborov dát';
$l['prop_db'] = 'Propagovanie databázy';
$l['finishing_process'] = 'Dokončovanie inštalácie';
$l['wait_note'] = '<b>UPOZORNENIE:</b> Toto môže trvať 3-4 minúty. Prosím, neopúšťajte stránku, pokým ukazovateľ nedosiahne 100%';
$l['no_hostname'] = 'Prosím, zadajte hostname vašej databázy';
$l['no_dbusername'] = 'Prosím, zadajte používateľské meno pre vašu databázu';
$l['no_dbuserpass'] = 'Prosím, zadajte heslo pre vašu databázu';
$l['softdirectory_invalid'] = 'Priečinok , ktorý ste zadali, je neplatný.';
$l['softdatadir_invalid'] = 'Dátový priečinok, ktorý ste zadali je neplatný.';
$l['err_domain'] = 'Žiadna doména';
$l['err_domain_admin'] = 'Tento používateľ nemá doménu. Prosím, kontaktujte správcu.';
$l['err_pass_strength'] = 'Sila hesla musí byť väčšia ako';
$l['no_https'] = 'Dôveryhodný SSL certifikát nebol nájdený';
$l['err_dbprefix'] = 'Prefix tabuľky je neplatný. Platné hodnoty sú a-z alebo A-Z alebo 0-9 alebo _';
$l['no_php_install'] = 'PHP nie je nainštalované. Pre inštaláciu, prosím, kliknite <a href="'.$globals['index'].'act=apps&app=1">sem</a>';
$l['no_mysql_install'] = 'MySQL nie je  nainštalované. Pre jeho inštaláciu, prosím, kliknite <a href="'.$globals['index'].'act=apps&app=16">sem</a>';
$l['no_domain_verify'] = 'Nie je možné pristúpiť k vašej doméne. Prosím, ubezpečte sa, že doména smeruje na tento server a súbor .htaccess neobmedzuje prístup  k vašej doméne';
$l['auto_backup_not_allowed'] = 'Zvolená frekvencia záloh je neplatná';
$l['invalid_script'] = 'Neplatné Script ID';
$l['no_domain_found'] = 'Doména sa nenašla. Pre inštaláciu skriptu je nutné vyplniť doménu';
$l['not_php_script'] = 'This script is not in PHP';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Inštalovať';
$l['overview'] = 'Prehľad';
$l['features'] = 'Funkcionality';
$l['demo'] = 'Ukážka';
$l['ratings'] = 'Hodnotenia';
$l['import'] = 'Import';
$l['software_ver'] = 'Verzia';
$l['space_req'] = 'Požadované miesto';
$l['available_space'] = 'Dostupné miesto';
$l['req_space'] = 'Požadované miesto';
$l['mb'] = 'MB';
$l['software_support'] = 'Softvérová podpora';
$l['support_link'] = 'Navštíviť stránku podpory';
$l['support_note'] = 'Poznámky: Softaculous neposkytuje podporu pre žiadny softvér.';
$l['setup'] = 'Nastavenia softvéru';
$l['choose_domain'] = 'Vybrať doménu';
$l['choose_domain_exp'] = 'Prosím, vyberte doménu pre inštaláciu softvéru.';
$l['choose_url'] = 'Zvoľte inštalačnú URL';
$l['choose_url_exp'] = 'Zvoľte URL pre inštaláciu softwaru';
$l['in_directory'] = 'V priečinku';
$l['in_directory_exp'] = 'Priečinok je relatívny k vašej doméne a <b>nemá existovať</b>. napr. Pre inštaláciu do http://mojadomena/priecinok napíšte iba <b>priecinok</b>. Pre inštaláciu iba do http://mojadomena/ toto ponechajte prázdne.';
$l['database_name'] = 'Názov databázy';
$l['database_name_exp'] = 'Zadajte názov databázy vytvorenej pre inštaláciu';
$l['softcopy_note'] = '<b>UPOZORNENIE</b>: Tento softvér vyžaduje, aby bol nainštalovaný pomocou vlastného inštalačného nástroja. Prosím, navštívte URL, ktorá bude zobrazená, keď budú súbory skopírované, pre dokončenie inštalačného procesu.';
$l['softsubmit'] = 'Inštalovať';
$l['congrats'] = 'Gratulujeme, softvér bol úspešne nainštalovaný';
$l['succesful'] = 'bol úspešne nainštalovaný do';
$l['admin_url'] = 'Administratívne URL';
$l['setup_continue'] = 'Avšak, Inštalácia bude dokončená samotným softvérom. Pre dokončenie inštalácie, prosím, prejdite na nasledujúcu URL';
$l['enjoy'] = 'Dúfame, že proces inštalácie bol jednoduchý.';
$l['install_notes'] = 'Nasledujú dôležité poznámky. Je dôrazne doporučované prečítať si ich';
$l['please_note'] = '<b>UPOZORNENIE</b>: '.APP.' je iba automatický inštalátor a neposkytuje žiadnu podporu pre individuálne softvérové balíčky. Prosím, navštívte stránku poskytovateľa softvéru pre podporu!';
$l['regards'] = 'S pozdravom';
$l['softinstaller'] = APP.' Auto inštalátor';
$l['return'] = 'Spať na prehľad';
$l['current_ins'] = 'Súčasné inštalácie';
$l['link'] = 'Spojenie';
$l['ins_time'] = 'Čas inštalácie';
$l['version'] = 'Verzia';
$l['upd_to'] = 'Aktualizovať na verziu';
$l['remove'] = 'Odstrániť';
$l['no_info'] = 'Žiadne info';
$l['randpass'] = 'Generovať náhodné heslo';
$l['ratesoft'] = 'Ohodnoťte tento skript';
$l['reviews'] = 'Hodnotenia';
$l['reviewsoft'] = 'Napísať hodnotenie';
$l['readreviews'] = 'Čítať hodnotenia';
$l['reviews_exp'] = 'Čítať hodnotenia od ostatných používateľov a';
$l['cron_job'] = 'CRON úloha';
$l['cron_job_exp'] = 'Skript vyžaduje CRON, aby fungoval. Prosím, určite časovanie CRONu. Ak ste si nie istý, nechajte to, ako to je!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Hodina';
$l['cron_day'] = 'Deň';
$l['cron_month'] = 'Mesiac';
$l['cron_weekday'] = 'Deň týždňa';
$l['datadir'] = 'Priečinok dát';
$l['datadir_exp'] = 'Skript vyžaduje, aby jeho dáta boli uložené v priečinku nedosiahnuteľnom z internetu. Bude vytvorený vo vašom domovskom adresári. napr. ak určíte <b>dátový priečinok</b> bude vatvorené nasledovné - /home/používateľskémeno/<b>dátový priečinok</b>';
$l['db_alpha_num'] = 'Pre názov databázy sú povolené len alfa-numerické znaky.';
$l['overwrite'] = 'Prepísať súbory';
$l['ins_emailto'] = 'Zaslať detaily inštalácie emailom na';
$l['choose_protocol'] = 'Vybrať protokol';
$l['choose_protocol_exp'] = 'Ak vaša stránka používa SSL, tak, prosím, zvoľte protokol HTTPS.';
$l['clone'] = 'Klonovať';
$l['backup'] = 'Zálohovať';
$l['options'] = 'Možnosti';
$l['admin'] = 'Správca';
$l['notify_ver'] = 'Upozorni '.$globals['sn'].' na novú verziu';
$l['notifyversion'] = 'Ďakujeme za informovanie o novej verzii. Pozrieme sa na ňu hneď, ako to pôjde';
$l['del_insid'] = 'Ste si istý, chcete odstrániť označenú inštaláciu? Úkon bude nezvratný. \nNebudete vyzvaný k ďalšiemu potvrdeniu!';
$l['rem_inst_id'] = 'Odstraňovanie inštalácie -';
$l['no_sel_inst'] = 'Nie sú označená(/-)é inštalácia(/-e) pre odstránenie.';
$l['inst_remvd'] = 'Označená inštalácia(/-e) bola(/-i) odstránená(/-é). Stránka bude obnovená !';
$l['remove'] = 'Odstrániť';
$l['go'] = 'Ísť';
$l['screenshots'] = 'Screenshoty';
$l['downloading'] = 'Sťahovanie balíčka';
$l['installing'] = 'Inštalovanie skriptu';
$l['editdetail'] = 'Upraviť detaily';
$l['publish'] = 'Publikovať na webe';
$l['hostname'] = 'Hostname databázy';
$l['hostname_exp'] = 'Hostname MySQL (zväčša <b>localhost</b>)';
$l['dbusername'] = 'Požívateľské meno databázy';
$l['dbusername_exp'] = 'Používateľské meno MySQL';
$l['dbuserpass'] = 'Heslo databázy';
$l['dbuserpass_exp'] = 'Heslo používateľa MySQL';
$l['database_name_exp_aefer'] = 'Zadajte názov databázy použitej pre inštaláciu';
$l['sel_version'] = 'Vybrať verziu';
$l['choose_version_exp'] = 'Prosím, vyberte verziu pre inštaláciu.';
$l['choose_version'] = 'Vyberte verziu, ktorú chcete nainštalovať';
$l['select'] = 'Vybrať';
$l['release_date'] = 'Dátum vydania';
$l['adv_option'] = 'Rozšírené možnosti';
$l['disable_notify_update'] = 'Zakázať upozornenia na nové verzie.';
$l['exp_disable_notify_update'] = 'Ak zaškrtnuté, nebude dostávať upozornenia na nové verzie pre túto inštaláciu emailom.';
$l['prog_installing'] = 'Inštalácia'; // Dont remove trailing space
$l['prog_install_complete'] = 'Inštalácia dokončená.';
$l['eu_auto_upgrade'] = 'Automatická aktualizácia';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = 'Automaticky aktualizovať zásuvné moduly &soft-1;';
$l['exp_auto_upgrade_plugins'] = 'If checked, all &soft-1; plugins installed for this installation will be automatically upgraded to the latest version (every 24 hours).';
$l['auto_upgrade_themes'] = 'Automatická aktualizácia &soft-1; motívov';
$l['exp_auto_upgrade_themes'] = 'If checked, all &soft-1; themes for this installation will be automatically upgraded to the latest version (every 24 hours).';
$l['auto_upgrade_enabled'] = 'Automatické aktualizácie povolené';
$l['bad'] = 'Zlé';
$l['good'] = 'Dobré';
$l['strong'] = 'Silné';
$l['short'] = 'Krátke';
$l['strength_indicator'] = 'Indikátor sily';
$l['auto_backup'] = 'Automatické zálohy';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Rotácia záloh';
$l['exp_auto_backup_rotation'] = 'Ak bude dosiahnutý limit rotácie '.APP.' odstráni najstaršiu zálohu tejto inštalácie a vytvorí novú zálohu. Zálohy budú používať váš priestor, preto vyberte rotáciu záloh na základe dostupného priestoru na vašom serveri';
$l['no_backup'] = 'Nezálohovať';
$l['daily'] = 'Denne';
$l['weekly'] = 'Týždenne';
$l['monthly'] = 'Mesačne';
$l['unlimited'] = 'Neobmedzené';
$l['changelog'] = 'Log zmien';
$l['act_upgrade'] = 'Nedávno aktualizované';
$l['act_clone'] = 'Nedávno klonované';
$l['act_backup'] = 'Nedávno zálohované';
$l['act_install'] = 'Nedávno inštalované';
$l['act_edit'] = 'Nedávno upravené';
$l['act_import'] = 'Nedávno importované';
$l['act_restore'] = 'Nedávno obnovené';
$l['ampps_download'] = 'Môžete vyvíjať <b>&soft-1;</b> na vašom <b>desktope</b> pomocou nášho bezplatného nástroja pre vývojárov Softaculous AMPPS. Kliknite na <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>sem</b></a> pre stiahnutie <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Povedzte priateľom o vašej novej stránke';

$l['choose_theme'] = 'Vybrať motív';
$l['clear_theme'] = 'Zrušiť výber';
$l['installing_theme'] = 'Inštalácia motívu';
$l['cant_download_theme'] = 'Nebolo možné stiahnuť súbor motívu';
$l['no_theme_package'] = 'Inštalačný balík motívu nebol nájdený!';
$l['unzipping_theme_files'] = 'Kopírovanie motívov a priečinkov';
$l['use_this_theme'] = 'Vybrať toto';
$l['err_auto_backup_limit'] = 'Rotácia automatickej zálohy nemôže byť viac ako <b>&soft-1;</b>';
$l['select_domain'] = 'Vybrať doménu';
$l['refresh'] = 'Obnoviť';
$l['purchase'] = 'Kúpiť';
$l['your_purchased'] = 'Zakúpené';//trailing space is required
$l['your_purchased_times'] = 'krát';
$l['err_theme_not_bought'] = 'Nezakúpili ste tento motív, preto ste ho nemohli nainštalovať !';
$l['err_theme_reached_limit'] = 'Prosím, kúpte tento motív a skúste ho nainštalovať znova. Dosiahli ste limit inštalácií tohto motívu.';
$l['payment_heading'] = 'Kúpiť motív';
$l['payment_redirect'] = 'Budete presmerovaný k platbe';//trailing space is required
$l['close'] = 'Zavrieť';
$l['free'] = 'Bezplatne';
$l['select'] = 'Vybrať';
$l['theme_is_optional'] = '<b>Upozornenie</b>: Toto je voliteľné. Ak to neoznačíte, tak bude nainštalovaný prednastavený motív';
$l['with_selected'] = 'S označenými';
$l['related_scripts'] = 'Súvisiace skripty';

$l['date_added'] = 'Dátum pridania';
$l['downloaded'] = 'Stiahnuté';

$l['soft_ins_exists'] = 'Inštalácia už existuje tu &soft-1;. Pre opätovnú inštaláciu najprv odstráňte pôvodnú inštaláciu!';
$l['install_now'] = 'Nainštalovať teraz';
$l['my_apps'] = 'Moje aplikácie';

$l['backup_location'] = 'Umiestnenie záloh';
$l['backup_location_exp'] = 'Vyberte umiestnenie zálohy tejto inštalácie';
$l['default'] = 'Prednastavené ';
$l['invalid_backup_location'] = 'Zadané umiestnenie neexistuje';
$l['local_folder'] = 'Lokálny adresár';

$l['custom_autobackup'] = 'Vlastné';
$l['custom_autobackup_cron'] = 'Cron time pre automatické zálohy';
$l['custom_autobackup_cron_exp'] = 'Špecifikujte Cron pre automatické zálohovanie';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Nesprávna hodnota minút pre Cron. Hodnoty musia byť 0-59 alebo *';
$l['wrong_autobackup_cron_hour'] = 'Nesprávna hodnota hodín pre Cron. Hodnoty musia byť 0-23 alebo *';
$l['wrong_autobackup_cron_day'] = 'Nesprávna hodnota dní pre Cron. Hodnoty musia byť 1-31 alebo *';
$l['wrong_autobackup_cron_month'] = 'Nesprávna hodnota mesiacov pre Cron. Hodnoty musia byť 1-12 alebo *';
$l['wrong_autobackup_cron_weekday'] = 'Nesprávna hodnota dňa v týždni pro Cron. Hodnoty musia byť 0-7 alebo *';

$l['quick_install'] = 'Rýchla inštalácia';
$l['custom_install'] = 'Vlastná inštalácia';

$l['outdated_script'] = '<b>&soft-1;</b> nebol aktualizovaný po dobu viac ako 2 roky a už nemusí byť vydavateľom skriptu podporovaný';

$l['pushtolive'] = 'Posunúť na Live';
$l['staging'] = 'Vytvoriť Stag';

$l['dont_auto_upgrade'] = 'Neaktualizovať automaticky'; 
$l['minor_auto_upgrade'] = 'Upgradovať iba na <b>Minor</b> verzie'; 
$l['major_auto_upgrade'] = 'Upgradovať na poslednú dostupnú verziu (<b>Major</b> i <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major a Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)'; 

$l['err_fetch_key'] = 'Momentálne sa nepodarilo získať PFX API kľúč';
$l['ampps_notify_premium'] = 'Táto funkcia je prístupná iba v prémiových verziách AMPPS. Zakúpiť ich môžete tu <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['view_items'] = 'Zobraziť položky v sete';
$l['ok'] = 'OK';
$l['plugins'] = 'Pluginy';
$l['themes'] = 'Vzhľady';
$l['empty_set'] = 'V sete sa nenachádzajú žiadne položky!';

$l['error_max_ins_script'] = 'Dosiahli ste maximálneho počtu inštalácií (<b>&soft-1;</b>) pre jeden skript';
$l['error_max_backup_script'] = 'Dosiahli ste maximálneho počtu (<b>&soft-1;</b>) záloh pre jeden skript.';
$l['error_max_clone_script'] = 'Dosiahli ste maximálny počet Clonov (<b>&soft-1;</b>) pre jeden skript.';
$l['error_max_staging_script'] = 'Dosiahli ste maximálny počet Stagov (<b>&soft-1;</b>) pre jeden skript.';

$l['remove_complete'] = 'Kompletne odstrániť';
$l['remove_info'] = 'Odstrániť z '.APP;
$l['manage_sets'] = 'Spravovať súpravy doplnkov / tém';
$l['manage_plugin_sets'] = 'Spravovať sety pluginov';
$l['manage_theme_sets'] = 'Spravovať sety vzhľadov';

$l['rbackup_disabled'] = 'Zálohy na vzdialenom úložisku sú zakázané správcom';
$l['rbackup_protocol_disabled'] = 'Zálohy na <b>&soft-1;</b> sú zakázané správcom';

$l['wordpress_manager'] = 'Manage your installation with WordPress Manager';