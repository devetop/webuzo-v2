<?php

//////////////////////////////////////////////////////////////
//===========================================================
// apps_lang.php
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

$l['no_info_file'] = 'The INFO.XML file could not be found! Please report this to the server administrator.';
$l['incompatible'] = 'The software requires a higher version of '.APP.'! Please report this to the server administrator.';
$l['no_install'] = 'The INSTALL.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The INSTALL FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_softdomain'] = 'You did not choose the domain to install the software.';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
$l['softdirectory_exists'] = 'The directory you typed already exists! Please type in another directory name.';
$l['no_space'] = 'You do not have sufficient space to install this software!';
$l['no_softdb'] = 'The database was not posted.';
$l['database_exists'] = 'The database already exists. Please choose a different name.';
$l['databaseuser_exists'] = 'Az adatbázis már létezik. Kérjük, válasszon egy másik nevet';
$l['db_name_long'] = 'Az adatbázis név nem lehet hosszabb 7 karakternél. Kérjük, válasszon egy rövidebb adatbázis nevet';
$l['db_limit_crossed'] = 'The maximum number of databases you can create has been reached, so installation cannot proceed.';
$l['no_field'] = 'The field <b>&soft-1;</b> is required and must be filled out.';
$l['error_adddb'] = 'The database could not be created';
$l['error_adduser'] = 'There was an error in adding a user to the new database';
$l['no_package'] = 'The installation package could not be found!';
$l['no_decompress'] = 'There were some errors in decompressing the package files.';
$l['mail_new_ins'] = 'A new installation of &soft-1; has been completed. The details of the installation are shown below:';
$l['mail_path'] = 'Útvonal';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Admin Username';
$l['mail_pass'] = 'Admin Pass';
$l['mail_db'] = 'MySQL Database';
$l['mail_dbuser'] = 'MySQL DB User';
$l['mail_dbhost'] = 'MySQL DB Host';
$l['mail_dbpass'] = 'MySQL DB Password';
$l['mail_time'] = 'Time of Installation';
$l['mail_subject'] = 'New Installation of &soft-1;';
$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';
$l['wrong_cron_min'] = 'Cron minute is wrong. Valid values are 0-59 or a <b>*</b>';
$l['wrong_cron_hour'] = 'Cron hour is wrong. Valid values are 0-23 or a <b>*</b>';
$l['wrong_cron_day'] = 'Cron day is wrong. Valid values are 1-31 or a <b>*</b>';
$l['wrong_cron_month'] = 'Cron month is wrong. Valid values are 1-12 or a <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron weekday is wrong. Valid values are 0-7 or a <b>*</b>';
$l['mail_cron'] = 'Cron Job';
$l['no_datadir'] = 'No Data directory was specified';
$l['datadir_exists'] = 'The data directory you submitted exists. Please specify another one.';
$l['no_decompress_data'] = 'There were some errors in decompressing the DATA files.';
$l['mail_datadir'] = 'Data Directory';
$l['some_files_exist'] = 'A telepítés nem folytatható, mert a következő fájlok már léteznek a cél mappában :';
$l['delete_files'] = 'Kérjük, törölje ezeket a fájlokat vagy válasszon másik mappát.';
$l['overwrite_exist'] = '<b>OR</b> <br />Select the checkbox to overwrite all files and continue';
$l['checking_data'] = 'Performing Initial Steps';
$l['checking_dependencies'] = 'Computing the dependencies to be installed';
$l['installing_dependencies'] = 'Installing the dependencies';
$l['installing_package'] = 'Installing the application';
$l['unzipping_files'] = 'Copying files and folders';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['no_hostname'] = 'Kérjük, adja meg az adatbázis kiszolgáló nevét';
$l['no_dbusername'] = 'Kérjük, adja meg az adatbázis felhasználónevet';
$l['no_dbuserpass'] = 'Kérjük, adja meg az adatbázis jelszót';
$l['softdirectory_invalid'] = 'The directory you typed is invalid.';
$l['softdatadir_invalid'] = 'The data directory you typed is invalid.';
$l['no_installation'] = 'No installation found';
$l['no_dep_found'] = 'Could not find dependency <b>&soft-1;</b> for <b>&soft-2;</b>';
$l['err_dep_install'] = 'There was an error installing dependency <b>&soft-1;</b> for <b>&soft-2;</b>';
$l['err_extract'] = 'There was an error extracting the package -';
$l['err_dep_remove'] = '<b>&soft-1;</b> is required by <b>&soft-2;</b>. Select the <b>Remove Dependent Application(s)</b> check box to continue.';
$l['no_app_info'] = 'Could not find the applications information';
$l['ins_finishing_process'] = 'Finishing Installation';
$l['rem_finishing_process'] = 'Removed Successfully';

