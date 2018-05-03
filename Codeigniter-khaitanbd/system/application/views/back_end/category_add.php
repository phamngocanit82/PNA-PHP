	<div id="div_left_margin">				
		<ul>
			<li class="li_title">Nhóm sản phẩm</li>
			<li class="menu_item_click"><a href="<?=base_url()?>admin/category/add">Thêm nhóm</a></li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/category/all">Danh sách nhóm</a></li>	
		</ul>
	</div>								
</div>

<div id ="div_right">		
	<ul>
		<li class="li_title">Thêm nhóm</li>
		<li>
			<form method="post" action="<?=base_url()?>admin/category/add">
				<table class="table_add" border="0" cellspacing="0" cellpadding="0">
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
						<td width="130px"><b>Tên nhóm<span class="note">(*)</span></b></td>
						<td><input class="input_text" type="text" name="name" value="<?=$name?>"/></td>
					</tr>
					<tr>
						<td><b><?=lang('category_code')?></b></td>
						<td><input class="input_text" type="text" name="code" value="<?=$code?>"/></td>
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
				<table class="table_list" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th width="64px" class="th_left"><?=lang('no')?></th>
					<th width="501px" class="th_left"><?=lang('category_name')?></th>
					<th width="100px" class="th_left"><?=lang('category_code')?></th>
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
						if($row->namecategory){
				?>
				<tr>
					<td class="rows_left">&nbsp;<?=$j?></td>
					<td class="rows_left">&nbsp;<?=$row->namecategory?></td>
					<td class="rows_left">&nbsp;<?=$row->code?></td>
				</tr>
				<?php
						}
					}
				?>	
				<tr>
					<td colspan="4" class="rows_page"><?=$this->pagination->create_links()?></td>
				</tr>
			</table>
			</form>		
		</li>
	</ul>
</div>