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
		window.location = "<?=base_url()?>admin/logo/delete/"+id;
	}
}
</script>
	<div id="div_left_margin">				
		<ul>
			<li class="li_title">Logo</li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/logo/add">Thêm logo</a></li>
			<li class="menu_item_click"><a href="<?=base_url()?>admin/logo/all">Danh sách logo</a></li>	
		</ul>
	</div>								
</div>						

<div id ="div_right">		
	<ul>
		<li class="li_title">Danh sách logo</li>
		<li>
			<table class="table_list" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th width="64px" class="th_left"><?=lang('no')?></th>
					<th width="601px" class="th_left">Hình ảnh<span style="color:#ff0000;"> (kích thước 820x200)</th>
					<th class="th_right">&nbsp;</th>
				</tr>
				<?php 	
				if($logo)
					for($i=0; $i<count($logo); $i++){
						$row = $logo[$i];
				?>
				<tr>
					<td style="background-color:#b2d6de;border-left:solid 1px #e8e6e6;border-bottom:solid 1px #e8e6e6;">&nbsp;<?=$i+1?></td>
					<td valign="top" style="background-color:#b2d6de;border-left:solid 1px #e8e6e6;border-bottom:solid 1px #e8e6e6;">
						<div >
							<a href="<?=base_url()?>/<?=$row->image?>" class="highslide" onclick="return hs.expand(this)">
								<img src="<?=base_url()?>/<?=$row->image?>" border="0" width="400px" height="90px"/>
							</a>
						</div>
					</td>
					<td style="background-color:#b2d6de;border-left:solid 1px #e8e6e6;border-right:solid 1px #e8e6e6;border-bottom:solid 1px #e8e6e6;">
						<a href="#" onclick="CheckDelete(<?=$row->id?>)"><img src="<?=base_url()?>images/style01/delete.png" border="0" alt="<?=lang('delete')?>"/></a>
						&nbsp;
					</td>
				</tr>
				<?php			
					}
				?>	
				<tr>
					<td colspan="2" class="rows_page"><?=$this->pagination->create_links()?></td>
					<td class="rows_page_right">
					<?php
					if($logo){
					?>
						<a href="#"><img src="<?=base_url()?>images/style01/delete.png" border="0" alt="<?=lang('delete')?>"/></a>
					<?php
					}
					?>
					</td>
				</tr>
			</table>
		</li>
	</ul>
</div>