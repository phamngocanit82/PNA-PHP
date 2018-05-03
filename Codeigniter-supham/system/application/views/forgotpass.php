<div class="center">
    <div id="register_title"><?php echo(lang('forgot_password'))?></div>
    <form class="register_form" id="frm_register_add" method="post" action="<?php echo(base_url())?>register/forgotpass">
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
				<td width="110px" align="right"><?php echo(lang('email'))?></td>
				<td width="210px" align="left">  					
					<input class="input_add" type="text" name="email" value="<?=set_value('email')?>"/>
				</td>
				<td width="19px" align="left"><span style='color:#FF0000'><?=form_error('email')?></span></td>
			</tr>					
			<tr>
				<td width="110px" align="right">&nbsp;</td>
				<td width="210px" align="left">  					
				<input class="button" type="submit" name="btn_register" value="<?php echo(lang('send'))?>"/>
				</td>
				<td width="19px" align="left">&nbsp;</td>
			</tr>
			<tr>
				<td width="110px" align="right">&nbsp;</td>
				<td width="210px" align="left">&nbsp;</td>
				<td width="19px" align="left">&nbsp;</td>
			</tr>
     	</table>     	
     </form>
</div>