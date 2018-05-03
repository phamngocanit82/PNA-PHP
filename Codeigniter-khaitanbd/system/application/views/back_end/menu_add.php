	<div id="div_left_margin">				
		<ul>
			<li class="li_title">Danh mục sản phẩm</li>
			<li class="menu_item_click"><a href="<?=base_url()?>admin/menu/add">Thêm danh mục</a></li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/menu/all">Danh sách danh mục</a></li>	
		</ul>
	</div>								
</div>

<div id ="div_right">		
	<ul>
		<li class="li_title">Thêm danh mục</li>
		<li>
			<form method="post" action="<?=base_url()?>admin/menu/add">
				<table class="table_add" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="100px"><b>Tên danh mục<span class="note">(*)</span></b></td>
						<td><input class="input_text" type="text" name="name" value="<?=$name?>"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="button" type="submit" value="Lưu"/></td>
					</tr>						
				</table>
				<table class="table_list" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<th width="64px" class="th_left"><?=lang('no')?></th>
						<th class="th_left">Tên danh mục sản phẩm</th>
					</tr>
					<?php 	
					if($menu)
						for($i=0; $i<count($menu); $i++){
							$row = $menu[$i];
					?>
					<tr>
						<td class="rows_left">&nbsp;<?=$i+1?></td>
						<td class="rows_left">&nbsp;<?=$row->name?></td>
					</tr>
					<?php			
						}
					?>	
					<tr>
						<td colspan="2" class="rows_page"><?=$this->pagination->create_links()?></td>
					</tr>
				</table>
			</form>		
		</li>
	</ul>
</div>