<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.1.7
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

$l['err_cannot_autoupgrade'] = "Auto upgrade can not be performed for this control panel.\n";
$l['err_invalid_param'] = "Invalid parameter &soft-1;\nPlease read the documetation for more details :\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "Please provide some inputs.\n";
$l['err_no_insid'] = "Installation Id is not provided.\n";
$l['err_no_username'] = "Username is not provided.\n";
$l['err_no_such_user'] = "No such user found.\n";
$l['err_dont_provide_username'] = "Username is not required.\n";
$l['err_no_softdir'] = "Softdir not found for user &soft-1;\n";
$l['err_no_installation'] = "No installation found for Installation ID : &soft-1;\n";
$l['err_cant_upgrade'] = "This installation is already at latest version OR This script can not be Auto Upgraded.\n";
$l['err_backup_fail'] = 'Backup was not successful so aborting the upgrade process. Following are the details :';
$l['err_upgrade_restore_failed'] = 'Failed to upgrade the installation AND also failed to restore from the backup created. Following are the details :';
$l['err_upgrade_restore_success'] = 'Failed to upgrade the installation BUT successfully restored from the backup created. Following are the details :';
$l['err_upgrade'] = 'Failed to upgrade the installation. Following are the details :';
$l['err_upgrade_req'] = 'This installation does not meet the Upgrade requirements. Hence it cannot be auto upgraded. Following are the details :';
$l['err_could_not_posix'] = 'Could not switch to user so aborting process...';
$l['err_cant_upgrade_for_this_server'] = "The pre upgrade checks FAILED as external URL(s) could not be accessed.\n This might be due to allow_url_fopen() disabled on your server or CURL failed to access the URL. Hence Auto upgrade can not be performed.";
$l['err_auto_upgrade_req_fail'] = 'This installation does not meet the Auto Upgrade requirements. Hence it cannot be auto upgraded. Following are the details :';
$l['help'] = "Welcome to Softaculous Command-line Interface.
Available Commands : \n\t
--install\t For Installing an application.
--upgrade\t For Upgrading an installed application.
--import\t For Importing an installed application in to Softaculous.\n
For Support Please Contact us at : support@softaculous.com
";
$l['err_no_script'] = "Script name is not provided.\n";
$l['err_no_url'] = "Please provide the URL where an installation has been made e.g. --url=DOMAIN.COM/testdir\n";
$l['err_no_such_script'] = "Oops! No such script found - &soft-1;\n";
$l['import_success'] = "Imported successfully!\n";
$l['import_error'] = "Following Error Occurred : \n";
$l['err_no_path'] = "Please provide the path. e.g. --path=/home/USER/public_html/test\n";
$l['err_no_import'] = "Import utility is not available for this script\n";
$l['err_user_not_allowed'] = "Import utility is not available for Enduser\n";
$l['err_cant_load_docroots'] = "Could not load path to the domain(s)\n";
$l['ins_available_for'] = " installation(s) availble for the following directory :\n";// Keep the space at the beginning
$l['ins_found_at_path'] = " installation found at specified path.\n Execute the previous command with --r to import it.\n";
$l['imp_ins_exists'] = "This installation is already Imported for - &soft-1; at &soft-2;\n";
$l['upgraded_manually'] = "The installation is already up to date. Updated ".APP." records\n";
$l['upgraded_successfully'] = "The upgrade was successful \n";
$l['shellexec_disabled'] = 'shell_exec() is disabled';
$l['list_scripts'] = "\nFollowing is the list of scripts requirements";
$l['err_cannot_autobackup'] = "Auto backups can not be performed for this control panel.\n";
$l['err_no_auto_backup'] = "Auto backups has been disabled by admin.\n";
$l['err_update_record'] = 'An error occured while updating version in '.APP." records\n";
$l['suc_update_record'] = "Updated ".APP." records successfully from &soft-1; to &soft-2; for &soft-3;\n";
$l['show_real_version'] = "Real Version : &soft-1; -- Version as per ".APP." records : &soft-2; \n";
$l['no_outdated_ins'] = "No Outdated instllation(s) found.\n";
$l['edit_detail_options'] = "\n--show_outdated_version=1 For showing the outdated installation(s) of the specified user
--user=USER_NAME whose records you want to update
--sid=SCRIPT_ID Script ID of the script you want to update the records for
--update_records=1 This will update ".APP." records\n";
$l['only_au_ins_note'] = "Note : Only installations that can be auto upgraded will be listed here\n";
$l['err_restore_cli'] = "Restore via CLI can not be performed for this control panel.\n";
$l['err_no_backupfile'] = "The backup file does not exist.\n";
$l['err_wrongins'] = "The backup file is not for this installation.\n";
$l['err_no_file'] = "Backup filename not specified.\n";
$l['err_no_backupinfo'] = "Backup info file not found.\n";
$l['err_no_backup_file'] = "Backup file not found.\n";

