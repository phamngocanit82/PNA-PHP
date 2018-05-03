<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");
	if (answer){
		window.location = "<?=base_url()?>admin/register/delete/"+id;
	}
}
</script>
<div class="right">
	<div id="title"><label><?php echo(lang('admin_register_member'))?></label></div>
	<form class="register_form" id="frm_register_add" method="post" action="<?php echo(base_url())?>register/all">
	   <?php 
		if($register){
			for($i=0; $i<count($register); $i++){
				$row = $register[$i];
		?>    	    	
    	<table id="findteacher_table" >  
	    	<tr>
				<td colspan="3" align="right">				
					<a align="right" href="<?php echo(base_url())?>admin/register/view/<?php echo($row->id)?>/<?php echo($page)?>"><?php echo(lang('continue'))?></a>
					&nbsp|&nbsp
					<?php
					if($row->activation){
					?>
					<a align="right" href="<?php echo(base_url())?>admin/register/activation/<?php echo($row->id)?>/<?php echo($page)?>/<?php echo($row->activation)?>">Khoá TK</a>
					<?php
					}
					else{
					?>
					<a align="right" href="<?php echo(base_url())?>admin/register/activation/<?php echo($row->id)?>/<?php echo($page)?>/<?php echo($row->activation)?>">Mở TK</a>
					<?php
					}
					?>										
					&nbsp|&nbsp
					<a href="javascript:void(0)" onclick="CheckDelete(<?php echo$row->id ;?>)">
						<img alt="Delete" title="Delete" width="12" height="12" border="0" src="<?=base_url().'image/delete.png'?>"/>
					</a>
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
					[<?php echo(lang('code'))?>&nbsp:&nbsp
					<?php echo($row->id)?>]
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
				<td align="left">
				<b><?php echo(lang('title_school'))?>&nbsp:&nbsp</b>
				<?php echo($row->schoolName)?>
				</td>				
			</tr>
			<tr>
				<td align="left">
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