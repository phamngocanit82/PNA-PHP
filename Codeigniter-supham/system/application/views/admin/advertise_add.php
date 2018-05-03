<div class="right">
	<div id="title"><label><?php echo(lang('admin_add_advertise'))?></label></div>
	<form class="admin_form" id="frm_admin_add" method="post" action="<?php echo(base_url())?>admin/advertise/save_add" enctype="multipart/form-data">
		<div>	
	    	<table id="table_add">
	    		<tr>
			      	<td width="120px" align="left"><?php echo(lang('display'))?></td>
			      	<td align="left"><input type="checkbox" id="display" name="display"/></td>
			    </tr>
			    <tr>
			      	<td width="120px" align="left">http://</td>
			      	<td align="left"><input style="width:460px" type="text" id="url" name="url"/></td>
			    </tr>
			    <tr>
			      	<td width="120px" align="left">Banner&nbsp;<?php echo(lang('advertise'))?></td>
			      	<td align="left"><input class="input_file" type="file" id="image" name="image"/></td>
			    </tr>		   
			    <tr>
			    	<td>&nbsp;</td>
			      	<td align="left"><input class="button" type="submit" name="admin_add" value="<?php echo(lang('add'))?>"/></td>		      
			    </tr>			   
			</table>		
		</div>		
		</br>
	</form>	
</div>