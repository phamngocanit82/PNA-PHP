<?=$xajax_js?>
<div class="center">
    <div id="register_title"><?php echo(lang('find_class_study'))?></div>    
    <form class="register_form" id="frm_register_add" method="post" action="<?php echo(base_url())?>findteacher/searchall/"<?=$page?>>
	    <table id="register_table">
			<tr>
				<td colspan="3">
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
						<option value="<?php echo($row->id)?>"<?php	echo($this->validation->set_select('id_provinces', $row->id))?>>
						<?php echo($row->name)?></option>
					<?php
		  				}
		  			}
		  			?>
					</select>
					<span id ="abc"><select id="id_districts" >
					<option value="0">Tất cả</option>
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
				</span> 
					<select id="id_level_from" name="id_level_from">
						<option value="0"><?php echo(lang('from_class'))?></option>
		  			<?php
		  			if($level){	      					
		  				for($i=0; $i<count($level); $i++){
		  					$row = $level[$i];
		  			?>
						<option value="<?php echo($row->id)?>"<?php	echo($this->validation->set_select('id_level_from', $row->id))?>>
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
						<option value="<?php echo($row->id)?>"<?php	echo($this->validation->set_select('id_level_to', $row->id))?>>
						<?php echo($row->name)?></option>
					<?php
		  				}
		  			}
		  			?>
		  			</select>
		  			</br>
		  			<input class="button" type="submit" name="btn_register" value="Tìm kiếm"/>	
		  			&nbsp;<b><?php echo(lang('result_have').' ['.$max_rows.'] '.lang('class_need_find'))?></b>
				</td>				
			</tr>
				
		</table>  
		<?php 
		if($findteacher){
			for($i=0; $i<count($findteacher); $i++){
				$row = $findteacher[$i];
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
				<?php echo(checkLength($row->description,200))?>
				</td>					
			</tr>	
			<tr>
				<td colspan="1" align="right">				
					<a align="right" href="<?php echo(base_url())?>findteacher/view/<?php echo($row->id)?>"><small><?php echo(lang('continue'))?></small></a>
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
     </form>         
</div>