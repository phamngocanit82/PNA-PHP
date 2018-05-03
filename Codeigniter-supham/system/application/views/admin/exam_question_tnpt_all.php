<script language="javascript" type="text/javascript">
function CheckDelete(id){	
	var answer  = confirm("<?php echo(lang('yesno_delete').'\n\n'.lang('delete_all'))?>");
	if (answer){
		window.location = "<?=base_url()?>admin/exam_question_tnpt/delete/"+id;
	}
}
</script>
<div class="right">
	<div id="title"><label><?php echo(lang('admin_management_exam_question_tnpt').' TNPT')?></label></div>
	<?php 
		if($exam_question_tnpt){
			for($i=0; $i<count($exam_question_tnpt); $i++){
				$row = $exam_question_tnpt[$i];
	?>
		<div style="float:left">
			<div class="newstitle">
				<a href="<?=base_url()?>admin/exam_question_tnpt/view/<?php echo($row->id)?>"><?php echo($row->title)?></a>
				<a href="javascript:void(0)" onclick="CheckDelete(<?php echo$row->id ;?>)">
					<img alt="Delete" title="Delete" width="12" height="12" border="0" src="<?=base_url().'image/delete.png'?>"/>
				</a>
					|
				<a href="<?=base_url()?>admin/exam_question_tnpt/edit/<?php echo($row->id)?>/<?php echo($page)?>" >
				<img alt="Edit" title="Edit" width="12" height="12" border="0" src="<?=base_url().'image/edit.png'?>"/>
				</a>
			</div>
			<div class="contents">									
				<?php 
				if($row->image){
				?>
				<a id="image" href="#" onclick="return hs.expand(this)">
					<img src="<?=base_url().'uploads/'.$row->image?>" alt="" width="150" height="150" title="" border="0"/>
				</a>
				<?php
				}
				?>			
				<small><?php echo($row->createdate.' '.lang('admin_at').' '.$row->create_hour)?></small>	
				<p><?php echo(checkLength($row->description,300))?></p>								
			</div>				
		</div>		
		<div class="break_news"></div>
	<?php		
			}
		}
	?>
	<?php
		if($exam_question_tnpt)
			echo $this->pagination->create_links(); 
		else 
			echo(lang('no_exam_question_tnpt'));
	?>		
	</br>	
</div>
