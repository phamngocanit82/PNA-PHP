<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />		
	<meta name="robots" content="none" />		
	<meta name="keywords" content="pedagogy" />
	<meta name="description" content="pedagogy" />
	<meta name="copyright" content="pedagogy" />
	<title>pedagogy</title>
	<link href="<?php echo(base_url())?>css/back_end.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div align="center" >
	<div id="login">
		<form id="frm_admin_login" method="post" action="<?php echo(base_url())?>admin/login">
			<div id="title"><label><?php echo(lang('admin_system_manage'))?></label></div>
			<table id="table">
		    <tr>
		      	<td align="left" width="75px" ><?php echo(lang('email'))?></td>
		      	<td align="left"><input id="input" type="text" name="email" value="<?=set_value('email')?>"/><?=form_error('email')?></td>
		    </tr>
		    <tr>
		      	<td align="left"><?php echo(lang('password'))?></td>
		      	<td align="left"><input id="input" type="password" name="password" value="<?=set_value('password')?>"/><?=form_error('password')?></td>
		    </tr>
		    <tr>
		    	<td>&nbsp;</td>
		      	<td align="left"><input class="button" type="submit" name="login_signin" value="<?php echo(lang('signin'))?>"/></td>		      
		    </tr>			    
		  </table>		  
		</form>
	</div>
</div>
</body>
</html>
