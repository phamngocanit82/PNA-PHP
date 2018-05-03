<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");
	if (answer){
		window.location = "<?=base_url()?>admin/districts/delete/"+id;
	}
}
</script>
<div class="right">
	<div id="title"><label><?php echo(lang('list_districts'))?></label></div>
	<table id="table_all" cellpadding="0" cellspacing="0">
	  	<tr>
	    	<th width="55px">&nbsp;</th>
			<th width="200px"><?php echo(lang('name'))?></th>
			<th width="245px"><?php echo(lang('provinces'))?></th>
		    <th width="75px">&nbsp;</th>
		</tr>
		<?php 
			if($districts){
				for($i=0; $i<count($districts); $i++){
					$row = $districts[$i];
		?>
		<tr>
		    <td><?php echo($i+1+$page)?></td>
		    <td><?php echo($row->name)?></td>
		    <td><?php echo($row->provincesName)?></td>
		    <td align="center">
		    	<a href="#" onclick="CheckDelete(<?php echo($row->id)?>)"><?php echo(lang('delete'))?></a>&nbsp; 
		    	<span style="color:#1e1ef4">|</span>&nbsp; 
		    	<a href="<?php echo(base_url())?>admin/districts/edit/<?php echo($row->id)?>/<?php echo($page)?>"><?php echo(lang('edit'))?></a>
		    </td>
		</tr>  
		<?php
				}
			}
		?>
	</table>
		<?php
			if($districts)
				echo $this->pagination->create_links(); 
		?>		
	</br>	
</div>
