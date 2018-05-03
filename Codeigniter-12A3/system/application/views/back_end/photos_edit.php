<div id="lefter">	
	<div id="top"></div>
	<div id="main_center">
		<div id="center">
			<div id="register" align="left">
				<div id="title">Edit a photos category</div>
				<form action="<?=base_url()?>admin/photos/save_edit/<?=$id?>/<?=$page?>" method="post" enctype="multipart/form-data">
				<table style="width:660px;">
					<tr>
						<td  width="120px">Photos category</td>
						<td>
							<select id="photos_id_photos_group" name="id_photos_group">
	    					<?php 
	    					echo('a');
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
						<td><input style="width:540px;" class="input_text" type="text" id="photos_image" name="image" value="<?=$image?>"/></td>						
					</tr>
					<tr>
						<td></td>
						<td align="left"><input type="submit" class="button" name="photos_add" value="Save"/></td>
					</tr>				
				</table>
				</form>			
			</div>
			
		</div>
	</div>
	<div id="bottom"></div>
</div>
