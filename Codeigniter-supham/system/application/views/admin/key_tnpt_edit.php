<?php
include("fckeditor/fckeditor.php") ;
?>
<script language="javascript" type="text/javascript">
function CheckDelete(id,page){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");
	if (answer){
		window.location = "<?=base_url()?>admin/key_tnpt/deleteImage/"+id+"/"+page;
	}
}
</script>
<div class="right">
	<div id="title"><label><?php echo(lang('admin_key_tnpt'))?></label></div>
	<form class="admin_form" id="frm_admin_add" method="post" action="<?php echo(base_url())?>admin/key_tnpt/save_edit/<?php echo($id)?>/<?php echo($page)?>" enctype="multipart/form-data">
		<div>	
	    	<table id="table_add">
	    	 	<tr>
			      	<td width="100px" align="left" valign="top"><?echo(lang('admin_title'))?></td>
			      	<td align="left">
			      		<input class="input_addtitle" type="text" name="title" value="<?php echo($title)?>"/>
			      	</td>
			    </tr>	
			    <tr>
			      	<td align="left" valign="top"><?echo(lang('contents'))?></td>
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
		    		<td align="left"><img src="<?=base_url()?>image/note_paste_content.png" /></td>		      
		    	</tr>
		    	<?php
		    	if($image){
		    	?>
			    <tr>
		    		<td><?php echo(lang('admin_delete_picture'))?></td>
		    		<td align="left">
		    			<a href="javascript:void(0)" onclick="CheckDelete(<?php echo$id ;?>,<?php echo$page ;?>)">
							<img alt="Delete" title="Delete" width="12" height="12" border="0" src="<?=base_url().'image/delete.png'?>"/>
						</a>
		    		</td>		      
		    	</tr>
		    	<?php
		    	}
		    	else{
		    	?>
		    	<tr>
		    		<td><?php echo(lang('about_picture'))?></td>
		    		<td align="left"><input class="input_file" type="file" name="avatar"/> &nbsp;<?php echo(lang('require_image'))?></td>		      
		    	</tr>
		    	<?php	
		    	}
		    	?>
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