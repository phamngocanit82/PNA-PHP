<div class="right">
	<div id="title"><label><?php echo(lang('edit_districts'))?></label></div>
	<form class="admin_form" id="frm_admin_edit" method="post" action="<?php echo(base_url())?>admin/districts/save_edit/<?php echo($id)?>/<?php echo($page)?>">
		<div>	
	    	<table id="table_add">	    		
			    <tr>
			      	<td width="120px" align="left"><?php echo(lang('name'))?></td>
			      	<td align="left"><input class="input_add" type="text" name="districtsName" value="<?php echo($districtsName)?>"/></td>
			    </tr>		   
			    <tr>
			    	<td>&nbsp;</td>
			      	<td align="left"><input class="button" type="submit" name="admin_save" value="<?php echo(lang('save'))?>"/></td>		      
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