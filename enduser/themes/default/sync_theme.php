<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sync_theme.php
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


function sync_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
global $software, $soft, $info, $settings, $softins, $dbtype, $dbs, $imported, $__settings, $setupcontinue, $installations, $notes, $list, $other_installer, $all_local_import;

if(!empty($all_local_import)){
	import_ins_list(1);
	return true;
}

softheader($l['<title>']);

//First add the installation info
	echo '
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

$(document).ready(function(){
	$(".check_all").on("ifChecked", function(event){
		$(".import_check").iCheck("check");
	});
	$(".check_all").on("ifUnchecked", function(event){
		$(".import_check").iCheck("uncheck");
	});
	
	$("#other_installers_res").click(function(){
		toggle_manual_import(0);
	});
	
	$("#other_installers").click(function(){
		toggle_manual_import(0);
	});

	$("#manual_ins_res").click(function(){
		toggle_manual_import(1);
	});

	$("#manual_ins").click(function(){
		toggle_manual_import(1);
	});
	
	if(tab_manual){
		toggle_manual_import(1);
	}
});

function checkform(){
	try{
		if(!formcheck() || !checkdbname(\'softdb\', true)){
			return false;
		}
	}catch(e){
		//Do nothing
	}
	return true;
};

function import_all(){

	var csrf_token = $("#csrf_token").val();
	
	// Add the loading div so user can know the progress
	loading_div();
	
	$.ajax({
		type: "POST",
		data: "csrf_token="+csrf_token,
		url: "'.$globals['index'].'act=sync&jsnohf=1&import_all=1",
		// Checking for error
		complete: function( jqXHR, status, responseText ) {
			
			$_("loading-div").remove();
			
			// Store the response as specified by the jqXHR object
			responseText = jqXHR.responseText;
			
			if(responseText && responseText != ""){
				$_("manual_ins_div").innerHTML = responseText;
			}
		}
	});
}

// Adds a loading div so the admin knows which user is currently being processed
function loading_div(){
	var loading = \'<div class="container-fluid width80" id="loading-div"><div class="text-center"> <img src="'.$theme['images'].'admin_progress.gif" id="loading-gif" /> &nbsp; '.$l['importing_ins'].'<br /><br />'.$l['wait_note'].'</div></div><br />\';
	$_("manual_ins_div").innerHTML = loading;
}

function toggle_manual_import(show){
	if(show){
		$("#other_installers_div").hide();
		$("#manual_ins_div").show();
	}else{
		$("#manual_ins_div").hide();
		$("#other_installers_div").show();
	}
}

';

echo '// ]]></script>


<script language="JavaScript" src="'.$theme['url'].'/js/tabber.js" type="text/javascript"></script>
<script type="text/javascript">
	tabs = new tabber;
	tabs.tabs = new Array(\'other_installers\', \'manual_ins\');
	var tab_manual = "'.(@$_POST['start_manual_import'] || @$_GET['manual']).'";
	if(tab_manual){
		tabs.inittab = \'manual_ins\';
	}else{
		tabs.inittab = \'other_installers\';
	}
	addonload(\'tabs.init();\');
</script>';

echo '
<div class="bg" id="main_div"><br />

<div class="row sai_main_head" style="width:100%;" align="center">
	<div class="col-sm-5 col-xs-5" style="padding:0px 10px 0 0; text-align:right;">
		<i class="fa sai-download fa-2x" style="color:#00A0D2;"></i>
	</div>
	<div class="col-sm-7 col-xs-7" style="padding-top:5px; padding-left:0; text-align:left;">'.$l['import_soft'].'</div>
</div><hr>

<div class="old_tab">
	<table width="100%" cellpadding="0" cellspacing="0" border="0" class="sai_tabs">
		<tr>
			<td width="50%"><a class="sai_tab" href="javascript:tabs.tab(\'other_installers\')" id="other_installers">'.$l['other_installers_btn'].'</a></td>
			<td><a class="sai_tab" href="javascript:tabs.tab(\'manual_ins\')" id="manual_ins">'.$l['manual_ins_btn'].'</a></td>
		</tr>
	</table><br />
</div>

<div class="new_tab">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<ul class="nav">
				
			</ul>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar" style="position:absolute; z-index:1000; width:100%; background:#F8F8F8;">
			<ul class="nav navbar-nav">
				<li><a href="javascript:tabs.tab(\'other_installers\')" id="other_installers_res" class="sai_tab2" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['other_installers_btn'].'</a></li>
				<li><a href="javascript:tabs.tab(\'manual_ins\')" id="manual_ins_res" class="sai_tab2" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['manual_ins_btn'].'</a></li>
			</ul>
		</div>
	</nav>
</div>';

//In all installations import some script import returns mysql error. 
if(empty($all_local_import)){
	error_handle($error, '100%');
}

// Success page ?
if(!empty($imported)){
	import_ins_list(1);
}else{
	echo '<div class="bg2" id="other_installers_div" '.(isset($_POST['start_manual_import']) ? 'style="display:none;"' : '').'>
	<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" onsubmit="return checkform();">';

	// Is there any data from other auto installers ?
	if(!empty($other_installer) && !empty($list)){
	echo '<div class="alert alert-warning text-center">'.$l['sync_notes'].'</div><br>';
	import_ins_list(0);
	echo '<p align="center">
	'.csrf_display().'
	<input type="submit" name="softsubmit" id="softsubmit" value="'.$l['softsubmit'].'" class="flat-butt" />
	</p>';
	}else{
	echo '<div id="no_other_installer" class="alert alert-warning text-center">'.$l['no_installer_data'].'</div><br>';	
	}

	echo '
	</form><br /><br /><br />
	</div><! –– End of bg2 class and other_installers tab ––>';

	echo '<div class="bg2" id="manual_ins_div" '.(!isset($_POST['start_manual_import']) ? 'style="display:none;"' : '').'>
	<div class="alert alert-warning text-center">'.$l['manual_notes'].'</div><br>
	<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" onsubmit="return checkform();">
	<p align="center">
	'.csrf_display().'
	<input type="button" name="start_manual_import" id="start_manual_import" onclick="import_all();" value="'.$l['manual_import'].'" class="flat-butt" />
	</p>
	</form><br /><br /><br />
	</div> <! –– End of bg2 class and manual_ins tab ––>
	</div><! –– End of main div bg ––>';
}

softfooter();

}

function import_ins_list($success = false){
	
	global $l, $list, $iscripts, $theme, $all_local_import, $imported;
	
	if(empty($list)){
		echo '<div id="no_local_ins" class="alert alert-danger text-center">'.$l['no_ins'].'</div>';
		return true;
	}
	
	if(!empty($all_local_import) || !empty($imported)){
		echo '<div class="alert alert-success text-center">'.$l['success_msg'].'</div><br>';
	}
	
	echo '<table width="100%" cellpadding="5" cellspacing="1" class="table table-hover">
	<tr>
	<thead class="sai_head2" style="background:#EFEFEF;">
	<th width="45%" align="left">'.$l['script_name'].'</th>
	<th width="45%" align="left">'.$l['script_url'].'</th>';
	if(empty($success)){
		echo '<th><input type="checkbox" onclick="check(document.getElementsByName(\'approved[]\'), this)" class="check_all"></th>';
	}else{
		echo '<th></th>';
	}
	echo '
	</thead>
	</tr>';

	foreach($list as $k => $v){

		foreach($v as $vk => $vv){
			
			// Show only success installations
			if(!empty($success) && $vv['synced'] == false && empty($all_local_import)){
				continue;
			}
			
			echo '<tr>
					<tbody class="endurl">
						<td>'.$iscripts[$k]['name'].'</td>
						<td><a href='.$vv['url'].'>'.$vv['url'].'</a></td>';
						if(empty($success)){
							echo '<td><input type="checkbox" name="approved[]" class="import_check" value="'.$vv['base'].'"></td>';
						}else{
							echo '<td><img src="'.$theme['images'].'message_success.gif" /></td>';
						}
						echo '
					</tbody>
				</tr>';
		}
	}
	echo '</table><br />';
	
	return true;
}

?>