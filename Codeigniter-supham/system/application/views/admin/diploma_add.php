<div class="right">
	<div id="title"><label><?php echo(lang('add_diploma'))?></label></div>
	<form class="admin_form" id="frm_admin_add" method="post" action="<?php echo(base_url())?>admin/diploma/save_add">
		<div>	
	    	<table id="table_add">
			    <tr>
			      	<td width="120px" align="left"><?php echo(lang('name'))?></td>
			      	<td align="left"><input class="input_add" type="text" name="diplomaName" value=""/></td>
			    </tr>		   
			    <tr>
			    	<td>&nbsp;</td>
			      	<td align="left"><input class="button" type="submit" name="admin_add" value="<?php echo(lang('add'))?>"/></td>		      
			    </tr>
			    <?php 
				if(validation_errors()){
				?>
				<tr>
			    	<td>&nbsp;</td>
			      	<td><div class="require_add"><?php echo(validation_errors())?></div></td>		      
			    </tr>
			    <?php
				}
				?>
			</table>		
		</div>		
		</br>
	</form>	
</div>
	