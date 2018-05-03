<link rel="stylesheet" href="<?=base_url()?>scripts/thickbox/thickbox.css" type="text/css" media="screen"/>
<script type="text/javascript" src="<?=base_url()?>scripts/thickbox/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>scripts/thickbox/thickbox.js"></script>	
<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?=lang('answer')?>");
	if (answer){
		window.location = "<?=base_url()?>admin/news/delete/"+id;
	}
}
</script>
	<div id="div_left_margin">				
		<ul>
			<li class="li_title"><?=lang('news')?></li>
			<li class="menu_item_normal"><a href="<?=base_url()?>admin/news/add"><?=lang('news_add')?></a></li>
			<li class="menu_item_click"><a href="<?=base_url()?>admin/news/all"><?=lang('news_list')?></a></li>	
		</ul>
	</div>								
</div>						

<div id ="div_right">		
	<ul>
		<li class="li_title">Tin tức</li>
		<li>
			<?php 
			if($news){
			?>
			<div style="margin:20px 5px 15px 20px;width:750px;">
				<p style="margin-top:3px;"><b>Tiêu đề :&nbsp;&nbsp;<?=$news->title?></b></p>
				<p style="margin-top:3px;"><b>Nội dung :</b>&nbsp;&nbsp;<?=$news->description?></p>
			</div>
			<?php			
			}
			?>
		</li>
	</ul>
</div>