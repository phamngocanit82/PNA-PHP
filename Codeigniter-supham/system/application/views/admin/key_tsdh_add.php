<?php
include("fckeditor/fckeditor.php") ;
?>
<div class="right">
	<div id="title"><label><?php echo(lang('admin_add_key_tsdh').' TSĐH')?></label></div>
	<form class="admin_form" id="frm_admin_add" method="post" action="<?php echo(base_url())?>admin/key_tsdh/save_add" enctype="multipart/form-data">
		<div>	
	    	<table id="table_add">
	    	 	<tr>
			      	<td width="100px" align="left" valign="top"><?echo(lang('admin_title'))?></td>
			      	<td align="left">
			      		<input class="input_addtitle" type="text" name="title" value=""/>
			      	</td>
			    </tr>	
			    <tr>
			      	<td align="left" valign="top"><?echo(lang('contents'))?></td>
			      	<td align="left">
			      	<?php
						$oFCKeditor = new FCKeditor('description') ;
						$oFCKeditor->BasePath = base_url().'fckeditor/';
						$oFCKeditor->Height = '500';
						$oFCKeditor->Width = '530';
						$oFCKeditor->Create() ;
					?>	
			      	</td>
			    </tr>
			    <tr>
		    		<td>&nbsp;</td>
		    		<td align="left"><img src="<?=base_url()?>image/note_paste_content.png" /></td>		      
		    	</tr>
			    <tr>
		    		<td><?php echo(lang('about_picture'))?></td>
		    		<td align="left"><input class="input_file" type="file" name="avatar"/> &nbsp;<?php echo(lang('require_image'))?></td>		      
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