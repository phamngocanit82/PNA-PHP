	<div id="div_left_margin">				
		<ul>
			<li class="li_title"><?=lang('product')?></li>
			<li class="menu_item_click"><a href="<?=base_url()?>admin/product/add"><?=lang('product_add')?></a></li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/product/all"><?=lang('product_list')?></a></li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/product/discount">Bao dệt PP</a></li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/product/promotion">Bao nylon PE</a></li>	
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/product/newproduct">Đồng phục</a></li>
		</ul>
	</div>								
</div>	

<div id ="div_right">		
	<ul>
		<li class="li_title"><?=lang('product_add')?></li>
		<li>
			<form method="post" action="<?=base_url()?>admin/product/add" enctype="multipart/form-data">
				<table class="table_add" border="0" cellspacing="0">
					<tr>
						<td><b><?=lang('category')?></b></td>
						<td>
						<select id="idcategory" name="idcategory" class="select">
						<?php 	
						if($category)
							for($i=0; $i<count($category); $i++){
								$row = $category[$i];
								if($row->namecategory){
							?>
							<option value="<?=$row->idcategory?>" style="background:#ffffff;" <?php	echo($this->validation->set_select('idcategory', $row->idcategory))?>><?=$row->namecategory?></option>
							<?php 
								}
								else{
							?>
							<option value="m<?=$row->id?>" style="background:#ffffff;" <?php	echo($this->validation->set_select('idcategory', 'm'.$row->id))?>><?=$row->name?></option>
							<?php 
								}
							}
							?>
						</select>
						</td>
					</tr>
					<tr>
						<td><b><?=lang('picture')?></b></td>
						<td><input class="input_file" type="file" name="image_photo" id="image_photo"/></td>
					</tr>
					<tr>
						<td width="130px"><b><?=lang('product_name')?><span class="note">(*)</span></b></td>
						<td><input class="input_text" type="text" name="name" value="<?=$name?>"/></td>
					</tr>
					<tr>
						<td><b><?=lang('product_code')?></b></td>
						<td><input class="input_text" type="text" name="code" value="<?=$code?>"/></td>
					</tr>
					<tr>
						<td valign="top"><b><?=lang('product_quality')?></b></td>
						<td><textarea class="input_textarea" name="quality"><?=$quality?></textarea></td>
					</tr>
					<tr>
						<td valign="top"><b><?=lang('description')?></b></td>
						<td><textarea class="input_textarea" name="description"><?=$description?></textarea></td>
					</tr>	
					<tr>
						<td><b><?=lang('product_price')?></b></td>
						<td>
							<input class="input_text" style="width:150px;" type="text" name="price" value="<?=$price?>"/>&nbsp;
							<select>
								<option value="1" style="background:#ffffff;">vnđ</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><b><?=lang('show')?></b></td>
						<td><input type="checkbox" name="lock" id="lock" <?php if($lock)echo('checked="checked"');?>/></td>
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