<?php
include("scripts/fckeditor/fckeditor.php") ;
//config upload image editor/filemanager/php/config.php
?>

								
</div>

<div id ="div_right">		
	<ul>
		<li class="li_title"><?=lang('about_us')?></li>
		<li>
			<form method="post" action="<?=base_url()?>admin/about_us/save">
				<table class="table_add" border="0" cellspacing="0">
					<tr>
						<td width="80px"><b><?=lang('title')?><span class="note">(*)</span></b></td>
						<td><input class="input_text" style="width:643px;" type="text" name="title"  value="<?=$title;?>"/></td>
					</tr>
					<tr>
						<td valign="top"><b><?=lang('content')?></b></td>
						<td>
							<?php
							$oFCKeditor = new FCKeditor('description') ;
							$oFCKeditor->BasePath = base_url().'scripts/fckeditor/';
							$oFCKeditor->Value		=  $description ;
							$oFCKeditor->Width = '650';
							$oFCKeditor->Height = '650';						
							$oFCKeditor->Create() ;
							?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input class="button" type="submit" value="Lưu"/>&nbsp;&nbsp;&nbsp;
						<input class="button" type="submit" name="login_signin" value="<?=lang('show')?>"/></td>
					</tr>						
				</table>
			</form>		
		</li>
	</ul>
</div>