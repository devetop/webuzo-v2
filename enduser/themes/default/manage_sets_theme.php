<?php

//////////////////////////////////////////////////////////////
//===========================================================
// manage_sets_theme.php
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

function manage_sets_theme(){

global $globals, $l, $theme, $langs, $error, $sets, $sites, $user, $themes_count, $plugins_count, $selected_set, $done;

//Code is placed here to prevent the theme part below this from displaying.
//Search for plugins/themes
if(optGET('search_key')){
	$search_key = inputsec(trim($_GET['search_key']));
	$is_plugin = optGET('plugins');
	search_wp_plugins_themes($search_key, $is_plugin);
	return false;
}

if(optGET('ajcall')){
	if(!empty($error)){
		echo '0'.current($error);
		return false;
	}
}

softheader($l['<title>']);

echo '<script language="javascript" src="'.js_url('js/combined.js').'" type="text/javascript"></script>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

var sets_list = '.json_encode($sets, JSON_FORCE_OBJECT).';

$( document ).ready(function() {
	
	multiple_checks();
	
	$("#create_sets").click(function(){
		$("#add_sets_div").slideToggle();
	});
	
	$("#add_sets").click(function(){
		$("#add_sets_div").slideToggle();
	});
	
	//Remove sets
	$("#remove_sets").click(function(){
		
		var sets =  document.getElementsByName("sets[]");
		
		sets_data = new Array();
		var c = 0;
		for(i = 0; i < sets.length; i++){
			if(sets[i].checked == true){
				sets_data[c] = sets[i].id;
				c++;
			}
		}
		
		//No sets selected to remove, abort it
		if(sets_data.length == 0){
			alert("'.$l['sel_sets_torem'].'");
			return false;
		}
		
		var csrf_token = $("#csrf_token").val(); 
		
		$.ajax({
			url: window.location+"&ajcall=1&jsnohf=1&remove_sets=1",
			type: "POST",
			data: {csrf_token:csrf_token,sets:sets_data},
			success: function(data){
				var result = data.substring(0,1);					
				var msg = data.substring(1);
				
				if(result == "0"){					
					$("#plugin_removed_failure").html(msg).css("text-align", "center");
					$("#plugin_removed_failure").show();
				}else{
					if(sets_data.length > 0){
						alert("'.$l['sets_rem_success'].'");
					}
					
					//To prevent from asking resend popup while reloading page
					window.location.href = window.location.href;
					
				}
			}
		});		
		
	});
	
	//Set default value
	$(".default_value").on("click", function(event){
	
		var set_name = $(this).attr("id");
		set_name = set_name.replace("default_value_", "");
		var csrf_token = $("#csrf_token").val();
		
		if(this.checked == true){
			checked = 1;
		}else{
			checked = 0;
		}
		
		$.ajax({
			url: window.location+"&api=json&set_name="+encodeURIComponent(set_name)+"&default_value="+encodeURIComponent(checked),
			type: "POST",
			data: "csrf_token="+csrf_token,
			success: function(data){
				if(!data){
					alert("'.$l['api_no_resp'].'");
					return false;
				}
				
				var resp = JSON.parse(data);
				if(!resp){
					alert("'.$l['api_invalid_resp'].'");
					return false;
				}
				
				if(!resp.done){
					
					if(resp.error){
						var error_disp = "'.$l['following_errors_occured'].':\n";
						for(x in resp.error){
							error_disp = error_disp+resp.error[x]+"\n";
						}
						alert(error_disp);
						return false;
					}
					
					alert("'.$l['fail_save_pref'].'");
					return true;
				}
				
				alert(resp.done);
			}
		});		
		
		
	});
	
	function multiple_checks(){
		$("#check_allsets").on("click", function(event){
			if(this.checked == true){
				$(".check_allsets").prop("checked", true);
			}else{
				$(".check_allsets").prop("checked", false);
			}
		});
	}
});

function remove_plugin_submit(){
	var plugin_or_theme = $("#plugin_or_theme").val();
	
	if(plugin_or_theme == "plugins"){
		plugin_or_theme = "plugins";
		$("#plugin_removed_success").text("'.$l['plugin_rem_success'].'").css("text-align", "center");
	}else{
		plugin_or_theme = "themes";
		$("#plugin_removed_success").text("'.$l['theme_rem_success'].'").css("text-align", "center");
	}
	
	var remove_plugins_themes =  document.getElementsByName("remove_plugins_themes[]");
	
	plugins_themes_to_remove = new Array();
	var c = 0;
	for(i = 0; i < remove_plugins_themes.length; i++){
		if(remove_plugins_themes[i].checked == true){
			plugins_themes_to_remove[c] = remove_plugins_themes[i].value;
			c++;
		}
	}
	
	var set = $("#plugin_theme_set").val();
	var csrf_token = $("#csrf_token").val();
	
	$_("rem_plth_"+set).innerHTML = "<a><img src=\''.$theme['images'].'load.gif\' alt=\''.$l['removing'].'\' width=\'25\' ></a>";
	
	$.ajax({
		url: window.location+"&ajcall=1&jsnohf=1&plugins_themes_to_remove="+encodeURIComponent(plugins_themes_to_remove)+"&set_name="+encodeURIComponent(set)+"&"+plugin_or_theme+"=1",
		type: "POST",
		data: "csrf_token="+csrf_token,
		success: function(data){
			//alert(data);
			
			var result = data.substring(0,1);					
			var msg = data.substring(1);
			
			if(result == "0"){
				$("#plugin_removed_failure").html(msg).css("text-align", "center");
				$("#plugin_removed_failure").show();
				$_("rem_plth_"+set).innerHTML = "";				
			}else{
				if(plugins_themes_to_remove.length > 0){
					$("#plugin_removed_success").fadeTo(3000, 500).slideUp(1000, function(){
						$("#plugin_removed_success").slideUp(1000);
					});
				}
				
				var plugins_count = parseInt($(data).find("#plugins_count").val());	
				var themes_count = parseInt($(data).find("#themes_count").val());
				
				if(plugin_or_theme == "plugins"){	
					if(plugins_count === 0){
						$("#"+set+"_plugin_count").html("");
					}else{
						$("#"+set+"_plugin_count").html(plugins_count+"'.$l['total_plugin_theme'].'");
					}
				}else{
					if(themes_count === 0){
						$("#"+set+"_theme_count").html("");
					}else{
						$("#"+set+"_theme_count").html(themes_count+"'.$l['total_plugin_theme'].'");
					}
				}			
				$_("rem_plth_"+set).innerHTML = "";
			}
		}
	});
}

//Creates the list of plugins/themes to remove via modal(popup)
function remove_wp_plugins_themes(set, to_remove){
	
	var set_data, plugins_themes_list;
	
	$("#remove_plugins_themes").empty();
	
	var csrf_token = $("#csrf_token").val();
	
	//Get plugins_themes count
	$.ajax({
		type: "POST",
		data: "csrf_token="+csrf_token,
		url: window.location+"&jsnohf=1&set_stats="+encodeURIComponent(set)+"&get_plugins_themes_count=1",
		timeout:0,
		// Checking for success
		success: function(data){	
			var selected_set = $(data).find("#selected_set").text();
			var selected_set_data = JSON.parse(selected_set);
			
			if(to_remove == "plugins"){
				$(".modal-title").text("'.$l['sel_plug_rem'].'");
				set_data = selected_set_data.plugins;
			}else{
				$(".modal-title").text("'.$l['sel_theme_rem'].'");
				set_data = selected_set_data.themes;
			}
			
			$("#plugin_or_theme").val(to_remove);
			$("#plugin_theme_set").val(set);
			
			//var tmp = plugins_themes.split(",");
			
			if(set_data === undefined || set_data.length <= 0){
				if(to_remove == "plugins"){
					plugins_themes_list = "'.$l['no_plug_sel'].'"; 
				}else{
					plugins_themes_list = "'.$l['no_theme_sel'].'"; 
				}
				
				$("#remove_plugins_themes").append("<tr><td><div class=\'alert alert-warning\'>"+plugins_themes_list+"</div></td></tr><br />");
				
				return false;
			}
			
			for(var slug in set_data){
				//alert(slug);
				//alert(set_data[slug]);
				
				var plugin_list = "";
				
				plugins_themes_list = "<input id="+set+" type=\"checkbox\" name=\"remove_plugins_themes[]\"  value=\'"+slug+"\'></td><td>"+set_data[slug];
			
				$("#remove_plugins_themes").append("<tr><td width=\"25px\">"+plugins_themes_list+"</td></tr><br />");
			}
		}
	});
}

function add_plugins_themes(set_name, vall){
	
	//Clean previous search value or results
	$("#search_input_wp").val("");
	$("#plugin_theme_results").empty();
	
	$("#set_post").val("");
	//alert(set_name);
	//alert(vall);
	$("#set_post").val(set_name); // To determine in which set the plugin or thmes to be added	
	$("#plugin_or_theme").val(vall); // To determine if the search is for theme or plugin	
	
	$("#add_success").text("");
	$("#add_success").hide();
	$("#add_failed").text("");
	$("#add_failed").hide();
	
	if(vall == "Add Plugins"){
		$(".modal-title").text("'.$l['sel_plug_add'].'");
	}else{
		$(".modal-title").text("'.$l['sel_theme_add'].'");
	}
	
}

//Filters the plugin search result
function filter_plugins(){
		
	var val = $("#search_input_wp").val();
	var plugin_or_theme = $("#plugin_or_theme").val();
	
	if(plugin_or_theme == "'.$l['add_plugins'].'"){
		plugin_or_theme = "plugins";
	}else{
		plugin_or_theme = "themes";
	}
	
	$.ajax({
		url: window.location+"&ajcall=1&jsnohf=1&search_key="+encodeURIComponent(val)+"&"+plugin_or_theme+"=1",
		type: "GET",
		success: function(data){//alert(data);			
			var input, filter, table, tr, td, i;
			input = document.getElementById("search_input_wp");
			filter = input.value.toUpperCase();
			
			$("#plugin_theme_results").html(data);
			
			table = document.getElementById("plugin_theme_results");
			
			tr = table.getElementsByTagName("tr");
			
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[1];     
			}			
		}
	});	
}

