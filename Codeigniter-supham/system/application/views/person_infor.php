<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");	
	if (answer){
		window.location = "<?=base_url()?>register/delete_image/"+id;
	}
}
</script>
<?=$xajax_js?>
<div class="center">
    <div id="register_title"><?php echo(lang('register_teacher'))?></div> 
    <form class="register_form" id="frm_register_add" method="post" action="<?php echo(base_url())?>register/save_person_infor" enctype="multipart/form-data">
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
				<td align="right"><?php echo(lang('oldpassword'))?></td>
				<td align="left">  					
					<input class="input_add" type="password" name="oldpassword" value=""/>
				</td>
				<td align="left"><?=form_error('password')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('newpassword'))?></td>
				<td align="left">  					
					<input class="input_add" type="password" name="newpassword" value=""/>
				</td>
				<td align="left"><?=form_error('password')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('confirmpassword'))?></td>
				<td align="left">  					
					<input class="input_add" type="password" name="confirmpassword" value=""/>
				</td>
				<td align="left"><?=form_error('confirmpassword')?></td>
			</tr>
  			<tr>
				<td align="right"><?php echo(lang('member_name'))?></td>
				<td align="left">  					
					<input class="input_add" type="text" name="registerName" value="<?=$user->name?>"/>
				</td>
				<td align="left"><?=form_error('registerName')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('gender'))?></td>
				<td align="left">  					
					<input type="radio" value="0" name="gender"<?php if($user->gender == 0) echo('checked')?>><?php echo(lang('male'))?> 
					<input type="radio" value="1" name="gender"<?php if($user->gender == 1) echo('checked')?>><?php echo(lang('female'))?>
				</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('birthday'))?></td>
				<td align="left">  					
					<input class="input_date" type="text" id="birthday" name="birthday" value="<?php echo($user->birthday)?>"/>
				</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('placeofbirth'))?></td>
				<td align="left">  					
					<select id="placeofbirth" name="placeofbirth">
	      			<?php 
	      				if($provinces){
	      					for($i=0; $i<count($provinces); $i++){
	      						$row = $provinces[$i];
	      			?>
						<option value="<?php echo($row->id)?>" <?php if($placeofbirth==$row->id)echo('selected')?>>
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
	      		<td align="right"><?php echo(lang('accomodation_today'))?></td>
	      		<td align="left">
	      			<select id="id_provinces" name="id_provinces" onchange="changeProvinces();">
					<script language="JavaScript" type="text/javascript">
							function changeProvinces(){		
								var id_provinces = document.getElementById('id_provinces').value;								
								xajax_changeProvinces(id_provinces);
								//alert(id_provinces);								
							}
						</script>	
		  			<?php
		  			if($provinces){	      					
		  				for($i=0; $i<count($provinces); $i++){
		  					$row = $provinces[$i];
		  			?>
						<option value="<?php echo($row->id)?>"<?php if($id_provinces==$row->id)echo('selected')?>>
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
	  			<td align="left">
	  				<span id ="abc"><select id="id_districts" >					
					<?php
		      		if($districts){    	      				
		      			for($i=0; $i<count($districts); $i++){
		      				$row = $districts[$i];
		      		?>
						<option value="<?php echo($row->id)?>"<?php if($id_districts==$row->id)echo('selected')?>>
						<?php echo($row->name)?></option>
					<?php
		      			}
		      		}
		      		?>      					
					</select>
					</span> 
	  			</td>
	  			<td align="left">&nbsp;</td>
	  		</tr>
	  		<tr>
				<td align="right"><?php echo(lang('address'))?></td>
				<td align="left">  					
					<input class="input_add" type="text" name="address" value="<?=$user->address?>"/>
				</td>
				<td align="left"><?=form_error('address')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('telephone'))?></td>
				<td align="left">  					
					<input class="input_add" type="text" name="telephone" value="<?=$user->telephone?>"/>
				</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('mobilephone'))?></td>
				<td align="left">  					
					<input class="input_add" type="text" name="mobilephone" value="<?=$user->mobilephone?>"/>
				</td>
				<td>&nbsp;</td>
			</tr>
	    	<tr>
	      		<td align="right"><?php echo(lang('diploma'))?></td>
	      		<td align="left">
	      			<select id="id_diploma" name="id_diploma">
	      			<?php
	      				if($diploma){	      					
	      					for($i=0; $i<count($diploma); $i++){
	      						$row = $diploma[$i];
	      			?>
						<option value="<?php echo($row->id)?>"<?php if($id_diploma==$row->id)echo('selected')?>>
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
	      		<td align="right"><?php echo(lang('school'))?></td>
	      		<td align="left">
	      			<select id="id_school" name="id_school">
	      			<?php
	      				if($school){	      					
	      					for($i=0; $i<count($school); $i++){
	      						$row = $school[$i];
	      			?>
						<option value="<?php echo($row->id)?>"<?php if($id_school==$row->id)echo('selected')?>>
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
				<td align="right"><?php echo(lang('specialized'))?></td>
				<td align="left">  					
					<input class="input_add" type="text" name="specialized" value="<?=$user->specialized?>"/>
				</td>
				<td align="left">&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('graduate'))?></td>
				<td align="left">
					<input class="input_date" type="text" id="graduate" name="graduate" value="<?=$user->graduate?>"/>
				</td>
				<td align="left">&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('current_is'))?></td>
				<td align="left">  					
					<input type="radio" value="0" name="type"<?php if($user->type == 0) echo('checked')?>><?php echo(lang('student'))?> 
					<input type="radio" value="1" name="type"<?php if($user->type == 1) echo('checked')?>><?php echo(lang('graduated'))?>
					<input type="radio" value="2" name="type"<?php if($user->type == 2) echo('checked')?>><?php echo(lang('teacher'))?>
				</td>
				<td align="left">&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('receive_trainning'))?></td>
				<td>  					
					<select id="id_level_from" name="id_level_from">
						<option value="0"><?php echo(lang('from_class'))?></option>
	      			<?php
	      				if($level){	      					
	      					for($i=0; $i<count($level); $i++){
	      						$row = $level[$i];
	      			?>
						<option value="<?php echo($row->id)?>"<?php if($id_level_from==$row->id)echo('selected')?>>
						<?php echo($row->name)?></option>
					<?php
	      					}
	      				}
	      			?>
					</select>
					<select id="id_level_to" name="id_level_to">
						<option value="0"><?php echo(lang('to_class'))?></option>
	      			<?php
	      				if($level){	      					
	      					for($i=0; $i<count($level); $i++){
	      						$row = $level[$i];
	      			?>
						<option value="<?php echo($row->id)?>"<?php if($id_level_to==$row->id)echo('selected')?>>
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
				<td align="right"><?php echo(lang('subjects'))?></td>
				<td>  					
					<input class="input_add" type="text" name="subjects" value="<?=$user->subjects?>"/>
				</td>
				<td><?=form_error('subjects')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('area_teach'))?></td>
				<td>  					
					<input class="input_add" type="text" name="area_teach" value="<?=$user->area_teach?>"/>
				</td>
				<td><?=form_error('area_teach')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('time_teach'))?></td>
				<td>  					
					<input class="input_add" type="text" name="time_teach" value="<?=$user->time_teach?>"/>
				</td>
				<td><?=form_error('time_teach')?></td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('require_salary'))?></td>
				<td>  					
					<input class="input_add" type="text" name="salary" value="<?=$user->salary?>"/>
				</td>
				<td><?=form_error('time_teach')?></td>
			</tr>
			<tr>
				<td align="right" valign="top"><?php echo(lang('description'))?></td>
				<td>  					
					<textarea class="input_textarea" name="description"><?=$user->description?></textarea>
				</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="right"><?php echo(lang('avatar'))?></td>
				<td>  			
					<?php
					if($user->avatar){
					?>
						<a href="javascript:void(0)" onclick="CheckDelete(<?php echo($user->id) ;?>)">
							<img alt="Delete" title="Delete" width="12" height="12" border="0" src="<?=base_url().'image/delete.png'?>"/>
						</a>		
					<?php
					}
					else{
					?>
						<input class="input_file" type="file" id="avatar" name="avatar"/>
					<?php
					}?>
				</td>
				<td></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>  					
					<input class="button" type="submit" name="btn_register" value="<?php echo(lang('save'))?>"/>
				</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
     	</table>     	
     </form>
</div>