<link rel="stylesheet" href="<?=base_url()?>scripts/thickbox/thickbox.css" type="text/css" media="screen"/>
<script type="text/javascript" src="<?=base_url()?>scripts/thickbox/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>scripts/thickbox/thickbox.js"></script>	
<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?=lang('answer')?>");
	if (answer){
		window.location = "<?=base_url()?>admin/contact_us/delete/"+id;
	}
}
</script>
								
</div>						

<div id ="div_right">		
	<ul>
		<li class="li_title">Danh sách liên hệ</li>
		<li>
			<table class="table_add" border="0" cellspacing="0">
				<tr>
					<td width="70px"><b><?=lang('search')?></b></td>
					<td><input class="input_text" type="text" name="search" value=""/></td>		
				</tr>	
				<tr>
					<td></td>
					<td><input class="button" type="submit" name="login_signin" value="<?=lang('search')?>"/></td>		
				</tr>	
			</table>
			<table class="table_list" border="0" cellspacing="0">
				<tr>
					<th width="64px" class="th_left"><?=lang('no')?></th>
					<th class="th_left">Thông tin liên hệ</th>
					<th width="60px" class="th_right">&nbsp;</th>
				</tr>
				<?php 
				if($contact_us)	
					for($i=0; $i<count($contact_us); $i++){
						$row = $contact_us[$i];
				?>
				<tr>
					<td valign="top" style="background-color:#c1d5e3;border-left:solid 1px #eaeced;border-bottom:solid 1px #eaeced;">&nbsp;<?=$i+1?></td>
					<td style="background-color:#c1d5e3;border-left:solid 1px #eaeced;border-bottom:solid 1px #eaeced;">
						<div style="margin:2px 5px 2px 5px;width:590px;">
							<p style="margin-top:3px;"><b>Họ và Tên :</b>&nbsp;&nbsp;<?=$row->name?></p>
							<p style="margin-top:3px;"><b>Địa chỉ :</b>&nbsp;&nbsp;<?=$row->address?></p>
							<p style="margin-top:3px;"><b>Điện thoại :</b>&nbsp;&nbsp;<?=$row->homephone?></p>
							<p style="margin-top:3px;"><b>Di động :</b>&nbsp;&nbsp;<?=$row->mobilephone?></p>
							<p style="margin-top:3px;"><b>Email :</b>&nbsp;&nbsp;<?=$row->email?></p>
							<p style="margin-top:3px;"><b>Nội dung :</b>&nbsp;&nbsp;<?=$row->description?></p>
						</div>
					</td>
					<td valign="top" style="padding-left:4px;background-color:#c1d5e3;border-left:solid 1px #eaeced;border-right:solid 1px #eaeced;border-bottom:solid 1px #eaeced;">
						<input type="checkbox" name="lock" id="lock" value="1"/>
						&nbsp;
						<a href="#" onclick="CheckDelete(<?=$row->id?>)"><img src="<?=base_url()?>images/style01/delete.png" border="0" alt="<?=lang('delete')?>"/></a>
					</td>
				</tr>
				<?php			
					}
				?>	
				<tr>
					<td colspan="2" class="rows_page"><?=$this->pagination->create_links()?></td>
					<td class="rows_page_right">
						<input type="checkbox" name="lock" id="lock" value="1"/>
						&nbsp;
						<?php 
						if($contact_us){
						?>	
						<a href="#" onclick="CheckDelete(<?=$row->id?>)"><img src="<?=base_url()?>images/style01/delete.png" border="0" alt="<?=lang('delete')?>"/></a>
						<?php			
						}
						?>
					</td>
				</tr>
			</table>
		</li>
	</ul>
</div>