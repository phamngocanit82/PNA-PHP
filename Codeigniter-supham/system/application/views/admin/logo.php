<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");
	if (answer){
		window.location = "<?=base_url()?>admin/logo/delete/"+id;
	}
}
</script>
<div class="right">
	<div id="title"><label>Logo supham.com.vn</label></div>
	<form class="admin_form" id="frm_admin_add" method="post" action="<?php echo(base_url())?>admin/logo/save" enctype="multipart/form-data">
		<div>	
	    	<table id="table_add">
	    	    <?php
		    	if($image){
		    	?>
			    <tr>
		    		<td width="50px">Logo</td>
		    		<td align="left">
		    			<a href="javascript:void(0)" onclick="CheckDelete(<?php echo$id ;?>)">
							<img alt="Delete" title="Delete" width="12" height="12" border="0" src="<?=base_url().'image/delete.png'?>"/>
						</a>
		    		</td>		      
		    	</tr>
		    	<?php
		    	}
		    	else{
		    	?>
		    	<tr>
			      	<td width="50px" align="left">Logo</td>
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