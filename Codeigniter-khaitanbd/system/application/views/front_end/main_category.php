<link rel="stylesheet" href="<?=base_url()?>scripts/thickbox/thickbox.css" type="text/css" media="screen"/>
<script type="text/javascript" src="<?=base_url()?>scripts/thickbox/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>scripts/thickbox/thickbox.js"></script>	
<div id="righter">
	<table border="0px" width="100%" style="margin-bottom:15px;font-size:14px;background-color:#f7f3f7;border:solid 1px #799ebb;-webkit-border-radius: 5px;-moz-border-radius: 5px;">
	<?php 
		if(substr($id,0,1)=='m'){
			$menu_category = $this->menu_model->get_menu_id(substr($id,1));
			if($menu_category){
			?>	
				<tr>
				<td colspan="4" align="left">
					<div>
						<div style="float:left;margin-top:5px;margin-bottom:5px;border-bottom:2px solid #a9a9a9;"><b style="font-style:italic;font-size:13px;color:#f69a18;">SẢN PHẨM</b>&nbsp;&nbsp;&nbsp;<b style="font-size:12px;color:#5c5c5c;"><?=$menu_category->name?></b></div>
					</div>
				</td>						
				</tr>
	<?php
			}
		}
		else{
			$category = $this->category_model->get_category_id($id);
			if($category){
	?>	
				<tr>
				<td colspan="4" align="left">
					<div>
						<div style="float:left;margin-top:5px;margin-bottom:5px;border-bottom:2px solid #a9a9a9;"><b style="font-style:italic;font-size:13px;color:#f69a18;">SẢN PHẨM</b>&nbsp;&nbsp;&nbsp;<b style="font-size:12px;color:#5c5c5c;"><?=$category->name?></b></div>
					</div>
				</td>						
				</tr>
	<?php
			}
		}
		if($product){	
			for($i=0; $i<count($product);){
				if($i<count($product)){
					?>
					<tr>
					<?php
					for($j=0; $j<4;$j++){
						if($i<count($product)){
							$rows = $product[$i];
						?>
						<td width="25%" align="center" valign="top"style="padding-top:6px;">
							<div style="width:150px;height:220px;background-color:#ffffff;border:solid 1px #a9a9a9;">
								<table style="margin-top:5px;height:130px;" align="center">
									<tr>
										<td >
											<a href="<?=base_url()?><?=$rows->image?>" class="highslide" onclick="return hs.expand(this)">
												<img  style="width:100px;height:120px;border-right:groove 2px #5b6d75;border-bottom:outset 2px #5b6d75;" src="<?=base_url()?><?=$rows->image?>"/>
											</a>
										</td>
									</tr>
								</table>	
								<div align="center">
									<small style="font-size:13px;font-weight:bold;color:#0066cc;"><?=$rows->name?></small>
								</div>	
								<?php
								if($rows->code>0){
								?>
								<div  align="left"style="margin:2px 3px 2px 3px;">
									<small style="font-size:11px;color:#003366;"><b>Giá cả :</b> <?=$rows->code?></small>
								</div>
								<?php
								}
								?>
								<div align="left" style="margin:0px 2px 2px 3px;">
									<small style="font-size:11px;color:#003366;"><b>Mã số :</b> <?=$rows->code?></small>
								</div>
								<div align="left" style="margin:0px 2px 2px 3px;">
									<small style="font-size:11px;color:#003366;"><b>Mô tả :</b><?php echo(checkLength($rows->description,40))?></small>
								</div>	
								<div style="margin:0px 8px 2px 3px;" align="right">
									<a href="#"><small style="font-size:11px;color:#009900;"><b>Chi tiết</b></small></a>
								</div>					
							</div>
						</td>
						<?php
							$i = $i +1;
						}	
						else{
						?>
							<td width="25%" align="center" valign="top"style="padding-top:6px;">
							</td>
						<?php
						}
					}
					?>
					</tr>
					<?php
				}
				else 
					$i = $i +1;
			}		
		}
		else{
	?>
		<tr>
			<td colspan="4" align="left">
				&nbsp;
			</td>						
		</tr>
		<tr>
			<td colspan="4" align="left">
				<b>&nbsp;&nbsp;Đang cập nhật dữ liệu</b>
			</td>						
		</tr>
	<?php
		}
	?>
		<tr>
			<td colspan="4" align="right">
				<div>
					<div style="float:left;"></div>
					<div style="float:right;width:630px;"><label style="font-size:12px;color:#5c5c5c;"><?=$this->pagination->create_links()?> &nbsp;</label></div>
				</div>
			</td>						
		</tr>
	</table>

    
</div>