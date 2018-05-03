<script type="text/javascript" src="<?=base_url()?>scripts/highslide/highslide-with-gallery.js"></script>
<script type="text/javascript" src="<?=base_url()?>scripts/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>scripts/fade_image.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>scripts/highslide/highslide.css" />
<script type="text/javascript">
	hs.graphicsDir = '<?=base_url()?>scripts/highslide/graphics/';
	hs.creditsText = '';
	hs.creditsTitle = 'phamngocanthi@yahoo.com';
    hs.creditsHref = '#';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.outlineType = 'glossy-dark';
	hs.wrapperClassName = 'dark';
	hs.fadeInOut = true;
	//hs.dimmingOpacity = 0.75;

	// Add the controlbar
	if (hs.addSlideshow) hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: .6,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});
</script>

<link rel="stylesheet" href="<?=base_url()?>scripts/thickbox/thickbox.css" type="text/css" media="screen"/>
<script type="text/javascript" src="<?=base_url()?>scripts/thickbox/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>scripts/thickbox/thickbox.js"></script>	

<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?=lang('answer')?>");
	if (answer){
		window.location = "<?=base_url()?>admin/product/delete/"+id;
	}
}
function edit_product(idcategory,id,name,code,quality,description,price,lock){	
	document.getElementById('idcategory').value = idcategory;	
	document.getElementById('id_edit').value = id;	
	document.getElementById('name_edit').value = name;	
	document.getElementById('code_edit').value = code;
	document.getElementById('quality_edit').value = quality;
	document.getElementById('description_edit').value = description;
	document.getElementById('price_edit').value = price;
	document.getElementById('lock_edit').checked = !lock  ;		
}
function edit_check(){
	if(!document.getElementById('name_edit').value)
		alert('<?=lang('edit_check')?>');
}
</script>
	<div id="div_left_margin">				
		<ul>
			<li class="li_title"><?=lang('product')?></li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/product/add"><?=lang('product_add')?></a></li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/product/all"><?=lang('product_list')?></a></li>	
			<li class="menu_item_click"><a href="<?=base_url()?>admin/product/discount">Bao dệt PP</a></li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/product/promotion">Bao nylon PE</a></li>	
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/product/newproduct">Đồng phục</a></li>
		</ul>
	</div>								
</div>						

