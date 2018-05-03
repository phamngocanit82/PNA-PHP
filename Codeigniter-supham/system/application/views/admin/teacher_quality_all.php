<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");
	if (answer){
		window.location = "<?=base_url()?>admin/teacher_quality/delete/"+id;
	}
}
</script>
<div class="right">
	<div id="title"><label><?php echo(lang('select_teacher_quality'))?></label></div>
	<form class="register_form" id="frm_teacher_quality_add" method="post" action="<?php echo(base_url())?>teacher_quality/all">
	   <?php 
		if($teacher_quality){
			for($i=0; $i<count($teacher_quality); $i++){
				$row = $teacher_quality[$i];
		?>    	    	
    	<table id="findteacher_table">  
	    	<tr>
				<td colspan="3" align="right">				
					<a align="right" href="<?php echo(base_url())?>admin/teacher_quality/select/<?php echo($row->id)?>"><?php echo(lang('select'))?></a>					
				</td>				
			</tr>
			<tr>
				<td id="title_blue" align="left">
					<?php echo(lang('i_am'))?>&nbsp:&nbsp
					<?php echo($row->name)?>
					(<?php
					if($row->gender == 0) echo(lang('male'));
					if($row->gender == 1) echo(lang('female'));					
					?>)
					[<?php echo(lang('code'))?>&nbsp:&nbsp
					<?php echo($row->id)?>]
				</td>
				<td align="right" width="100px" rowspan="5">
				<?php 
				if($row->avatar){
				?>
				<a id="image" href="#" onclick="return hs.expand(this)">
					<img style="border-left:1px solid #ffffff;border-right:1px solid #ffffff;border-top:1px solid #ffffff;border-bottom:1px solid #ffffff;" src="<?=base_url().'avatar/'.$row->avatar?>" alt="" width="90px" height="90px" title="" border="0"/>
				</a>				
			<?php
				}
		?>							
				</td>		
			</tr>		
			<tr>
				<td align="left">				
				<b><?php echo(lang('email'))?>&nbsp:&nbsp</b>
				<?php echo($row->email)?>		
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
				<td colspan="3" align="left">
					<b><?php echo(lang('current'))?>&nbsp:&nbsp</b>
					<?php
					if($row->type == 0) echo(lang('student'));
					if($row->type == 1) echo(lang('graduated'));
					if($row->type == 2) echo(lang('teacher'));
					?>		
				</td>			
			</tr>
			<tr>
				<td colspan="3" align="left">
				<b><?php echo(lang('title_school'))?>&nbsp:&nbsp</b>
				<?php echo($row->schoolName)?>
				</td>				
			</tr>
			<tr>
				<td colspan="3" align="left">
				<b><?php echo(lang('receive_class'))?>&nbsp:&nbsp</b>
				<?php 
				if($row->id_level_from !=0)
					echo(strtolower($row->level_from_name))
				?>
				<?php 
				if($row->id_level_to !=0)
					echo(' '.lang('to').' '.strtolower($row->level_to_name))
				?>
				</td>		
			</tr>
			<tr>
				<td colspan="3" align="left">
				<b><?php echo(lang('find_subjects'))?>&nbsp:&nbsp</b>
				<?php echo($row->subjects)?>		
				</td>			
			</tr>
			<tr>
				<td colspan="3" align="left">
				<b><?php echo(lang('area_teach'))?>&nbsp:&nbsp</b>
				<?php echo($row->area_teach)?>
				</td>			
			</tr>
			<tr>
				<td colspan="3" align="left">
				<b><?php echo(lang('time_teach'))?>&nbsp:&nbsp</b>
				<?php echo($row->time_teach)?>
				</td>			
			</tr>
			<tr>				
				<td colspan="3" align="left">
				<b><?php echo(lang('salary'))?>&nbsp:&nbsp</b>
				<?php echo($row->salary)?>
				</td>		
			</tr>				
			<tr>				
				<td colspan="3" align="left">
				<b><?php echo(lang('instroduction'))?>&nbsp:&nbsp</b>
				<?php echo($row->description)?>
				</td>		
			</tr>		
     	</table>  
     	<div></div>
     	<?php
			}
		}
     	?>
     	<?php
     	if($teacher_quality)
     		echo $this->pagination->create_links();
     	?>
     </form>
</div>