<?php

//////////////////////////////////////////////////////////////
//===========================================================
// help_theme.php
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

function plans_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $faq_list, $scripts, $softaculous_plans, $num_scripts, $license_updated, $license_refreshed;

	softheader($l['<title>']);
	
	echo '
	<script>
	
	var is_enduser_license = "'.defined('SOFTACULOUS_ENDUSER_LICENSE').'";
	
	function process_enduser_purchase(plan_name){
		var cur_url = window.location;
		window.open("'.$globals['clients_softaculous_enduser_buy'].'&plan="+plan_name+"&server_ip='.$globals['primary_ip'].'&username='.$softpanel->user['name'].(defined('SOFTACULOUS_ENDUSER_LICENSE') && is_enduser_license($globals['license']) ? '&license='.$globals['license'] : '').'&return_cp_url="+encodeURI(cur_url));
	}
	
	function start_buy(plan_name){
		
		// Disable the popup and server license part
		process_enduser_purchase(plan_name);
		return true;
		
		// If already enduser license no need for confirmation
		if(is_enduser_license){
			process_enduser_purchase(plan_name);
			return true;
		}
		
		$( "#confirm_purchase" ).modal({
			resizable: false,
			modal: true,
		});
		
		$("#confirm_enduser_purchase").click(function() {
			$("#confirm_purchase").modal("hide");
			process_enduser_purchase(plan_name);
			
		});
		
		$("#confirm_server_purchase").click(function() {
			$("#confirm_purchase").modal("hide");
			window.open("https://www.softaculous.com/clients?ca=buy&licenses='.$globals['primary_ip'].'&ips='.$globals['primary_ip'].'");
		});
		
		return true;
	}
	
	function toggle_license_form(){
		$("#enter_license_form").toggle(300);
	}
	</script>
	
	<style>
	.spicons-background{
		background: #F0F0F0 none repeat scroll 0 0;
		border-radius: 100%;
		height: 75px;
		width: 75px;
		margin: 30px 0 0 -12px;
	}
	.spicons{
		color: #4b77be;
		font-size: 36px;
		height: 50px;
		width: 50px;
		margin: 20px;
	}
	.feature-wrap h4{
		position: absolute;
		top: 35px;
		left: 95px;
	}
	.feature-wrap{
		padding: 5px;
	}
	.feature-wrap p{
		position: absolute;
		top: 70px;
		left: 95px;
	}
	
	.plans_heading{
		color: #000000 !important;
		font-size: 18px !important;
		text-align:center;
	}
	.most_popular{
		background: #FA9300 !important;
	}

	.free_button{
		font-size: 16px;
		padding: 7px 25px;
		line-height: 25px;
		background: #FA9300 !important;
		color: #FFFFFF !important;
		border: 0px;
		cursor: pointer;
		text-decoration:none !important;
	}
	.free_button:hover{
		background: #D77E00 !important;
	}

	.buy_button{
		font-size: 16px;
		padding: 7px 25px;
		line-height: 25px;
		background: #5CB85C;
		color: #FFFFFF !important;
		border: 0px;
		cursor: pointer;
		text-decoration:none !important;
	}
	.buy_button:hover{
		background: #449d44;
	}
	
	.plan_row_divider {
		border-bottom:1px solid #EEEEEE;
	}
	
	.plan_row_divider:hover {
		background:#EEEEEE;
	}
	
	.plan_item {
		border-bottom: 1px solid rgba(0, 0, 0, 0.05);
		color: #737373;
		margin-bottom: 0;
		padding: 10px;
		text-align: center;
		list-style-type: none;
		font-size: 14px;
	}
	
	.plan_head {
		border-bottom: 1px solid rgba(0, 0, 0, 0.05);
		color: #737373;
		margin-bottom: 0;
		padding: 10px;
		list-style-type: none;
		font-size: 14px;
	}
	.plan_highlight{
		width:25%;
	}
	
	.current_plan{
		text-align:center;
		background: #00A0D2;
		color: #FFFFFF;
		padding: 3px !important;
		border-radius: 2px 2px 0px 0px;
	}
	
	@media screen and (min-width: 768px){
		.plans_table {
			margin-left:15%;
			margin-right:15%;
		}
		
		.slider_left_btn{
			margin-left:-65px !important;
			padding:5px;
		}
		
		.slider_right_btn{
			margin-right:-65px !important;
			padding:5px;
		}
	}
	
	</style>
	
	<div class="modal fade" id="confirm_purchase" role="dialog">
		<div class="modal-dialog modal-md" style="margin-top:80px;">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header" style="background:#F0F0F0;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">'.$l['license_alert_title'].'</h4>
				</div>
				<div class="modal-body" style="overflow-y: auto; font-size: 13px;">
					'.lang_vars($l['license_alert_body'], array($globals['primary_ip'])).'
				</div>
				<div class="modal-footer" style="padding-top:10px; height:50px;">
					<button type="button" class="btn btn-success" data-dismiss="modal" id="confirm_enduser_purchase">'.$l['license_alert_enduser_button'].'</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="confirm_server_purchase">'.$l['license_alert_server_button'].'</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">'.$l['close'].'</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="bg"><br />
	
		<div class="row sai_main_head" style="width:100%;" align="center">
			<div class="col-sm-6 col-xs-6" style="padding:0px 10px 0 0; text-align:right;">
				<img src="'.$theme['images'].'plans.png" width="35" height="35" />
			</div>
			<div class="col-sm-4 col-xs-2" style="padding-top:0px; padding-left:0; text-align:left;">'.$l['plans'].'</div>
			<div class="col-sm-2 col-xs-3"><button type="button" class="flat-butt" onclick="toggle_license_form();">'.$l['enter_license'].'</button></div>
		</div><hr>';
		
	error_handle($error, '100%');
	
	if(!empty($license_updated)){
		echo '<div class="alert alert-success" style="padding:10px;font-size:15px;"><center><img src="'.$theme['images'].'message_success.gif">&nbsp;&nbsp;'.$l['update_license_success'].'</div></center>';
	}
	
	if(!empty($license_refreshed)){
		echo '<div class="alert alert-success" style="padding:10px;font-size:15px;"><center><img src="'.$theme['images'].'message_success.gif">&nbsp;&nbsp;'.$l['refresh_license_success'].'</div></center>';
	}
	
	echo '<div class="row" id="enter_license_form" style="display:none;">
			<div class="col-sm-12" style="margin-top:-10px;">
				<div class="text-center"><h4>'.$l['enter_license_heading'].'</h4></div>
				
				<div class="text-center">'.$l['enter_license_desc'].'</div><br />
				<form accept-charset="'.$globals['charset'].'" action="" method="post" name="submit_license" id="submit_license">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-4">
						<input type="text" name="license_key" class="form-control" id="license_key" size="30" value="'.POSTval('license_key').'" placeholder="SOFTA-xxxxx-xxxxx-xxxxx-xxxxx" />
					</div>
				</div><br />
				
				<div style="text-align: center;">
					<button type="submit" class="flat-butt">'.$l['submit'].'</button>
				</div><br />
				</form>
			</div>
		</div>';
	
	// Not is to be removed
	if(defined('SOFTACULOUS_ENDUSER_LICENSE') && is_enduser_license($globals['license'])){
	
		echo '
		<div class="row" id="license_details">
			<div class="col-sm-12" style="margin-top:-10px;">
				<div class="text-center"><h4>'.$l['license_details_heading'].'</h4></div>
				<div class="row">
					<div class="col-sm-4 col-sm-offset-4" style="padding:2px;padding-top:10px;border-top:1px solid #EFEFEF;">
						<div class="text-center"><b>'.$l['license_heading'].'</b> : '.$globals['license'].'&nbsp;<b>'.($globals['type_txt'] == 'Expired' ? '<span style="cursor:pointer;" onclick="start_buy(\''.$globals['licplan'].'\');">'.$globals['status_txt'].'</span>' : $globals['status_txt']).'</b></div>
					</div>
					<div class="col-sm-4 col-sm-offset-4" style="padding:2px;">
						<div class="text-center"><b>'.$l['expires_heading'].'</b> : '.makedate($globals['licexpires']).' (DD/MM/YYYY)'.'</div>
					</div>
					<div class="col-sm-4 col-sm-offset-4" style="padding:2px;">
						<div class="text-center"><b>'.$l['plan_heading'].'</b> : '.ucfirst($globals['licplan']).'</div>
					</div>
					<div class="col-sm-4 col-sm-offset-4" style="padding:2px;padding-bottom:10px;border-bottom:1px solid #EFEFEF;">
						<div class="text-center"><b><a href="'.$globals['ind'].'act=plans&refresh=1">'.$l['refresh_license'].'</a>&nbsp;&nbsp;<a href="https://www.softaculous.com/clients?ca=invoices" target="_blank">'.$l['view_invoices'].'</a>&nbsp;&nbsp;<a onclick="start_buy(\''.$globals['licplan'].'\');" style="cursor:pointer;text-decoration:underline;color:#333333;">'.$l['renew_btn'].'</a></b></div>
					</div>
				</div><br />
			</div>
		</div><br />';
		
	}
		
	echo '
		<div class="row">
			<div id="carousel-generic" class="carousel slide carousel-fade" data-ride="carousel">
				
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-generic" data-slide-to="1"></li>
					<li data-target="#carousel-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
				
					<div class="item active">
						<img src="'.$theme['images'].'softaculous_banner_apps.jpg" class="img-responsive" alt="Softaculous Auto Installer">
						<div class="carousel-caption content" style="margin-right : 25% !important; left:5% !important; text-shadow:none !important; top: 5%">
							<h2 style="color:#000000;"><font size="15px">'.lang_vars($l['slider1_title'], array($num_scripts)).'</font></h2><br />
							<p style="color:#000000; !important">'.lang_vars($l['slider1_desc'], array($num_scripts)).'<br /><br />
							'.$l['slider1_desc2'].' <br /><br />
							</p>
						</div>
					</div>
					
					<div class="item">
						<img src="'.$theme['images'].'softaculous_banner_demos.jpg" class="img-responsive" alt="Lifecycle">
						<div class="carousel-caption content" style="margin-right : 25% !important;margin-bottom:3% !important; left:5% !important; text-shadow:none !important;">
							<h2 style="color:#FFFFFF;"><font size="15px">'.$l['slider2_title'].'</font></h2><br />
							<p style="color:#FFFFFF; !important">'.$l['slider2_desc'].'<br /><br />
							'.$l['slider2_desc2'].'</p>
						</div>
					</div>
					
					<div class="item">
						<img src="'.$theme['images'].'softaculous_banner_updates.jpg" class="img-responsive" alt="Up to Date">
						<div class="carousel-caption content" style="margin-left : 22% !important;margin-bottom:2% !important; right:5% !important; text-shadow:none !important;">
							<h2 style="color:#FFFFFF;"><font size="15px">'.$l['slider3_title'].'</font></h2>
							<p style="color:#fff;"><br />'.$l['slider3_desc'].'<br /><br />
							'.$l['slider3_desc2'].'<br /><br /></p>
						</div>
					</div>
				
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
					<span class="fa icon-prev fa-2x slider_left_btn" aria-hidden="true" style="font-size:18px !important; background:#000;border-radius:50%;"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
					<span class="fa icon-next fa-2x slider_right_btn" aria-hidden="true" style="font-size:18px!important;background:#000;border-radius:50%;"></span>
					<span class="sr-only">Next</span>
				</a>
				
			</div>
		</div>
		<br /><br />
		
		<div class="row">
			<div class="col-sm-12">
				<div class="text-center">'.lang_vars($l['plans_desc'], array($num_scripts)).'</div>
			</div>
		</div><br />
		
		<div id="softaculous_plans" class="row">
		<h3 class="orange text-center">'.$l['seu_plan_title'].'</h3><hr class="style-two" />';
		
		$yes_img = '<span class="fa sai-success fa-lg" style="color:#00B249;"></span>';
		$no_img = '<span class="fa sai-remove fa-lg" style="color:#D41B27;"></span>';
		
		echo '<div class="plans_table">
		<table class="table table borderless">
		
		<tr style="border-bottom:1px solid #EEEEEE;">
			<td width="60%"></td>
			<td width="15%" '.(empty($globals['licplan']) ? 'class="current_plan">'.$l['current_plan'] : '>').'</td>
			<td width="15%" '.(!empty($globals['licplan']) && $globals['licplan'] == 'professional' ? 'class="current_plan">'.$l['current_plan'] : '>').'</td>
		</tr>
		
		<tr class="plan_row_divider">
			<td width="60%" class="plans_heading" style="text-align:left;">'.$l['feature_title'].'</td>
			<td width="15%" class="plans_heading" style="padding-top:4px;">'.$softaculous_plans['free']['name'].'</td>
			<td width="15%" class="plans_heading" style="padding-top:4px;">'.$softaculous_plans['professional']['name'].'</td>
		</tr>
		
		<tr class="plan_row_divider">
			<td width="60%" class="plan_head">'.$l['plan_apps'].'</td>
			<td width="15%" class="plan_item">'.$softaculous_plans['free']['scripts_count'].'</td>
			<td width="15%" class="plan_item"><b>'.$softaculous_plans['professional']['scripts_count'].'</b></td>
		</tr>
		
		<tr class="plan_row_divider">
			<td width="60%" class="plan_head">'.$l['plan_install'].'</td>
			<td width="15%" class="plan_item">'.$yes_img.'</td>
			<td width="15%" class="plan_item">'.$yes_img.'</td>
		</tr>
		
		<tr class="plan_row_divider">
			<td width="60%" class="plan_head">'.$l['plan_upgrade'].'</td>
			<td width="15%" class="plan_item">'.$yes_img.'</td>
			<td width="15%" class="plan_item">'.$yes_img.'</td>
		</tr>
		
		<tr class="plan_row_divider">
			<td width="60%" class="plan_head">'.$l['plan_sets'].'</td>
			<td width="15%" class="plan_item">'.$no_img.'</td>
			<td width="15%" class="plan_item">'.$yes_img.'</td>
		</tr>
		
		<tr class="plan_row_divider">
			<td width="60%" class="plan_head">'.$l['plan_auto_upgrade'].'</td>
			<td width="15%" class="plan_item">'.$no_img.'</td>
			<td width="15%" class="plan_item">'.$yes_img.'</td>
		</tr>
		
		<tr class="plan_row_divider">
			<td width="60%" class="plan_head">'.$l['plan_backup'].'</td>
			<td width="15%" class="plan_item">'.$no_img.'</td>
			<td width="15%" class="plan_item">'.$yes_img.'</td>
		</tr>
		
		<tr class="plan_row_divider">
			<td width="60%" class="plan_head">'.$l['plan_backup_remote'].'</td>
			<td width="15%" class="plan_item">'.$no_img.'</td>
			<td width="15%" class="plan_item">'.$yes_img.'</td>
		</tr>
		
		<tr class="plan_row_divider">
			<td width="60%" class="plan_head">'.$l['plan_import'].'</td>
			<td width="15%" class="plan_item">'.$no_img.'</td>
			<td width="15%" class="plan_item">'.$yes_img.'</td>
		</tr>
		
		<tr class="plan_row_divider">
			<td width="60%" class="plan_head">'.$l['plan_remote_import'].'</td>
			<td width="15%" class="plan_item">'.$no_img.'</td>
			<td width="15%" class="plan_item">'.$yes_img.'</td>
		</tr>
		
		<tr class="plan_row_divider">
			<td width="60%" class="plan_head">'.$l['plan_clone'].'</td>
			<td width="15%" class="plan_item">'.$no_img.'</td>
			<td width="15%" class="plan_item">'.$yes_img.'</td>
		</tr>
		
		<tr class="plan_row_divider">
			<td width="60%" class="plan_head">'.$l['plan_staging'].'</td>
			<td width="15%" class="plan_item">'.$no_img.'</td>
			<td width="15%" class="plan_item">'.$yes_img.'</td>
		</tr>
		
		<tr>
			<td width="60%" class="plan_head" style="color:#000000 !important;">'.$l['price'].'</td>
			<td width="15%" class="plan_item" style="color:#000000 !important;"><span data-price="'.$softaculous_plans['free']['price_y'].'">'.$l['no_cost'].'</span></td>
			<td width="15%" class="plan_item" style="color:#000000 !important;"><span data-price="'.$softaculous_plans['professional']['price_y'].'">'.'$'.$softaculous_plans['professional']['price_y'].'/Year'.'</span></td>
		</tr>
		
		<tr>
			<td colspan="3">
			<div class="alert alert-warning" style="font-size:13px;">'.lang_vars($l['license_note'], array($globals['primary_ip'])).'</div>
			</td>
		</tr>
		
		<tr>
			<td width="60%" class="plan_head"></td>
			<td width="15%" class="plan_item"><span class="free_button">'.$l['free_btn'].'</span></td>
			<td width="15%" class="plan_item"><span class="buy_button" plan-name="professional" onclick="start_buy($(this).attr(\'plan-name\'));">'.(defined('SOFTACULOUS_ENDUSER_LICENSE') ? $l['renew_btn'] : $l['buy_btn']).'</span></td>
		</tr>
		</table>
		</div><! ––Closing responsive-table––>
		</div><! ––Closing softaculous_plans––><br />
		
		<div id="top_feature">
			
			<h3 class="orange text-center">'.$l['feature_title'].'</h3><hr class="style-two" />		
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-download fa-2x spicons"></span></div>
						<h4>'.$l['one_click_title'].'</h4>
						<p>'.$l['one_click_desc'].'</p>
					</div>
				</div>			
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-galleries fa-2x spicons"></span></div>
						<h4>'.$num_scripts.' '.$l['num_scripts_title'].'</h4>
						<p>'.$l['num_scripts_desc'].'</p>
					</div>
				</div>			
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-sync fa-2x spicons"></span></div>
						<h4>'.$l['upgrade_title'] .'</h4>
						<p>'.$l['upgrade_desc'] .'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-success fa-2x spicons"></span></div>
						<h4>'.$l['uptodate_title'].'</h4>
						<p>'.$l['uptodate_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-files fa-2x spicons"></span></div>
						<h4>'.$l['sets_title'].'</h4>
						<p>'.$l['sets_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-fullstar fa-2x spicons"></span></div>
						<h4>'.$l['demos_title'].'</h4>
						<p>'.$l['demos_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-backup fa-2x spicons"></span></div>
						<h4>'.$l['backup_title'].'</h4>
						<p>'.$l['backup_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-backup fa-2x spicons"></span></div>
						<h4>'.$l['backup_remote_title'].'</h4>
						<p>'.$l['backup_remote_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-download fa-2x spicons"></span></div>
						<h4>'.$l['import_title'].'</h4>
						<p>'.$l['import_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-download fa-2x spicons"></span></div>
						<h4>'.$l['remote_import_title'].'</h4>
						<p>'.$l['remote_import_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-copy fa-2x spicons"></span></div>
						<h4>'.$l['clone_title'].'</h4>
						<p>'.$l['clone_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-copy fa-2x spicons"></span></div>
						<h4>'.$l['staging_title'].'</h4>
						<p>'.$l['staging_desc'].'</p>
					</div>
				</div>
			</div>
		</div>
		<br /><br /><br />
		<div class="row" align="center">
			<div class="col-sm-12 col-xs-12">
				<span class="buy_button" onclick="start_buy(\'professional\');">'.(defined('SOFTACULOUS_ENDUSER_LICENSE') ? $l['renew_btn'] : $l['buy_btn']).'</span>
			</div>
		</div>
		<br /><br /><br />
	</div>';
	
	softfooter();

}

?>