$l['soft_license'] = APP." License";
$l['lic_type'] = "Type";
$l['num_users'] = "Number of users";
$l['licexpires'] = "Expires";
$l['primary_ip'] = "License IP";
$l['free'] = "Free";
$l['premium'] = "Premium";
$l['expired'] = "Expired";
$l['never'] = "Never";

// Remove installation
$l['no_panels'] = "Removing scripts from CLI is possible only on cPanel or Webuzo.\n";
$l['no_input'] = "Please provide required input.\n";
$l['invalid_par'] = 'Invalid parameter ';
$l['no_scripts'] = 'Scripts were not loaded.';
$l['remove'] = 'Removed';
$l['heading'] = "Script Name \t Script Installation ID \n";
$l['no_installation'] = "No installations were found on your server.\n";
$l['err_remove'] = "Remove installation Failed.\n";

// Remove installation
$l['no_panels'] = "Removing scripts from CLI is possible only on cPanel or Webuzo.\n";
$l['no_input'] = "Please provide required input.\n";
$l['invalid_par'] = 'Invalid parameter ';
$l['no_scripts'] = 'Scripts were not loaded.';
$l['remove'] = 'Removed';
$l['heading'] = "Script Name \t Script Installation ID \n";
$l['no_installation'] = "No installations were found on your server.\n";
$l['err_remove'] = "Remove installation Failed.\n";
$l['note_by_automated_backup'] = 'Backup created by automated backups';
$l['note_by_automated_upgrade'] = 'Backup created by automated upgrade';
$l['sql_db'] = 'Could not find database file';
$l['err_query'] = 'Could not execute the query';
$l['sqlfile_err'] = 'Could not create sql file';
$l['fetching_remote_files'] = 'Importing files from remote server';
$l['import_complete'] = 'Import Completed';
$l['import_script'] = 'Importing';
$l['export_db'] = 'Exporting database from remote server';
$l['fetch_datadir'] = 'Fetching data directory from remote server';
$l['import_db'] = 'Propagating the database';
$l['insid_missing'] = 'Please provide installation ID';
$l['insid_incorrect'] = 'Installation ID is incorrect';
$l['read_file'] = 'Could not read the import data file';
$l['no_remote_import'] = 'Remote Import is not supported for this script';
$l['wrong_ftp_path'] = 'Specified FTP path is incorrect';

//Webuzo Backups and Restore
$l['not_permitted'] = 'This User is not permitted to run the script';
$l['no_option'] = 'Nothing to do';
$l['no_backup_dir'] = 'Backup Directory not present';
$l['backup_filename'] = 'Backup file name';
$l['create_tar'] = 'Creating the tar file';
$l['tar_error'] = 'There were some errors while creating the tar file';
$l['tar_created'] = 'tar file created';
$l['create_db'] = 'Creating DB backup';
$l['no_dbback_func'] = 'Backup function is not available';
$l['db_back_fail'] = 'Utility could not backup the DB';
$l['compress_sql'] = 'Compressing the SQL file';
$l['db_backup_filename'] = 'DB backup file name is';
$l['no_mysql'] = 'MySQL is not installed';
$l['skip_db_files'] = 'Skipping Database backup process';
$l['tar_extract'] = 'Extracting the tar file';
$l['err_tar_xtrct'] = 'There were some errors while extracting the tar file';
$l['db_restore_file'] = 'Restoring DB file';
$l['db_restore_err'] = 'Utility could not restore the DB';
$l['db_restore_done'] = 'Database successfully restored';
$l['skip_db_restore'] = 'Skipping Database restore process';
$l['no_exim'] = 'Exim is not installed';
$l['skip_exim_files'] = 'Skipping Exim files';
$l['no_bind'] = 'BIND is not installed';
$l['skip_bind_files'] = 'Skipping BIND files';
$l['no_backup_type'] = 'Backup type not specified';
$l['wrng_backup_type'] = 'Incorrect backup type specified';
$l['wrng_back_file'] = 'File specified is not a Backup file';
$l['strt_backup'] = 'Starting the Backup process';
$l['success_backup'] = 'Backup process completed';
$l['error_backup'] = 'Backup process completed with errors';
$l['exit_cli'] = 'Exiting CLI';
$l['no_file2restore'] = 'No File specified to restore';
$l['no_db_backup'] = 'DB backup file not found';
$l['chck_backup_exits'] = 'Checking if Backup file exists';
$l['strt_restore'] = 'Starting the Restore process';
$l['success_restore'] = 'Restore process completed';
$l['error_restore'] = 'Restore process completed with errors';
$l['send_email'] = 'Sending email to user';
$l['only_for_premium'] = 'This feature is only available to Premium license users';
$l['err_no_owner'] = "Owner is not provided.\n";
$l['err_invalid_file'] = "Invalid file name\n";
$l['acl_saved'] = 'Setting saved successfully';
$l['acl_errr'] = 'Could not save the setting';
$l['err_unzipping'] = 'Error occured while unzipping the files';
$l['invalid_import_file'] = 'Please provide a valid file to import settings';
$l['no_access_url'] = 'Could not access the source settings file';
$l['no_write_tmpfile'] = 'Could not write the temporary file';
$l['file_not_exist'] = 'File does not exist, please provide correct path';
$l['no_root_user'] = 'Only root user can import the admin settings';
$l['successfully_imported'] = 'Settings imported successfully';
$l['no_ins_found'] = 'No installation(s) found';

