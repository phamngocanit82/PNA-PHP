<div class="center">
    <div id="register_title"><?php echo(lang('find_class_study'))?></div>    
    <?php 
	if($findteacher){
		$row = $findteacher;
	?>    	    	
    <table id="findteacher_table">
    	<tr>
			<td id="title_blue" align="left">
			<?php echo(lang('code'))?>&nbsp:&nbsp
			<?php echo($row->id)?>
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
			<?php echo($row->districtsName.', '.$row->provincesName)?>
			</td>								
		</tr>
		<tr>
			<td align="left" valign="top">
			<b><?php echo(lang('description_teach'))?>&nbsp:&nbsp</b>
			<?php echo($row->description)?>
			</td>							
		</tr>
    	</table>  
    	<div></div>
    <?php		
	}
    ?>    
</div>