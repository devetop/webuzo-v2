<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_theme.php
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


function editdetail_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $edit, $settings;
global $insid, $edited, $software, $soft, $scripts, $version_updated, $account_details_editable, $no_autoupgrade, $add_to_fileindex, $__settings, $default_fileindex, $pfx_error, $owned_themes, $full_tables, $default_tables, $no_autoupgrade_acl, $notes, $act;

// For update theme and plugins ajax call
if(optGET('upgradenow')){
	
	// It was not successful
	if(!empty($error)){
		echo '0'.current($error);
		return false;
	}
	
	// It was successful
	if(!empty($edited)){
		
		if(!empty($_REQUEST['upgradeplugins'])){
			$successmsg = $l['plugins_upgrade_success'];
		}
		
		if(!empty($_REQUEST['upgradetheme'])){
			$successmsg = $l['theme_upgrade_success'];
		}
		
		echo '1'.$successmsg;
		return true;
	}
}

softheader($l['<title>']);

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

var message_box = function(){			
	return {
		show_message: function(title, body , image) {			
			var okbutton = \'<input  style="width:75px; margin-top:5px; background:#00A0D2; color:#FFF;" class="sai_submit" type="button" onclick="message_box.close_message();" value="OK" />\';
			if(image == "1"){
				var img = \'<img src="'.$theme['images'].'error.gif" />\';
			}else{
				var img = \'<img src="'.$theme['images'].'confirm.gif" />\';			
			}
								
			if(jQuery(\'.sai_message_box\').html() === null || jQuery(\'.sai_message_box\').html() === undefined ) {
				var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="30%" > \'+ img + \'</td><td width="70%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table></div>\';
				jQuery(document.body).append( message );								
				jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
				jQuery(\'.sai_message_box\').show(\'slow\');
			}else{
				var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="30%">\'+ img +  \'</td><td widt="70%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table>\';				
				jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
				jQuery(\'.sai_message_box\').show(\'slow\');
				jQuery(\'.sai_message_box\').html( message );
			}
		},
		close_message: function() {
			jQuery(\'.sai_message_box\').hide(\'fast\');
		}
	}
}();

$(document).ready(function(){
		
	// For Plugins Upgrade
	$("#plugins_upgrade").click(function(){
		
		$("#upgradeplugins").val(1);
		$("#plugins_upgrade_gif").css("display", "");
		
		return upgradenow("plugins");
													
	});

	// For Theme Upgrade
	$("#theme_upgrade").click(function(){
		
		$("#upgradetheme").val(1);
		$("#theme_upgrade_gif").css("display", "");
		
		return upgradenow("theme");
													
	});
});

function upgradenow(action){
	$.ajax({
		type: "POST",
		url: window.location+"&upgradenow=1",					
		data: $("#editsettings").serialize(),
		
		// Checking for error
		success: function(data){
			
			$("#" + action + "_upgrade_gif").css("display", "none");
			
			// Reset the button so it is not submitted next time
			$("#upgrade" + action).val(0);
			
			var result = data.trim().substring(0,1);
			if(result == "1"){
				var msg = data.trim().substring(1);
				message_box.show_message( "'.$l['done'].'", msg, 2);
			}
			if(result == "0"){
				var msg = data.trim().substring(1);
				message_box.show_message( "'.$l['error'].'", msg, 1);
			}
		},
		error: function() {
			message_box.show_message("Error", "Oops ... the connection was lost", 1);
		}													
	});
	
	return false;
}
// ]]></script>';

echo '
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

// show/hide backup options
function show_backup(){
	try{
		var auto_backup = $("#auto_backup").val();
		if(auto_backup == 0){
			$("#auto_backup_rotation").prop("disabled", true);
			$("#custom_autobackup_cron").css("display", "none");
		}else{
			if(auto_backup == "custom"){
				$("#custom_autobackup_cron").css("display", "block");
			}else{
				$("#custom_autobackup_cron").css("display", "none");
			}				
			$("#auto_backup_rotation").prop("disabled", false);
		}
		
	}catch(e){
		//
	}
	return true;
};

function toggle_advoptions(ele){
	//alert("#"+ele);
	
	if ($("#"+ele).is(":hidden")){
		$("#"+ele).slideDown("slow");
		$("#advoptions_toggle_plus").attr("src", "'.$theme['images'].'minus_new.gif");
	}
	else{
		$("#"+ele).slideUp("slow");
		$("#advoptions_toggle_plus").attr("src", "'.$theme['images'].'plus_new.gif");
	}
}

function plus_onmouseover(ele){
	$("#"+ele.id+"_plus").attr("src", "'.$theme['images'].'plus_hover.gif");
}

function plus_onmouseout(ele){
	$("#"+ele.id+"_plus").attr("src", "'.$theme['images'].'plus.gif");
}

$(document).ready(function() {
	$("#editfiles tr").click(function(event) {
		if (event.target.type !== "checkbox") {
		  $(":checkbox", this).trigger("click");
		}
	});
});

'.(!empty($_POST) ? '' : 'addonload(\'show_backup();\');').'

// ]]></script>';

$width_size = 65;

if(!empty($softpanel->leftpanel_resize)){
	$width_size = 40;
}

if(!empty($edited)){
	
	$return = '<a href="'.script_link($soft).'&highlight='.$insid.'&postact=edit" class="sai_head">'.$l['return'].'</a>';
	//Filter to customize the return to link
	$return = apply_filters('return_link', $return, $act);
	
	echo '
	<div class="bg"><br />
		<div class="alert alert-warning"><center>'.$l['details_edited'].'</center></div><br />';
		
		if(!empty($notes)){
			echo $l['edit_notes'].' : <br />
			<div class="sai_notes">'.softparse($notes, $soft).'</div><br />';
		}
		
		if(!empty($pfx_error)){
			error_handle($pfx_error, "100%");
		}
			
	echo '<br /><center><b>'.$return.'</b></center><br />
	</div><!--end of bg-->';
}else{
	
	$return = '<a href="'.script_link($soft).'" class="sai_head">'.$l['return'].'</a>';
	//Filter to customize the return to link
	$return = apply_filters('return_link', $return, $act);
	
	echo '
	<form accept-charset="'.$globals['charset'].'" name="editsettings" id="editsettings" method="post" action="" class="form-horizontal">
		<div class="bg"><br />			
			<div class="row sai_main_head" style="width:100%;" align="center">
				<div class="col-sm-5 col-xs-4" style="padding:0 10px 0 0; text-align:right;">
					<i class="fa sai-projectman fa-2x" style="color:#00A0D2;"></i>
				</div>
				<div class="col-sm-7 col-xs-8" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['edit_ins'].'</div>
			</div><br />';
			
			error_handle($error, '100%');
			
			if(!empty($version_updated)){
				echo '<div class="alert alert-warning" align="center"><a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$l['version_edited'].'</div>';
			}

			echo (!empty($GLOBALS['alreadyupdated']) ? '
				<form accept-charset="'.$globals['charset'].'" method="post" name="uprec" id="uprec" action="">
				<br />
					<center class="alert alert-warning">
						<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<a href="'.$globals['index'].'act=editdetail&insid='.$insid.'&updateversion=1" style="text-decoration:none;"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.lang_vars($l['alreadyupdated'], array($GLOBALS['alreadyupdated'], $user['ins'][$insid]['ver'])).'</a>
					</center>
					'.csrf_display().'
				</form>' : '');

			echo'
			<div style="padding: 0 25px;">
				<div class="sai_sub_head">'.$l['ins_details'].'</div><hr>';
		
				if(empty($globals['hide_directory_url'])){
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="edit_dir" class="sai_head">'.$l['edit_dir'].'</label><br />
						</div>	
						<div class="col-sm-7">
							<input type="text" name="edit_dir" id="edit_dir" class="form-control" value="'.POSTval('edit_dir', $user['ins'][$insid]['softpath']).'" size="'.$width_size.'" />
						</div>	
					</div><br />
					
					<div class="row">
						<div class="col-sm-5">
							<label for="edit_url" class="sai_head">'.$l['edit_url'].'</label><br />
						</div>	
						<div class="col-sm-7">	
							<input type="text" name="edit_url" id="edit_url" class="form-control" value="'.POSTval('edit_url', $user['ins'][$insid]['softurl']).'" size="'.$width_size.'" />
						</div>	
					</div><br />
				';}
				
				// Web directory @since 3.5
				if(!empty($user['ins'][$insid]['wwwdir'])){
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="edit_wwwdir" class="sai_head">'.$l['edit_wwwdir'].'</label><br />
						</div>
						<div class="col-sm-7"> 
							<input type="text" name="edit_wwwdir" id="edit_wwwdir" class="form-control" value="'.POSTval('edit_wwwdir', $user['ins'][$insid]['wwwdir']).'" size="'.$width_size.'" />
						</div>	
					</div><br />
				';}
				
				// Web directory URL @since 3.5
				if(!empty($user['ins'][$insid]['wwwurl'])){
				
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="edit_wwwurl" class="sai_head">'.$l['edit_wwwurl'].'</label><br />
						</div>
						<div class="col-sm-7">
							<input type="text" name="edit_wwwurl" id="edit_wwwurl" class="form-control" value="'.POSTval('edit_wwwurl', $user['ins'][$insid]['wwwurl']).'" size="'.$width_size.'" />
						</div>	
					</div><br />
				';}
				
				// Data directory ?
				if(!empty($user['ins'][$insid]['softdatadir'])){
				
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="edit_datadir" class="sai_head">'.$l['edit_datadir'].'</label><br />
						</div>
						<div class="col-sm-7">
							<input type="text" name="edit_datadir" id="edit_datadir" class="form-control" value="'.POSTval('edit_datadir', $user['ins'][$insid]['softdatadir']).'" size="'.$width_size.'" />
						</div>	
					</div><br />
				';}
			
				if(!empty($user['ins'][$insid]['softdb'])){
					
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="edit_db" class="sai_head">'.$l['edit_db'].'</label><br />
						</div>
						<div class="col-sm-7">
							<input type="text" name="edit_dbname" id="edit_db" class="form-control" value="'.POSTval('edit_dbname', $user['ins'][$insid]['softdb']).'" size="'.$width_size.'" />
						</div>					
					</div><br />
				';}
				
				if(!empty($user['ins'][$insid]['softdbuser'])){
				
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="edit_dbuser" class="sai_head">'.$l['edit_dbuser'].'</label><br />
						</div>
						<div class="col-sm-7">
							<input type="text" name="edit_dbuser" id="edit_dbuser" class="form-control" value="'.POSTval('edit_dbuser', $user['ins'][$insid]['softdbuser']).'" size="'.$width_size.'" />
						</div>
					</div><br />
				';}
			
				if(!empty($user['ins'][$insid]['display_softdbpass'])){
				
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="edit_dbpass" class="sai_head">'.$l['edit_dbpass'].'</label><br />
							'.((!empty($globals['no_prefill_pass'])) ? '<span class="sai_exp2">'.$l['edit_dbpass_exp'].'</span>' : '').'
						</div>
						<div class="col-sm-7">
							<div class="row">
								<div class="col-sm-11">
									<input type="password" name="edit_dbpass" id="edit_dbpass" class="form-control" value="'.aPOSTval('edit_dbpass', (empty($globals['no_prefill_pass']) ? htmlizer($user['ins'][$insid]['display_softdbpass']) : '')).'" size="'.$width_size.'" autocomplete="new-password" />
								</div>
								<div class="col-sm-1" style="margin-left:-20px;">
									<input id="toggle_pass_dbpass" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide_dbpass\', \'edit_dbpass\');"/><label for="toggle_pass_dbpass" style="margin-top:6px;"><span id="show_hide_dbpass">'.$l['show'].'</span></label>
								</div>
							</div>
						</div>						
					</div><br />
				';}
				
				if(!empty($user['ins'][$insid]['softdbhost'])){
				
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="edit_dbhost" class="sai_head">'.$l['edit_dbhost'].'</label><br />
						</div>
						<div class="col-sm-7">
							<input type="text" name="edit_dbhost" class="form-control" id="edit_dbhost" value="'.aPOSTval('edit_dbhost', $user['ins'][$insid]['softdbhost']).'" size="'.$width_size.'" />
						</div>	
					</div><br />
				';}
			
				//Do not show 'disable update notifications' option if both 'Turn off all Emails sent to endusers' and 'Disable End User Update E-Mails' or either is enabled in Admin Panel
				if(empty($globals['off_email_link']) && empty($globals['eu_email_off'])){
					echo'
					<div class="row">
						<div class="col-sm-5">
							<label for="disable_notify_update" class="sai_head">'.$l['disable_notify_update'].'</label><br />
							<span class="sai_exp">'.$l['exp_disable_notify_update'].'</span>
						</div>
						<div class="col-xs-6">
							<input type="checkbox" name="disable_notify_update" id="disable_notify_update" '.POSTchecked('disable_notify_update', $user['ins'][$insid]['disable_notify_update']).' />
						</div>	
					</div><br />';
				}
				
				if(!empty($scripts[$soft]['auto_upgrade']) && empty($no_autoupgrade) && empty($no_autoupgrade_acl)){
					
					$user['ins'][$insid]['eu_auto_upgrade'] = (int) $user['ins'][$insid]['eu_auto_upgrade'];
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="eu_auto_upgrade" class="sai_head">'.$l['eu_auto_upgrade'].'</label><br />
							<span class="sai_exp">'.$l['exp_eu_auto_upgrade'].'</span>
						</div>
						<div class="col-sm-7">
							<input type="radio" name="eu_auto_upgrade" value="0" '.POSTradio('eu_auto_upgrade', 0, $user['ins'][$insid]['eu_auto_upgrade']).(!empty($globals['force_auto_upgrade']) ? 'disabled' : '').' /> '.$l['dont_auto_upgrade'].' <br />
							'.(!empty($software['has_minor']) ? '<input type="radio" name="eu_auto_upgrade" value="2" '.POSTradio('eu_auto_upgrade', 2, $user['ins'][$insid]['eu_auto_upgrade']).(!empty($globals['force_auto_upgrade']) ? 'disabled' : '').' /> '.$l['minor_auto_upgrade'].' <br />' : '').'
							<input type="radio" name="eu_auto_upgrade" value="1" '.POSTradio('eu_auto_upgrade', 1, (!empty($globals['force_auto_upgrade']) ? $globals['force_auto_upgrade'] : $user['ins'][$insid]['eu_auto_upgrade'])).(!empty($globals['force_auto_upgrade']) ? 'disabled' : '').' /> '.$l['major_auto_upgrade'].'
						</div>
					</div><br />
				';}
					
				if(empty($globals['off_upgrade_plugins']) && !empty($software['update_plugins'])){
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="auto_upgrade_plugins" class="sai_head">'.lang_vars($l['auto_upgrade_plugins'], array($software['name'])).'</label><br />
							<span class="sai_exp">'.lang_vars($l['exp_auto_upgrade_plugins'], array($software['name'])).'</span>	
						</div>
						<div class="col-sm-1">
							<input type="checkbox" name="auto_upgrade_plugins" id="auto_upgrade_plugins" id="auto_upgrade_plugins" '.POSTchecked('auto_upgrade_plugins', (!empty($globals['force_upgrade_plugins']) ? $globals['force_upgrade_plugins'] : $user['ins'][$insid]['auto_upgrade_plugins'])).(!empty($globals['force_upgrade_plugins']) ? 'disabled' : '').'/>
						</div>
						<div class="col-sm-6">
							<input type="hidden" name="upgradeplugins" id="upgradeplugins" />
							<input id="plugins_upgrade" class="flat-butt" name="plugins_upgrade" value="'.$l['plugins_upgrade_now'].'" type="button" style="padding: 5px; font-size:13px;">&nbsp;
							<img id="plugins_upgrade_gif" src="'.$theme['images'].'progress.gif" style="display:none">
						</div>
					</div><br />
				';}
			
				if(empty($globals['off_upgrade_themes']) && !empty($software['update_themes'])){
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="auto_upgrade_themes" class="sai_head">'.lang_vars($l['auto_upgrade_themes'], array($software['name'])).'</label><br />
							<span class="sai_exp">'.lang_vars($l['exp_auto_upgrade_themes'], array($software['name'])).'</span>
						</div>
						<div class="col-sm-1">
							<input type="checkbox" name="auto_upgrade_themes" id="auto_upgrade_themes" '.POSTchecked('auto_upgrade_themes', (!empty($globals['force_upgrade_themes']) ? $globals['force_upgrade_themes'] : $user['ins'][$insid]['auto_upgrade_themes'])).(!empty($globals['force_upgrade_themes']) ? 'disabled' : '').' />	
						</div>
						<div class="col-sm-6">
							<input type="hidden" name="upgradetheme" id="upgradetheme" />
							<input id="theme_upgrade" class="flat-butt" name="theme_upgrade" value="'.$l['theme_upgrade_now'].'" type="button" style="padding: 5px; font-size:13px;">&nbsp;
							<img id="theme_upgrade_gif" src="'.$theme['images'].'progress.gif" style="display:none">
						</div>
					</div><br />
				';}
				
				if(empty($globals['off_rbackup']) && empty($globals['disable_backup_restore'])){
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="backup_location" class="sai_head">'.$l['backup_loc'].'</label><br />
							<span class="sai_exp">'.$l['exp_backup_loc'].'</span>	
						</div>
						<div class="col-sm-7">
							<select name="backup_location" class="form-control" id="backup_location">
								<option value="0" '.POSTselect('backup_location', 0, (empty($user['ins'][$insid]['backup_location']) ? '1' : '0')).'>'.$l['default'].'</option>
								<option value="-1" '.POSTselect('backup_location', -1, ($user['ins'][$insid]['backup_location'] == -1 ? '1' : '0')).'>'.$l['local_folder'].'</option>';
								
								foreach($user['remote_backup_locs'] as $k => $v){
									echo '<option value="'.$k.'" '.POSTselect('backup_location', $k, ($user['ins'][$insid]['backup_location'] == $k ? '1' : '0')).'>'.$v['name'].'</option>';
								}
							echo '</select>
						</div>
					</div><br />';
				}
		
				if(empty($globals['disable_backup_restore']) && empty($globals['disable_auto_backup'])){
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="auto_backup" class="sai_head">'.$l['auto_backup'].'</label><br />
							<span class="sai_exp">'.$l['exp_auto_backup'].'</span>	
						</div>
						<div class="col-sm-7">
							<select name="auto_backup" class="form-control" id="auto_backup" onchange="show_backup();">
							<option value="0" '.POSTselect('auto_backup', '0', (empty($user['ins'][$insid]['auto_backup']) ? '1' : '0')).'>'.$l['no_backup'].'</option>'.
							(empty($globals['disable_auto_backup_daily']) ? '<option value="daily" '.POSTselect('auto_backup', 'daily', ($user['ins'][$insid]['auto_backup'] == 'daily' ? '1' : '0')).'>'.$l['daily'].'</option>' : '').
							(empty($globals['disable_auto_backup_weekly']) ? '<option value="weekly" '.POSTselect('auto_backup', 'weekly', ($user['ins'][$insid]['auto_backup'] == 'weekly' ? '1' : '0')).'>'.$l['weekly'].'</option>' : '').
							(empty($globals['disable_auto_backup_monthly']) ? '<option value="monthly" '.POSTselect('auto_backup', 'monthly', ($user['ins'][$insid]['auto_backup'] == 'monthly' ? '1' : '0')).'>'.$l['monthly'].'</option>' : '').
							(empty($globals['disable_auto_backup_custom']) ? '<option value="custom" '.POSTselect('auto_backup', 'custom', ($user['ins'][$insid]['auto_backup'] == 'custom' ? '1' : '0')).'>'.$l['custom_autobackup'].'</option>' : '').'
							</select>					
						</div>
					</div>';
					
					$autobackup_cron = explode(",", $user['ins'][$insid]['auto_backup_crontime']);
					
					echo '<div class="row" id="custom_autobackup_cron" style="display:none;"><br/>
						<div class="col-sm-5">
							<span class="sai_head">'.$l['custom_autobackup_cron'].'</span><br />
							<span class="sai_exp">'.$l['custom_autobackup_cron_exp'].'</span>
						</div>
						<div class="col-sm-7">
							<div class="row">
								<div class="col-sm-2">
									<span>'.$l['cron_min'].'</span>	
									<input type="text" class="form-control" name="autobackup_cron_min" id="autobackup_cron_min" size="2" value="'.POSTval('autobackup_cron_min', $autobackup_cron[0]).'" />
								</div>
								<div class="col-sm-2">
									<span>'.$l['cron_hour'].'</span>
									<input type="text" class="form-control" name="autobackup_cron_hour" id="autobackup_cron_hour" size="2" value="'.POSTval('autobackup_cron_hour', $autobackup_cron[1]).'" />
								</div>
								<div class="col-sm-2">
									<span>'.$l['cron_day'].'</span>
									<input type="text" class="form-control" name="autobackup_cron_day" id="autobackup_cron_day" size="2" value="'.POSTval('autobackup_cron_day', $autobackup_cron[2]).'" />
								</div>
								<div class="col-sm-2">
									<span>'.$l['cron_month'].'</span>
									<input type="text" class="form-control" name="autobackup_cron_month" id="autobackup_cron_month" size="2" value="'.POSTval('autobackup_cron_month', $autobackup_cron[3]).'" />
								</div>
								<div class="col-sm-2">
									<span>'.$l['cron_weekday'].'</span>
									<input type="text" class="form-control" name="autobackup_cron_weekday" id="autobackup_cron_weekday" size="2" value="'.POSTval('autobackup_cron_weekday', $autobackup_cron[4]).'" />
								</div>
							</div>
						</div>	
					</div><br />';
			
					echo '<div class="row">
						<div class="col-sm-5">
							<label for="auto_backup_rotation" class="sai_head">'.$l['auto_backup_rotation'].'</label><br />
							<span class="sai_exp">'.$l['exp_auto_backup_rotation'].'</span>
						</div>
						<div class="col-sm-7">
							<select name="auto_backup_rotation" class="form-control" id="auto_backup_rotation">';
							
							if(isset($user['ins'][$insid]['auto_backup_rotation'])){
								$current_rotation = $user['ins'][$insid]['auto_backup_rotation'];
								
								// Is the current limit set greater than the admin max limit ?
								if(!empty($globals['auto_backup_limit']) && $user['ins'][$insid]['auto_backup_rotation'] > $globals['auto_backup_limit']){
									$current_rotation = $globals['auto_backup_limit'];
								}
							}
							
							for($i=0; $i<=10; $i++){
								// Do we have a limit from admin ?
								if(!empty($globals['auto_backup_limit']) && ($i > $globals['auto_backup_limit'] || $i == 0) || !empty($globals['max_backups']) && ($i > $globals['max_backups'] || $i == 0)) continue;
								echo '<option value="'.$i.'" '.POSTselect('auto_backup_rotation', $i, (!empty($current_rotation) && $current_rotation == $i ? '1' : (!isset($current_rotation) && $i == 4) ? '1' : '0')).'>'.(empty($i) ? $l['unlimited'] : $i).'</option>';						
							}
							echo '</select>		
						</div>			
					</div><br />';
				}
			
				if(!empty($add_to_fileindex)){
				
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="advoptions_toggle" class="sai_head">'.$l['select_files'].'</label><br />
							<span class="sai_exp">'.$l['select_files_exp'].'</span><br />
						</div>
						<div class="col-sm-7">
							<div id="advoptions_toggle" onclick="toggle_advoptions(\'selectfile\');" class="sai_head" style="background: none; cursor:pointer;"><img id="advoptions_toggle_plus" src="'.$theme['images'].'plus_new.gif" /> &nbsp; '.$l['select_files_list'].'</div>
							<div id="selectfile" style="display:none">
								<table class="table table-hover">
									<thead style="background:#EFEFEF;" class="sai_head2">
										<tr>
											<th width="5%"><input type="checkbox" id="check_all_edit" name="check_all_edit"></th>
											<th colspan="2"><b>'.$l['check_all_edit'].'</b></th>
										</tr>
									</thead>';
									foreach($add_to_fileindex as $ck => $cv){
										
										if(in_array($cv['name'], $default_fileindex) && in_array($cv['name'], $__settings['fileindex'])) continue;
										
										echo '<tr>
												<td><input type="checkbox" name="add_to_fileindex[]" class="soft_filelist" value="'.$cv['name'].'" '.POSTmulticheck('add_to_fileindex', $cv['name'], $__settings['fileindex']).' /></td>
												<td width="5%"><img src="'.$theme['images'].''.(!empty($cv['dir']) ? 'dir.png' : 'file.png').'"></td>
												<td>'.$cv['name'].'</td>
											</tr>';
										$i++;
									}
								echo'
								</table>
							</div>		
						</div>	
					</div><br />';	
					
					if(empty($globals['disable_backup_restore'])){
						
						echo '<div class="row">
								<div class="col-sm-5">
									<label for="select_files_backup" class="sai_head">'.$l['select_files_backup'].'</label><br />
									<span class="sai_exp">'.$l['select_files_backup_exp'].'</span>
								</div>
								<div class="col-sm-7">
									<select name="select_files_backup" class="form-control" id="select_files_backup">
										<option value="0" '.POSTselect('select_files_backup', '0', (empty($user['ins'][$insid]['select_files_backup']) ? '1' : '0')).'>'.$l['no'].'</option>
										<option value="1" '.POSTselect('select_files_backup', '1', (!empty($user['ins'][$insid]['select_files_backup']) ? '1' : '0')).'>'.$l['yes'].'</option>
									</select>				
								</div>			
							</div><br />';
					}
				}
				
				if(!empty($__settings['softdb']) && aefer() && empty($data['dbcreated'])){
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="tables_toggle" class="sai_head">'.$l['select_tables'].'</label><br />
							<span class="sai_exp">'.$l['select_tables_exp'].'</span><br />
						</div>
						<div class="col-sm-7">
							<div id="tables_toggle" onclick="toggle_advoptions(\'select_tables\');" class="sai_head" style="background: none; cursor:pointer;"><img id="advoptions_toggle_plus" src="'.$theme['images'].'plus_new.gif" /> &nbsp; Select tables</div>
							<div id="select_tables" style="display:none">
								<table class="table table-hover">
									<thead style="background:#EFEFEF;" class="sai_head2">
										<tr>
											<th width="5%"><input type="checkbox" id="check_all_tables" name="check_all_tables"></th>
											<th colspan="2"><b>'.$l['check_all_edit'].'</b></th>
										</tr>
									</thead>';
									foreach($full_tables as $k => $v){											
										echo '<tr>
												<td><input type="checkbox" name="add_to_softdbtables[]" class="soft_tablelist" value="'.$v.'" '.POSTmulticheck('add_to_softdbtables', $v, $__settings['softdbtables']).' '. (in_array($v, $default_tables) ? 'disabled' : '').'/></td>
												<td>'.trim($v, '`').'</td>
											</tr>';
										$i++;
									}
								echo'
								</table>
							</div>		
						</div>	
					</div><br />';
				}
			echo'</div>';
		
			if(!empty($settings)){
			
				echo'
				<div class="bg">';
			
					foreach($settings as $group => $sets){
						
						if($group == 'hidden' || empty($sets)) continue;
					
						echo '
						<div class="sai_sub_head">'.$group.'</div><hr>';
					
						foreach($sets as $sk => $sv){
							
							if($sk == 'admin_pass' || $sk == 'signon_username' || $sk == 'admin_username'){
								$exp_class = 'sai_exp2';
							}else{
								$exp_class = 'sai_exp';					
							}
							
							echo '
							<div class="row">
								<div class="col-sm-5">
									<label for='.$sk.' class="sai_head">'.$sv['head'].'</label>
									'.(empty($sv['exp']) ? '' : '<br /><span class="'.$exp_class.'">'.$sv['exp'].'</span>').'
								</div>';
								
								//Adding class to input
								if(preg_match('/type="text"/is', $sv['tag'])){
									$sv['tag'] = preg_replace('/>/is', 'class="form-control">',$sv['tag']);
								}
								
								if($sk == 'admin_pass'){
									$sv['tag'] = preg_replace('/type="text"/is', 'type="password"',$sv['tag']);
									echo '<div class="col-sm-7"><div class="row"><div class="col-sm-11">'.$sv['tag'].'</div><div class="col-sm-1" style="margin-left:-20px;"><input id="toggle_pass_admin" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide_admin\', \'admin_pass\');"/><label for="toggle_pass_admin" style="margin-top:6px;"><span id="show_hide_admin">'.$l['show'].'</span></label></div></div></div>';
								}else{
									echo '<div class="col-sm-7">'.$sv['tag'].'</div>';
								}
					echo '</div><br />';
						}
					}
		
					//The Hidden groups 
					if(!empty($settings['hidden'])){
					
						foreach($settings['hidden'] as $sk => $sv){
							echo $sv['tag'];
						}
					
					}
		
				echo'
				</div><br /><!--end of bg clss-->';
			}//End of if($settings)

		
// Do we have to display the theme 
if((!empty($globals['eu_enable_themes'])) && !empty($software['has_theme'])){
		
	if(function_exists('__'.$software['softname'].'_theme_show_options')){
		echo call_user_func('__'.$software['softname'].'_theme_show_options');
	}
	
}
			
			echo '
			<div class="bg info_block">
			
				<div class="sai_sub_head">'.$l['info'].'</div><hr style="border-color: #D1D2D3;">
			
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['ins_softname'].'</span>
					</div>
					<div class="col-sm-6 col-xs-6">
						<span class="sai_info">'.$software['name'].'</span>
					</div>
				</div><br />
				
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['ins_num'].'</span>
					</div>
					<div class="col-sm-6 col-xs-6">
						<span class="sai_info">'.$user['ins'][$insid]['insid'].'</span>
					</div>
				</div><br />
				
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['ins_ver'].'</span>
					</div>
					<div class="col-sm-6 col-xs-6">
						<span class="sai_info">'.$user['ins'][$insid]['ver'].'</span>
					</div>
				</div><br />
				
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['ins_time'].'</span>
					</div>
					<div class="col-sm-6 col-xs-6">
						<span class="sai_info">'.datify($user['ins'][$insid]['itime']).'</span>
					</div>
				</div><br />
		
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['ins_path'].'</span>
					</div>
					<div class="col-sm-6 col-xs-6">
						<span class="sai_info">'.$user['ins'][$insid]['softpath'].'</span>
					</div>
				</div><br />
				
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['ins_url'].'</span>
					</div>
					<div class="col-sm-6 col-xs-6">
						<span class="sai_info"><a href="'.$user['ins'][$insid]['softurl'].'" target="_blank">'.$user['ins'][$insid]['softurl'].'</a></span>
					</div>
				</div><br />';
		
				if(!empty($user['ins'][$insid]['admin_folder']) || !empty($scripts[$soft]['admin_url'])){
					$adminurl = $user['ins'][$insid]['softurl'].'/'.(!empty($user['ins'][$insid]['admin_folder']) ? $user['ins'][$insid]['admin_folder'] : $scripts[$soft]['admin_url']);
					echo'
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_admin_url'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info"><a href="'.$adminurl.'" target="_blank">'.$adminurl.'</a></span>
						</div>
					</div><br />';
				}
		
				echo'
				
				'.(empty($user['ins'][$insid]['wwwdir']) ? '' :'
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_wwwdir'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$user['ins'][$insid]['wwwdir'].'</span>
						</div>			
					</div><br />
				').'
				
				'.(empty($user['ins'][$insid]['wwwurl']) ? '' : '
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_wwwurl'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$user['ins'][$insid]['wwwurl'].'</span>
						</div>		
					</div><br />
				').'
				
				'.(empty($user['ins'][$insid]['softdatadir']) ? '' : '
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_datadir'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$user['ins'][$insid]['softdatadir'].'</span>
						</div>
					</div><br />
				').'	
				
				'.(empty($user['ins'][$insid]['softdb']) ? '' : '
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_db'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$user['ins'][$insid]['softdb'].'</span>
						</div>
					</div><br />
				').'	
				
				'.(empty($user['ins'][$insid]['softdbuser']) ? '' : '
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_dbuser'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$user['ins'][$insid]['softdbuser'].'</span>
						</div>
					</div><br />
				').'	
				
				'.(empty($user['ins'][$insid]['softdbhost']) ? '' : '
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_dbhost'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$user['ins'][$insid]['softdbhost'].'</span>
						</div>
					</div><br />
				').'	
				
				'.(empty($user['ins'][$insid]['cron_command']) ? '' : '
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_cron_command'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.base64_decode($user['ins'][$insid]['cron_command']).'</span>
						</div>
					</div><br />
				
				').'	
			</div><!--end of bg class-->
			
			<br /><br />
			<p align="center">
				<input type="hidden" name="editins" id="editins" value="'.$l['editins'].'" />
				<input type="submit" name="softsubmitbut" class="flat-butt" id="softsubmitbut" value="'.$l['editins'].'"  />
			</p><br /><br />
			<center><b>'.$return.'</b></center><br /><br />					
		</div><!--end of bg class-->
		'.csrf_display().'
	</form><br /><br />
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		$(document).ready(function(){
		
			$("#check_all_edit").on("click", function(event){
				if(this.checked == true){
					$(".soft_filelist").prop("checked", true);
				}else{
					$(".soft_filelist").prop("checked", false);
				}
			});
			
			$("#check_all_tables").on("click", function(event){
				if(this.checked == true){
					$(".soft_tablelist").prop("checked", true);
				}else{
					$(".soft_tablelist").prop("checked", false);
				}
			});
		
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");
				//alert(old_class);
				$(this).attr("class", "sai_tr_bgcolor");
				
				$(this).mouseout(function(){
					$(this).attr("class", old_class);
				});
			});
			
		});
	// ]]></script>';

}

// Is there a UI Controller ?
if(function_exists('__'.$software['softname'].'_theme_html')){
	call_user_func('__'.$software['softname'].'_theme_html');
}

softfooter();

}

?>