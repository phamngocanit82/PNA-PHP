<?php
$error_message = '';

function icon4($file)
{
	if (!is_array($file)) {
		$ext = pathinfo($file);
		$icon = strtolower($ext['extension']) OR $icon = 'dir';
		return $icon;
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{#advimage_dlg.dialog_title}</title>
	<script type="text/javascript" src="<?=$mce_base;?>tiny_mce_popup.js"></script>
	<script type="text/javascript" src="<?=$mce_base;?>utils/mctabs.js"></script>
	<script type="text/javascript" src="<?=$mce_base;?>utils/form_utils.js"></script>
	<script type="text/javascript" src="<?=$mce_base;?>utils/validate.js"></script>
	<script type="text/javascript" src="<?=$mce_base;?>utils/editable_selects.js"></script>
	<script type="text/javascript">
	<!--
	function selectFile(filename)
	{
		// fill the path - textbox and show a preview of the image
		document.wzbrowser.src.value='<?=$upl_dir;?>' + filename;
		ImageDialog.showPreviewImage('<?=$upl_dir;?>' + filename);
	}
	//-->
	</script>	
	<script type="text/javascript" src="<?=$wz_plugin;?>js/image.js"></script>
	<link href="<?=$wz_plugin;?>css/wzimage.css" rel="stylesheet" type="text/css" />
	<base target="_self" />
</head>

<body id="advimage" style="display: none">
<form name="wzbrowser" method="post" enctype="multipart/form-data" action="<?=$wz_image;?>">
<? if ($error_message): ?><div class="error"><?php echo $error_message; ?></div><? endif; ?>
<div class="tabs">
	<ul>
		<li id="general_tab" class="current"><span><a href="javascript:mcTabs.displayTab('general_tab','general_panel');" onmousedown="return false;">{#advimage_dlg.tab_general}</a></span></li>
		<li id="appearance_tab"><span><a href="javascript:mcTabs.displayTab('appearance_tab','appearance_panel');" onmousedown="return false;">{#advimage_dlg.tab_appearance}</a></span></li>
	</ul>
</div>

<div class="panel_wrapper">

	<div id="general_panel" class="panel current">
		<fieldset class="leftColumn">
			<legend>{#advimage_dlg.directory_browser}</legend>
			<div class="explorer">
				<table>
					<tr class="">
						<td width="16"></td>
						<td width="38%">{#advimage_dlg.filename}</td>
						<td width="25%">{#advimage_dlg.filesize}</td>
						<td>{#advimage_dlg.filemodified}</td>
					</tr>
					<tr class="">
						<td><a href="<?=$wz_image;?>"><img src="<?=$wz_plugin;?>img/dir_pdir.gif" width="16" height="16" border="0" alt="{#advimage_dlg.parent_directory}"></a></td>
						<td>..</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>	
					<?php $bg = TRUE;
					$files = directory_map($upl_path);
					while (list($dir, $file) = each($files)):
					?>
					<tr class="<?=($bg)?'darkRow':'';$bg=($bg XOR TRUE);?>">
						<? if (!is_array($file)) {?>
						<td><img src="<?=$wz_plugin;?>img/dir_<?=icon4($file);?>.gif" width="16" height="16" border="0"></td>
						<? } else { ?>
						<td><img src="<?=$wz_plugin;?>img/dir_dir.gif" width="16" height="16" border="0"</td>
						<? } ?>
						<td>
							<? if (is_array($file)):?>
							<a href="<?=$wz_image.'index/'.$dir;?>"><?=$dir;?></a>
							<? else: ?> 
							<a href="javascript:selectFile('<?=$file;?>');"><?=$file;?></a>
							<? endif; ?>
						</td>
						<td><?php if (!is_array($file)) echo filesize($upl_path.$file),''; ?></td>
						<td nowrap="nowrap"><?php if (!is_array($file)) echo date('d/m/Y H:i:s', filemtime($upl_path.$file));?></td>
					</tr>
					<? endwhile;?>
				</table>
			</div><!-- end explorer -->
		<table width="100%" border="0">
			<tr>
				<td width="80"><label for="upload">{#advimage_dlg.upload}</label></td>
				<td width="274"><input type="file" name="userfile" id="upload" size="32"></td>
				<td width="*"><input id="insert" type="submit" name="upload" value="Upload" onClick="document.wzbrowser.action='<?=$wz_image;?>upload/<?=$src?>';"></td>
			</tr>
		</table>			
		</fieldset><!-- end leftcolumn -->
		
		<fieldset class="rightColumn">
			<legend>{#advimage_dlg.preview}</legend>
			<div id="prev"></div>
			<input name="src" type="text" id="src" value="" onchange="ImageDialog.showPreviewImage(this.value);" />							
		</fieldset>

	</div><!-- end general panel -->

	<div id="appearance_panel" class="panel">
		<fieldset class="leftColumn">
			<legend>{#advimage_dlg.tab_appearance}</legend>

			<table border="0" cellpadding="4" cellspacing="0">
				<tr> 
					<td class="column1"><label id="altlabel" for="alt">{#advimage_dlg.alt}</label></td> 
					<td><input id="alt" name="alt" type="text" value="" /></td> 
				</tr> 
				<tr> 
					<td class="column1"><label id="titlelabel" for="title">{#advimage_dlg.title}</label></td> 
					<td><input id="title" name="title" type="text" value="" /></td> 
				</tr>
				<tr> 
					<td class="column1"><label id="alignlabel" for="align">{#advimage_dlg.align}</label></td> 
					<td><select id="align" name="align" onchange="ImageDialog.updateStyle();ImageDialog.changeAppearance();"> 
							<option value="">{#not_set}</option> 
							<option value="baseline">{#advimage_dlg.align_baseline}</option>
							<option value="top">{#advimage_dlg.align_top}</option>
							<option value="middle">{#advimage_dlg.align_middle}</option>
							<option value="bottom">{#advimage_dlg.align_bottom}</option>
							<option value="text-top">{#advimage_dlg.align_texttop}</option>
							<option value="text-bottom">{#advimage_dlg.align_textbottom}</option>
							<option value="left">{#advimage_dlg.align_left}</option>
							<option value="right">{#advimage_dlg.align_right}</option>
						</select> 
					</td>
					<td rowspan="6" valign="top">
						
					</td>
				</tr>

				<tr>
					<td class="column1"><label id="widthlabel" for="width">{#advimage_dlg.dimensions}</label></td>
					<td nowrap="nowrap">
						<input name="width" type="text" id="width" value="" size="5" maxlength="5" class="size" onchange="ImageDialog.changeHeight();" /> x 
						<input name="height" type="text" id="height" value="" size="5" maxlength="5" class="size" onchange="ImageDialog.changeWidth();" /> px
					</td>
				</tr>

				<tr>
					<td>&nbsp;</td>
					<td><table border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td><input id="constrain" type="checkbox" name="constrain" class="checkbox" /></td>
								<td><label id="constrainlabel" for="constrain">{#advimage_dlg.constrain_proportions}</label></td>
							</tr>
						</table></td>
				</tr>

				<tr>
					<td class="column1"><label id="vspacelabel" for="vspace">{#advimage_dlg.vspace}</label></td> 
					<td><input name="vspace" type="text" id="vspace" value="" size="3" maxlength="3" class="number" onchange="ImageDialog.updateStyle();ImageDialog.changeAppearance();" />
					</td>
				</tr>

				<tr> 
					<td class="column1"><label id="hspacelabel" for="hspace">{#advimage_dlg.hspace}</label></td> 
					<td><input name="hspace" type="text" id="hspace" value="" size="3" maxlength="3" class="number" onchange="ImageDialog.updateStyle();ImageDialog.changeAppearance();" /></td> 
				</tr>

				<tr>
					<td class="column1"><label id="borderlabel" for="border">{#advimage_dlg.border}</label></td> 
					<td><input id="border" name="border" type="text" value="" size="3" maxlength="3" class="number" onchange="ImageDialog.updateStyle();ImageDialog.changeAppearance();" /></td> 
				</tr>

				<tr>
					<td><label for="class_list">{#class_name}</label></td>
					<td><select id="class_list" name="class_list"></select></td>
				</tr>

				<tr>
					<td class="column1"><label id="stylelabel" for="style">{#advimage_dlg.style}</label></td> 
					<td colspan="2"><input id="style" name="style" type="text" value="" onchange="ImageDialog.changeAppearance();" /></td> 
				</tr>

				<!-- <tr>
					<td class="column1"><label id="classeslabel" for="classes">{#advimage_dlg.classes}</label></td> 
					<td colspan="2"><input id="classes" name="classes" type="text" value="" onchange="selectByValue(this.form,'classlist',this.value,true);" /></td> 
				</tr> -->
			</table>
		
		</fieldset>
	
	</div><!-- end appearance panel -->
	
</div> <!-- end panel_wrapper -->

<div class="mceActionPanel">
	<div style="float: left">
		<input type="button" id="insert" name="insert" value="{#insert}" onclick="ImageDialog.insert();" />
	</div>
	<div style="float: right">
		<input type="button" id="cancel" name="cancel" value="{#cancel}" onclick="tinyMCEPopup.close();" />
	</div>
</div>
</form>
</body> 
</html>
