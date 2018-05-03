	<div id="div_left_margin">				
		<ul>
			<li class="li_title">Logo</li>
			<li class="menu_item_click"><a href="<?=base_url()?>admin/logo/add">Thêm logo</a></li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/logo/all">Danh sách logo</a></li>
		</ul>
	</div>								
</div>	

<div id ="div_right">		
	<ul>
		<li class="li_title">Thêm logo</li>
		<li>
			<form method="post" action="<?=base_url()?>admin/logo/add" enctype="multipart/form-data">
				<table class="table_add" border="0" cellspacing="0">
					<tr>
						<td><b><?=lang('picture')?></b><span style="color:#ff0000;"> (kích thước 820x200)</span></td>
						<td><input class="input_file" type="file" name="image_photo" id="image_photo"/></td>
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