<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />		
	<meta name="robots" content="none" />		
	<meta name="keywords" content="" />
	<meta name="description" content="Khaitan,khaitanbd, quan ao, thoi trang, bao ho lao dong, .." />
	<meta name="copyright" content="Khai Tan" />
	<link rel="icon" href="./images/khaitanbd.ico" type="image/x-icon" />
	<link href="<?=base_url()?>/images/style01/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<title>Khai Tan Manufacture, may mặc, bao bì, bảo hộ lao động</title>	
	<link href="<?=base_url()?>css/back_end.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo(base_url())?>scripts/codeigniter.js"></script>	
</head>
<body >
	<div align="center">
		<div style="width:1000px;">		
			<div id="div_main_menu" align="center">	
				<ul id="main_menu">
					<li class="li_left"><a href="<?=base_url();?>" ><?=lang('home')?></a></li>
					<li class="li_bottom"><a href="<?=base_url()?>admin/logo" ><?=lang('logo')?></a></li>
					<li class="li_bottom"><a href="#" onclick="mopen('m1')" onmouseover="mopen('m1')" onmouseout="mclosetime()"><?=lang('manage_category')?></a>
						<div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
							<a href="<?=base_url()?>admin/menu">Danh mục sản phẩm</a>
							<a href="<?=base_url()?>admin/category"><?=lang('category')?></a>
							<a class="li_bottom" href="<?=base_url()?>admin/product"><?=lang('product')?></a>				
						</div>
					</li>
					<li class="li_bottom"><a href="<?=base_url()?>admin/news" ><?=lang('news')?></a></li>
					<li class="li_bottom"><a href="<?=base_url()?>admin/contact_us" ><?=lang('contacts')?></a></li>
					<li class="li_right"><a href="<?=base_url()?>admin/about_us" ><?=lang('about_us')?></a></li>
				</ul>
				<div id="div_right_main_menu"><a href="<?=base_url()?>admin/login/logout"><span><?=lang('logout')?></span></a></div>
			</div>	
			<div id ="div_left">
				<div id="div_left_avatar">
					<div>Hi Admin</div>
					<img src="<?=base_url()?>images/avatar.png" border="0"/>					
				</div>	
				
			
			
			