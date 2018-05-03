<div class="center">
    <div id="register_title"><?php echo(lang('contact_us'))?></div>
    <form  class="register_form" id="frm_register_add" method="post" action="<?php echo(base_url())?>contact/add">
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
				<td width="110px" align="right"><?php echo(lang('member_name'))?></td>
				<td width="210px" align="left">  					
					<input class="input_add" type="text" name="name" value="<?=set_value('name')?>"/>
				</td>
				<td width="19px" align="left"><?=form_error('name')?></td>
			</tr>
  			<tr>
				<td  align="right"><?php echo(lang('address'))?></td>
				<td  align="left">  					
					<input class="input_add" type="text" name="address" value="<?=set_value('address')?>"/>
				</td>
				<td  align="left"><?=form_error('address')?></td>
			</tr>			
			<tr>
				<td  align="right"><?php echo(lang('telephone'))?></td>
				<td  align="left">  					
					<input class="input_add" type="text" name="telephone" value="<?php echo($telephone)?>"/>
				</td>
				<td  align="left">&nbsp;</td>
			</tr>
			<tr>
				<td  align="right"><?php echo(lang('mobilephone'))?></td>
				<td  align="left">  					
					<input class="input_add" type="text" name="mobilephone" value="<?php echo($mobilephone)?>"/>
				</td>
				<td  align="left">&nbsp;</td>
			</tr>
			<tr>
				<td  align="right"><?php echo(lang('email'))?></td>
				<td  align="left">  					
					<input class="input_add" type="text" name="email" value="<?=set_value('email')?>"/>
				</td>
				<td  align="left"><?=form_error('email')?></td>
			</tr>
			<tr>
				<td  align="right" valign="top"><?php echo(lang('description'))?></td>
				<td  align="left">  					
					<textarea class="input_textarea" name="description"><?php echo($description)?></textarea>
				</td>
				<td  align="left">&nbsp;</td>
			</tr>			
			<tr>
				<td  align="right">&nbsp;</td>
				<td  align="left">  					
				<input class="button" type="submit" name="btn_register" value="<?php echo(lang('send_for_us'))?>"/>
				</td>
				<td  align="left">&nbsp;</td>
			</tr>			
     	</table>      	
     	<img style="border-left:1px solid #2449d5;border-right:1px solid #2449d5;border-top:1px solid #2449d5;border-bottom:1px solid #2449d5;" src="<?=base_url().'image/ban_do.jpg'?>" alt="" width="438px" title="" border="0"/>    	
     </form>
</div>