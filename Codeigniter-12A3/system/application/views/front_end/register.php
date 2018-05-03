<div id="lefter">	
	<div id="top"></div>
	<div id="main_center">
		<div id="center">
		
			<div id="register">
				<div id="title">Register member</div>
				<form action="<?=base_url()?>main/register_save" method="post" enctype="multipart/form-data">
				<table>	
					<tr>
						<td></td>
						<td>
							<?php
							if($check_email)
							echo('<b style="margin-top:3px;color:#ff0000;">'.$check_email.'</b>');
							?>	
						</td>					
					</tr>											
					<tr>
						<td>Nick name</td>
						<td align="left"><input class="input_text" type="text" name="nickname" value="<?=set_value('nickname')?>"/><?=form_error('nickname')?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td align="left"><input class="input_text" type="text" name="email" value="<?=set_value('email')?>"/><?=form_error('email')?></td>
					</tr> 
					<tr>
						<td>Password</td>
						<td align="left"><input class="input_text" type="password" name="password" value="<?=set_value('password')?>"/><?=form_error('password')?></td>
					</tr>
					<tr>
						<td>Confirm password</td>
						<td align="left"><input class="input_text" type="password" name="confirmpassword" value="<?=set_value('confirmpassword')?>"/><?=form_error('confirmpassword')?></td>
					</tr>
					<tr>
						<td>Full name</td>
						<td align="left"><input class="input_text" type="text" name="fullname" value="<?=set_value('fullname')?>"/><?=form_error('fullname')?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td align="left">
							<input type="radio" name="gender" value="0" <?php if($gender == 0) echo('checked')?> >Male</input>
							<input type="radio" name="gender" value="1" <?php if($gender == 1) echo('checked')?> >Female</input>
						</td>
					</tr>
					<tr>
						<td>Birthday</td>
						<td align="left"><input style="width:145px" type="text" name="birthday" value=""/>&nbsp;(dd/mm/yyyy)</td>
					</tr>
					<tr>
						<td>Avatar</td>
						<td align="left"><input style="width:300px" type="file" id ="avatar" name="avatar"/></td>
					</tr>			
					<tr>
						<td></td>
						<td align="left"><input type="submit" class="button" name="register" value="Save"/></td>
					</tr>					
				</table>	
				</form>			
			</div>  
			
		</div>
	</div>
	<div id="bottom"></div>
</div>
