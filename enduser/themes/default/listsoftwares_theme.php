<?php

//////////////////////////////////////////////////////////////
//===========================================================
// listsoftwares_theme.php
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

function listsoftwares_theme(){

	global $theme, $globals, $user, $l, $cat, $list, $scripts , $allcatwise , $softs, $iscripts, $apps, $_scripts;
	
	softheader($l['<title>'].' - '.$l[$cat]);
	
	if(!empty($globals['lictype'])){
	
		echo '
		<style>
			._softable{
			border:5px solid #F0F0F0;
			}	
			
			._deschead a:link, ._deschead a:visited, ._deschead a:active, ._deschead a:hover{
			color: #666666;
			font-size:15px;
			font-weight:bold;
			font-family: Arial, Helvetica, sans-serif;
			text-decoration:none;
			}
			
			._descr{
			font-size:11px;
			padding-left:15px;
			}
			
			._icodesc a:link, ._icodesc a:visited, ._icodesc a:active, ._icodesc a:hover{
			color:#666666;
			font-weight:bold;
			font-size:12px;
			font-family: Arial, Helvetica, sans-serif;
			text-decoration:none;
			}
			
			._ratings{
			font-size:12px;
			font-weight:bolder;
			}
			
			._views{
			font-size:12px;
			font-weight:bolder;
			}
			
			._imghr{
			margin:6px 0px;
			}
			
			._links{
			padding: 5px 0 0 30px;	
			}
		
		</style>
			
		<!-- Do not edit IE conditional style below -->
		<!--[if gte IE 5.5]>
		
		<style type="text/css">
			#motioncontainer {
			width:expression(Math.min(this.offsetWidth, maxwidth)+\'px\');
			}
		</style>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/motiongallery.css" />
		<script language="javascript" type="text/javascript" src="'.$theme['url'].'/js/motiongallery.js"></script>
		'; 
		
		if($globals['mode'] == 'apps'){
			$scripts = $apps;
			echo '<link rel="stylesheet" type="text/css" href="'.$globals['mirror_images'].'webuzo/sprites/80.css" />';	
		}else{
			echo '<link rel="stylesheet" type="text/css" href="'.$globals['mirror_images'].'sprites/80.css" />';
		}
		
		$category = @$allcatwise[$globals['mode']][$cat];
		$ids_ = array_keys($category);
		$ids = array_keys($category);
		
		foreach($ids_ as $v){
			
			$v = (int) trim($v);
			if(!empty($v)){
				$ids[$v] = $v;
			}
		}
		
		if(empty($ids)){
			return false;
		}
		
		$branches = array();
		
		$url = $theme['images'];
		echo '
		<div id="motioncontainer" style="position:relative;overflow:hidden;height:200px;width:100%;margin:auto;">
			<div id="motiongallery" style="position:absolute;left:0;top:0;white-space: nowrap;">
				<div class="sai_blog_script_holder">
					<table id="trueContainer" width="100%" border="0" cellspacing="8">
						<tr>';
	
							foreach($_scripts as $k => $v){
							
								if(!in_array($k, $ids)){
									continue;
								}
								
								// If the script has a parent and it is enabled we will display only the parent
								if(!empty($v['parent']) && array_key_exists($v['parent'], $iscripts)){
									$branches[$v['parent']][$k] = $v['version'];
									continue;
								}
							
								echo '
								<td valign="middle">
									<a href="'.(($globals['mode'] == 'apps') ? app_link($v['aid']) : script_link($v['sid'])).'" title="'.$v['name'].'" style="display:block; text-decoration:none;" >
										<div class="sai_blog_script"><br />
											<div class="sp80_'.$v['softname'].'" style="margin:20px;">
												'.($k >= 10000 && file_exists(dirname($theme['path']).'/default/images/topscripts/'.$v['sid'].'__logo.gif') ? '<img src="'.$url.'topscripts/'.$v['sid'].'__logo.gif'.'" height="80" width="80" >' : '').'
											</div>
											<div class="sai_script_name">'.$v['name'].'</div>
										</div>
									</a>
								</td>';
							
							}
						echo '
						</tr>
					</table>
				</div>
			</div>
		</div>
		<br />
		<br />
		<script language="javascript" type="text/javascript">
		
		if(typeof $_ != "function"){
			function $_(id){ return document.getElementById(id); };
		}
		function startmotiongal(){
			$_("trueContainer").style.height = $_("motioncontainer").offsetHeight+"px";
			fillup();
		};
		try{
			$_("trueContainer").style.height = $_("motioncontainer").offsetHeight+"px";
			$(document).ready(function(){
				setTimeout("startmotiongal();", 100);
			});
		} catch(e){ }
		
		</script>';
	
		foreach ($_scripts as $k => $v) {
			
			if(!in_array($k, $ids)){
				continue;
			}
			
			// If the script has a parent and it is enabled we will display only the parent
			if(!empty($v['parent']) && array_key_exists($v['parent'], $iscripts)){
				continue;
			}
			
			$ratings = array();
			$deduct = 1;
			$r = $v['ratings'];
				
			for($i=1; $i<=5; $i++){		
				if($r >= 1){
					$ratings[$i] = '<img src="'.$url.'star.png'.'" alt="('.number_format($v['ratings'], 2).' out of 5)" />';
				}elseif($r > 0){
					$ratings[$i] = '<img src="'.$url.'halfstar.png'.'" alt="('.number_format($v['ratings'], 2).' out of 5)" />';
				}else{
					$ratings[$i] = '<img src="'.$url.'nostar.png'.'" alt="('.number_format($v['ratings'], 2).' out of 5)" />';
				}
				$r = $r - $deduct;
			}	
			
			$demo_scriptname = str_replace(' ', '_', $v['name']);
			
			$logo_url = '';
			
			if($k >= 10000){
				if(file_exists(dirname($theme['path']).'/default/images/topscripts/'.$v['sid'].'__logo.gif')){
					$logo_url = $url.'topscripts/'.$v['sid'].'__logo.gif';
				}
			}else{
				$logo_url = $globals['mirror_images'].($globals['mode'] == 'apps' ? 'webuzo/softimages/'.$k.'__logo.gif' : 'softimages/'.$v['sid'].'__logo.gif');
			}
			
			echo'
			<div class="bg">
				<div class="sai_loginhead" valign="middle" style="padding-left:10px; padding-top:10px; ">
					<a href="'.(($globals['mode'] == 'apps') ? app_link($v['aid']) : script_link($v['sid'])).'&tab=install" style="text-decoration: none;">'.$v['name'].'</a>
					'.($k < 10000 && empty($globals['off_rating_link']) ? '&nbsp;&nbsp;<span class="someclass" title="'.$v['ratings'].'">'.implode('', $ratings).'</span>' : '').'
					&nbsp;&nbsp;<a href="'.(($globals['mode'] == 'apps') ? app_link($v['aid']) : script_link($v['sid'])).'&tab=install" style="text-decoration: none; color:#FFFFFF;"><div class="flat-butt">'.$l['install_button'].'</a></div>
				</div>
				<hr />
				
				<div class="row" style="font-size:13px;">
					<div class="col-sm-2 col-xs-3">';
				
					if(!empty($logo_url)){
						echo '<a href="'.(($globals['mode'] == 'apps') ? app_link($v['aid']) : script_link($v['sid'])).'&tab=install">
								<img src="'.$logo_url.'" alt="'.$v['softname'].'" class="img-responsive" style="margin:auto;">
							</a>';
					}
					
					echo '</div>
					
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-5">
								<b>'.$l['version'].'</b> : '.$v['version'].(!empty($branches[$k]) ? ', '.implode(', ', $branches[$k]) : '').'<br />
								'.(!empty($v['release_date']) ? '<b>'.$l['release_date'].'</b> : '.$v['release_date'] : '').'
							</div>
						</div>
						
						<div class="row" style="margin-top:10px;">
							<div class="col-sm-12">
								<p>'.(webuzo() ? $v['description'] : (!empty($l['description_'.$k]) ? $l['description_'.$k] : $v['description'])).'</p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-2">
						<div class="row">
						'.(($globals['mode'] != 'apps') ? (empty($globals['off_demo_link']) ? ' <div class="col-xs-4 col-sm-12" style="padding:10px" align="left"><a href="'.($k >= 10000 ? $v['demo'] : $globals['ind'].'act=demos&soft='.$v['sid']).'" target="_blank" style="text-decoration:none"><i class="fa sai-demo fa-2x" style="float: left;"></i><div class="_links">'.$l['demo'].'</div></a></div>' : '') : '').'
						
						<div class="col-xs-4 col-sm-12" style="padding:10px" align="left"><a href="'.$v['support'].'" style="text-decoration:none;"><i class="fa sai-customersupport fa-2x" style="float: left;"></i><div class="_links">'.$l['support'].'</div></a></div>
						
						<div class="col-xs-4 col-sm-12" style="padding:10px" align="left"><a href="'.(($globals['mode'] == 'apps') ? app_link($v['aid']) : script_link($v['sid'])).'" style="text-decoration:none"><i class="fa sai-download fa-2x" style="float: left;"></i><div class="_links">'.number_format($v['space']/1024/1024, 2).' MB</div></a></div>
						</div>
					</div>
				</div><br />
			</div><!--end of bg-->
			<br />';
		}
	}else{
		echo $l['soft_free_note'];
	}
	
	softfooter();

}

?>