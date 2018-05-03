<script type="text/javascript" src="<?php echo(base_url())?>javascript/left.js"></script>
<div class="left">	
	<div id="left02">
		<div class="left_menu_title">			
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title01')"><?php echo(lang('teacher_student'))?></a></div>			
			<div id="left_menu_title01">
				<div id="submenu" ><a href="<?php echo(base_url())?>register/add"><?php echo(lang('register_member'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>findteacher/all"><?php echo(lang('find_class_study'))?></a></div>
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title02')"><?php echo(lang('family_student'))?></a></div>
			<div id="left_menu_title02">				
				<div id="submenu"><a href="<?php echo(base_url())?>findteacher/add"><?php echo(lang('register_find_teacher'))?></a></div>	
				<div id="submenu" ><a href="<?php echo(base_url())?>register/all"><?php echo(lang('find_teacher_current'))?></a></div>				
			</div>				
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title03')"><?php echo(lang('service_bkv'))?></a></div>
			<div id="left_menu_title03">				
				<div id="submenu" ><a href="<?php echo(base_url())?>teacher_pure"><?php echo(lang('teacher_pure'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>teacher_quality"><?php echo(lang('teacher_quality'))?></a></div>
				<div id="submenu" ><a href="<?php echo(base_url())?>teacher_online"><?php echo(lang('teacher_online'))?></a></div>				
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title04')"><?php echo(lang('family_student_known'))?></a></div>
			<div id="left_menu_title04">				
				<div id="submenu" ><a href="<?php echo(base_url())?>secret_find_teacher"><?php echo(lang('secret_find_teacher'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>why_need_teacher"><?php echo(lang('why_need_teacher'))?></a></div>
				<div id="submenu" ><a href="<?php echo(base_url())?>process_selection"><?php echo(lang('process_selection'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>i_am_teacher"><?php echo(lang('i_am_teacher'))?></a></div>
				<div id="submenu" ><a href="<?php echo(base_url())?>salary_reference">Bảng lương tham khảo</a></div>
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title05')">Góc học tập</a></div>
			<div id="left_menu_title05">				
				<div id="submenu" ><a href="<?php echo(base_url())?>exam_question_tnpt"><?php echo(lang('admin_exam_question_tnpt'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>exam_question_tsdh"><?php echo(lang('admin_exam_question_tsdh'))?></a></div>
				<div id="submenu" ><a href="<?php echo(base_url())?>key_tnpt"><?php echo(lang('admin_key_tnpt'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>key_tsdh"><?php echo(lang('admin_key_tsdh'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>secret_studing"><?php echo(lang('admin_secret_studing'))?></a></div>
			</div>
			<div id="mainmenu"><a href="<?php echo(base_url())?>announcement/all"><?php echo(lang('admin_announcement'))?></a></div>
			<div id="mainmenu"><a href="<?php echo(base_url())?>news/all"><?php echo(lang('admin_news'))?></a></div>	
		</div>		
	</div>
	<?php 
	if(!$this->session->userdata('user')){
	?>
	<form  style="padding:0px;margin:0px;" id="frm_leftsignin" method="post" action="<?=base_url()?>/register/login">	
	<div id="left01">
		<div id="title"><label><?php echo(lang('signin'))?></label></div>						
		<div id="signin"><?php echo(lang('email'))?></div>
		<div id="signin"><input id="email" type="text" name="email" value=""/></div>
		<div id="signin"><?php echo(lang('password'))?></div>
		<div id="signin"><input id="password" type="password" name="password" value=""/></div>
		<div id="signin"><input  class="button" type="submit" name="left_signin" value="<?php echo(lang('signin'))?>"/></div>
		<div id="signin"><a href="<?php echo(base_url())?>/register/forgotpass"><?php echo(lang('forgot_password'))?></a></div>							</div>
	</form>
	<?php
	}
	else{
	?>
	<div id="left02" style="margin-top:7px;">
		<div class="left_menu_title">
			<div id="mainmenu"><a href="<?php echo(base_url())?>register/person_infor">Thông tin cá nhân</a></div>
			<div id="mainmenu"><a href="<?php echo(base_url())?>register/logout">Thoát</a></div>
		</div>	
	</div>	
	<?php
	}
	?>
	
</div>