$l['prog_removing'] = 'Removing ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installation Removed.';
$l['disable_sysapps'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['no_cli_force'] = 'Please use --force to install this application. Since conflicting app is already installed.';
$l['conflict_check_box'] = 'Please tick the checkbox to install ';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Install';
$l['overview'] = 'Overview';
$l['features'] = 'Features';
$l['demo'] = 'Demo';
$l['ratings'] = 'Ratings';
$l['import'] = 'Import';
$l['software_ver'] = 'Version';
$l['space_req'] = 'Space Required';
$l['available_space'] = 'Available Space';
$l['req_space'] = 'Required Space';
$l['mb'] = 'MB';
$l['software_support'] = 'Software Support';
$l['support_link'] = 'Visit Support Site';
$l['support_note'] = 'Note: Softaculous does not provide support for any software.';
$l['setup'] = 'Software Setup';
$l['choose_domain'] = 'Choose Domain';
$l['choose_domain_exp'] = 'Please choose the domain to install the software.';
$l['in_directory'] = 'In Directory';
$l['in_directory_exp'] = 'The directory is relative to your domain and <b>should not exist</b>. e.g. To install at http://mydomain/dir/ just type <b>dir</b>. To install only in http://mydomain/ leave this empty.';
$l['database_name'] = 'Adatbázis név';
$l['database_name_exp'] = 'Írja be a telepítéshez létrehozandó adatbázis nevét';
$l['softcopy_note'] = '<b>NOTE</b>: This software requires that it be installed using its own installation utility. Please visit the URL that will be shown once the files have been copied to complete the installation process.';
$l['softsubmit'] = 'Install';
$l['congrats'] = 'Congratulations, the software was installed successfully';
$l['succesful'] = 'has been successfully installed.';
$l['admin_url'] = 'Administrative URL';
$l['setup_continue'] = 'However, setup will be completed by the software itself. To complete setup, please visit the following URL';
$l['enjoy'] = 'We hope the installation process was easy.';
$l['install_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['please_note'] = '<b>NOTE</b>: '.APP.' is just an automatic software installer and does not provide any support for the individual software packages. Please visit the software vendor\'s web site for support!';
$l['regards'] = 'Regards';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Return to Overview';
$l['current_ins'] = 'Current Installations';
$l['link'] = 'Link';
$l['ins_time'] = 'Installation Time';
$l['version'] = 'Version';
$l['upd_to'] = 'Upgrade to Version';
$l['remove'] = 'Remove';
$l['no_info'] = 'No Info';
$l['randpass'] = 'Generate a Random Password';
$l['ratesoft'] = 'Rate this Script';
$l['reviews'] = 'Reviews';
$l['reviewsoft'] = 'Write a Review';
$l['readreviews'] = 'Read Reviews';
$l['reviews_exp'] = 'Read reviews written by other users and';
$l['cron_job'] = 'CRON Job';
$l['cron_job_exp'] = 'This script requires a CRON to work. Please specify the CRON timings. If you are unaware of it, leave it as it is!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Hour';
$l['cron_day'] = 'Day';
$l['cron_month'] = 'Month';
$l['cron_weekday'] = 'Weekday';
$l['datadir'] = 'Data Directory';
$l['datadir_exp'] = 'This script requires to store its data in a folder not accessible via the web. It will be created in your home folder. i.e. if you specify <b>datadir</b> the following will be created - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = 'Csak alfanumerikus karakter megengedett az adatbázis névben';
$l['overwrite'] = 'Felülírja a fájlokat';
$l['ins_emailto'] = 'Email installation details to';
$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['backup'] = 'Backup';
$l['options'] = 'Options';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Köszönjük, hogy tájékoztatott az új verzióról. A lehető leghamarabb megvizsgáljuk';
$l['del_insid'] = 'Are you sure you wish to remove this application ? The action will be irreversible. \nNo further confirmations will be asked.';
$l['rem_inst_id'] = 'Removing Installation - ';
$l['no_sel_inst'] = 'No installation(s) selected to remove.';
$l['inst_remvd'] = 'The selected installation(s) have been removed. The page will now be reloaded !';
$l['remove'] = 'Remove';
$l['go'] = 'Go';
$l['screenshots'] = 'Screenshots';
$l['downloading'] = 'Downloading Package';
$l['installing'] = 'Installing Application';
$l['removing'] = 'Removing Application';
$l['editdetail'] = 'Edit Details';
$l['publish'] = 'Publish on the Web';
$l['hostname'] = 'Adatbázis kiszolgáló';
$l['hostname_exp'] = 'A Mysql kiszolgáló neve (általában <b>localhost</b>)';
$l['dbusername'] = 'Adatbázis felhasználónév';
$l['dbusername_exp'] = 'A MySQL felhasználónév';
$l['dbuserpass'] = 'Adatbázis jelszó';
$l['dbuserpass_exp'] = 'A MySQL felhasználó jelszava';
$l['database_name_exp_aefer'] = 'Írja be a telepítéshez használandó adatbázis nevét';
$l['sel_version'] = 'Select Version';
$l['choose_version_exp'] = 'Please select the version to install.';
$l['choose_version'] = 'Choose the version you want to install';
$l['select'] = 'Select';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Haladó beállítások';
$l['disable_notify_update'] = 'Disable Update Notifications';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation Completed.';
$l['iagree'] = 'I agree to the Terms and Conditions of &soft-1; License';
$l['notes'] = 'Notes';
$l['uninstalled'] = 'The Application was removed successfully';
$l['install_tweet_sub'] = 'Tell your friends about your new application ';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of Webuzo. Please upgrade to the premium version of Webuzo!';