function submit_addition(){
	$_("add_plth").innerHTML = "<a><img src=\''.$theme['images'].'load.gif\' alt=\''.$l['adding'].'\' width=\'25\' ></a>";
	
	var is_plugin_or_theme = $("#plugin_or_theme").val();

	if(is_plugin_or_theme == "'.$l['add_plugins'].'"){
		is_plugin_or_theme = "plugins";
	}else{
		is_plugin_or_theme = "themes";
	}
	
	var plugins_or_themes = document.getElementsByName("plugins_or_themes[]");
	var sets_name =  $("#set_post").val();
	
	//var add_plugins_themes_data = new Object();
	//var add_plugins_themes_data = new Array();
	var slugs = new Array();
	var names = new Array();
	
	var c = 0;
	for(i = 0; i < plugins_or_themes.length; i++){
		
		if(plugins_or_themes[i].checked == true){
			//var plth_id = plugins_or_themes[i].value;
			//alert("Slug: "+plug_theme_name);
			//add_plugins_themes_data[plugins_or_themes[i].value] = document.getElementById(plugins_or_themes[i].value).innerHTML;
			
			//add_plugins_themes_data.plth_id = document.getElementById(plugins_or_themes[i].value).innerHTML;
			
			//alert("Name: "+document.getElementById(plugins_or_themes[i].value).innerHTML);
			
			slugs[c] = plugins_or_themes[i].value;
			names[c] = document.getElementById(plugins_or_themes[i].value).value;
			c++;
		}
	}
	//alert(add_plugins_themes_data);
	
	
	//var jsonString = JSON.stringify(add_plugins_themes_data);alert("JSONstring: "+jsonString);
	
	if(slugs.length == 0){
		if(is_plugin_or_theme == "plugins"){
			$("#add_failed").text("'.$l['sel_plugins'].'").css("text-align", "center");
		}else{
			$("#add_failed").text("'.$l['sel_themes'].'").css("text-align", "center");
		}
		$("#add_failed").show();
		$("#add_success").hide();
		$_("add_plth").innerHTML = "";
		return false;
		
	}else{
		
		var csrf_token = $("#csrf_token").val(); 
		
		$.ajax({
			url: window.location+"&ajcall=1&jsnohf=1&sets_name="+encodeURIComponent(sets_name)+"&"+is_plugin_or_theme+"=1&add_plugins_themes_data=1",
			type: "POST",
			data: {add_plugins_themes_data_slugs : slugs, add_plugins_themes_data_names : names, csrf_token : csrf_token},
			//data: {add_plugins_themes_data_slugs : JSON.stringify(slugs), add_plugins_themes_data_names : JSON.stringify(names)},
			success: function(data){
				//alert(data);
				
				var result = data.substring(0,1);					
				var msg = data.substring(1);
				
				if(result == "0"){					
					$("#add_failed").show();
					$("#add_failed").html(msg);
					$_("add_plth").innerHTML = "";
					
				}else{					
					if(is_plugin_or_theme == "plugins"){
						$("#add_success").text("'.$l['plugin_add_success'].'").css("text-align", "center");	
					}else{
						$("#add_success").text("'.$l['theme_add_success'].'").css("text-align", "center");
					}
					
					$("#add_failed").hide();
					$("#add_success").show();
					$("#plugin_theme_results").empty();
					$_("add_plth").innerHTML = "";
					
					var plugins_count = $(data).find("#plugins_count").val();	
					var themes_count = $(data).find("#themes_count").val();
					
					if(is_plugin_or_theme == "plugins"){
						$("#"+sets_name+"_plugin_count").html(plugins_count+"'.$l['total_plugin_theme'].'");
					}else{
						$("#"+sets_name+"_theme_count").html(themes_count+"'.$l['total_plugin_theme'].'");
					}
				}
			},
			error: function(data) {
				$_("add_plth").innerHTML = "";
			}
		});
	}
	
	return true;
}

