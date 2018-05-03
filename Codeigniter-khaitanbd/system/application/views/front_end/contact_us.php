<div id="righter">
	<form method="post" action="<?=base_url()?>contact_us/add">
     <table border="0px" width="100%" style="margin-bottom:15px;font-size:14px;background-color:#f7f3f7;border:solid 1px #799ebb;-webkit-border-radius: 5px;-moz-border-radius: 5px;">
		<tr>
			<td align="left" colspan="2" height="25px;" class="title_content">
				<div>
					<div style="float:left;"><b style="font-style:italic;font-size:14px;color:#fff;">&nbsp;&nbsp;Liên hệ</b></div>
					<div style="float:right;"><label style="font-size:12px;color:#fff;"></div>
				</div>
			</td>						
		</tr>
		<tr><td colspan="2" height="20px"></td></tr>
		<tr>
			<td width="18%" valign="top" align="right">Họ và Tên<span class="note">(*)</span>&nbsp;&nbsp;</td>
			<td><input class="input_text" type="text" name="name" value="<?=$name?>"/></td>
		</tr>
		<tr>
			<td valign="top" align="right">Địa chỉ<span class="note"></span>&nbsp;&nbsp;</td>
			<td><input class="input_text" type="text" name="address" value="<?=$address?>"/></td>
		</tr>
		<tr>
			<td valign="top" align="right">Điện thoại<span class="note"></span>&nbsp;&nbsp;</td>
			<td><input class="input_text" type="text" name="homephone" value="<?=$homephone?>"/></td>
		</tr>
		<tr>
			<td valign="top" align="right">Di động<span class="note"></span>&nbsp;&nbsp;</td>
			<td><input class="input_text" type="text" name="mobilephone" value="<?=$mobilephone?>"/></td>
		</tr>
		<tr>
			<td valign="top" align="right">Email<span class="note"></span>&nbsp;&nbsp;</td>
			<td><input class="input_text" type="text" name="email" value="<?=$email?>"/></td>
		</tr>
		<tr>
			<td valign="top" align="right">Nội dung&nbsp;&nbsp;</td>
			<td><textarea class="input_textarea" name="description"><?=$description?></textarea></td>					
		</tr>	
		<tr>
			<td></td>
			<td><input class="button" type="submit" value="&nbsp;Gửi&nbsp;"/></td>
			</tr>								
		<tr><td colspan="2" height="30px"></td></tr>
	</table>	
	</form>
</div>
