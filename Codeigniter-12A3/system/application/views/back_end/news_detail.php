<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("Delete a news\n\nAre you want?");
	if (answer){
		window.location = "<?=base_url()?>admin/news/delete/"+id;
	}
}
</script>
<div id="lefter">	
	<div id="top"></div>
	<div id="main_center">
		<div id="center">
			<div id="register" align="left">								
				<?php 
				if($news){
					$row = $news;
				?>				
				<div id="hrefTitle">
					<a href="#"><?=$row->title?></a>&nbsp;
					<a href="<?=base_url()?>admin/news/edit/<?=$row->id?>/<?=$page?>"><img src="<?=base_url()?>images/style_01/edit.png" border="0" /></a>
					&nbsp;|&nbsp;
					<a href="#" onclick="CheckDelete(<?=$row->id?>)"><img src="<?=base_url()?>images/style_01/delete.png" border="0" /></a>
				</div>	
				<div id="datetime"><?=$row->createdate.' at '.$row->create_hour?></div>
				<div style="font-size:13px;"><?=$row->description?></div>					
				<?php					
				}
				?>				
			</div>
			
		</div>
	</div>
	<div id="bottom"></div>
</div>
