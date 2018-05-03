<div class="center">
    <div id="register_title"><?php echo(lang('find_teacher_current'))?></div>    
    <form class="register_form" id="frm_register_add" method="post" action="<?php echo(base_url())?>register/searchall">
	    <table id="register_table">
			<tr>
				<td colspan="3">
					<select id="type" name="type">
						<!--<option value="3"><?php //echo(lang('select_teacher'))?></option>-->
						<option value="0" <?php if($type ==0) echo('selected')?>><?php echo(lang('student'))?></option>
						<option value="1" <?php if($type ==1) echo('selected')?>><?php echo(lang('graduated'))?></option>
						<option value="2" <?php if($type ==2) echo('selected')?>><?php echo(lang('teacher'))?></option>
					</select>
					<select id="id_school" name="id_school">
					<?php
		      		if($school){    	      				
		      			for($i=0; $i<count($school); $i++){
		      				$row = $school[$i];
		      		?>
						<option value="<?php echo($row->id)?>"<?php	if($id_school ==$row->id) echo('selected')?>>
						<?php echo($row->name)?></option>
					<?php
		      			}
		      		}
		      		?>      					
					</select>
					<select id="gender" name="gender">
						<option value="3" <?php if($gender ==3) echo('selected')?>><?php echo(lang('gender'))?></option>
						<option value="0" <?php if($gender ==0) echo('selected')?>><?php echo(lang('male'))?></option>
						<option value="1" <?php if($gender ==1) echo('selected')?>><?php echo(lang('female'))?></option>						
					</select>
					<select id="id_level" name="id_level">
						<option value="0"><?php echo(lang('teach_class'))?></option>
		  			<?php
		  			if($level){	      					
		  				for($i=0; $i<count($level); $i++){
		  					$row = $level[$i];
		  			?>
						<option value="<?php echo($row->id)?>"<?php	if($id_level ==$row->id) echo('selected')?>>
						<?php echo($row->name)?></option>
					<?php
		  				}
		  			}
		  			?>
					</select>
					</br>	
					<input class="button" type="submit" name="btn_register" value="Tìm kiếm"/>	
					&nbsp;<b><?php echo(lang('result_have').' ['.$max_rows.'] '.lang('teacher_need_find'))?></b>			
				</td>				
			</tr>			
		</table>  
		<?php 
		if($register){
			for($i=0; $i<count($register); $i++){
				$row = $register[$i];
		?>    	    	
    	<table id="findteacher_table">
    		<tr>
				<td id="title_blue" align="left" width="400px" >
					<?php echo(lang('code'))?>&nbsp:&nbsp
					<?php echo($row->id)?>
				</td>
				<td align="right" width="100px" rowspan="4">
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
				<td id="title_blue" align="left">
					<?php echo(lang('i_am'))?>&nbsp:&nbsp
					<?php echo($row->name)?>
					(<?php
					if($row->gender == 0) echo(lang('male'));
					if($row->gender == 1) echo(lang('female'));					
					?>)
				</td>		
			</tr>
			<tr>
				<td align="left">
					<b><?php echo(lang('born'))?>&nbsp:&nbsp</b>
					<?php echo($row->birthday)?>
				</td>			
			</tr>
			<tr>
				<td align="left">
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
				<td colspan="3" align="right">				
					<a align="right" href="<?php echo(base_url())?>register/view/<?php echo($row->id)?>"><small><?php echo(lang('continue'))?></small></a>
				</td>				
			</tr>
     	</table>  
     	<div></div>
     	<?php
			}
		}
     	?>
     	<?php
     	if($register)
     		echo $this->pagination->create_links();
     	?>
     </form>
</div>