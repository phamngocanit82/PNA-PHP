<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");
	if (answer){
		window.location = "<?=base_url()?>admin/advertise/delete/"+id;
	}
}
</script>
<div class="right">
	<div id="title"><label><?php echo(lang('list_advertise'))?></label></div>
	<table style="font-size:11px;" id="table_all" cellpadding="0" cellspacing="0">
	  	<tr>
	    	<th width="40px">&nbsp;</th>
			<th width="310px">http://</th>
			<th width="100px">Banner</th>
		    <th width="65px">&nbsp;</th>
		</tr>
		<?php 
			if($advertise){
				for($i=0; $i<count($advertise); $i++){
					$row = $advertise[$i];
		?>
		<tr>
		    <td><?php echo($i+1+$page)?></td>
		    <td><?php 
		    	if($row->url){
		    		echo($row->url);
		    	}
		    	else{
		    	?>
		    	&nbsp;
		    	<?php
		    	}
		    	?>
		    </td>
		    <td><?php 
		    	if($row->image){
		    	?>
		    		<img style="border-left:1px solid #ffffff;border-right:1px solid #ffffff;border-top:1px solid #ffffff;border-bottom:1px solid #ffffff;" src="<?=base_url().'uploads/'.$row->image?>" alt="" width="90px" height="90px" title="" border="0"/>
		    	<?php	
		    	}
		    	else{
		    	?>
		    	&nbsp;
		    	<?php
		    	}
		    	?>
		    </td>
		    <td align="center">
		    	<a href="#" onclick="CheckDelete(<?php echo($row->id)?>)"><?php echo(lang('delete'))?></a> 
		    	<span style="color:#1e1ef4">|</span> 
		    	<a href="<?php echo(base_url())?>admin/advertise/edit/<?php echo($row->id)?>/<?php echo($page)?>"><?php echo(lang('edit'))?></a>
		    	<span style="color:#1e1ef4">|</span> 
		    	<a href="<?php echo(base_url())?>admin/advertise/visible/<?php echo($row->id)?>/<?php echo($page)?>/<?php echo($row->visible)?>">
		    	<?php 
		    		if($row->visible)
		    			echo(lang('nodisplay'));
		    		else 
		    			echo(lang('display'))
		    	?>
		    	</a>
		    </td>
		</tr>  
		<?php
				}
			}
		?>
	</table>
		<?php
			if($advertise)
				echo $this->pagination->create_links(); 
		?>		
	</br>	
</div>
