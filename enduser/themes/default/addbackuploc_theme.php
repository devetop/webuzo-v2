<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addbackuploc_theme.php
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

function addbackuploc_theme(){

global $globals, $l, $theme, $error, $dropbox;
global $saved;

softheader($l['<title>']);

echo '
<div class="bg"><br />
	<form accept-charset="'.$globals['charset'].'" name="addbackup" method="post" action="" class="form-horizontal">

		<div class="row sai_main_head" style="width:100%;" align="center">
			<div class="col-sm-6 col-xs-6" style="padding:0 10px 0 0; text-align:right;">
				<i class="fa sai-backup fa-2x" style="color:#00A0D2;"></i>
			</div>
			<div class="col-sm-6 col-xs-6" style="padding-top:5px; padding-left:0; text-align:left;">'.$l['add_backup_loc'].'</div>
		</div><hr>';
		
		error_handle($error, '100%');
		
		if(!empty($saved)){
			echo '<div class="alert alert-success" style="padding:10px;font-size:15px;"><center><img src="'.$theme['images'].'message_success.gif">&nbsp;&nbsp;'.$l['backup_loc_saved'].'</div></center>';
		}
		
		echo'
		<div class="row">
			<div class="col-sm-5">
				<label for="location_name" class="sai_head">'.$l['location_name'].'</label><br/>
				<span class="sai_exp2">'.$l['location_name_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" name="location_name" id="location_name" class="form-control" value="'.REQval('location_name', '').'" />
			</div>
		</div>
		
		<div class="row"><br />
			<div class="col-sm-5">
				<label for="protocol" class="sai_head">'.$l['protocol'].'</label><br />
				<span class="sai_exp">'.$l['protocol_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<select name="protocol" class="form-control" id="protocol">'
					.(empty($globals['disable_backup_ftp']) ? '<option value="ftp" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'ftp' ? 'selected="selected"' : '').'>'.$l['ftp'].'</option>' : '').
					(empty($globals['disable_backup_softftpes']) ? '<option value="softftpes" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'softftpes' ? 'selected="selected"' : '').'>'.$l['ftps'].'</option>' : '').
					(empty($globals['disable_backup_softsftp']) ? '<option value="softsftp" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'softsftp' ? 'selected="selected"' : '').'>'.$l['sftp'].'</option>' : '').
					(empty($globals['disable_backup_dropbox']) ? '<option value="dropbox" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'dropbox' ? 'selected="selected"' : '').'>'.$l['dropbox'].'</option>' : '').	
					(empty($globals['disable_backup_gdrive']) ? '<option value="gdrive" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'gdrive' ? 'selected="selected"' : '').'>'.$l['gdrive'].'</option>' : '').	
					(empty($globals['disable_backup_webdav']) ? '<option value="webdav" '.(isset($_REQUEST['protocol']) && $_REQUEST['protocol'] == 'webdav' ? 'selected="selected"' : '').'>'.$l['webdav'].'</option>' : '').'	
				</select>
			</div>
		</div>
		
		<div class="row" id="host"><br />
			<div class="col-sm-5">
				<label for="server_host" class="sai_head">'.$l['server_host'].'</label><br/>
				<span class="sai_exp2" id="server_host_exp">'.$l['server_host_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" name="server_host" id="server_host" class="form-control" value="'.POSTval('server_host', '').'" />
			</div>
		</div>
		
		<div class="row" id="gdrive_auth_div"><br />
			<div class="col-sm-5">	</div>
			<div class="col-sm-7 alert alert-warning">'.$l['gdrive_auth_message'].'</div>
		</div>
		
		<div class="row" id="dropbox_authorize"><br/>
			<div class="col-sm-5">
				<label for="dropbox_auth" class="sai_head" id="dropbox_auth_head">'.$l['dropbox_authorization'].'</label><br />
				<span class="sai_exp2">'.$l['dropbox_authorization_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<br /><a href="https://www.dropbox.com/oauth2/authorize?response_type=code&client_id='.$dropbox->app_key.'" target="_blank"><input class="flat-butt someclass" type="button" name="dropbox_auth" id="dropbox_auth" value="'.$l['dropbox_authorize'].'" title="'.$l['dropbox_auth_tooltip'].'" style="font-size:15px; width:150px;" /></a>'.maybe_show_docs('https://softaculous.com/docs/Add_Backup_Location_Dropbox', '&nbsp;&nbsp;'.$l['view_guide']).'
			</div>
		</div>
		
		<div class="row" id="dropbox_code"><br/>
			<div class="col-sm-5">
				<label for="access_code" class="sai_head" id="dropbox_code_head">'.$l['dropbox_code'].'</label><br />
				<span class="sai_exp2">'.$l['dropbox_code_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" name="access_code" id="access_code" class="form-control" value="'.POSTval('access_code', '').'" />
			</div>
		</div>
		
		<div id="ftp_details">
			
			<div class="row"><br />
				<div class="col-sm-5">
					<label for="port" class="sai_head">'.$l['port'].'</label><br/>
					<span class="sai_exp" id="port_exp">'.$l['port_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="text" name="port" id="port" class="form-control" value="'.POSTval('port', '').'" />
				</div>
			</div>
			
			<div class="row"><br />
				<div class="col-sm-5">
					<label for="ftp_user" class="sai_head" id="ftp_user_head">'.$l['ftp_user'].'</label><br />
					<span class="sai_exp2" id="ftp_user_exp">'.$l['ftp_user_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="text" name="ftp_user" id="ftp_user" class="form-control" value="'.POSTval('ftp_user', '').'" />
				</div>
			</div>
			
			<div class="row" id="ftp_pass"><br />
				<div class="col-sm-5">
					<label for="ftp_passwd" class="sai_head" id="ftp_pass_head">'.$l['ftp_pass'].'</label><br />
					<span class="sai_exp2" id="ftp_pass_exp">'.$l['ftp_pass_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<div class="row">
						<div class="col-sm-11">
						<input type="password" name="ftp_pass" id="ftp_passwd" class="form-control" value="'.POSTval('ftp_pass', '').'" autocomplete="off" />
						</div>
						<div class="col-sm-1" style="margin-left:-20px;">
						<input id="toggle_passwd" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide\', \'ftp_passwd\');" /><label for="toggle_passwd" style="margin-top:6px;"><span id="show_hide">'.$l['show'].'</span></label>
						</div>
					</div>
				</div>
			</div>

			<div class="row" id="trauthpass"><br/>
				<div class="col-sm-5">
					<label for="auth_password" class="sai_head">'.$l['auth_password'].'</label><br/>
					<span class="sai_exp">'.$l['auth_password_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="radio" name="auth_password" id="auth_password" value="1" onchange="check_auth_password();" '.POSTradio('auth_password', 1, 1).' />&nbsp;'.$l['auth_method_pass'].' &nbsp;&nbsp;
					<input type="radio" name="auth_password" id="auth_password" value="" onchange="check_auth_password();" '.POSTradio('auth_password', '').' />&nbsp;'.$l['auth_method_key'].'<br /><br />
				</div>
			</div>
			
			<div class="row" id="pri"><br/>
				<div class="col-sm-5">
					<label for="private_key" class="sai_head">'.$l['private_key'].'</label><br/>
					<span class="sai_exp2">'.$l['private_key_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<textarea name="private_key" id="private_key" rows="15" cols="70" class="form-control">'.aPOSTval('private_key').'</textarea>
				</div>
			</div>
			
			<div class="row" id="passphrase"><br/>
				<div class="col-sm-5">
					<label for="passphrase" class="sai_head">'.$l['passphrase'].'</label><br/>
					<span class="sai_exp2">'.$l['passphrase_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="text" name="passphrase" id="passphrase" class="form-control" value="'.POSTval('passphrase', '').'" />
				</div>
			</div>			
		</div>		
		
		<div class="row" id="backup_location"><br />
			<div class="col-sm-5">
				<label for="backup_loc" class="sai_head" id="backup_loc_title">'.$l['backup_loc'].'</label><br />
				<span class="sai_exp2" id="backup_path_exp"></span>
			</div>
			<div class="col-sm-7">
				<input type="text" name="backup_loc" id="backup_loc" class="form-control" value="'.REQval('backup_loc', '').'" />
			</div>
		</div>
		
		<br /><br />
		<p align="center">
			'.csrf_display().'
			<input class="flat-butt" type="submit" name="addbackuploc" value="'.$l['add_backup_loc'].'" />
			<br /><br />
			<img id="waiting" src="'.$theme['images'].'progress.gif" style="display:none">
			<br /><br />
			<b><a class="sai_head" href="'.$globals['ind'].'act=settings">'.$l['return_settings'].'</a></b>
		</p>
	
	</form>
</div><br /><!--end of bg class-->	

<script src="'.$theme['url'].'/js/spectrum.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		check_auth_password();
		checkprotocol();
		$("#protocol").change(function(){
			checkprotocol();
		});
	});

	function checkprotocol(){
		
		$("#ftp_user_head").html($("#protocol option:selected").text().toUpperCase()+" "+"'.$l['ftp_user'].'");
		$("#ftp_pass_head").html($("#protocol option:selected").text().toUpperCase()+" "+"'.$l['ftp_pass'].'");

		if($("#protocol").val() == "ftp"){
			if($("#port").val() == "" || $("#port").val() == "22" || $("#port").val() == "443"){
				$("#port").val("21");
			}
			
			show_ftp();
			hide_dropbox();
			hide_gdrive();
			$("#trauthpass").hide();
			hide_sshkey();
			$("#server_host_exp").html("'.$l['server_host_exp'].'");
			$("#port_exp").html("'.$l['port_exp'].'");
			$("#ftp_user_exp").html("'.$l['ftp_user_exp'].'");
			$("#ftp_pass_exp").html("'.$l['ftp_pass_exp'].'");
			$("#backup_path_exp").html("'.$l['rel_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['backup_loc'].'");
		}
		
		if($("#protocol").val() == "softftpes"){
			if($("#port").val() == "" || $("#port").val() == "22" || $("#port").val() == "443"){
				$("#port").val("21");
			}
			
			show_ftp();
			hide_dropbox();
			hide_gdrive();
			$("#trauthpass").hide();
			hide_sshkey();
			$("#server_host_exp").html("'.$l['server_host_exp'].'");
			$("#port_exp").html("'.$l['port_exp'].'");
			$("#ftp_user_exp").html("'.$l['ftp_user_exp'].'");
			$("#ftp_pass_exp").html("'.$l['ftp_pass_exp'].'");
			$("#backup_path_exp").html("'.$l['rel_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['backup_loc'].'");
		}
		
		if($("#protocol").val() == "softsftp"){
			if($("#port").val() == "" || $("#port").val() == "21" || $("#port").val() == "443"){
				$("#port").val("22");
			}
			
			show_ftp();
			hide_dropbox();
			hide_gdrive();
			$("#trauthpass").show();
			check_auth_password();
			$("#server_host_exp").html("'.$l['server_host_exp'].'");
			$("#port_exp").html("'.$l['port_exp'].'");
			$("#ftp_user_exp").html("'.$l['ftp_user_exp'].'");
			$("#ftp_pass_exp").html("'.$l['ftp_pass_exp'].'");
			$("#backup_path_exp").html("'.$l['abs_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['backup_loc'].'");
		}
		
		if($("#protocol").val() == "dropbox"){
			hide_ftp();
			hide_gdrive();
			show_dropbox();
			
			$("#trauthpass").hide();
			hide_sshkey();
			$("#backup_path_exp").html("'.$l['dropbox_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['dropbox_backup_loc'].'");
		}
		
		if($("#protocol").val() == "gdrive"){
			hide_ftp();
			show_gdrive();
			hide_dropbox();
			
			$("#trauthpass").hide();
			hide_sshkey();
			$("#backup_path_exp").html("'.$l['dropbox_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['dropbox_backup_loc'].'");
		}

		if($("#protocol").val() == "webdav"){
			if($("#port").val() == "" || $("#port").val() == "21"){
				$("#port").val("443");
			}
			
			show_ftp();
			hide_dropbox();
			hide_gdrive();
			$("#trauthpass").hide();
			hide_sshkey();
			$("#server_host_exp").html("'.$l['webdav_server_host_exp'].'");
			$("#port_exp").html("'.$l['webdav_port_exp'].'");
			$("#ftp_user_exp").html("'.$l['webdav_ftp_user_exp'].'");
			$("#ftp_pass_exp").html("'.$l['webdav_ftp_pass_exp'].'");
			$("#backup_path_exp").html("'.$l['webdav_backup_loc_exp'].'");
			$("#backup_loc_title").html("'.$l['backup_loc'].'");
		}
	}
	
	function check_auth_password(){
		if($("#auth_password").is(":checked")){
			hide_sshkey();
		}else{
			show_sshkey();
		}
	}
	
	function show_ftp(){
		$("#ftp_details").show();
		$("#host").show();
		$("#server_host").prop("disabled", false);
		$("#port").prop("disabled", false);
		$("#ftp_user").prop("disabled", false);
		$("#ftp_pass").prop("disabled", false);
	}
	
	function hide_ftp(){
		$("#ftp_details").hide();
		$("#host").hide();
		$("#server_host").prop("disabled", true);
		$("#port").prop("disabled", true);
		$("#ftp_user").prop("disabled", true);
		$("#ftp_pass").prop("disabled", true);
	}
	
	function show_dropbox(){
		$("#dropbox_authorize").show();
		$("#dropbox_code").show();
		$("#access_code").prop("disabled", false);
	}
	
	function hide_dropbox(){
		$("#dropbox_authorize").hide();
		$("#dropbox_code").hide();
		$("#access_code").prop("disabled", true);
	}
	
	function show_gdrive(){
		$("#gdrive_auth_div").show();
	}
	
	function hide_gdrive(){
		$("#gdrive_auth_div").hide();
	}
	
	function hide_sshkey(){
		$("#private_key").prop("disabled", true);
		$("#pri").hide();
		$("#passphrase").hide();
		$("#ftp_pass").show();
	}

	function show_sshkey(){
		$("#private_key").prop("disabled", false);
		$("#pri").show();
		$("#passphrase").show();
		$("#ftp_pass").hide();
	}
	
	function theme_init(){
		$(".someclass").tipTip();
	}
	
</script>';
	
	softfooter();
}

?>