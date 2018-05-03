<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />		
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />		
	<meta name="robots" content="none" />		
	<meta name="keywords" content="" />
	<meta name="description" content="Khaitan,khaitanbd, quan ao, thoi trang, bao ho lao dong, .." />
	<meta name="copyright" content="Khai Tan" />
	<link rel="icon" href="./images/khaitanbd.ico" type="image/x-icon" />
	<link href="<?=base_url()?>/images/style01/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<title>Khai Tan Manufacture, may mặc, bao bì, bảo hộ lao động</title>	
	<link href="<?=base_url()?>css/back_end.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script type="text/javascript" src="<?=base_url()?>scripts/highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>scripts/highslide/highslide.css" />
<script type="text/javascript">
    hs.graphicsDir = '<?=base_url()?>scripts/highslide/graphics/';
    hs.outlineType = 'rounded-white';
    hs.creditsText = '';
    hs.creditsTitle = 'phamngocanthi@yahoo.com';
    hs.creditsHref = '#';
</script>
<div class="highslide-html-content" style="width:350px;" id="forgotpass">
	<div class="highslide-header" >
		<ul>
			<li class="highslide-move">
				<a href="#" onclick="return false">Di chuyển</a>
			</li>
			<li class="highslide-close">
				<a href="#" onclick="return hs.close(this)">Đóng</a>
			</li>
		</ul>
	</div>
	<div style="margin-bottom:3px;height:22px;color:#009900;font-weight:bold;border-bottom:1px solid #009900;">Lấy lại mật khẩu</div>
	<div class="highslide-body" >
		<table>
			<tr>
				<td>Email</td>
				<td align="left"><input style="width:300px;
	height:22px;
	border:solid 2px #5b7991;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;" type="text" name="forgotpass_email" value=""/></td>
			</tr>
			<tr>
				<td></td>
				<td align="left"><input class="button" type="submit" name="forgotpass" value="Gửi"/></td>
			</tr>
		</table>		
	</div>   	
</div>
<div align="center" >
	<div id="div_login">
		<form id="frm_admin_login" method="post" action="<?=base_url();?>admin/login/checklogin">
			<table align="center" width="255px"  style="margin-top:25px;" border="0">
				<tr>
					<td colspan="2" align="center" style="font-size:18px;font-style:italic;color:#ffffff;"><b>Trang quản lý</b></td>					
				</tr>
				<tr>
					<td colspan="2" align="left" style="padding-top:20px;border-bottom:solid 1px #089889;">Thông tin đăng nhập</td>					
				</tr>
				<tr><td colspan="2" height="5px"></td></tr>
				<tr>
					<td align="left"style="width:90px;">Tài khoản</td>
					<td align="left"><input class="input_text_login"  type="text" name="login_email" value=""/></td>
				</tr>
				<tr>
					<td align="left">Mật khẩu</td>
					<td align="left"><input class="input_text_login" type="password" name="login_password" value=""/></td>
				</tr>
				<tr>
					<td align="left"></td>
					<td align="left"><input class="button" type="submit" name="login_signin" value="Đăng nhập"/></td>
				</tr>
				<tr>
					<td></td>
					<td align="left">
						<a href="#" onclick="return hs.htmlExpand(this,{contentId: 'forgotpass' })"><span id="forgot_your">Lấy lại</span>&nbsp;<span id="password">mật khẩu ?</span></a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>