var search_timer;

$(document).on("keyup", "#search_input_wp",  function(e) {
	
	var search_string = $(this).val();
	clearTimeout(search_timer);

	if (search_string == "") {
		$("#plugin_theme_results").hide();
	}else{
		$("#plugin_theme_results").show();
		search_timer = setTimeout("filter_plugins();", 300);
	};
});

//on keydown, clear the countdown 
$(document).on("keydown", "#search_input_wp", function () {
  clearTimeout(search_timer);
});

function list_set_items(setname){
	
	var set_plugins, set_themes, plugins_data, themes_data;
	
	$(".modal-title").text(setname);
	
	$("#list_plugins_themes").empty();
	
	var csrf_token = $("#csrf_token").val();
	
	//Get plugins_themes count
	$.ajax({
		type: "POST",
		data: "csrf_token="+csrf_token,
		url: window.location+"&jsnohf=1&set_stats="+encodeURIComponent(setname)+"&get_plugins_themes_count=1",
		timeout:0,
		// Checking for success
		success: function(data){
			var selected_set = $(data).find("#selected_set").text();
			var selected_set_data = JSON.parse(selected_set);
			
			set_plugins = selected_set_data.plugins;
			set_themes = selected_set_data.themes;
			
			if((set_plugins === undefined || set_plugins.length <= 0) && (set_themes === undefined || set_themes.length <= 0)){
				$("#list_plugins_themes").append("<div class=\'alert alert-warning\'>'.$l['empty_set'].'</div>");
			}
			
			//Plugins
			if(set_plugins !== undefined){
				plugins_data = "<h4>'.$l['plugins'].'</h4><ul class=\"softlist\">";
				for(var pl in set_plugins){
					plugins_data += "<li>"+set_plugins[pl]+"</li>";
				}
				$("#list_plugins_themes").append("</ul>" + plugins_data);
			}
			
			//Themes
			if(set_themes !== undefined){
				themes_data = "<br /><h4>'.$l['themes'].'</h4><ul class=\"softlist\">";
				for(var th in set_themes){
					themes_data += "<li>"+set_themes[th]+"</li>";
				}
				$("#list_plugins_themes").append("</ul>" + themes_data);
			}
		}
	});
}

