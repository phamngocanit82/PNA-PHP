<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");
	if (answer){
		window.location = "<?=base_url()?>admin/contact/delete/"+id;
	}
}
</script>
<div class="right">
	<div id="title"><label><?php echo(lang('contact'))?></label></div>
   <?php 
	if($contact){
		for($i=0; $i<count($contact); $i++){
			$row = $contact[$i];
	?>    	    	
   	<table id="findteacher_table">   
   		<tr>
			<td colspan="1" align="right">								
				<a href="javascript:void(0)" onclick="CheckDelete(<?php echo$row->id ;?>)">
					<img alt="Delete" title="Delete" width="12" height="12" border="0" src="<?=base_url().'image/delete.png'?>"/>
				</a>
				</td>				
		</tr>		
		<tr>
			<td align="left">
			<b><?php echo(lang('member_name'))?>&nbsp:&nbsp</b>
			<?php echo($row->name)?>
			</td>		
		</tr>
		<tr>
			<td align="left">
			<b><?php echo(lang('address'))?>&nbsp:&nbsp</b>
			<?php echo($row->address)?>
			</td>							
		</tr>
		<tr>
			<td align="left">
			<b><?php echo(lang('telephone'))?>&nbsp:&nbsp</b>
			<?php echo($row->telephone)?>
			</td>							
		</tr>
		<tr>
			<td align="left">
			<b><?php echo(lang('mobilephone'))?>&nbsp:&nbsp</b>
			<?php echo($row->mobilephone)?>
			</td>								
		</tr>
		<tr>
			<td align="left">
			<b><?php echo(lang('email'))?>&nbsp:&nbsp</b>
			<?php echo($row->email)?>
			</td>								
		</tr>		
		<tr>
			<td align="left" valign="top">
			<b><?php echo(lang('description_teach'))?>&nbsp:&nbsp</b>
			<?php echo(checkLength($row->description,200))?>
			</td>					
		</tr>				
    	</table>  
    	<div></div>
    	<?php
		}
	}
   	?>
   	<?php
   	if($contact)
   		echo $this->pagination->create_links();
   	?>     
</div>