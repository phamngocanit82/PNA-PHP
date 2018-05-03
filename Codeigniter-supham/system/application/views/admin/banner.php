<script language="javascript" type="text/javascript">
function CheckDelete(id,image){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");
	var check= window.document.getElementById('display').checked;
	if (answer){
		window.location = "<?=base_url()?>admin/banner/delete/"+id+"/"+image+"/"+check;
	}
}
</script>
<div class="right">
	<div id="title"><label>Banner supham.com.vn</label></div>
	<form class="admin_form" id="frm_admin_add" method="post" action="<?php echo(base_url())?>admin/banner/save" enctype="multipart/form-data">
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
			    <?php
		    	if($image01){
		    	?>
			    <tr>
		    		<td>banner left</td>
		    		<td align="left">
		    			<a href="javascript:void(0)" onclick="CheckDelete(<?php echo$id ;?>,'image01')">
							<img alt="Delete" title="Delete" width="12" height="12" border="0" src="<?=base_url().'image/delete.png'?>"/>
						</a>
		    		</td>		      
		    	</tr>
		    	<?php
		    	}
		    	else{
		    	?>
		    	<tr>
			      	<td width="120px" align="left">Banner left</td>
			      	<td align="left"><input class="input_file" type="file" id="image01" name="image01"/></td>
			    </tr>
		    	<?php	
		    	}
		    	?>
			     <?php
		    	if($image02){
		    	?>
			    <tr>
		    		<td>banner right</td>
		    		<td align="left">
		    			<a href="javascript:void(0)" onclick="CheckDelete(<?php echo$id ;?>,'image02')">
							<img alt="Delete" title="Delete" width="12" height="12" border="0" src="<?=base_url().'image/delete.png'?>"/>
						</a>
		    		</td>		      
		    	</tr>
		    	<?php
		    	}
		    	else{
		    	?>
		    	<tr>
			      	<td width="120px" align="left">Banner left</td>
			      	<td align="left"><input class="input_file" type="file" id="image02" name="image02"/></td>
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