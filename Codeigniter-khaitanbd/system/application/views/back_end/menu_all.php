<link rel="stylesheet" href="<?=base_url()?>scripts/thickbox/thickbox.css" type="text/css" media="screen"/>
<script type="text/javascript" src="<?=base_url()?>scripts/thickbox/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>scripts/thickbox/thickbox.js"></script>	
<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("Xoa du lieu");
	if (answer){
		window.location = "<?=base_url()?>admin/menu/delete/"+id;
	}
}
function edit_menu(id,name){	
	document.getElementById('id_edit').value = id;	
	document.getElementById('name_edit').value = name;		
}
function edit_check(){
	if(!document.getElementById('name_edit').value)
		alert('Du lieu khong the cap nhat');
}
</script>
	<div id="div_left_margin">				
		<ul>
			<li class="li_title">Danh mục sản phẩm</li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/menu/add">Thêm danh mục</a></li>
			<li class="menu_item_click"><a href="<?=base_url()?>admin/menu/all">Danh sách danh mục</a></li>	
		</ul>
	</div>								
</div>						

<div id ="div_right">		
	<ul>
		<li class="li_title">Danh sách danh mục</li>
		<li>
			<table class="table_add" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="70px"><b><?=lang('search')?></b></td>
					<td><input class="input_text" type="text" name="search" value=""/></td>		
				</tr>	
				<tr>
					<td></td>
					<td><input class="button" type="submit" name="login_signin" value="<?=lang('search')?>"/></td>		
				</tr>	
			</table>
			<table class="table_list" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th width="64px" class="th_left"><?=lang('no')?></th>
					<th width="601px" class="th_left">Tên danh mục sản phẩm</th>
					<th class="th_right">&nbsp;</th>
				</tr>
				<?php 	
				if($menu)
					for($i=0; $i<count($menu); $i++){
						$row = $menu[$i];
				?>
				<tr>
					<td class="rows_left">&nbsp;<?=$i+1?></td>
					<td class="rows_left">&nbsp;<?=$row->name?></td>
					<td class="rows_right">
						<a href="#" onclick="CheckDelete(<?=$row->id?>)"><img src="<?=base_url()?>images/style01/delete.png" border="0" alt="<?=lang('delete')?>"/></a>
						&nbsp;
						<a onclick="edit_menu('<?=$row->id?>','<?=$row->name?>');" href="<?=base_url()?>admin/category/#TB_inline?height=120&width=470&inlineId=admin_id_edit" class="thickbox" title="Chỉnh sửa danh mục">
							<img src="<?=base_url()?>images/style01/edit.png" border="0" alt="<?=lang('edit')?>"/>
						</a>
					</td>
				</tr>
				<?php			
					}
				?>	
				<tr>
					<td colspan="2" class="rows_page"><?=$this->pagination->create_links()?></td>
					<td class="rows_page_right">
					<?php
					if($menu){
					?>
						<a href="#"><img src="<?=base_url()?>images/style01/delete.png" border="0" alt="<?=lang('delete')?>"/></a>
					<?php
					}
					?>
					</td>
				</tr>
			</table>
			<?php 
				if($menu){
			?>
			<div id="admin_id_edit" style="display:none" align="center">
				<form class="admin_menu" id="admin_menu" method="post" action="<?=base_url()?>admin/menu/edit/<?=$page?>">
					<table width="460px" border="0" style="margin-top:30px;">
						<tr>
							<td width="110px"><b>Tên danh mục<span style="color:#ff0000;">(*)</span></b></td>
							<td>
								<input class="input_text_edit" type="hidden" name="id_edit" id="id_edit" value=""/>
								<input class="input_text_edit" type="text" name="name_edit" id="name_edit" value=""/>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input onclick="edit_check();" class="button" type="submit" value="Lưu"/></td>
						</tr>						
					</table>	
				</form>
			</div>
			<?php 
			}
			?>
		</li>
	</ul>
</div>