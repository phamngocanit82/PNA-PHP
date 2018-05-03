<div class="right">
	<div id="title"><label><?php echo(lang('change_password'))?></label></div>
	<form class="admin_form" id="frm_admin_add" method="post" action="<?php echo(base_url())?>admin/register/changepass">
		<div>	
	    	<table id="table_add">
			    <tr>
			      	<td width="140px" align="left"><?php echo(lang('oldpassword'))?>&nbsp;<span style='color:#FF0000'>(*)</span></td>
			      	<td align="left"><input type="password" name="oldpassword" value=""/></td>
			    </tr>
			    <tr>
			      	<td width="140px" align="left"><?php echo(lang('newpassword'))?>&nbsp;<span style='color:#FF0000'>(*)</span></td>
			      	<td align="left"><input type="password" name="newpassword" value=""/></td>
			    </tr>
			    <tr>
			      	<td width="140px" align="left"><?php echo(lang('confirmpassword'))?>&nbsp;<span style='color:#FF0000'>(*)</span></td>
			      	<td align="left"><input type="password" name="confirmpassword" value=""/></td>
			    </tr>		   
			    <tr>
			    	<td>&nbsp;</td>
			      	<td align="left"><input class="button" type="submit" name="admin_add" value="<?php echo(lang('save'))?>"/></td>		      
			    </tr>			    
			</table>		
		</div>		
		</br>
	</form>	
</div>