<div id ="div_right">		
	<ul>
		<li class="li_title"><?=lang('product_list')?> giảm giá</li>
		<li>
			<table class="table_add" border="0" cellspacing="0">
				<tr>
					<td width="70px"><b><?=lang('search')?></b></td>
					<td><input class="input_text" type="text" name="search" value=""/></td>		
				</tr>	
				<tr>
					<td></td>
					<td><input class="button" type="submit" name="login_signin" value="<?=lang('search')?>"/></td>		
				</tr>	
			</table>
			<table class="table_list" border="0" cellspacing="0">
				<tr>
					<th width="64px" class="th_left"><?=lang('no')?></th>
					<th width="501px" class="th_left">Thông tin sản phẩm</th>
					<th width="100px" class="th_left">Mã sản phẩm</th>
					<th class="th_right">Giảm giá</th>
				</tr>
				<?php 	
				if($product)	
					$idcategory = '';
					$j=0;
					for($i=0; $i<count($product); $i++){
						$row = $product[$i];
						if($idcategory!=$row->idcategorytmp ){
							$idcategory = $row->idcategorytmp ;
							$j = 0;
							if($row->namecategory){
						?>
				<tr>	
					<td colspan="4" style="background-color:#a2a1a1;border-left:solid 1px #ffffff;border-right:solid 1px #ffffff;border-bottom:solid 1px #ffffff;"><b>&nbsp;&nbsp;<?=$row->namecategory ?></b></td>
				</tr>	
						<?php
							}
							else{
						?>
				<tr>	
					<td colspan="4" style="background-color:#5077f8;border-left:solid 1px #ffffff;border-right:solid 1px #ffffff;border-bottom:solid 1px #ffffff;"><b>&nbsp;&nbsp;<?=$row->namemenu ?></b></td>
				</tr>	
						<?php
							}
						}
						$j = $j +1;
						if($row->id){
				?>
				<tr>
					<td valign="top" style="background-color:#b2d6de;border-left:solid 1px #ffffff;border-right:solid 1px #ffffff;border-bottom:solid 1px #ffffff;">&nbsp;<?=$j?></td>
					<td valign="top" style="background-color:#b2d6de;border-left:solid 1px #ffffff;border-right:solid 1px #ffffff;border-bottom:solid 1px #ffffff;">
					<div style="float:left;width:80px;padding:5px;">
						<a href="<?=base_url()?>/<?=$row->image?>" class="highslide" onclick="return hs.expand(this)">
							<img src="<?=base_url()?>/<?=$row->image?>" border="0" width="70px" height="70px"/>
						</a>
					</div>
					<div style="float:left;width:400px">
						<p style="margin-top:5px;"><b>Tên sản phẩm : </b><?=$row->name?></p>
						<p style="margin-top:5px;"><b>Nguyên liệu : </b><?=$row->quality?></p>
						<p style="margin-top:5px;"><b>Mô tả : </b><?=$row->description?></p>
						<p style="margin-top:5px;margin-bottom:5px;"><b>Giá tiền : </b><?=number_format(floor($row->price))?> vnđ</p>
					</div>
						
					</td>
					<td valign="top" style="background-color:#b2d6de;border-left:solid 1px #ffffff;border-right:solid 1px #ffffff;border-bottom:solid 1px #ffffff;"><b>&nbsp;<?=$row->code?></b></td>
					<?php
					if($row->flag_discounts==1){
					?>
					<td valign="top" align="center" style="color:#fff;background-color:#56b44c;border-left:solid 1px #ffffff;border-right:solid 1px #ffffff;border-bottom:solid 1px #ffffff;">
						<a href="<?=base_url()?>admin/product/checkdiscount/<?=$page?>/<?=$row->id?>/0"><b>Không</b></a>
					</td>
					<?php
					}
					else{
					?>
					<td valign="top" align="center" style="color:#000;background-color:#b2d6de;border-left:solid 1px #ffffff;border-right:solid 1px #ffffff;border-bottom:solid 1px #ffffff;">
						<a href="<?=base_url()?>admin/product/checkdiscount/<?=$page?>/<?=$row->id?>/1"><b>Có</b></a>
					</td>
					<?php
					}
					?>					
				</tr>
				<?php
						}
					}
				?>	
				<tr>
					<td colspan="3" class="rows_page"><?=$this->pagination->create_links()?></td>
					<td class="rows_page_right">
						<input type="checkbox" name="lock" id="lock" value="1"/>
						&nbsp;
						<?php 	
						if($product){
						?>
						<a href="#" onclick="CheckDelete(<?=$row->id?>)"><img src="<?=base_url()?>images/style01/delete.png" border="0" alt="<?=lang('delete')?>"/></a>
						<?php			
						}
						?>
					</td>
				</tr>
			</table>
			<?php 	
			if($product){
			?>
			<div id="admin_id_edit" style="display:none" align="center">
				<form class="admin_category" id="admin_category" method="post" action="<?=base_url()?>admin/product/edit/<?=$page?>">
					<table width="460px" border="0" >
						<tr>
							<td><b>Nhóm sản phẩm</b></td>
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
								<option value="m<?=$row->id?>" style="background:#ffffff;" <?php	echo($this->validation->set_select('idcategory', 'm'.$row->idcategory))?>><?=$row->name?></option>
								<?php 
									}
								}
								?>
							</select>
							</td>
						</tr>
						<tr>
							<td width="110px"><b>Tên sản phẩm<span style="color:#ff0000;">(*)</span></b></td>
							<td>
								<input class="input_text_edit" type="hidden" name="id_edit" id="id_edit" value=""/>
								<input class="input_text_edit" type="text" name="name_edit" id="name_edit" value=""/>
							</td>
						</tr>
						<tr>
							<td><b>Mã sản phẩm</b></td>
							<td><input class="input_text_edit" type="text" name="code_edit"  id="code_edit" value=""/></td>
						</tr>
						<tr>
							<td valign="top"><b><?=lang('product_quality')?></b></td>
							<td><textarea class="input_textarea" style="width:350px;height:80px;"  name="quality_edit" id="quality_edit"></textarea></td>
						</tr>
						<tr>
							<td valign="top"><b><?=lang('description')?></b></td>
							<td><textarea class="input_textarea" style="width:350px;height:80px;" name="description_edit" id="description_edit"></textarea></td>
						</tr>
						<tr>
							<td><b>Giá</b></td>
							<td>
								<input class="input_text_edit" style="width:100px;" type="text" name="price_edit"  id="price_edit" value=""/>
								<select>
								<option value="1" style="background:#ffffff;">vnđ</option>
								</select>
							</td>
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