<?php

//////////////////////////////////////////////////////////////
//===========================================================
// softwares_theme.php
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

function script_requirement_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $iscripts, $scripts, $catscripts, $allcatwise, $_iscripts, $cscripts, $sreq;

softheader($l['<title>']);

if(!empty($sreq)){
	
	echo '<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
	<form accept-charset="'.$globals['charset'].'" name="updatesoft" method="post" action="">
	<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
	<div class="container-fluid width80"><br /><br />
	<div class="sai_main_head text-center">'.$l['list_of_scripts'].'</div>
	<div class="sai_form"><br />';
	
	error_handle($error);
	
	echo '<center width="80%"><font class="sai_head">'.$l['note'].'</font></center><br />
	<div>
	<table width="100%" border="0" class="table table-striped" align="center" style="width:80%;">
	<th style="padding-left:4em" width="35%">'.$l['script_name'].'</th>
	<th style="padding-left:8em">'.$l['req'].'</th>';
	
	foreach($sreq as $k => $v){
		if($k > 10000){
			continue;
		}

		echo '<tr>
				<td width="40%" style="padding-left:3em">
				<table width="100%" border="0">
					<tr>
						<td valign="centre"><div class="sp20_'.$iscripts[$k]['softname'].'"></div></td>
						<td valign="centre" class="sai_bboxtxt" align="left" width="90%">&nbsp;'.$v['name'].'</td>
					</tr>
				</table>
				</td>
				<td class="sai_bboxtxt">
				<table width="100%" border="0px" style="margin-top:4px">';
				
				if(!empty($v['version'])){
					// Start Here make table content
					foreach($v['version'] as $vk => $vv){
						echo '<tr><td width="35%" height="22px" valign="top"><strong>'.strtoupper($vk).' '.$l['req_version'].' :</strong></td><td valign="top">'.ucfirst($l[$vv['operator']]).' '.$vv['version'].'</td></tr>';
					}
				}
				
				if(!empty($v['extension'])){
					foreach($v['extension'] as $vk => $vv){
						echo '<tr><td width="35%" height="22px" valign="top"><strong>'.strtoupper($vk).' '.$l['req_extensions'].' :</strong></td><td valign="top">'.implode(', ',$vv).'</td></tr>';
					}
				}
				
				if(!empty($v['function_exists'])){
					foreach($v['function_exists'] as $vk => $vv){
						echo '<tr><td width="35%" height="22px" valign="top"><strong>'.strtoupper($vk).' '.$l['req_functions'].' :</strong></td><td valign="top">'.implode(', ',$vv).'</td></tr>';
					}
				}
				
				echo '</table></td>';
				
			echo '</tr>';
	}
	
	echo '</table><br />
		</div>
		</div>
	</div>
	</form><br />';
	
}else{
	echo '<h2 align="center">'.$l['no_results'].'</h2><br />';
}

softfooter();

}
?>