function show_softinstall_set_modal(setname){
	
	$("#installations_list").hide();
	$("#no_plugins_themes").hide();
	
	var csrf_token = $("#csrf_token").val();
	
	//Get plugins_themes count
	$.ajax({
		type: "POST",
		data: "csrf_token="+csrf_token,
		url: window.location+"&ajcall=1&jsnohf=1&set_stats="+encodeURIComponent(setname)+"&get_plugins_themes_count=1",
		timeout:0,
		// Checking for success
		success: function(data){
			var result = data.substring(0,1);					
			var msg = data.substring(1);
				
			if(result == "0"){
				alert(msg);
			}else{
				var plugins_count = $(data).find("#plugins_count").val();	
				var themes_count = $(data).find("#themes_count").val();
				
				if(plugins_count == 0 && themes_count == 0){
					$("#no_plugins_themes").text("'.$l['no_theme_plugins'].'");
					$("#no_plugins_themes").show();
					$("#softsubmit_install_set").hide(); //hide button
				}else{
					$("#installations_list").show();
					$("#softsubmit_install_set").show(); //show button
				}
			}
		}
	
	});
	
	$(".modal-title").text("'.$l['install_set'].'");
	$("#softinstall_set_name").val(setname);
	$(".check_websites").prop("checked", false);
}

