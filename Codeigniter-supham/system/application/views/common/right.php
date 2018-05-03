<script language="javascript" type="text/javascript">
function clickclear(thisfield, defaulttext) {
	if (thisfield.value == defaulttext) {
		thisfield.value = '';
	}
}
function clickrecall(thisfield, defaulttext) {
	if (thisfield.value == '') {
		thisfield.value = defaulttext;
	}
}
</script>
<div class="right">
	<div id="right01">
		<div id="title"><label><?php echo(lang('new_class_update'))?></label></div>
		<?php
			$query = '';
	 		$query .= ' SELECT ';
	 		$query .= ' 	a.id, ';
	 		$query .= ' 	a.id_provinces,a.id_districts, ';
	 		$query .= ' 	c.name AS provincesName,d.name AS districtsName, ';
	 		$query .= ' 	a.address,a.telephone,a.mobilephone, '; 
	 		$query .= ' 	a.email,a.contact, '; 
	 		$query .= ' 	a.id_level,a.subjects,a.quantity_students, '; 
	 		$query .= ' 	a.salary,a.type,a.gender, '; 
	 		$query .= ' 	a.id_school,a.description, '; 
	 		$query .= ' 	a.registerdate,a.status,a.lock, '; 
	 		$query .= ' 	b.name AS levelName ';
	 		$query .= ' FROM find_teacher a LEFT OUTER JOIN level b ON b.id = a.id_level ';
	 		$query .= '                     LEFT OUTER JOIN provinces c ON c.id = a.id_provinces ';
	 		$query .= '                     LEFT OUTER JOIN districts d ON d.id = a.id_districts ';
	 		$query .= ' WHERE a.`lock`=1 ';
	 		$query .= ' ORDER BY a.registerdate DESC'; 	
	 		$query .= '	LIMIT 0,30';	
	 		$result  = $this->db->query($query);
			$rows = $result->result() ;
			if( ($rows) && (is_array($rows)) ){
			
		?>
	   	<marquee style="margin-top:5px;margin-bottom:5px;" direction="up" onmouseover="stop();" onmouseout="start();" height="170" scrolldelay="200" >
			<ul>
				<?php
					for($i=0; $i<count($rows); $i++){
						$row = $rows[$i];
				?>
				<li>
					<a href="<?php echo(base_url())?>findteacher/view/<?php echo($row->id)?>"><b><?php echo($row->levelName)?></b><br/>
					<div style="color:#000000">
					<b><?php echo(lang('find_subjects'))?>&nbsp:&nbsp</b>
					<?php echo($row->subjects)?><br/><b>
					<?php echo(lang('place_teach'))?>&nbsp:&nbsp</b>
				<?php echo($row->districtsName.', '.$row->provincesName)?>		
					</div>
					</a>
				</li>				
				<?php			
				}
				?>
			</ul>
		</marquee>
		<?php			
		}
		?>
	</div>	
				
	<div id="right02" style="height:100px;">
		<div id="title"><label>Hỗ trợ trực tuyến</label></div>						
		<div style="margin-top:6px;"></div>
		<a  href="ymsgr:sendim?suphamsg"  >
<img src="http://opi.yahoo.com/online?u=suphamsg&m=g&t=2" alt="Su Pham" border=0 >
</a><br /><br />
         <a href="ymsgr:sendim?lebien_alpha" >
<img src="http://opi.yahoo.com/online?u=lebien_alpha&m=g&t=2" alt="Le Bien" border=0 >     
</a><br /><br />
	</div>
	<form  style="padding:0px;margin:0px;" id="frm_leftsignin" method="post" action="<?php echo(base_url())?>register/sendmail">	
	<div id="right02">
		<div id="title"><label><?php echo(lang('send_person_other'))?></label></div>						
		<div id="signin"><?php echo(lang('introduce_person_other'))?></div>
		<div id="signin"><input id="yourname" type="text" name="yourname" onclick="clickclear(this, '<?php echo(lang('yourname'))?>')" onblur="clickrecall(this,'<?php echo(lang('yourname'))?>')" value="<?php echo(lang('yourname'))?>"/></div>
		<div id="signin"><input id="youremail" type="text" name="youremail" onclick="clickclear(this, '<?php echo(lang('youremail'))?>')" onblur="clickrecall(this,'<?php echo(lang('youremail'))?>')" value="<?php echo(lang('youremail'))?>"/></div>
		<div id="signin"><input id="receiveremail" type="text" name="receiveremail" onclick="clickclear(this, '<?php echo(lang('receiveremail'))?>')" onblur="clickrecall(this,'<?php echo(lang('receiveremail'))?>')" value="<?php echo(lang('receiveremail'))?>"/></div>
		<div id="signin"><input  class="button" type="submit" name="left_signin" value="<?php echo(lang('send'))?>"/></div>											
	</div>
	</form>		
	<div id="right03">
	<div id="title"><label><?php echo(lang('advertise'))?></label></div>
	
		<?php
			$query = "";
 			$query .= " SELECT ";
 			$query .= " 	id,visible, "; 		
 			$query .= " 	url,image,createdate "; 		
 			$query .= " FROM advertise ";
 			$query .= " WHERE visible = 1 AND image <>''";
 			$query .= " ORDER BY id ";		
	 		$result  = $this->db->query($query);
			$rows = $result->result() ;
			if( ($rows) && (is_array($rows)) ){
			
		?>
	   	<marquee style=" margin-left: 8px;margin-right:8px;" direction="up" onmouseover="stop();" onmouseout="start();" height="138px" scrolldelay="200" >
				<?php
					for($i=0; $i<count($rows); $i++){
						$row = $rows[$i];
				?>
				<a href="<?php echo($row->url)?>" target="_blank">
				<img  src="<?=base_url().'uploads/'.$row->image?>" alt="" width="156px" height="130px" title="" border="1"/>			
				</a>
				<div style="height:3px;"></div>
				<?php			
				}
				?>			
		</marquee>
		<?php			
		}
		?>
	</div>											
</div>

