<div id="lefter">	
	<div id="top"></div>
	<div id="main_center">
		<div id="center">
			<div id="register" align="left">
				<div id="title">Add a photo category</div>
				<form action="<?=base_url()?>admin/photos_group/save_add" method="post" enctype="multipart/form-data">
				<table style="width:680px;">	
					<tr>
						<td valign="top" width="70px">Title</td>
						<td>
							<input style="width:600px;" class="input_text" type="text" name="title" value=""/>
						</td>					
					</tr>																
					<tr>
						<td></td>
						<td align="left"><input type="submit" class="button" name="news_add" value="Add"/></td>
					</tr>					
				</table>	
				</form>	
			</div>
			
		</div>
	</div>
	<div id="bottom"></div>
</div>