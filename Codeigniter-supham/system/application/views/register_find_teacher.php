<div class="center">
    <div id="register_title"><?php echo(lang('register_findteacher'))?></div>    
    <form class="register_form" id="frm_findteacher_add" method="post" action="<?php echo(base_url())?>findteacher/add">
    	<table id="register_table">  
    		<tr>
				<td colspan="3">
				<div class="require_input">
				<?php echo(lang('note'))?>&nbsp;<span style='color:#FF0000'>(*)</span>
				<?php echo(lang('required_input'))?>
				</div>
				</td>				
			</tr>  		
	    	<tr>
				<td colspan="3" class="title_find_teacher"><?php echo(lang('contact_information'))?></td>				
			</tr>			
	    	<tr>
	      		<td width="130px" align="right"><?php echo(lang('provinces'))?></td>
	      		<td width="210px" align="left">
	      			<select id="id_provinces" name="id_provinces" onchange="frm_findteacher_add.submit();">
	      			<?php
	      				if($provinces){	      					
	      					for($i=0; $i<count($provinces); $i++){
	      						$row = $provinces[$i];
	      			?>
						<option value="<?php echo($row->id)?>"<?php	echo($this->validation->set_select('id_provinces', $row->id))?>>
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
	  			<td align="right"><?php echo(lang('districts'))?></td>
	  			<td width="210px" align="left">
	  				<select id="id_districts" name="id_districts">
	  				<?php
		      			if($districts){    	      				
		      				for($i=0; $i<count($districts); $i++){
		      					$row = $districts[$i];
		      			?>
	    				<option value="<?php echo($row->id)?>"<?php	echo($this->validation->set_select('id_districts', $row->id))?>>
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
				<td align="right"><?php echo(lang('address'))?></td>
				<td align="left">  					
					<input class="input_add" type="text" name="address" value="<?=set_value('address')?>"/>
				</td>
				<td align="left"><?=form_error('address')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('telephone'))?></td>
				<td align="left">  					
					<input class="input_add" type="text" name="telephone" value="<?php echo($telephone)?>"/>
				</td>
				<td align="left">&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('mobilephone'))?></td>
				<td align="left">  					
					<input class="input_add" type="text" name="mobilephone" value="<?php echo($mobilephone)?>"/>
				</td>
				<td align="left">&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('email'))?></td>
				<td align="left">  					
					<input class="input_add" type="text" name="email" value="<?=set_value('email')?>"/>
				</td>
				<td align="left"><?=form_error('email')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('contact'))?></td>
				<td align="left">  					
					<input class="input_add" type="text" name="contact" value="<?=set_value('contact')?>"/>
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
						<option value="<?php echo($row->id)?>"<?php	echo($this->validation->set_select('id_level', $row->id))?>>
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
					<input class="input_add" type="text" name="subjects" value="<?=set_value('subjects')?>"/>
				</td>
				<td align="left"><?=form_error('subjects')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('quantity_students'))?></td>
				<td align="left">
					<input class="input_date" type="text" name="quantity_students" value="<?=set_value('quantity_students')?>"/>					
				</td>
				<td align="left"><?=form_error('quantity_students')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('salary'))?></td>
				<td align="left">
					<input class="input_date" type="text" name="salary" value="<?=set_value('salary')?>"/>					
				</td>
				<td align="left"><?=form_error('salary')?></td>
			</tr>
			<tr>
				<td colspan="3" class="title_find_teacher"><?php echo(lang('teach_information_needfind'))?></td>				
			</tr>	
			<tr>
				<td align="right"><?php echo(lang('require_teaching'))?></td>
				<td align="left">  					
					<input type="radio" value="0" name="type"<?php if($type == 0) echo('checked')?>><?php echo(lang('student'))?> 
					<input type="radio" value="1" name="type"<?php if($type == 1) echo('checked')?>><?php echo(lang('teacher'))?>
					<input type="radio" value="2" name="type"<?php if($type == 2) echo('checked')?>><?php echo(lang('student_or_teacher'))?>
				</td>
				<td align="left">&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('gender'))?></td>
				<td align="left">  					
					<input type="radio" value="0" name="gender"<?php if($gender == 0) echo('checked')?>><?php echo(lang('male'))?> 
					<input type="radio" value="1" name="gender"<?php if($gender == 1) echo('checked')?>><?php echo(lang('female'))?>
					<input type="radio" value="2" name="gender"<?php if($gender == 2) echo('checked')?>><?php echo(lang('male_or_female'))?>
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
						<option value="<?php echo($row->id)?>"<?php	echo($this->validation->set_select('id_school', $row->id))?>>
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
					<textarea class="input_textarea" name="description"><?php echo($description)?></textarea>
				</td>
				<td>&nbsp;</td>
			</tr>			
			<tr>
				<td align="right">&nbsp;</td>
				<td align="left">  					
				<input class="button" type="submit" name="btn_register" value="<?php echo(lang('send_for_us'))?>"/>
				</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>				
			</tr>
     	</table>     	
     </form>
</div>