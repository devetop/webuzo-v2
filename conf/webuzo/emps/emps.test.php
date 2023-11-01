<?php

//////////////////////////////////////////////////////////////
//===========================================================
// emps.test.php
// Execute : php /usr/local/webuzo/conf/webuzo/emps/emps.test.php
//===========================================================
// SOFTACULOUS WEBUZO
// Version : 2.4.5
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Husain Bhala
// Date:       06th May 2016
// Time:       13:00 hrs
// Site:       http://www.webuzo.com/ (SOFTACULOUS WEBUZO)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.webuzo.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

@define('WEBUZO', 1);
@define('SOFTACULOUS', 1);//We are serving the ADMIN

//Set error reporting
error_reporting(E_ALL);

$globals['softpanel'] = 'webuzo';

#~~~~~~~~~~~~~~~~~~~~~~~~
# SOFTACULOUS VARIABLES
#~~~~~~~~~~~~~~~~~~~~~~~~
include_once('/usr/local/webuzo/enduser/universal.php');

// Some globals vars
include_once($globals['enduser'].'/globals.php');

// The necessary functions to run this SOFTACULOUS Software
include_once($globals['mainfiles'].'/functions.php');

//include_once('inc.php');

$env['log'] = '/tmp/emps.log';

// What is the currect version
$curver = @file_get_contents('/usr/local/emps/version');
if(empty($curver)){
	$curver = '1.0';
}
$curver = trim($curver);

// Log the Version
@exec('echo "Current Version : '.$curver.'" >> '.$env['log'].' 2>&1');
echo "Current Version : ".$curver."\n";

// Find the IP of the machine
$thisip = file_get_contents('http://files.webuzo.com/ip.php');

// Find the Architecture
$arch = trim(shell_exec('uname -m'));
$arch = (preg_match('/64/is', $arch) ? 64 : 32);

// Log the architecture
@exec('echo "Using Arch : '.$arch.'" >> '.$env['log'].' 2>&1');
echo "Using Arch : ".$arch."\n";

// Get the details
$data = file_get_contents('http://files.softaculous.com/emps.php?giveinfo=1&arch='.$arch);
$info = @_unserialize($data);//r_print($info);

// Log the information received
@exec('echo "Info Received : '.$info.'" >> '.$env['log'].' 2>&1');
echo "Info Received : \n";
r_print($info);

// Did we get the information
if(empty($info['latest_version'])){
	echo "\n\nNo Information Received. Please try again later. Exiting ... ";
	die();
}

// Are we to update ?
if(empty($argv[1])){
	echo "\n\nThere is an update available. Version : ".$info['latest_version'];
	echo "\n\nNOT updating since it was not mentioned ! Exiting ... ";
	die();
}

// Download the New EMPS Package
// Usage - To upgrade EMPS to 3.0 for a 64 bit machine use : emps.test.php 3.0-x86_64
exec('wget -N -O /usr/local/webuzo/EMPS.tar.gz "http://files.softaculous.com/emps/EMPS-'.$argv[1].'.tar.gz" >> '.$env['log'].' 2>&1');

echo "\n\nUpgrading ... ";

// Stop the Webuzo Service
exec('/etc/init.d/webuzo stop >> '.$env['log'].' 2>&1');

// Make the EMPS folder
@mkdir('/usr/local/emps');

// Untar EMPS
exec('cd /usr/local/emps; tar -xvzf /usr/local/webuzo/EMPS.tar.gz >> '.$env['log'].' 2>&1');

// Install the NECESSARY Libraries
exec('yum -y update glibc libstdc++ >> '.$env['log'].' 2>&1');
exec('yum -y install glibc.*86 libstdc++.*86 >> '.$env['log'].' 2>&1');

// Now copy the CONF files
$data = file("/usr/local/emps/mysql");

$exclude = array('/usr/local/emps/lib/libmysqlclient.a', '/usr/local/emps/lib/libmysqlclient.so.18.0.0');

foreach($data as $dk => $dv){
	
	if(in_array(trim($dv), $exclude)){
		continue;
	}
	exec('/bin/rm -rf '.$dv.' >> '.$env['log'].' 2>&1');
	// LOGGING
	exec('echo "[Removing] : '.$dv.'" >> '.$env['log'].' 2>&1');
	
}
/*

// Why is this required ? You are not even removing the EMPS folder ?
*********************************************
NOTE : 1) If you are to copy these files than take a backup of the file php-fpm.conf and replace it back to place - As it contains the "soft" username
2) I wonder why point is even required. Create a Symlink directly as the file already has the user "soft" contents

*********************************************
*/

// Now copy the CONF files
@mkdir('/usr/local/emps/etc/nginx/conf.d', 0755);
exec('ln -s '.$globals['path'].'/conf/webuzo/emps/nginx.conf /usr/local/emps/etc/nginx/nginx.conf >> '.$env['log'].' 2>&1');
exec('ln -s '.$globals['path'].'/conf/webuzo/emps/awstats_conf /usr/local/emps/etc/nginx/conf.d/awstats_conf >> '.$env['log'].' 2>&1');
exec('ln -s '.$globals['path'].'/conf/webuzo/emps/php-fpm.conf /usr/local/emps/etc/php-fpm.conf >> '.$env['log'].' 2>&1');
exec('ln -s '.$globals['path'].'/conf/webuzo/emps/php.ini /usr/local/emps/etc/php.ini >> '.$env['log'].' 2>&1');
exec('ln -s '.$globals['path'].'/conf/webuzo/emps/emps /etc/init.d/webuzo >> '.$env['log'].' 2>&1');

// Put the Auto start
@chmod($globals['path'].'/conf/webuzo/emps/emps', 0755);
@chmod('/etc/init.d/webuzo', 0755);

// Restart Webuzo Service
exec('/etc/init.d/webuzo restart >> '.$env['log'].' 2>&1');

$newver = @file_get_contents('/usr/local/emps/version');
echo "\n\nEMPS has been UPGRADED... \n\n";
echo "New Version : " . $newver;

// Who is gonna remove the EMPS.tar.gz ?
exec('/bin/rm -rf /usr/local/webuzo/EMPS.tar.gz >> '.$env['log'].' 2>&1');

?>