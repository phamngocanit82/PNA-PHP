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
		if($news)	
			for($i=0; $i<count($news); $i++){
				$row = $news[$i];
		?>
		<tr>	
			<td >
				<div style="margin:2px 10px 2px 10px;width:600px;<?php if($i<count($news)-1) echo('border-bottom:solid 1px #d9d9d9;')?>">
					<p style="margin-top:3px;"><a href="<?=base_url()?>news/detail/<?=$row->id?>"><b><?=$row->title?></b></a></p>
					<p><small><?php echo($row->createdate.' lúc '.$row->create_hour)?></small></p>
					<p style="margin-bottom:3px;"><?php echo(checkLength($row->description,500))?></p>
				</div>
			</td>	
		</tr>
		<?php			
			}
		?>			
		<tr align="right"> 
			<td colspan="2" class="rows_page"><?=$this->pagination->create_links()?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>	
</div>