function softsubmit_install_set(){

	$_("install_div").innerHTML = "<a><img src=\''.$theme['images'].'load.gif\' alt=\''.$l['installing'].'\' width=\'25\' ></a>";
	
	var setname = $("#softinstall_set_name").val();
	
	var softwebsites = document.getElementsByName("webids[]");
	
	var ins_path = new Array();
	var c = 0;
	for(var i = 0; i < softwebsites.length; i++){
		if(softwebsites[i].checked == true){
			ins_path[c] = softwebsites[i].value;
			c++;
		}
	}
	
	//When there is no site selected
	if ((ins_path === undefined || ins_path.length <= 0)) {
		$("#install_failed").show();
		$("#install_failed").html("'.$l['no_select_site'].'");
		$_("install_div").innerHTML = "";
		return true;
	}
	
	ins_path.toString();
	var csrf_token = $("#csrf_token").val();
	
	$.ajax({
		type: "POST",
		data: "csrf_token="+csrf_token,
		url: window.location+"&ajcall=1&jsnohf=1&softinstall_set="+encodeURIComponent(setname)+"&softwebsites="+encodeURIComponent(ins_path),
		timeout:0,
		// Checking for success
		success: function(data){
			var result = data.substring(0,1);					
			var msg = data.substring(1);
				
			if(result == "0"){
				$("#install_failed").html(msg);
				$("#install_failed").show();
				$("#install_success").hide();
			}else{
				$("#install_failed").hide();
				$("#install_success").show();
			}		
			
			$(".check_websites").prop("checked", false);
			$_("install_div").innerHTML = "";
		},
		error: function(data) {
			$("#install_failed").show();
			$("#install_success").hide();
			alert("'.$l['install_set_fail'].'");
			$(".check_websites").prop("checked", false);
			$_("install_div").innerHTML = "";
		}
	});
}
// ]]></script>

<style>
.softlist{
	padding-left: 25px;
}
</style>
';

echo '<div class="bg" style="min-height:400px;"><br />
		<center class="sai_main_head" style="width:100%;" align="center">
			<i class="fa sai-polls fa-2x" style="color:#00A0D2; vertical-align: middle;"></i> &nbsp;'.$l['<title>'].'
		</center><hr>';

error_handle($error);

echo'
<input id="plugins_count" type="hidden" value="'.$plugins_count.'">
<input id="themes_count" type="hidden" value="'.$themes_count.'">
<div id="selected_set" style="display:none;">'.$selected_set.'</div>

