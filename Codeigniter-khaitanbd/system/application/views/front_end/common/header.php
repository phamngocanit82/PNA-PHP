<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />		
	<meta name="robots" content="none" />		
	<meta name="keywords" content="khai tan" />
	<meta name="description" content="Khaitan,khaitanbd, quan ao, thoi trang, bao ho lao dong, .." />
	<meta name="copyright" content="Khai Tan" />
	<link rel="icon" href="./images/khaitanbd.ico" type="image/x-icon" />
	<link href="<?=base_url()?>/images/style01/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<title>Khai Tan Manufacture, may mặc, bao bì, bảo hộ lao động</title>	
	<link href="<?=base_url()?>css/front_end.css" rel="stylesheet" type="text/css" />
</head>
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
<body>
<div align="center">
<div id="body_inner">
<div id="header">
	<div id="header_left">
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="440" height="91" id="Untitled-2" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="allowFullScreen" value="false" />
		<param name="wmode" value="transparent" />
		<param name="movie" value="<?=base_url()?>images/header_left.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#426db5" />	<embed src="<?=base_url()?>images/header_left.swf" quality="high" bgcolor="#426db5" width="440" height="91" name="Untitled-2" align="left" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
		</object>
	</div>
	<div id="header_right">
		<table width="385px"style="float:right;font-size:12px;margin-right:15px;margin-top:12px;" border="0" cellpadding="0" cellspacing="0" >
			<tr>
				<td width="70%" height="20px">Sản phẩm:</td>
				<td>Sử dụng từ khoá:</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<select class="select_search">
					<?php
						if($menu)
							for($i=0; $i<count($menu); $i++){
								$row = $menu[$i];
					?>
						<option value="<?php echo($row->id);?>" style="background:#ffffff;"><?php echo($row->name);?></option>
							<?php
							}
							?>	
					</select>
				</td>
				<td>
					<input class="input_text_search" type="text" name="txt_search" value=""/>
				</td>
				<td valign="top"><input class="button_search" type="submit" value="Tìm kiếm"/></td>
			</tr>
		</table>
		
	</div>
</div>
</div>
</div>

<div id="header_menu">
<div align="center">
<div id="body_inner">
<div id="header_menu">
	<div style="margin-left:19px;" class="<?php if($tab==0) echo('active'); else echo('normal');?>"><a href="<?=base_url()?>main"><b>Trang chủ</b></a></div>
	<div class="<?php if($tab==2) echo('active'); else echo('normal');?>"><a href="<?=base_url()?>news"><b>Tin tức</b></a></div>
	<div class="<?php if($tab==3) echo('active'); else echo('normal');?>"><a href="<?=base_url()?>about_us"><b>Giới thiệu</b></a></div>
	<div class="contact"><a href="<?=base_url()?>contact_us"><b>Liên hệ</b></a></div>
</div>
</div>
</div>
</div>
</div>

<div align="center">
<div id="body_inner" style="background:#fff;">
<table style="font-size:12px;" border="0"width="100%" cellpadding="0" cellspacing="0" class="banner_border"  >
	<tr>
		<td colspan="3" align="left" height="10px"></td>
	</tr>
	<?php
		$logo = $this->logo_model->get_alllogo();
		$path='';
		if($logo){
			for ($i=0;$i<count($logo);$i++){
  				$row = $logo[$i];
  				$path = $path.'p'.$i.'='.base_url().$row->image;
  				if($i<count($logo)-1)
  					$path = $path.'&';
			}
		}
  	?>
	<tr>
		<td class="banner_left"></td>
		<td class="banner_center">
		<div style="margin-left:5px;margin-bottom:15px;width:850px;height:172px;background:#000000;">
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
	codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="850px" height="172px">		
		<param name='FlashVars' value="<?=$path?>"  />
		<param name="movie" value="<?=base_url()?>images/Untitled-3.swf" /><param name="quality" value="high" />
		<param name="bgcolor" value="#000000" />
		<param name="wmode" value="transparent" />
		<embed src="<?=base_url()?>images/Untitled-3.swf" FlashVars="<?=$path?>"  quality="high" type="application/x-shockwave-flash" width="850px" height="172px" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
		</div>
		</td>
		<td class="banner_right"></td>				
	</tr>
	<tr>
    	<td colspan="3" >
    		<div>
    	
    			
    		