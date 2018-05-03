<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");
	if (answer){
		window.location = "<?=base_url()?>admin/findteacher/delete/"+id;
	}
}
</script>
<div class="right">
	<div id="title"><label><?php echo(lang('admin_register_teacher'))?></label></div>
   <?php 
	if($findteacher){
		for($i=0; $i<count($findteacher); $i++){
			$row = $findteacher[$i];
	?>    	    	
   	<table id="findteacher_table">   
   		<tr>
			<td colspan="1" align="right">				
				<a align="right" href="<?php echo(base_url())?>admin/findteacher/view/<?php echo($row->id)?>/<?php echo($page)?>"><?php echo(lang('continue'))?></a>
				&nbsp|&nbsp
				<?php
				if($row->lock==0){
				?>
				<a align="right" href="<?php echo(base_url())?>admin/findteacher/display/<?php echo($row->id)?>/<?php echo($page)?>/<?php echo($row->lock)?>"><?php echo(lang('display'))?></a>
				<?php
				}
				else{
				?>
				<a align="right" href="<?php echo(base_url())?>admin/findteacher/display/<?php echo($row->id)?>/<?php echo($page)?>/<?php echo($row->lock)?>"><?php echo(lang('nodisplay'))?></a>
				<?php
				}
				?>
				&nbsp|&nbsp
				<?php
				if($row->status==0){
				?>
				<a align="right" href="<?php echo(base_url())?>admin/findteacher/status/<?php echo($row->id)?>/<?php echo($page)?>/<?php echo($row->status)?>"><?php echo(lang('admin_no_teach'))?></a>
				<?php
				}
				else{
				?>
				<a align="right" href="<?php echo(base_url())?>admin/findteacher/status/<?php echo($row->id)?>/<?php echo($page)?>/<?php echo($row->status)?>"><?php echo(lang('admin_yes_teach'))?></a>
				<?php
				}
				?>
				&nbsp|&nbsp
				<a href="javascript:void(0)" onclick="CheckDelete(<?php echo$row->id ;?>)">
					<img alt="Delete" title="Delete" width="12" height="12" border="0" src="<?=base_url().'image/delete.png'?>"/>
				</a>
				&nbsp|&nbsp
				<a href="<?=base_url()?>admin/findteacher/edit/<?php echo($row->id)?>/<?php echo($page)?>" >
				<img alt="Edit" title="Edit" width="12" height="12" border="0" src="<?=base_url().'image/edit.png'?>"/>
				</a>
				</td>				
		</tr>
		<tr>
			<td id="title_blue" align="left">
			<?php echo(lang('find'))?>&nbsp:&nbsp
			<?php
			if($row->type == 0) echo(lang('student'));
			if($row->type == 1) echo(lang('teacher'));
			if($row->type == 2) echo(lang('studentorteacher'));
			?>
			,
			<?php
			if($row->gender == 0) echo(lang('male'));
			if($row->gender == 1) echo(lang('female'));
			if($row->gender == 2) echo(lang('maleorfemale'));
			?>				
			<small style="color:#ff0000">
			<?php
			if($row->status == 0) echo(lang('no_teach'));
			if($row->status == 1) echo(lang('yes_teach'));
			?>
			</small>
			[
			<?php echo(lang('code'))?>&nbsp:&nbsp
			<?php echo($row->id)?>
			]
			</td>				
		</tr>
		<tr>
			<td align="left">
			<b><?php echo(lang('find_teach_class'))?>&nbsp:&nbsp</b>
			<?php echo($row->levelName)?>
			</td>		
		</tr>
		<tr>
			<td align="left">
			<b><?php echo(lang('find_subjects'))?>&nbsp:&nbsp</b>
			<?php echo($row->subjects)?>
			</td>							
		</tr>
		<tr>
			<td align="left">
			<b><?php echo(lang('salary_teach'))?>&nbsp:&nbsp</b>
			<?php echo($row->salary)?>
			</td>							
		</tr>
		<tr>
			<td align="left">
			<b><?php echo(lang('place_teach'))?>&nbsp:&nbsp</b>
			<?php echo($row->address)?>
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
   	if($findteacher)
   		echo $this->pagination->create_links();
   	?>     
</div>