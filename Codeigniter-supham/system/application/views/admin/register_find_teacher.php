<link href="<?php echo(base_url())?>javascript/calendar/CalendarControl.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo(base_url())?>javascript/calendar/CalendarControl.js"></script>
<script type="text/javascript" src="<?php echo(base_url())?>javascript/calendar/CalendarPopup.js"></script>
<div class="right">
    <div id="title"><?php echo(lang('register_findteacher'))?></div>    
    <form class="admin_form" id="frm_findteacher_add" method="post" action="<?php echo(base_url())?>admin/findteacher/save_edit/<?=$id?>/<?=$page?>">
    	<table id="table_add">  
    		<tr>
				<td colspan="3" class="title_find_teacher"><?php echo(lang('contact_information'))?></td>				
			</tr>				    	
	  		<tr>
				<td align="right"><?php echo(lang('address'))?></td>
				<td align="left">  					
					<input class="input_add" style="width:450px;" type="text" name="address" value="<?=$findteacher->address?>"/>
				</td>
				<td align="left"></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('telephone'))?></td>
				<td align="left">  					
					<input class="input_add" style="width:450px;" type="text" name="telephone" value="<?=$findteacher->telephone?>"/>
				</td>
				<td align="left">&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('mobilephone'))?></td>
				<td align="left">  					
					<input class="input_add" style="width:450px;" type="text" name="mobilephone" value="<?=$findteacher->mobilephone?>"/>
				</td>
				<td align="left">&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('email'))?></td>
				<td align="left">  					
					<input class="input_add" style="width:450px;" type="text" name="email" value="<?=$findteacher->email?>"/>
				</td>
				<td align="left"><?=form_error('email')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('contact'))?></td>
				<td align="left">  					
					<input class="input_add" style="width:450px;" type="text" name="contact" value="<?=$findteacher->contact?>"/>
				</td>
				<td align="left"><?=form_error('contact')?></td>
			</tr>
			<tr>
				<td colspan="3" class="title_find_teacher"><?php echo(lang('class_information'))?></td>				
			</tr>	
			<tr>
				<td align="right"><?php echo(lang('teach_class'))?></td>
				<td align="left">  					
					<select id="id_level" name="id_level">					
	      			<?php
	      				if($level){	      					
	      					for($i=0; $i<count($level); $i++){
	      						$row = $level[$i];
	      			?>
						<option value="<?php echo($row->id)?>"<?php if($findteacher->id_level==$row->id) echo('selected')?>>
						<?php echo($row->name)?></option>
					<?php
	      					}
	      				}
	      			?>
					</select>					
				</td>
				<td>&nbsp;</td>
			</tr>
		    <tr>
				<td align="right"><?php echo(lang('teach_objects'))?></td>
				<td align="left">  					
					<input class="input_add" style="width:450px;" type="text" name="subjects" value="<?=$findteacher->subjects?>"/>
				</td>
				<td align="left"><?=form_error('subjects')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('quantity_students'))?></td>
				<td align="left">
					<input class="input_date" style="width:450px;" type="text" name="quantity_students" value="<?=$findteacher->quantity_students?>"/>					
				</td>
				<td align="left"><?=form_error('quantity_students')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('salary'))?></td>
				<td align="left">
					<input class="input_date" style="width:450px;" type="text" name="salary" value="<?=$findteacher->salary?>"/>					
				</td>
				<td align="left"><?=form_error('salary')?></td>
			</tr>
			<tr>
				<td colspan="3" class="title_find_teacher"><?php echo(lang('teach_information_needfind'))?></td>				
			</tr>	
			<tr>
				<td align="right"><?php echo(lang('require_teaching'))?></td>
				<td align="left">  					
					<input type="radio" value="0" name="type"<?php if($findteacher->type == 0) echo('checked')?>><?php echo(lang('student'))?> 
					<input type="radio" value="1" name="type"<?php if($findteacher->type == 1) echo('checked')?>><?php echo(lang('teacher'))?>
					<input type="radio" value="2" name="type"<?php if($findteacher->type == 2) echo('checked')?>><?php echo(lang('student_or_teacher'))?>
				</td>
				<td align="left">&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('gender'))?></td>
				<td align="left">  					
					<input type="radio" value="0" name="gender"<?php if($findteacher->gender == 0) echo('checked')?>><?php echo(lang('male'))?> 
					<input type="radio" value="1" name="gender"<?php if($findteacher->gender == 1) echo('checked')?>><?php echo(lang('female'))?>
					<input type="radio" value="2" name="gender"<?php if($findteacher->gender == 2) echo('checked')?>><?php echo(lang('male_or_female'))?>
				</td>
				<td align="left">&nbsp;</td>
			</tr>
			<tr>
	      		<td align="right"><?php echo(lang('school'))?></td>
	      		<td align="left">
	      			<select id="id_school" name="id_school">
	      			<?php
	      				if($school){	      					
	      					for($i=0; $i<count($school); $i++){
	      						$row = $school[$i];
	      			?>
						<option value="<?php echo($row->id)?>"<?php if($findteacher->id_school==$row->id) echo('selected')?>>
						<?php echo($row->name)?></option>
					<?php
	      					}
	      				}
	      			?>
					</select>
	      		</td>
	      		<td align="left">&nbsp;</td>
	      	</tr>			
			<tr>
				<td align="right" valign="top"><?php echo(lang('require_others'))?></td>
				<td align="left">  					
					<textarea class="input_textarea" rows="8" style="width:450px;" name="description"><?=$findteacher->description?></textarea>
				</td>
				<td>&nbsp;</td>
			</tr>			
			<tr>
				<td align="right">&nbsp;</td>
				<td align="left">  					
				<input class="button" type="submit" name="btn_register" value="<?php echo(lang('save'))?>"/>
				</td>
				<td>&nbsp;</td>
			</tr>			
     	</table>     	
     </form>
</div>