$l['cli_ftp_error'] = 'Error connectng to FTP server';
$l['err_fetch_file'] = 'Could not access the file uploaded to the domain';
$l['err_fetch_path'] = 'Could not fetch path from the data received';
$l['cli_no_remote_import'] = 'CLI Remote Import is not supported for this script';
$l['cli_wrong_ftp_path'] = 'FTP path is incorrect';
$l['cli_ftp_error-1'] = 'Unable to resolve Domain Name';
$l['cli_ftp_error-2'] = 'Unable to login with specified FTP details';
$l['cli_ftp_error-3'] = 'FTP Path does not exist';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['invalid_access_token'] = 'Invalid Access Token. Please Re-Authorize '.APP.' Dropbox APP from the Edit Backup location page in '.APP.' enduser panel';
$l['insufficient_space'] = 'Your Dropbox account is full. Please free some space and attempt the backup after sometime';

$l['gdrive_err_init'] = 'There were some errors while initiating the backup on Google Drive!!';
$l['gdrive_err_end'] = 'There were some errors while committing backup to your Google Drive account!!';
$l['pass_decrpyt_fail'] = 'Password decryption failed.';
$l['ssh_conn_fail'] = 'SSH connection to the remote server failed';
$l['delete_temp_file'] = 'Deleting temporary backup file';
$l['ssh_conn_success'] = 'SSH connection successful';
$l['bckp_dir_notfound'] = 'Backup directory not found, creating';
$l['fail_bckp_dir'] = 'Failed to create remote backup directory';
$l['ssh_upload_start'] = 'Starting SSH upload of the backup file';
$l['ssh_upload_fail'] = 'SSH upload failed';
$l['ssh_upload_success'] = 'SSH upload successful';
$l['ssh_conn_close'] = 'Closing SSH connection';
$l['ftp_conn_fail'] = 'FTP connection failed';
$l['ftp_conn_success'] = 'FTP connection successful';
$l['ftp_change_dir'] = 'Changing to the FTP directory';
$l['ftp_upload_fail'] = 'FTP upload failed';
$l['ftp_upload_success'] = 'FTP upload successful';
$l['ftp_conn_close'] = 'Closing FTP connection';
$l['empty_server_list'] = 'Unable to get backup server list';
$l['ftp_upload_start'] = 'Starting FTP upload of the backup file';
$l['dwnlod_restore_fail'] = 'Unable to download the file for Restore';
$l['remote_del_fail'] = 'Unable to Delete the file on Remote Server';
$l['remote_del_success'] = 'Remote Backup file Deleted Successfully';
$l['no_server_id_filename'] = 'Backup Server ID and Filename not provided !';
$l['cd_backup_location_fail'] = 'Unable to change directory to the specified location';

