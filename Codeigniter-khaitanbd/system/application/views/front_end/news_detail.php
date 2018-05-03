<div id="righter">
  	<table border="0px" width="100%" style="margin-bottom:15px;font-size:14px;background-color:#f7f3f7;border:solid 1px #799ebb;-webkit-border-radius: 5px;-moz-border-radius: 5px;">
		<tr>
			<td align="left" colspan="2" height="25px;" class="title_content">
				<div>
					<div style="float:left;"><b style="font-style:italic;font-size:14px;color:#fff;">&nbsp;&nbsp;Tin tức</b></div>
					<div style="float:right;"><label style="font-size:12px;color:#fff;"></div>
				</div>
			</td>						
		</tr>
		<?php 
		if($news){	
		?>
		<tr>	
			<td >
				<div style="margin:2px 10px 10px 10px;width:600px;>
					<p style="margin-top:3px;"><a href="<?=base_url()?>news/detail/<?=$news->id?>"><b><?=$news->title?></b></a></p>
					<p><small><?php echo($news->createdate.' lúc '.$news->create_hour)?></small></p>
					<p style="margin-bottom:3px;"><?=$news->description?></p>
				</div>
			</td>	
		</tr>
		<?php			
			}
		?>			
		<tr>
			<td colspan="2" class="rows_page"><?=$this->pagination->create_links()?></td>
		</tr>
	</table>	
</div>