<input name="create_sets" class="flat-butt" id="create_sets" value="'.$l['create_sets'].'" type="button">&nbsp;&nbsp;
<input name="remove_sets" class="flat-butt" id="remove_sets" value="'.$l['remove_sets'].'" type="button"><br /><br /><br />
	<form accept-charset="'.$globals['charset'].'" name="manage_plugin_theme" method="post" action="">
		<div class="row" id="add_sets_div" style="display:none;">
			<div class="col-sm-5">
				<input type="text" name="set_input" class="form-control" id="set_input" size="30" placeholder="'.$l['name_of_set'].'"/><br />
			</div>
			<div class="col-sm-5">
				<input name="add_sets" class="flat-butt" id="add_sets" value="'.$l['create_set_button'].'" type="submit">
			</div>
		</div>
		'.csrf_display().'
	</form>
	
	<div id="plugin_removed_success" class="alert alert-success" style="display:none;"><center></center></div>
	<div id="plugin_removed_failure" class="alert alert-danger" style="display:none;"><center></center></div>
	
	<table width="80%" id="manage_plugin_theme" class="table table-hover" style="margin:0px auto;">
	<thead  style="background:#EFEFEF;">
		<tr>
			<th><input type="checkbox" id="check_allsets"></th>
			<th>'.$l['set_name'].'</th>
			<th></th>
			<th>'.$l['set_plugins'].'</th>
			<th></th>
			<th>'.$l['set_themes'].'</th>
			<th></th>
			<th></th>
			<th></th>
			<th style="cursor:pointer">
				<span class="someclass" title="'.$l['default_exp'].'" style="cursor:pointer;">
					<font class="bboxtxt"><b>'.$l['default_value'].'</b></font>
				</span>
			</th>
		</tr>
	</thead>';
	
	//r_print($sets);
	foreach($sets as $sk => $sv){
		
		//echo '<li><a href="#">'.$av['name'].'</a></li>';
		echo '
		<tr>
			<td><input id="'.$sk.'" type="checkbox" name="sets[]" class="check_allsets"></td>
			
			<td class="class_valign">'.$sk.'</td>
			
			<td class="class_valign"><span id="'.$sk.'_plugin_count">'.(!empty($sv['plugins']) ? count($sv['plugins']).$l['total_plugin_theme'] : '').'</span></td>
			
			<td id="'.$sk.'"><input name="'.$sk.'" class="flat-butt" id=""'.$sk.'"" value="'.$l['add_plugins'].'" type="button" style="padding: 2px 6px;" data-toggle="modal" data-target="#search_modal" onclick="add_plugins_themes(this.name, this.value)"></td>
			
			<td class="class_valign"><span id="'.$sk.'_theme_count">'.(!empty($sv['themes']) ? count($sv['themes']).$l['total_plugin_theme'] : '').'</span></td>
			
			<td id="'.$sk.'"><input name="'.$sk.'" class="flat-butt" id="add_themes" value="'.$l['add_themes'].'" type="button" style="padding: 2px 6px;" data-toggle="modal" data-target="#search_modal" onclick="add_plugins_themes(this.name, this.value)"></td>

			<td class="class_valign"><span class="someclass" title="'.$l['view_items'].'" style="cursor:pointer;" data-toggle="modal" data-target="#list_set_items_modal" onclick="list_set_items(\''.$sk.'\')"><i class="fa fa-2x sai-list" style="color:#676a6c;margin:3px;"></i></span></td>
			
			<td id="'.$sk.'">
				<div class="dropdown">
					<button class="flat-butt dropdown-toggle" type="button" data-toggle="dropdown" style="padding: 2px 6px;">'.$l['action'].'
					<span class="caret"></span></button>&nbsp;<span id="rem_plth_'.$sk.'"></span>
					<ul class="dropdown-menu">
					<li id="'.implode(",", $sets[$sk]['plugins']).'" data-toggle="modal" data-target="#remove_plugin_theme_modal" onclick="remove_wp_plugins_themes(\''.$sk.'\', \'plugins\')"><a style="text-decoration:none; cursor:pointer;">'.$l['remove_plugins'].'</a></li>
					<li id="'.implode(",", $sets[$sk]['themes']).'" data-toggle="modal" data-target="#remove_plugin_theme_modal" onclick="remove_wp_plugins_themes(\''.$sk.'\', \'themes\')"><a style="text-decoration:none; cursor:pointer;">'.$l['remove_themes'].'</a></li>
					</ul>
				</div>
			</td>
			<td><input class="flat-butt" id="softinstall_set_button" value="'.$l['install_set'].'" type="button" style="padding: 2px 6px;" data-toggle="modal" data-target="#softinstall_set_modal" onclick="show_softinstall_set_modal(\''.$sk.'\')"></td>
			<td>'.
			(!empty($sv['themes']) || !empty($sv['plugins']) ? '<input id="default_value_'.$sk.'" type="checkbox" name="default_value" class="default_value" '.POSTchecked("default_value", $sets[$sk]['default_value']).'>' : "")
			.'</td>
		</tr>';
	}

	echo '</table>

	  <!-- remove plugins Modal -->
	<div class="modal fade" id="remove_plugin_theme_modal" role="dialog">
		<div class="modal-dialog modal-sm">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<input type="hidden" name="plugin_or_theme" id="plugin_or_theme" value=""><br />
				<input type="hidden" name="plugin_theme_set" id="plugin_theme_set" value=""><br />
				<table id="remove_plugins_themes" class="table table-hover">		
				</table><br />
			</div>
			<div class="modal-footer">
				'.csrf_display().'
			  <button type="button" class="btn btn-default" data-dismiss="modal" id="remove_plugin_submit" onclick="remove_plugin_submit()">'.$l['remove'].'</button>
			</div>
		  </div>
		</div>
	</div>

	<!-- List Set Items Modal -->
	<div class="modal fade" id="list_set_items_modal" role="dialog">
		<div class="modal-dialog modal-sm">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title"></h4>
			</div>
			<div class="modal-body" id="list_plugins_themes">
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">'.$l['ok'].'</button>
			</div>
		  </div>
		</div>
	</div>	
	
	<!--search plugins Modal -->
	<div class="modal fade" id="search_modal" role="dialog">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<div id="add_success" class="alert alert-success" style="display:none;"></div>
				<div id="add_failed" class="alert alert-danger" style="display:none;"></div>
				<input type="text" name="search_input_wp" class="form-control" id="search_input_wp" size="30" placeholder="'.$l['search_wp_sets'].'"/><br />
				<input type="hidden" name="set_post" id="set_post" value=""><br />
				<input type="hidden" name="plugin_or_theme" id="plugin_or_theme" value=""><br />
				<div id="plugin_theme_results"></div>
			</div>
			<div class="modal-footer">
				<div id="add_plth" class="wpc_inline"></div>
					'.csrf_display().'
				<button type="button" class="btn btn-default" id="submit_plugins_themes" name="submit_plugins_themes" onclick="submit_addition();">Add</button>
			</div>
		  </div>
		</div>
	</div>
	
	<!--Install Set Modal for Softaculous-->
	<div class="modal fade" id="softinstall_set_modal" role="dialog">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<div id="install_success" class="alert alert-success" style="display:none;">'.$l['install_set_success'].'</div>
				<div id="install_failed" class="alert alert-danger" style="display:none;">'.$l['install_set_fail'].'</div>
				<div id="no_plugins_themes" class="alert alert-warning" style="display:none;"></div>
				<input type="hidden" name="softinstall_set_name" id="softinstall_set_name" value="">
				<div id="installations_list" style="display:none;">
					<div class="sai_sub_head">Select the Websites you want to install the Set on: </div><br />
					<table  border="0" cellpadding="5" cellspacing="0" width="90%" class="table table-hover">';
					
					foreach($user['ins'] as $insid => $soft){
						if(is_wordpress($soft['sid'])){ // Only Wordpress Installs
						echo '
						<tr>
							<td><input type="checkbox" class="check_websites" name="webids[]" id="'.$insid.'" value="'.$insid.'"></td>
							<td><span class="sai_head">'.$soft["softurl"].'</span></td>
						</tr>';
						}
					}
					echo '
					</table>
				</div>	
			</div>
			
			<div class="modal-footer">
				<div id="install_div"></div>
				'.csrf_display().'
				<button type="button" class="btn btn-default" id="softsubmit_install_set" name="softsubmit_install_set" onclick="softsubmit_install_set();">Install</button>
			</div>
		  </div>
		</div>
	</div>';

softfooter();

}

?>