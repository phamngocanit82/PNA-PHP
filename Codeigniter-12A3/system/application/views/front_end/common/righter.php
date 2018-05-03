<?php 
if($tab!=3){
?>
<script type="text/javascript" src="<?=base_url()?>scripts/highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>scripts/highslide/highslide.css" />
<script type="text/javascript">
    hs.graphicsDir = '<?=base_url()?>scripts/highslide/graphics/';
    hs.outlineType = 'rounded-white';
    hs.creditsText = '';
    hs.creditsTitle = 'phamngocanthi@yahoo.com';
    hs.creditsHref = '#';
</script>
<div class="highslide-html-content" id="forgotpass">
	<div class="highslide-header" >
		<ul>
			<li class="highslide-move">
				<a href="#" onclick="return false">Move</a>
			</li>
			<li class="highslide-close">
				<a href="#" onclick="return hs.close(this)">Close</a>
			</li>
		</ul>
	</div>
	<div id="title">Forgot your password?</div>
	<div class="highslide-body">
		<table>
			<tr>
				<td>Email</td>
				<td align="left"><input style="width:220px" type="text" name="forgotpass_email" value=""/></td>
			</tr>
			<tr>
				<td></td>
				<td align="left"><input class="button" type="submit" name="forgotpass" value="Send"/></td>
			</tr>
		</table>		
	</div>   	
</div>
<?php
}
?>

<div id="righter">
	<div id="login">
		<form  style="padding:0px;margin:0px;" id="frm_leftsignin" method="post" action="<?=base_url()?>/user/login">	
			<div>Email:</div>
			<div><input id="input" type="text" name="login_email" value=""/></div>
			<div>Password:</div>
			<div><input id="input" type="password" name="login_password" value=""/></div>
			<div><input class="button" type="submit" name="login_signin" value="Login"/></div>
			<div>
				<a href="<?=base_url()?>main/register">Register</a>
				<a href="#" 
				<?php 
				if($tab!=3){
				?>
				onclick="return hs.htmlExpand(this,{contentId: 'forgotpass' })"
				<?php
				}
				?>
				>&nbsp;<span id="forgot_your">|</span>&nbsp;<span id="forgot_your">Forgot your</span>&nbsp;<span id="password">password?</span></a>
			</div>
		</form>
	</div>
	<div id="main_items"></div>
	<div id="items">
		<div><a href="<?=base_url()?>chat"><b>Chat friends</b></a></div>
		<div><a href="<?=base_url()?>blogs"><b>Blogs</b></div>
		<div><a href="<?=base_url()?>photos"><b>Photos</b></a></div>
		<div><a href="<?=base_url()?>videos"><b>Videos</b></a></div>
		<div><a href="<?=base_url()?>music"><b>Music</b></a></div>
		<div><a href="<?=base_url()?>main/settings"><b>Settings</b></a></div>
	</div>	
</div>

