<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");
	if (answer){
		window.location = "<?=base_url()?>admin/key_tsdh/delete/"+id;
	}
}
</script>
<div class="right">
	<?php 
		if($key_tsdh){	
			$row = $key_tsdh;		
	?>
	<div id="title">
		<label><?php echo($row->title)?></label>
		<a href="javascript:void(0)" onclick="CheckDelete(<?php echo$row->id ;?>)">
			<img alt="Delete" title="Delete" width="12" height="12" border="0" src="<?=base_url().'image/delete.png'?>"/>
		</a>
		|
		<a href="<?=base_url()?>admin/key_tsdh/edit/<?php echo($row->id)?>" >
			<img alt="Edit" title="Edit" width="12" height="12" border="0" src="<?=base_url().'image/edit.png'?>"/>
		</a>
	
	</div>	
		<div style="float:left;">			
			<div class="contents">									
				<?php 
				if($row->image){
				?>
				<a id="image" href="#" onclick="return hs.expand(this)">
					<img src="<?=base_url().'uploads/'.$row->image?>" alt="" width="150" height="150" title="" border="0"/>
				</a>
				<?php
				}
				?>			
				<small><?php echo($row->createdate.' '.lang('admin_at').' '.$row->create_hour)?></small>	
				<p><?php echo($row->description)?></p>								
			</div>				
		</div>				
	<?php		
		}		
	?>		
</div>
