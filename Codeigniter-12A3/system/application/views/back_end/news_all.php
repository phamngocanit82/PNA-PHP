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
				<b>.::<a href="<?=base_url()?>admin/news/news_add">Add news</a>.::</b>
				</br></br>
				<?php 
				if($news){
					for($i=0; $i<count($news); $i++){
						$row = $news[$i];
				?>				
				<div id="hrefTitle">
					<a href="<?=base_url()?>admin/news/detail/<?=$row->id?>/<?=$page?>"><?=$row->title?></a>&nbsp;
					<a href="<?=base_url()?>admin/news/edit/<?=$row->id?>/<?=$page?>"><img src="<?=base_url()?>images/style_01/edit.png" border="0" /></a>
					&nbsp;|&nbsp;
					<a href="#" onclick="CheckDelete(<?=$row->id?>)"><img src="<?=base_url()?>images/style_01/delete.png" border="0" /></a>
				</div>	
				<div id="datetime"><?=$row->createdate.' at '.$row->create_hour?></div>
				<div style="margin-top:5px;font-size:13px;"><?php echo(checkLength($row->description,800))?></div>	
				<?php
						if($i<count($news)-1){
				?>
				<div id="break"></div>
				<?php
						}
					}
					echo $this->pagination->create_links(); 
				}	
				?>	
			</div>
			
		</div>
	</div>
	<div id="bottom"></div>
</div>
