<script type="text/javascript" src="<?=base_url()?>scripts/menu/fsmenu.js"></script>
<link href="<?=base_url()?>css/menu/listmenu_fallback.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>css/menu/divmenu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	//<![CDATA[
	// This menu does 'work' in v4+ browsers, but I recommend the above UL/LI menu system
	// as it simpler, cleaner and more elegant.
	// With this divMenu object, 'false' means the menu elements are not nested.
	var divMenu = new FSMenu('divMenu', false, 'visibility', 'visible', 'hidden');
	divMenu.cssLitClass = 'highlighted';
	divMenu.animInSpeed = 1;
	divMenu.animOutSpeed = 1;
	// The other optional settings and animation functions will work here too.
	//]]>
</script>

		<div id="lefter">
    				<table style="font-size:12px;" border="0px" width="100%" cellpadding="0" cellspacing="0">
	    				<tr>
							<td align="center" valign="middle" class="left_bg" style="border-bottom:1px solid #fff;">
								<b style="font-size:14px;color:#ffffff;">Danh mục sản phẩm</b>
							</td>						
						</tr>
					<?php 	
					if($menu)
						for($i=0; $i<count($menu); $i++){
							$row = $menu[$i];
							$categorys = $this->category_model->get_idmenu($row->id);
					?>
						<tr>
							<td class="left_border" align="left" valign="top">
								<?php
								if(!$categorys){
								?>
								<div class="mainnav">
									<a href="<?=base_url()?>main/category/m<?=$row->id?>" onmouseover="divMenu.show('menu<?php echo($row->id);?>', this, 209, 1)" onmouseout="divMenu.hide('menu<?php echo($row->id);?>')">
									&nbsp;&nbsp;<?php echo($row->name);?></a>
								</div>
								<?php
								}
								else {
								?>
								<div class="mainnav">
									<a href="#" onmouseover="divMenu.show('menu<?php echo($row->id);?>', this, 209, 1)" onmouseout="divMenu.hide('menu<?php echo($row->id);?>')">
									&nbsp;&nbsp;<?php echo($row->name);?></a>
								</div>
								<?php
								}
								if($categorys){
								?>
								<div id="menu<?=$row->id?>" class="menudiv" style="width: 205px;">
									 <div>
	 									<ul class="subnav">
											<li>
											<?php
												foreach($categorys as $category){
											?>
												<a href="<?=base_url()?>main/category/<?=$category->id?>">&nbsp;&nbsp;<?php echo($category->name);?></a>
											<?php
											}
											?>
											</li>				
										</ul>

	 								</div>
								</div>
								<?php
								}
								?>
							</td>						
						</tr>
					<?php
					}
					?>	
    				</table>
    				<?php
					$productnew = $this->product_model->get_product_new();
					$path='';
					if($productnew){
						for ($i=0;$i<count($productnew);$i++){
  								$row = $productnew[$i];
  								$path = $path.'p'.$i.'='.base_url().$row->image;
  								if($i<count($productnew)-1)
  									$path = $path.'&';
						}
  					?>
    				<table style="font-size:12px;margin-top:15px;background-color:#f7f3f7;" border="0px" width="100%" cellpadding="0" cellspacing="0">
	    				<tr>
							<td align="center" valign="middle" class="left_bg">
								<b style="font-size:14px;color:#ffffff;">Đồng phục</b>
							</td>						
						</tr>
						<tr>
							<td class="left_border" align="left" valign="top" height="212px">
								<div style="width:195px;height:200px;margin:5px;background:#000000;">
  									<ul>
										<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
	codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="195px" height="200px">		
		<param name='FlashVars' value="<?=$path?>"  />
		<param name="movie" value="<?=base_url()?>images/Untitled-2.swf" /><param name="quality" value="high" />
		<param name="bgcolor" value="#000000" />
		<param name="wmode" value="transparent" />
		<embed src="<?=base_url()?>images/Untitled-2.swf" FlashVars="<?=$path?>"  quality="high" type="application/x-shockwave-flash" width="195px" height="200px" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
  									</ul>
								</div>
							</td>						
						</tr>
    				</table>
    				<?php
					}
					?>
					<?php
					$productdiscount = $this->product_model->get_product_discount();
					$path='';
					if($productdiscount){
						for ($i=0;$i<count($productdiscount);$i++){
  								$row = $productdiscount[$i];
  								$path = $path.'p'.$i.'='.base_url().$row->image;
  								if($i<count($productdiscount)-1)
  									$path = $path.'&';
						}
  					?>
    				<table style="font-size:12px;margin-top:15px;background-color:#f7f3f7;" border="0px" width="100%" cellpadding="0" cellspacing="0">
	    				<tr>
							<td align="center" valign="middle" class="left_bg">
								<b style="font-size:14px;color:#ffffff;">Bao dệt PP</b>
							</td>						
						</tr>
						<tr>
							<td class="left_border" align="left" valign="top" height="212px">
								<div style="width:195px;height:200px;margin:5px;background:#000000;">
  									<ul>
  									<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
	codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="195px" height="200px">		
		<param name='FlashVars' value="<?=$path?>"  />
		<param name="movie" value="<?=base_url()?>images/Untitled-2.swf" /><param name="quality" value="high" />
		<param name="bgcolor" value="#ffffff" />
		<param name="wmode" value="transparent" />
		<embed src="<?=base_url()?>images/Untitled-2.swf" FlashVars="<?=$path?>"  quality="high" type="application/x-shockwave-flash" width="195px" height="200px" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
  									</ul>
								</div>
							</td>						
						</tr>
    				</table>
    				<?php
					}
					?>
					
					<?php
					$productpromotion = $this->product_model->get_product_promotion();
					$path='';
					if($productpromotion){
						for ($i=0;$i<count($productpromotion);$i++){
  								$row = $productpromotion[$i];
  								$path = $path.'p'.$i.'='.base_url().$row->image;
  								if($i<count($productpromotion)-1)
  									$path = $path.'&';
						}
  					?>
    				<table style="font-size:12px;margin-top:15px;background-color:#f7f3f7;" border="0px" width="100%" cellpadding="0" cellspacing="0">
	    				<tr>
							<td align="center" valign="middle" class="left_bg">
								<b style="font-size:14px;color:#ffffff;">Bao nylon PE</b>
							</td>						
						</tr>
						<tr>
							<td class="left_border" align="left" valign="top" height="212px">
								<div style="z-index:-1;width:195px;height:200px;margin:5px;background:#000000;">
  									<ul>
  									<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
	codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="195px" height="200px">		
		<param name='FlashVars' value="<?=$path?>"  />
		<param name="movie" value="<?=base_url()?>images/Untitled-2.swf" /><param name="quality" value="high" />
		<param name="bgcolor" value="#ffffff" />
		<param name="wmode" value="transparent" />
		<embed src="<?=base_url()?>images/Untitled-2.swf" FlashVars="<?=$path?>"  quality="high" type="application/x-shockwave-flash" width="195px" height="200px" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
  									</ul>
								</div>
							</td>						
						</tr>
    				</table>
    				<?php
					}
					?>
    				<table style="font-size:12px;margin-top:15px;" border="0px" width="100%" cellpadding="0" cellspacing="0">
	    				<tr>
							<td align="center" valign="middle" class="left_bg">
								<b style="font-size:14px;color:#ffffff;">Hổ trợ trực tuyến</b>
							</td>						
						</tr>
						<tr>
							<td class="left_border" align="center" valign="middle" height="45px">
								<a href="ymsgr:sendim?tuatmuc" ><img src="http://opi.yahoo.com/online?u=tuatmuc&m=g&t=2" alt="Lien" border=0 ></a>
							</td>
						</tr>

							</td>						
						</tr>
    				</table>
    				</br>
    			</div>