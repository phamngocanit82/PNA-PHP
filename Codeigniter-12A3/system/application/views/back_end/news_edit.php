<?php
	include('scripts/fckeditor/fckeditor.php') ;
?>	
<div id="lefter">	
	<div id="top"></div>
	<div id="main_center">
		<div id="center">
			<div id="register" align="left">
				<div id="title">Edit a news</div>
				<form action="<?=base_url()?>admin/news/save_edit/<?=$id?>/<?=$page?>" method="post" enctype="multipart/form-data">
				<table style="width:680px;">	
					<tr>
						<td valign="top" width="70px">Title</td>
						<td>
							<input style="width:600px;" class="input_text" type="text" name="title" value="<?=$title?>"/>
						</td>					
					</tr>											
					<tr>
						<td valign="top" >Description</td>
						<td valign="top">
						<?php
						$oFCKeditor = new FCKeditor('description') ;
						$oFCKeditor->Value = $description ;
						$oFCKeditor->Height = '500';
						$oFCKeditor->Width = '600';
						$oFCKeditor->Create() ;
						?>	
						</td>					
					</tr>			
					<tr>
						<td></td>
						<td align="left"><input type="submit" class="button" name="news_edit" value="Save"/></td>
					</tr>					
				</table>	
				</form>				
			</div>
			
		</div>
	</div>
	<div id="bottom"></div>
</div>
