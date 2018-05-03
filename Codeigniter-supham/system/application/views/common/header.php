<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />		
<meta name="robots" content="none" />		
<meta name="keywords" content="pedagogy" />
<meta name="description" content="pedagogy" />
<meta name="copyright" content="pedagogy" />
<title>su pham</title>	
</head>

<link href="<?php echo(base_url())?>css/front_end.css" rel="stylesheet" type="text/css" />
<body class="body">
<div align="center">
<div style="width:800px;">
	<?php
		$query = '';
 		$query .= ' SELECT *'; 		
 		$query .= ' FROM logo '; 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){		
	?>
	<div class="header" style="background:url(<?php echo(base_url())?>uploads/<?php echo($rows[0]->image); ?>) no-repeat left;"></div>
	<?php
		}
	?>
	<div id="header_slide" >
	<?php
		$query = '';
 		$query .= ' SELECT ';
 		$query .= ' 	id, '; 		
 		$query .= ' 	title, ';
 		$query .= ' 	description, ';  
 		$query .= ' 	image, ';  		
 		$query .= "     DATE_FORMAT(createdate, '%d') create_day,";
	 	$query .= "     DATE_FORMAT(createdate, '%m') create_month,";
	 	$query .= "     DATE_FORMAT(createdate, '%Y') create_year,";
	 	$query .= "     DATE_FORMAT(createdate, '%H:%i') create_hour,"; 		
	 	$query .= "     DATE_FORMAT(createdate, '%d-%m-%Y') createdate ";		
 		$query .= ' FROM news ';
 		$query .= ' ORDER BY news.createdate DESC ';
 		$query .= '	LIMIT 0,20 ';		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){		
	?>
			<marquee width="600" onmouseover ="stop(); this.style.cursor = 'pointer';" onmouseout = "start();" scrolldelay="150"> 
	<?php
			for($i=0; $i<count($rows); $i++){
				$row = $rows[$i];
	?>
    		<b><a href="<?php echo(base_url())?>news/view/<?php echo($row->id)?>"><?php echo($row->title)?></a></b>&nbsp;&nbsp;
	<?php
			}
	?>
			</marquee
	<?php
		}
	?>	
	</div>
	<div id="header01">
    	<a href="<?php echo(base_url())?>main"><b><?php echo(lang('homepage'))?></b></a>
    	<a href="<?php echo(base_url())?>about"><b><?php echo(lang('aboutus'))?></b></a>
    	<a href="<?php echo(base_url())?>contact"><b><?php echo(lang('contact'))?></b></a>
	</div>	
			
	<?php
		$query = '';
 		$query .= ' SELECT *'; 		
 		$query .= ' FROM banner '; 		
 		$result  = $this->db->query($query);
		$rows = $result->result() ;
		if( ($rows) && (is_array($rows)) ){
			if($rows[0]->visible){
	?>
	<div id="divAdRight" style="margin-left:0px; LEFT: -110px; WIDTH: 100px; POSITION: absolute; TOP: 71px" align=right> 
 		<a href="http://www.giaoduc.edu.vn/" target="_blank"><img href="http://www.giaoduc.edu.vn/" target="_blank" height=480  alt="" src="<?php echo(base_url())?>uploads/<?php echo($rows[0]->image02)?>" width=100 border=0 /> </a>
 	</div> 
	<div id="divAdLeft" style="LEFT: -110px; WIDTH: 100px; POSITION: absolute; TOP: 71px; float:left;" > 
		<a href="http://www.giaoduc.edu.vn/" target="_blank"><img  height=480 alt="" src="<?php echo(base_url())?>uploads/<?php echo($rows[0]->image01)?>" width=100 border=0/> </a>
	</div>
	<script type="text/javascript" src="<?php echo(base_url())?>javascript/banner.js"></script>
	<?php
			}
		}
	?>
	