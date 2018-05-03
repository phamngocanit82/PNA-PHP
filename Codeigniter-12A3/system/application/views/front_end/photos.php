<script type="text/javascript" src="<?=base_url()?>scripts/highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>scripts/highslide/highslide.css" />
<script type="text/javascript">
	hs.graphicsDir = '<?=base_url()?>scripts/highslide/graphics/';
	hs.creditsText = 'Lớp 12A3';
	hs.creditsTitle = 'phamngocanthi@yahoo.com';
   hs.creditsHref = '#';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.outlineType = 'glossy-dark';
	hs.wrapperClassName = 'dark';
	hs.fadeInOut = true;
	//hs.dimmingOpacity = 0.75;

	// Add the controlbar
	if (hs.addSlideshow) hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: .6,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});
</script>


<div id="lefter">	
	<div id="top"></div>
	<div id="main_center">
			
		<div id="center">
			<div id="photos">
				<embed src="http://chidung.jimdo.com/c/swf/ws-slideshow.swf" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" quality="best" wmode="transparent" bgcolor="#000" flashvars="XMLPath=http://chidung.jimdo.com/swf/1017461811_flashimagesconfig.xml&amp;langID=EN&amp;" width="600px" height="450px" pluginspage="http://www.macromedia.com/go/getflashplayer" >
				
				<?php 
	    		if($photos){
	    			$id_photos_group = 0;	    			
	    			$i = 0;
	    			$j = 0;
	    			$id_photos_group = $photos[0]->id_photos_group;
	    		?>				
				<div id="title"><?= $photos[0]->title_group?></div>
				<table width="660px" >
				<?php
					while($i<count($photos)){		    			
	    				$row = $photos[$i];
	    				if($row->id_photos_group!=$id_photos_group){
	    					$id_photos_group = $row->id_photos_group;
	    					$index = 1;
	    		?>
	    		</table>
	    		<div id="title"><?= $photos[$i]->title_group?></div>
				<table width="660px">
	    				<?php
	    				}
	    				?>
	    				<tr>
	    				<?php
	    				for($j=0; $j<3; $j++){
	    					if($id_photos_group != $photos[$i]->id_photos_group){
								$j = 3;
							}		
							else{
							$row = $photos[$i];
	    				?>	
	    					<td width="220px" height="220px" >
								<a href="<?=$row->image?>" class="highslide" onclick="return hs.expand(this)">
									<img src="<?=$row->image?>" alt="Highslide JS"	title="" width="220px" height="220px"/>
								</a>
							</td>
						<?php							
								$i++;
								if($i == count($photos))break;
							}
	    				}
						?>
						</tr>
					<?php
	    			}
	    			?>
	    		</table>
	    		<?php
	    		}	
	    		?>					
			</div>
			<?php 
			if($photos){
				echo $this->pagination->create_links(); 		
			}
			?>
		</div>		
		
	</div>
	<div id="bottom"></div>
</div>


