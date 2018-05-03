<?php
include("fckeditor/fckeditor.php") ;
?>
<div class="right">
	<div id="title"><label><?echo(lang('process_selection'))?></label></div>
	<form class="admin_form" id="frm_admin_add" method="post" action="<?php echo(base_url())?>admin/process_selection/save">
		<div>	
	    	<table id="table_add">
			    <tr>
			      	<td width="100px" align="left" valign="top"><?echo(lang('contents'))?></td>
			      	<td align="left">
			      		<?php
						$oFCKeditor = new FCKeditor('description') ;
						$oFCKeditor->BasePath = base_url().'fckeditor/';
						$oFCKeditor->Value		=  $description ;
						$oFCKeditor->Height = '500';
						$oFCKeditor->Width = '530';
						$oFCKeditor->Create() ;
						?>	
			      	</td>
			    </tr>				    
		    	 <tr>
			    	<td>&nbsp;</td>
			      	<td align="left"><input class="button" type="submit" name="admin_add" value="<?php echo(lang('save'))?>"/></td>		      
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