$l['err_no_openssl'] = "Openssl extension is required to encrypt the password(s) with new encryption algorithm\n";
$l['err_no_mcrypt'] = "Mcrypt extension is required to decrypt the password(s) encrypted with old encryption algorithm\n";
$l['add_backup_file'] = 'Backup file added'; 
$l['err_include_extend'] = "\nFailed to include functions for Plugins/Theme Update";
$l['err_access_ins'] = "\nError accessing the installation &soft-1;\n Skipping plugins/theme upgrade for this installation";
$l['note_partial_backup'] = 'Partial Backup taken during Plugins/Theme Upgrade';
$l['err_partial_backup_fail'] = 'Partial Backup was not successful so aborting the plugins/theme upgrade process. Following are the details :';
$l['err_upgrade_extras'] = "\nThere were some errors while upgrading Theme and Plugins";
$l['upgraded_successfully_extras'] = "\nPlugins/Themes were upgraded successfully for : ";
$l['err_upgrade_restore_failed_extras'] = 'Failed to upgrade the plugins/theme AND also failed to restore from the backup created. Following are the details :';
$l['err_upgrade_restore_success_extras'] = 'Failed to upgrade the plugins/theme BUT successfully restored from the backup created. Following are the details :';
$l['err_cannot_autoupgrade_extras'] = "Auto upgrade for plugins/theme can not be performed for this control panel.\n";
$l['err_failed_attempt'] = "The Auto Upgrade Plugins/Theme failed last time so cannot attempt upgrade.\n";
$l['cant_create_dir'] = "Can\'t create directory ";
// import_webuzo.php
$l['no_server_ip'] = 'Server IP not provided.';
$l['no_server_pass'] = 'Server root password not provided.';
$l['no_server_port'] = 'Server port not provided';
$l['no_server_mysql_pass'] = 'Server mysql password not provided.';
$l['no_migrate_type'] = 'Migrate Type not provided.';
$l['invalid_migrate_type'] = 'Invalid Migrate Type.';
$l['migrate_finish'] = 'Finished Migrating Webuzo.';
$l['migrate_conf_finish'] = 'Finished migrating webuzo configurations.';
$l['migrate_user_account_finish'] = 'Finished migrating user accounts.';
$l['migrate_databases_finish'] = 'Finished migrating databases.';
$l['migrate_emails_finish'] = 'Finished migrating email accounts and email data.';
$l['migrate_ftp_finish'] = 'Finished migrating FTP.';
$l['mysql_not_same'] = 'MySQL version on both Webuzo server are not same.';
$l['webuzo_user_not_same'] = 'Webuzo Username on both Webuzo server are not same.';
$l['sshpass_installed'] = 'sshpass is already installed on your server.';
$l['remote_command_exec_fail'] = 'Execution of remote command failed.';
$l['migrate_command_failed'] = 'Some error occured while executing the command';
$l['conn_fail'] = 'Connection to Webuzo server failed.';

$l['cloning'] = 'Cloning ';
$l['staging'] = 'Staging ';
$l['pushtolive'] = 'Pushtolive ';
$l['cloning_complete'] = 'Cloning Completed.';
$l['staging_complete'] = 'Staging Completed.';
$l['pushtolive_complete'] = 'Pushing to Live Completed.';
$l['unzipping_files'] = 'Copying files and folders';
$l['prog_backingup'] = 'Backing Up ';
$l['panel_not_support'] = 'This panel does not support this utility.';

$l['checking_data'] = 'Checking the submitted data';
$l['prog_restoring'] = 'Restoring '; // Dont remove the trailing space
$l['res_dir'] = 'Restoring the Directory';
$l['res_db'] = 'Restoring the Database';
$l['res_datadir'] = 'Restoring the Data Directory';
$l['prog_restore_complete'] = 'Restore Completed.';
$l['read_archive'] = 'Reading the archive';
$l['pushtolive_backup_note'] = 'Backup created before pushing the site to live';

$l['license_refreshed'] = 'Your license has been refreshed !'; 
$l['updated_license'] = 'Updated license details are as follows :';

$l['err_no_universal'] = 'Could not find universal.php';

$l['rbackup_disabled'] = 'Backup on remote locations is disabled by Admin';
$l['rbackup_protocol_disabled'] = 'Backup on <b>&soft-1;</b> is disabled by Admin';

// Show real version CLI utility strings
$l['show_real_version_no_outdated'] = 'All installations have updated version in '.APP.' records !';
$l['show_real_version_updates_list'] = 'Following installations have versions not updated in '.APP.' records';
$l['show_real_version_user_ins'] = 'Installations for user';
$l['installation_id'] = 'Installation ID';
$l['script_name'] = 'Script Name';
$l['version'] = 'Version';
$l['real_version'] = 'Real Version';
$l['installation_url'] = 'Installation URL';
$l['update_real_version_notice'] = 'Use the parameter --update_real_version to update the '.APP.' records';

$l['update_real_version_no_outdated'] = 'No installation found with outdated version in '.APP.' records !';
$l['update_real_version_fail'] = 'Failed to update the version in '.APP.' records';
$l['update_real_version_list'] = 'Following installations versions have been updated in '.APP.' records';

