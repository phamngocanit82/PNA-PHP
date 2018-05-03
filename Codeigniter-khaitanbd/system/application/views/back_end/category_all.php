<link rel="stylesheet" href="<?=base_url()?>scripts/thickbox/thickbox.css" type="text/css" media="screen"/>
<script type="text/javascript" src="<?=base_url()?>scripts/thickbox/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>scripts/thickbox/thickbox.js"></script>	
<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("Xoa du lieu");
	if (answer){
		window.location = "<?=base_url()?>admin/category/delete/"+id;
	}
}
function edit_category(menu,id,name,code,lock){
	document.getElementById('menu').value = menu;
	document.getElementById('id_edit').value = id;	
	document.getElementById('name_edit').value = name;	
	document.getElementById('code_edit').value = code;
	document.getElementById('lock_edit').checked = !lock  ;		
}
function edit_check(){
	if(!document.getElementById('name_edit').value)
		alert('<?=lang('edit_check')?>');
}
</script>
	<div id="div_left_margin">				
		<ul>
			<li class="li_title">Nhóm sản phẩm</li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/category/add">Thêm nhóm</a></li>
			<li class="menu_item_click"><a href="<?=base_url()?>admin/category/all">Danh sách nhóm</a></li>	
		</ul>
	</div>								
</div>						

<div id ="div_right">		
	<ul>
		<li class="li_title"><?=lang('category_list')?></li>
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
					<th width="501px" class="th_left"><?=lang('category_name')?></th>
					<th width="100px" class="th_left"><?=lang('category_code')?></th>
					<th class="th_right">&nbsp;</th>
				</tr>
				<?php 	
				if($category)	
					$idmenu = '';
					$j=0;
					for($i=0; $i<count($category); $i++){
						$row = $category[$i];
						if($idmenu!=$row->id){
							$idmenu = $row->id;
							$j = 0;
						?>
				<tr>	
					<td colspan="4" style="background-color:#a2a1a1;border-left:solid 1px #ffffff;border-right:solid 1px #ffffff;border-bottom:solid 1px #ffffff;"><b>&nbsp;&nbsp;<?=$row->name?></b></td>
				</tr>	
						<?php
						}
						$j = $j +1;
						if($row->idcategory){
				?>
				<tr>
					<td class="rows_left">&nbsp;<?=$j?></td>
					<td class="rows_left">&nbsp;<?=$row->namecategory?></td>
					<td class="rows_left">&nbsp;<?=$row->code?></td>
					<td class="rows_right">
						<input type="checkbox" name="lock" id="lock" value="1"/>
						&nbsp;
						<a href="#" onclick="CheckDelete(<?=$row->idcategory?>)"><img src="<?=base_url()?>images/style01/delete.png" border="0" alt="<?=lang('delete')?>"/></a>
						&nbsp;
						<a onclick="edit_category('<?=$row->id?>','<?=$row->idcategory?>','<?=$row->namecategory?>','<?=$row->code?>',<?=$row->lock?>);" href="<?=base_url()?>admin/category/#TB_inline?height=155&width=470&inlineId=admin_id_edit" class="thickbox" title="Chỉnh sửa nhóm sản phẩm">
							<img src="<?=base_url()?>images/style01/edit.png" border="0" alt="<?=lang('edit')?>"/>
						</a>
					</td>
				</tr>
				<?php
						}
					}
				?>	
				<tr>
					<td colspan="3" class="rows_page"><?=$this->pagination->create_links()?></td>
					<td class="rows_page_right">
					<?php
					if($category){
					?>
						<input type="checkbox" name="lock" id="lock" value="1"/>
						&nbsp;
						<a href="#" onclick="CheckDelete(<?=$row->id?>)"><img src="<?=base_url()?>images/style01/delete.png" border="0" alt="<?=lang('delete')?>"/></a>
					<?php 
					}
					?>
					</td>
				</tr>
			</table>
			<?php 	
			if($category){
			?>
			<div id="admin_id_edit" style="display:none" align="center">
				<form class="admin_category" id="admin_category" method="post" action="<?=base_url()?>admin/category/edit/<?=$page?>">
					<table width="460px" border="0" >
						<tr>
							<td><b>Tên danh mục</b></td>
							<td>
							<select id="menu" name="menu" class="select">
							<?php 	
							for($i=0; $i<count($menu); $i++){
								$row = $menu[$i];
							?>
								<option value="<?=$row->id?>" style="background:#ffffff;" <?php	echo($this->validation->set_select('menu', $row->id))?>><?=$row->name?></option>
							<?php 
							}
							?>
							</select>
							</td>
						</tr>
						<tr>
							<td width="110px"><b>Tên nhóm<span style="color:#ff0000;">(*)</span></b></td>
							<td>
								<input class="input_text_edit" type="hidden" name="id_edit" id="id_edit" value=""/>
								<input class="input_text_edit" type="text" name="name_edit" id="name_edit" value=""/>
							</td>
						</tr>
						<tr>
							<td><b>Mã nhóm</b></td>
							<td><input class="input_text_edit" type="text" name="code_edit"  id="code_edit" value=""/></td>
						</tr>
						<tr>
							<td><b><?=lang('show')?></b></td>
							<td><input type="checkbox" name="lock_edit"  id="lock_edit" value="1"/></td>
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