<?php
include("scripts/fckeditor/fckeditor.php") ;
//config upload image editor/filemanager/php/config.php
?>
<script language="javascript" type="text/javascript">
function change_small_picture(){
	if(document.getElementById('href_small_picture').style.display == 'none'){
		document.getElementById('href_small_picture').style.display = 'block';
		document.getElementById('hidden_href_small_picture').value = 'block';
		document.getElementById('small_picture').style.display = 'none';
	}
	else{
		document.getElementById('href_small_picture').style.display = 'none';
		document.getElementById('hidden_href_small_picture').value = 'none';		
		document.getElementById('small_picture').style.display = 'block';		
	}			
}
function change_large_picture(){
	if(document.getElementById('href_large_picture').style.display == 'none'){
		document.getElementById('href_large_picture').style.display = 'block';
		document.getElementById('hidden_href_large_picture').value = 'block';
		document.getElementById('large_picture').style.display = 'none';
	}
	else{
		document.getElementById('href_large_picture').style.display = 'none';
		document.getElementById('hidden_href_large_picture').value = 'none';
		document.getElementById('large_picture').style.display = 'block';
		
	}		
}
function change_small_picture_edit(){
	if(document.getElementById('href_small_picture_edit').style.display == 'none'){
		document.getElementById('href_small_picture_edit').style.display = 'block';
		document.getElementById('hidden_href_small_picture_edit').value = 'block';
		document.getElementById('small_picture_edit').style.display = 'none';
	}
	else{
		document.getElementById('href_small_picture_edit').style.display = 'none';
		document.getElementById('hidden_href_small_picture_edit').value = 'none';		
		document.getElementById('small_picture_edit').style.display = 'block';		
	}			
}
function change_large_picture_edit(){
	if(document.getElementById('href_large_picture_edit').style.display == 'none'){
		document.getElementById('href_large_picture_edit').style.display = 'block';
		document.getElementById('hidden_href_large_picture_edit').value = 'block';
		document.getElementById('large_picture_edit').style.display = 'none';
	}
	else{
		document.getElementById('href_large_picture_edit').style.display = 'none';
		document.getElementById('hidden_href_large_picture_edit').value = 'none';
		document.getElementById('large_picture_edit').style.display = 'block';
		
	}		
}
function CheckDelete(id){	
	var answer  = confirm("<?=lang('answer')?>");
	if (answer){
		window.location = "<?=base_url()?>admin/news/delete/"+id;
	}
}
function edit_news(id,name,code){	
	document.getElementById('id_edit').value = id;	
	document.getElementById('name_edit').value = name;	
	document.getElementById('code_edit').value = code;	
}
function edit_check(){
	if(!document.getElementById('name_edit').value)
		alert('<?=lang('edit_check')?>');
}
</script>

<div id="div_left_margin">				
		<ul>
			<li class="li_title"><?=lang('news')?></li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/news/add"><?=lang('news_add')?></a></li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/news/all"><?=lang('news_list')?></a></li>	
		</ul>
	</div>								
</div>

<div id ="div_right">		
	<ul>
		<li class="li_title">Chỉnh sửa tin tức</li>
		<li>
			<form method="post" action="<?=base_url()?>admin/news/save_edit/<?=$id?>">
				<table class="table_add" border="0" cellspacing="0">
					<tr>
						<td width="80px"><b><?=lang('title')?><span class="note">(*)</span></b></td>
						<td><input class="input_text" style="width:643px;" type="text" name="title"  value="<?=$title?>"/></td>
					</tr>
					<tr>
						<td valign="top"><b><?=lang('content')?></b></td>
						<td>
							<?php
							$oFCKeditor = new FCKeditor('description') ;
							$oFCKeditor->BasePath = base_url().'scripts/fckeditor/';
							$oFCKeditor->Value		=  $description ;
							$oFCKeditor->Width = '650';
							$oFCKeditor->Height = '650';						
							$oFCKeditor->Create() ;
							?>
						</td>
					</tr>
					
					<tr>
						<td><b><?=lang('show')?></b></td>
						<td><input type="checkbox" name="lock" id="lock" value="1" <?php if($lock)echo('checked="checked"');?>/></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="button" type="submit" value="Lưu"/></td>
					</tr>						
				</table>
			</form>		
		</li>
	</ul>
</div>