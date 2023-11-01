<?php

define('SOFTACULOUS' , 1 );

if(empty($globals)){
	include_once('/usr/local/webuzo/enduser/universal.php');
}

// Process the arguments
foreach($argv as $k => $v){
	$v = explode('=', $v);
	if(empty($v[1])) continue;
	$args[$v[0]] = $v[1];
}

// Are we to sleep ?
if(!empty($args['sleep'])){
	echo 'Sleeping for '.$args['sleep'].' seconds'."\n";
	@sleep($args['sleep']);
}

// Retsrat webuzo service
shell_exec('/etc/init.d/webuzo restart');


?>