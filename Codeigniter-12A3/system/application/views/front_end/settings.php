<div id="lefter">	
	<div id="top"></div>
	<div id="main_center">
		<div id="center">
		
			<div id="register">
				<div id="title">Settings - Change account</div>
				<form action="<?=base_url()?>main/settings" method="post">
				<table>			
					<tr>
						<td>Nick name</td>
						<td align="left"><input class="input_text" type="text"  name="nickname" value=""/></td>
					</tr>
					<tr>
						<td>Email</td>
						<td align="left"><input class="input_text" readonly= "true" type="text" name="email" value=""/></td>
					</tr>
					<tr>
						<td>Old password</td>
						<td align="left"><input class="input_text" type="password" name="oldpassword" value=""/></td>
					</tr>
					<tr>
						<td>New password</td>
						<td align="left"><input class="input_text" type="password" name="newpassword" value=""/></td>
					</tr>
					<tr>
						<td>Confirm password</td>
						<td align="left"><input class="input_text" type="password" name="confirmpassword" value=""/></td>
					</tr>
					<tr>
						<td>Full name</td>
						<td align="left"><input class="input_text" type="text" name="fullname" value=""/></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td align="left">
							<input type="radio" name="gender" value="0">Male</input>
							<input type="radio" name="gender" value="1">Female</input>
						</td>
					</tr>
					<tr>
						<td>Birthday</td>
						<td align="left"><input style="width:145px" type="text" name="birthday" value=""/><span style="color:#ff0000">&nbsp;(dd/mm/yyyy)</span></td>
					</tr>
					<tr>
						<td>Avatar</td>
						<td align="left"><input style="width:300px" type="file" id="avatar" name="avatar"/></td>
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
