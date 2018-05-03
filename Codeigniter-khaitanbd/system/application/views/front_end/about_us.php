<div id="righter">
    <table border="0px" width="100%" style="margin-bottom:15px;font-size:14px;background-color:#f7f3f7;border:solid 1px #799ebb;-webkit-border-radius: 5px;-moz-border-radius: 5px;">
		<tr>
			<td align="left" height="25px;" class="title_content">
				<div>
					<div style="float:left;"><b style="font-style:italic;font-size:14px;color:#fff;">&nbsp;&nbsp;Giới thiệu</b></div>
					<div style="float:right;"><label style="font-size:14px;color:#fff;"></div>
				</div>
			</td>						
		</tr>
		<?php 
		if($about_us){
			$row = $about_us[0];
		?>
		<tr>
			<td>
				<div style="margin:16px;color:#2053a7;height:25px;font-size:14px;border-bottom:solid 1px #799ebb;"><b><?echo($row->title);?></b></div>
				<div style="margin:20px;"><? echo($row->description);?></div>
			</td>
		</tr>
		<?php
		}
		?>
		<tr><td colspan="2" height="20px"></td></tr>								
		<tr><td colspan="2" height="30px"></td></tr>
	</table>	
</div>

