<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("Delete a photos\n\nAre you want?");
	if (answer){
		window.location = "<?=base_url()?>admin/photos/delete/"+id;
	}
}
</script>
<div id="lefter">	
	<div id="top"></div>
	<div id="main_center">
		<div id="center">
			
			<div id="register" align="left">
				<b>.::<a href="#">Add a photo</a>.::</b>				
				</br>
				<form action="<?=base_url()?>admin/photos/save_add/<?=$page?>" method="post" enctype="multipart/form-data">
				<table style="width:660px;">
					<tr>
						<td  width="120px">Photos category</td>
						<td>
							<select id="photos_id_photos_group" name="id_photos_group">
	    					<?php 
	    					if($photos_group){
	    						for($i=0; $i<count($photos_group); $i++){
	    							$row = $photos_group[$i];
	    					?>
	    						<option value="<?php echo($row->id)?>" <?php if($id_photos_group==$row->id)echo('selected');?>><?php echo($row->title)?></option>			
							<?php
	    						}
	    					}
	    					?>
	    					</select>
						</td>						
					</tr>
					<tr>
						<td>Title</td>
						<td><input style="width:540px;" class="input_text" id="photos_title" type="text" name="title" value="<?=$title?>"/></td>						
					</tr>
					<tr>
						<td>Http image</td>
						<td><input style="width:540px;" class="input_text" type="text" id="image" name="image" value="<?=$image?>"/></td>						
					</tr>
					<tr>
						<td></td>
						<td align="left"><input type="submit" class="button" name="photos_add" value="Add"/></td>
					</tr>				
				</table>
				</form>
			</div>
			
		</div>
	</div>
	<div id="bottom"></div>
	<!-- -->
	<div id="top"></div>
	<div id="main_center">
		<div id="center">			
			
			<div id="register" align="left">
				<table id="table_all" style="width:660px;" cellpadding="0" cellspacing="0">
					<tr>
				    	<th>&nbsp;</th>
						<th>Title</th>						
					   <th>Image</th>					   
					   <th>&nbsp;</th>
					</tr>
					<?php 
	    			if($photos){
	    				$photos_group = $photos[0]->id_photos_group;
	    				$index = 1;
	    			?>
	    			<tr>
	    				<td colspan="4" style="background:#385B88;"><b style="color:#ffffff;"><?= $photos[0]->title_group?></b></td>
	    			</tr>
	    				<?php
	    				for($i=0; $i<count($photos); $i++){
	    					$row = $photos[$i];
	    					if($row->id_photos_group!=$photos_group){
	    						$photos_group = $row->id_photos_group;
	    						$index = 1;
	    				?>
	    			<tr>
	    				<td colspan="4" style="background:#385B88;"><b style="color:#ffffff;"><?= $row->title_group?></b></td>
	    			</tr>
	    					<?php
	    					}	    					
	    					?>
	    			<tr>
						<th scope="row" width="65px" class="specalt"><?php echo($index+$page)?></th>
					   <td width="300px"><?=$row->title?>&nbsp;</td>					   
					   <td width="130px" valign="middle"><a href="<?=$row->image?>" onclick="return hs.expand(this)"><img class="image" src="<?=$row->image?>" width="125px" height="125px"/></a></td>
						 <td width="65px"align="center">
					    	<a href="<?=base_url()?>admin/photos/edit/<?=$row->id?>/<?=$page?>"><img src="<?=base_url()?>images/style_01/edit.png" border="0" /></a>
							&nbsp;|&nbsp;
							<a href="#" onclick="CheckDelete(<?=$row->id?>)"><img src="<?=base_url()?>images/style_01/delete.png" border="0" /></a>
					   </td>
					</tr>  
					<?php
							$index++;	    					
	    				}
	    			}
	    			?>					
					
				</table>
				<?php 
				if($photos){
					echo $this->pagination->create_links(); 		
				}
				?>
			</div>
			
		</div>
	</div>
	<div id="bottom"></div>
	
</div>
