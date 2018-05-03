<script language="javascript" type="text/javascript">
function CheckDelete(id,page){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");
	var check= window.document.getElementById('display').checked;
	if (answer){
		window.location = "<?=base_url()?>admin/advertise/deleteImage/"+id+"/"+page;
	}
}
</script>
<div class="right">
	<div id="title"><label><?php echo(lang('admin_edit_advertise'))?></label></div>
	<form class="admin_form" id="frm_admin_add" method="post" action="<?php echo(base_url())?>admin/advertise/save_edit/<?php echo($id)?>" enctype="multipart/form-data">
		<div>	
	    	<table id="table_add">
	    		<tr>
			      	<td width="120px" align="left"><?php echo(lang('display'))?></td>
			      	<td align="left"><input type="checkbox" id="display" name="display"
					<?php
					if($visible)
						echo('checked');
					?>
/></td>
			    </tr>
			    <tr>
			      	<td width="120px" align="left">http://</td>
			      	<td align="left"><input style="width:460px" type="text" id="url" name="url" value="<?php echo($url)?>"/></td>
			    </tr>
			    <?php
		    	if($image){
		    	?>
			    <tr>
		    		<td>Banner&nbsp;<?php echo(lang('advertise'))?></td>
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
			      	<td width="120px" align="left">Banner&nbsp;<?php echo(lang('advertise'))?></td>
			      	<td align="left"><input class="input_file" type="file" id="image" name="image"/></td>
			    </tr>
		    	<?php	
		    	}
		    	?>	   
			    <tr>
			    	<td>&nbsp;</td>
			      	<td align="left"><input class="button" type="submit" name="admin_add" value="<?php echo(lang('save'))?>"/></td>		      
			    </tr>			   
			</table>		
		</div>		
		</br>
	</form>	
</div>