<?php

//////////////////////////////////////////////////////////////
//===========================================================
// wordpress_theme.php
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


function wordpress_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $edit, $settings;
	global $insid, $edited, $software, $soft, $scripts, $version_updated, $account_details_editable, $no_autoupgrade, $add_to_fileindex, $__settings, $default_fileindex, $pfx_error, $owned_themes, $full_tables, $default_tables, $no_autoupgrade_acl, $notes, $act, $wp_ins;
	
	softheader($l['<title>']);
	
	echo '
	<style>
		.badge{
			padding:4px 7px;
			font-size:11px;
			border-radius: 4px;
			color:#FFFFFF;
		}
		.badge-success{
			background-color:#28A745;
		}
		.badge-primary{
			background-color:#007BFF;
		}
		.badge-danger{
			background-color:#DC3545;
		}
		.badge-warning{
			background-color:#FFC107;
		}
		.badge-info{
			background-color:#17A2B8;
		}
		select, input{
			font-size:12px !important;
		}
		label{
			font-size:13px;
		}
		
		.page-title{
			background-color: #0d47a1;
			color: #ffffff;
			padding: 10px;
			box-shadow: 0 1px 5px 0px #0000002e, 0 0px 0px 0px #0000002e;
		}
		
		.wp-info{
			padding:10px 10px;
			/* box-shadow:0 1px 5px #0000002e;	 */
			margin:0px 1px;
		}
		
		.wp-info .title{
			color:#121212;
			font-size: 14px;
			font-weight:500;
			margin-left:5px;
		}

		.manage-btns{
			margin:20px 0px;
		}
			
		.wp-info-section{
			border: 1px solid #eee;
			-webkit-box-shadow: 0 10px 20px 0 #F2F2F2;
			box-shadow: 0 10px 20px 0 #F2F2F2;
		}
		
		.form-section{
			margin: 0px 0px 20px 0px;
			border-radius: 1px;
			padding:15px 10px 15px;
		}
		
		.form-section .title{
			color:#1d1d1b;
			font-size:16px;
			font-weight:600;
			margin-bottom:15px;
		}
		
		.form-section .title hr{
			display:none;
			margin-top: 5px;
			border-bottom: 2px solid #6c757d;
			width: 100px;
			margin-left: 0px;
			text-align: left;
			border-radius: 4px;
		}
		.form-section a{
			text-decoration:none;
		}
		
		.section .form-label{
			display:block;
			color:#212529;
			font-size:14px;
			font-weight:400;
			margin:10px 0px;
		}
		
		.section .radio-label{
			color:#212529;
			font-size:12px;
			font-weight:400;
			margin-right:10px;
		}
		
		input[type=text], textarea, select, input[type=password]{
			border:1px solid #dee2e6;
			border-radius:0px;		
		}
		
		/*Button css*/
		.form-btn{		
			color:#ffffff;
			background-color:#119768;
			border-color: #119768;
			border:none;
			border-radius:3px;
			margin:0px 5px 10px;
			padding:8px 18px;
			transition:0.6s;
		}
		
		.form-btn:hover{
			background-color:#15b67d;
			border-color:#15b67d;
		}
		
		.form-btn-info{
			background-color:#1565c0;		
		} 
		
		.form-btn-info:hover{
			background-color:#4383cc;
		}
		
		.form-btn-success{
			background-color#19D895;
		}
		
		.form-btn-success:hover{
			background-color#15b67d;
		}
		
		.form-btn-danger{
			background-color:#ff3e32;
		}
		
		.form-btn-danger:hover{
			background-color:#ff5252;
		}
		
		.form-btn-action{
			color: #0d47a1;
			border:1px solid #0d47a1;
			background-color:transparent;
		}
		
		.form-btn-action:hover,
		.form-btn-action.active{
			color:#ffffff;
			background-color:#0d47a1;
		}
		
		.form-save{
			margin:10px 0px;
		}
		
		input[type="button"]{
			outline:none;
		}
		
		.section .form-select{
			width:100%;
			margin:0px 0px 10px 0px;
		}
		
		.section .form-control{
			display:block;
			width:auto;
			margin: 0px 0px 10px 0px;
		}
		
		.success-badge{
			color:#ffffff;
			background-color: #119768;
			padding: 5px 10px;
			font-size: 12px;
			border-radius: 3px;
		}
		
		.warning-badge{
			color:#ffffff;
			background-color: #FF5D00;
			padding: 5px 10px;
			font-size: 12px;
			border-radius: 3px;
		}
		
		.info-badge{
			color:#ffffff;
			background-color: #207297;
			padding: 5px 10px;
			font-size: 12px;
			border-radius: 3px;
		}
		
		.save-all{
			margin-top:30px;
		}
		
		.form-img{
			display:block;
			width:100%;
			max-width:400px;
			height:auto;
			margin:10px 0px 20px;
			border:1px solid #9d9898;
			border-radius:2px;
		}
		
		.icon-shape{
			background-color: #030aac !important;
			text-decoration: none;
			padding: 6px 7px;
			border-radius: 50%;
			text-align: center;
		}
		
		.icon-shape i{
			color:#ffffff !important;
		}
		
		.wp-action{
			padding: 0px 20px;
			margin-top:25px;
		}
		
		.wp-action a{
			text-decoration:none;
		}
		
		.alert-success-dark{
			color: #ffffff;
			background-color: #119768;
			border-color: #d6e9c6;
		}
		
		.alert-danger-dark{
			color: #ffffff;
			background-color: #FF3E32;
			border-color: #FF9580;
		}
		
	</style>
	';
		
	echo '
		<div class="bg"><br />
			<div class="row sai_main_head" style="width:100%;" align="center">
				<div class="col-sm-5 col-xs-4" style="padding:0 10px 0 0; text-align:right;">
					<img src="'.$theme['images'].'/wp-gray.png" >
				</div>
				<div class="col-sm-7 col-xs-8" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['wordpress_management'].'</div>
			</div><br />';
			
			error_handle($error, '100%');

			echo '
			<div class="wp-action">
				<div class="">
					<a href="'.$globals['ind'].'act=software&soft='.$soft.'&tab=install">
						<input type="button" name="install_button" class="form-btn form-btn-action active tiptip" id="install_button" value="'.$l['install'].'" title="'.$l['install_exp'].'" />
					</a> 
					
					<a href="'.$globals['ind'].'act=sync&manual=1">
						<input type="button" name="scan_button" class="form-btn form-btn-action tiptip" id="scan_button" value="'.$l['scan'].'" title="'.$l['scan_exp'].'" /> 
					</a>
				</div>
				<hr/>
			
				<div class="sai_sub_head page-title">'.$l['installations'].'<input type="checkbox" id="check_all" class="pull-right"></div><br /><br />
				';
				
			if(!empty($wp_ins)){
				
				$ins_tr = array();
				foreach($wp_ins as $_insid => $_ins){
					//r_print($_ins);
					/* if(!is_wordpress($_ins['sid'])){
						continue;
					} */
									
					if(!empty($globals['force_auto_upgrade'])){
						$_ins['eu_auto_upgrade'] = $globals['force_auto_upgrade'];
					}
				
					$is_cloneable = is_cloneable($_ins['sid']);
					$can_staging = can_staging($_ins['sid']);
					$is_upgradable = is_upgradable($_insid);
					
					$disable_wp_cron = (!empty($_ins['disable_wp_cron']) ? ($_ins['disable_wp_cron'] == 'true' ? 1 : 0) : 0);
					$wp_debug = (!empty($_ins['wp_debug']) ? ($_ins['wp_debug'] == 'true' ? 1 : 0) : 0);
					
					$ins_row = '';
					$ins_row .= '
					<form accept-charset="'.$globals['charset'].'" name="details_'.$_insid.'" method="post" action="" id="details_'.$_insid.'" class="form-horizontal">
						<div class="wp-info-section">
						<div class="wp-info" id="ins_'.$_insid.'" >	
							<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12" style="margin-top:5px;">
									<a href="'.$_ins['softurl'].'" class="title" target="_blank" style="text-decoration:none;">'.$_ins['softurl'].'</a>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<a href="'.$globals['ind'].'act=sign_on&insid='.$_insid.'&autoid='.srandstr(32).'" target="_blank">
										<input type="button" name="remove_button" class="form-btn form-btn-action active tiptip" id="remove_button" title="'.$l['login_exp'].'" value="'.$l['login_admin'].'" style="cursor:pointer; margin:0px;" />
									</a> 
									<span class="title">'.(!empty($_ins['site_name']) ? $_ins['site_name'] : '').'</span>
								</div>
								<div class="col-md-3 col-sm-6 col-xs-12 pull-right">
									<input type="checkbox" name="insids[]" id="select_'.$_insid.'" value="'.$_insid.'" class="shift_select_ins soft_inslist pull-right" style="margin-top:10px;">
									<i class="fa sai-rightarrow pull-right" id="toggle_'.$_insid.'" style="vertical-align:middle; font-size:2em;margin-right:15px; transform:rotate(90deg); cursor:pointer; padding:5px;" onclick="toggle_ins_form($(this))"></i>
									'.(!empty($is_upgradable) ? '<span class="warning-badge heading-badge" id="toggle_'.$_insid.'" onclick="toggle_ins_form($(this))" style="cursor:pointer; float:right; margin-right:10px; width:60%; text-align:center; margin-top:3px;">'.$l['updates_available'].'</span>' : '<span class="success-badge heading-badge" id="toggle_'.$_insid.'" onclick="toggle_ins_form($(this))" style="cursor:pointer; float:right; margin-right:10px; width:60%; text-align:center; margin-top:3px;">'.$l['up_to_date'].'</span>').'
								</div>
							</div>							
						</div>
						<hr style="margin:0px;" />
						<div class="row form-section" id="ins_form_'.$_insid.'">
						
							<!-- Error Div -->
							<div id="error_handler_'.$_insid.'" class="alert alert-danger response_container" style="display:none;"><a href="#close" class="close" data-dismiss="alert">&times;</a>
								<p style="margin-top:4px; font-size:14px;">&nbsp;&nbsp;'.$l['following_errors_occured'].' :</p>
								<ul type="square" class="error_div" style="padding-left:20px;">
								</ul>
							</div>
							<!--Site Info-->
							<div class="col-sm-6">
								<div class="section">
									<div class="title">
										<span>'.$l['info'].'</span>
										<hr/>
									</div>
									<img src="'.$theme['images'].'/no_screenshot.png" class="form-img img-responsive" name="site-screenshot" />
									
									<label class="form-label" for="softurl_'.$_insid.'">'.$l['siteurl'].'</label>
									<input type="text" class="form-control" size="50" value="'.$_ins['softurl'].'" id="softurl_'.$_insid.'" name="softurl" />								
									
									<label class="form-label" for="site_name_'.$_insid.'">'.$l['site_name'].'</label>
									<input type="text" class="form-control" size="50" value="'.$_ins['site_name'].'" id="site_name_'.$_insid.'" name="site_name" />
									<input type="button" class="form-btn form-btn-info form-save" name="save_site_info" style="display:none;" insid="'.$_insid.'" value="'.$l['save_info'].'" />	
									
								</div>
							</div>	
							
							<!--Updates-->
							<div class="col-sm-6">
								<div class="section">
									<div class="title">								
										<span>'.$l['configuration'].'</span>							
									</div>
								
									<label class="form-label">'.$l['version'].'</label>&nbsp; 
									<span style="font-size:14px;">'.$_ins['ver'].'</span> &nbsp;&nbsp;';
									
									if(empty($is_upgradable)){
										$ins_row .= '<span class="success-badge">'.$l['up_to_date'].'</span>';
									}else{
										$ins_row .= '<a href="'.$globals['ind'].'act=upgrade&insid='.$_insid.'"><span class="info-badge tiptip" title="'.$l['upd_to'].' '.implode(' or ', $is_upgradable).'">'.$l['upgrade_now'].'</span></a>';
									}
									
									$ins_row .= '<br/>';
									
									if($globals['softpanel'] != 'ampps' && !empty($scripts[$soft]['auto_upgrade']) && empty($no_autoupgrade['disable_autoupgrade']) && empty($no_autoupgrade['scripts'][$soft]) && empty($no_autoupgrade_acl)){
										
										$ins_row .= '<label class="form-label" for="auto_upgrade_core_'.$_insid.'">'.$l['auto_upgrade_core'].'&nbsp;</label>						
										<select class="form-select" name="auto_upgrade_core" id="auto_upgrade_core_'.$_insid.'">
											<option value="" '.POSTselect('auto_upgrade_core', 0).(!empty($globals['force_auto_upgrade']) ? 'disabled' : '').'>'.$l['dont_auto_upgrade'].'</option>
											<option value="2" '.POSTselect('auto_upgrade_core', 2, (!empty($_ins['eu_auto_upgrade']) && $_ins['eu_auto_upgrade'] == 2 ? true : false)).(!empty($globals['force_auto_upgrade']) ? 'disabled' : '').'>'.$l['minor_auto_upgrade'].'</option>
											<option value="1" '.POSTselect('auto_upgrade_core', 1, (!empty($_ins['eu_auto_upgrade']) && $_ins['eu_auto_upgrade'] == 1 ? true : false)).(!empty($globals['force_auto_upgrade']) ? 'disabled' : '').'>'.$l['major_auto_upgrade'].'</option>
										</select>';
										
									}
									
									$ins_row .= '<div class="row">
										<div class="col-sm-6">
											<label class="form-label">'.$l['auto_upgrade_plugins'].'&nbsp;</label>
											
											<input type="radio" value="1" id="auto_upgrade_plugins_enabled_'.$_insid.'" name="auto_upgrade_plugins" '.POSTradio('auto_upgrade_plugins', 1, (!empty($globals['force_upgrade_plugins']) ? $globals['force_upgrade_plugins'] : $_ins['auto_upgrade_plugins'])).(!empty($globals['force_upgrade_plugins']) ? 'disabled' : '').' />
											<label class="radio-label" for="auto_upgrade_plugins_enabled_'.$_insid.'">'.$l['enabled'].'</label>
											<input type="radio" value="" id="auto_upgrade_plugins_disabled_'.$_insid.'" name="auto_upgrade_plugins" '.POSTradio('auto_upgrade_plugins', '', (!empty($globals['force_upgrade_plugins']) ? $globals['force_upgrade_plugins'] : (int) $_ins['auto_upgrade_plugins'])).(!empty($globals['force_upgrade_plugins']) ? 'disabled' : '').' />
											<label class="radio-label" for="auto_upgrade_plugins_disabled_'.$_insid.'">'.$l['disabled'].'</label>
										</div>
										<div class="col-sm-6">
											<label class="form-label">'.$l['auto_upgrade_themes'].'&nbsp;</label>
											
											<input type="radio" value="1" id="auto_upgrade_themes_enabled_'.$_insid.'" name="auto_upgrade_themes" '.POSTradio('auto_upgrade_themes', 1, (!empty($globals['force_upgrade_themes']) ? $globals['force_upgrade_themes'] : $_ins['auto_upgrade_themes'])).(!empty($globals['force_upgrade_themes']) ? 'disabled' : '').' />
											<label class="radio-label" for="auto_upgrade_themes_enabled_'.$_insid.'">'.$l['enabled'].'</label>
											<input type="radio" value="" id="auto_upgrade_themes_disabled_'.$_insid.'" name="auto_upgrade_themes" '.POSTradio('auto_upgrade_themes', '', (!empty($globals['force_upgrade_themes']) ? $globals['force_upgrade_themes'] : (int) $_ins['auto_upgrade_themes'])).(!empty($globals['force_upgrade_themes']) ? 'disabled' : '').' />
											<label class="radio-label" for="auto_upgrade_themes_disabled_'.$_insid.'">'.$l['disabled'].'</label>
										</div>
									</div>
									
									
									<label class="form-label" for="blog_public_'.$_insid.'">'.$l['blog_public'].'</label>
									
									<input type="radio" value="1" id="blog_public_enabled_'.$_insid.'" name="blog_public" '.POSTradio('blog_public', 1, (int) $_ins['blog_public']).' />
									<label class="radio-label" for="blog_public_enabled_'.$_insid.'">'.$l['enabled'].'</label>
									<input type="radio" value="" id="blog_public_disabled_'.$_insid.'" name="blog_public" '.POSTradio('blog_public', '', (int) $_ins['blog_public']).' />
									<label class="radio-label" for="blog_public_disabled_'.$_insid.'">'.$l['disabled'].'</label>
										
									<label class="form-label" for="disable_wp_cron_'.$_insid.'">'.$l['wp_cron'].'</label>
									<input type="radio" value="0" id="disable_wp_cron_enabled_'.$_insid.'" name="disable_wp_cron" '.POSTradio('disable_wp_cron', 0, $disable_wp_cron).' />
									<label class="radio-label" for="disable_wp_cron_enabled_'.$_insid.'">'.$l['enabled'].'</label>
									<input type="radio" value="1" id="disable_wp_cron_disabled_'.$_insid.'" name="disable_wp_cron" '.POSTradio('disable_wp_cron', 1, $disable_wp_cron).' />
									<label class="radio-label" for="disable_wp_cron_disabled_'.$_insid.'">'.$l['disabled'].'</label>
										
									<label class="form-label" for="wp_debug_'.$_insid.'">'.$l['wp_debug'].'</label>
									<input type="radio"  value="1" id="wp_debug_enabled_'.$_insid.'" name="wp_debug" '.POSTradio('wp_debug', 1, $wp_debug).' />
									<label class="radio-label" for="wp_debug_enabled_'.$_insid.'">'.$l['enabled'].'</label>
									<input type="radio"  value="" id="wp_debug_disabled_'.$_insid.'" name="wp_debug" '.POSTradio('wp_debug', 0, $wp_debug).' />
									<label class="radio-label" for="wp_debug_disabled_'.$_insid.'">'.$l['disabled'].'</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="section" style="margin-top:20px;">
									<center>
									<div class="row" style="align:center;">';
									
									if(!empty($is_cloneable)){
										$ins_row .=  '
										<a href="'.$globals['ind'].'act=sclone&insid='.$_insid.'">
											<input type="button" name="clone_button" class="form-btn form-btn-info tiptip" id="clone_button" value="'.$l['clone'].'" title="'.$l['clone_exp'].'" />
										</a>';
									}
									
									if(!empty($can_staging)){
										$ins_row .=  '
										<a href="'.$globals['ind'].'act=staging&insid='.$_insid.'">
											<input type="button" name="staging_button" class="form-btn form-btn-info tiptip" id="staging_button" value="'.$l['staging'].'" title="'.$l['staging_exp'].'" />
										</a>';
									
										if(!empty($_ins['is_staging'])){
											$ins_row .=  '
											<a href="'.$globals['ind'].'act=pushtolive&insid='.$_insid.'">
												<input type="button" name="pushtolive_button" class="form-btn form-btn-info tiptip" id="pushtolive_button" value="'.$l['pushtolive'].'" title="'.$l['pushtolive_exp'].'" />
											</a>';
										}
									}
									
									if(empty($globals['disable_backup_restore'])){
										$ins_row .=  '
										<a href="'.$globals['ind'].'act=backup&insid='.$_insid.'">
											<input type="button" name="backup_button" class="form-btn form-btn-success tiptip" id="backup_button" value="'.$l['backup'].'" title="'.$l['backup_exp'].'" />
										</a>
										<a href="'.$globals['ind'].'act=backups&insid='.$_insid.'">
											<input type="button" name="restore_button" class="form-btn form-btn-success tiptip" id="restore_button" value="'.$l['restore'].'" title="'.$l['restore_exp'].'" />
										</a>';
									}
									
									$ins_row .=  '
									<a href="'.$globals['ind'].'act=remove&insid='.$_insid.'&info_only=1">
										<input type="button" name="remove_button" class="form-btn form-btn-danger tiptip" id="remove_button" value="'.$l['remove'].'" title="'.$l['remove_ins_exp'].'" />
									</a>
									<a href="'.$globals['ind'].'act=remove&insid='.$_insid.'">
										<input type="button" name="uninstall_button" class="form-btn form-btn-danger tiptip" id="uninstall_button" value="'.$l['uninstall'].'" title="'.$l['uninstall_ins_exp'].'" />
									</a>
									</center>
								</div>
							</div>
						</div>
						
						<div class="row">				
						</div>
						</div>
						'.csrf_display().'
					</form><br />';
				
					if(array_key_exists('is_staging', $_ins)){
						$ins_tr[$_ins['is_staging']] .= $ins_row;
					}else{
						if(!empty($ins_tr[$_insid])){
							$ins_tr[$_insid] = $ins_row.$ins_tr[$_insid];
						}else{
							$ins_tr[$_insid] .= $ins_row;
						}	
					}
				}
				
				if(!empty($ins_tr)){
					echo implode('', $ins_tr);
				}
				
			}else{
				echo '<div class="row" align="center">
				<div class="col-sm-12">
					<p style="font-size:14px;">No WordPress Installations found. <a href="'.$globals['ind'].'act=software&soft='.$soft.'&tab=install" style="text-decoration:underline;">Install a new copy</a> or <a href="'.$globals['ind'].'act=sync&manual=1" style="text-decoration:underline;">Scan for existing installations</a>.</p><br />
				</div>
			</div>';
			}
			
		echo '</div>';
	echo '</div>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
	function toggle_ins_form(e){
		var toggle_insid = e.attr("id").replace("toggle_", "");
		$("#ins_form_"+toggle_insid+"").toggle();
	}
	
	function save_site_info(e){
		
		var csrf_token = $("#csrf_token").val();
		
		var current_insid = e.attr("insid");
		var softurl = $("#details_"+current_insid).find(\'input[name="softurl"]\').val();
		var site_name = $("#details_"+current_insid).find(\'input[name="site_name"]\').val();
		var error_div = $("#details_"+current_insid).find(\'.error_div\');
		error_div.parent().hide();
		$("#details_"+current_insid).find(\'input[name="save_site_info"]\').hide();
		
		$.ajax({
			type: "POST",
			data: {
				"csrf_token": csrf_token,
				"insid": current_insid,
				"softurl": encodeURI(softurl),
				"site_name": site_name,
				"save_info": "1",
			},
			url: "'.$globals['index'].'act=wordpress&api=json",
			success: function(data){
				var resp = JSON.parse(data.trim());
				
				if(!resp.done){
					error_div.empty();
					if(resp.error){
						for (x in resp.error) {
							error_div.append("<li>"+resp.error[x]+"</li>");
						}
					}
					error_div.parent().show();
					document.getElementById("error_handler_"+current_insid).scrollIntoView({ behavior: "smooth" });
					//console.log(resp.error);
				}else{
				
					$.bootstrapGrowl("'.$l['save_info_success'].'", {
					  ele: "body", // which element to append to
					  type: "success-dark", // (null, info, danger, success)
					  offset: {from: "bottom", amount: 20}, // top or bottom
					  align: "right", // (left, right, or center)
					  width: "auto", // (integer, or auto)
					  delay: 4000, // Time while the message will be displayed. It\'s not equivalent to the *demo* timeOut!
					  allow_dismiss: true, // If true then will display a cross to close the popup.
					  stackup_spacing: 10 // spacing between consecutively stacked growls.
					});
				}
				//alert(resp.done);
			}
		});	
	}
	
	function save_single_info_radio(e){
		
		var csrf_token = $("#csrf_token").val();
		var to_update = e.attr("name");
		var to_update_val = e.val();
		current_insid = e.attr("id").replace("enabled_", "").replace("disabled_", "").replace(to_update+"_", "");
		var error_div = $("#details_"+current_insid).find(\'.error_div\');
		error_div.parent().hide();
		
		var post_data = { };
		if(csrf_token){
			post_data["csrf_token"] = csrf_token;
		}
		post_data["csrf_token"] = csrf_token;
		post_data["insid"] = current_insid;
		post_data["save"] = "1";
		post_data[to_update] = to_update_val;
		
		$.ajax({
			type: "POST",
			data: post_data,
			url: "'.$globals['index'].'act=wordpress&api=json",
			success: function(data){
				var resp = JSON.parse(data.trim());
				
				if(!resp.done){
					error_div.empty();
					if(resp.error){
						for (x in resp.error) {
							error_div.append("<li>"+resp.error[x]+"</li>");
						}
					}else{
							error_div.append("<li>'.$l['some_error_occurred'].'</li>");
					}
					error_div.parent().show();
					document.getElementById("error_handler_"+current_insid).scrollIntoView({ behavior: "smooth" });
					//console.log(resp.error);
				}else{
				
					$.bootstrapGrowl("'.$l['save_info_success'].'", {
					  ele: "body", // which element to append to
					  type: "success-dark", // (null, info, danger, success)
					  offset: {from: "bottom", amount: 20}, // top or bottom
					  align: "right", // (left, right, or center)
					  width: "auto", // (integer, or auto)
					  delay: 4000, // Time while the message will be displayed. It\'s not equivalent to the *demo* timeOut!
					  allow_dismiss: true, // If true then will display a cross to close the popup.
					  stackup_spacing: 10 // spacing between consecutively stacked growls.
					});
				}
				//alert(resp.done);
			}
		});	
	}
	
	var current_insid = "";
	var show_insid = "'.(!empty($insid) ? $insid : '').'";
	
	$(document).ready(function(){
		
		$(".form-section").hide();
		
		if(show_insid){
			$("#ins_form_"+show_insid+"").show();
			
			try{
				document.getElementById("ins_"+show_insid).scrollIntoView({ behavior: "smooth" });
			}catch (error) {
				
			}
		}
		
		$(".tiptip").tipTip({delay:0});
		
		shift_check_all("shift_select_ins");
		
		$("#check_all").on("click", function(event){
			if(this.checked == true){
				$(".soft_inslist").prop("checked", true);
			}else{
				$(".soft_inslist").prop("checked", false);
			}
		});
	
		$(".manage_plugins").click(function(){
			current_insid = this.id.replace("manage_plugins_", "");
			alert(current_insid);
		});
		
		$(\'input[name="softurl"]\').on("change textInput input", function(){
			var selected_ins = this.id.replace("softurl_", "");
			$("#details_"+selected_ins).find(\'input[name="save_site_info"]\').show();
		});
		
		$(\'input[name="site_name"]\').on("change textInput input", function(){
			var selected_ins = this.id.replace("site_name_", "");
			$("#details_"+selected_ins).find(\'input[name="save_site_info"]\').show();
		});
		
		$(\'input[name="save_site_info"]\').click(function(){
			save_site_info($(this));
		});
		
		$(\'input[name="blog_public"]\').click(function(){
			save_single_info_radio($(this));
		});
		
		$(\'input[name="auto_upgrade_plugins"]\').click(function(){
			save_single_info_radio($(this));
		});
		
		$(\'input[name="auto_upgrade_themes"]\').click(function(){
			save_single_info_radio($(this));
		});
		
		$(\'select[name="auto_upgrade_core"]\').change(function(){
			save_single_info_radio($(this));
		});
		
		$(\'input[name="disable_wp_cron"]\').click(function(){
			save_single_info_radio($(this));
		});
		
		$(\'input[name="wp_debug"]\').click(function(){
			save_single_info_radio($(this));
		});
		
		if(screen.width < 396){
			$(\'input[type="text"]\').attr("size", 20);
		}else if(screen.width < 1366){
			$(\'input[type="text"]\').attr("size", 30);
		}
	});
	// ]]></script>
	';
	softfooter();

}

?>