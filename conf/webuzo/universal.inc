<?php

$addr = (file_exists(dirname(dirname(__FILE__)).'/publicip') ? file_get_contents('http://www.softaculous.com/ip.php') : @$_SERVER['SERVER_ADDR']);

die('<meta http-equiv="refresh" content="0;url=http://'.$addr.':2004/install.php" />');

?>