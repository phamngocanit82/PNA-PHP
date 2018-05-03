<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("Delete a photos_group\n\nAre you want?");
	if (answer){
		window.location = "<?=base_url()?>admin/photos_group/delete/"+id;
	}
}
</script>
<div id="lefter">	
	<div id="top"></div>
	<div id="main_center">
		<div id="center">
			
			<div id="register" align="left">
				<b>.::<a href="<?=base_url()?>admin/photos_group/add">Add a photo category</a>.::</b>
				</br></br>
				<table id="table_all" style="width:660px;" cellpadding="0" cellspacing="0">
				  	<tr>
				    	<th>&nbsp;</th>
						<th>Title</th>						
					   <th>&nbsp;</th>
					</tr>
					<?php 
						if($photos_group){
							for($i=0; $i<count($photos_group); $i++){
								$row = $photos_group[$i];
					?>
					<tr>
					    <th scope="row" width="50px" class="specalt"><?php echo($i+1+$page)?></th>
					    <td width="510px"><?php echo($row->title)?></td>
					    <td width="100px"align="center">
					    	<a href="<?=base_url()?>admin/photos_group/edit/<?=$row->id?>/<?=$page?>"><img src="<?=base_url()?>images/style_01/edit.png" border="0" /></a>
							&nbsp;|&nbsp;
							<a href="#" onclick="CheckDelete(<?=$row->id?>)"><img src="<?=base_url()?>images/style_01/delete.png" border="0" /></a>
					    </td>
					</tr>  
					<?php
							}							
						}
					?>
				</table>	
				<?php 
				if($photos_group){
					echo $this->pagination->create_links(); 		
				}
				?>
			</div>
			
		</div>
	</div>
	<div id="bottom"></div>
</div>
