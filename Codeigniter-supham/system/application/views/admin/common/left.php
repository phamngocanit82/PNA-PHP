<script language="JavaScript" type="text/javascript">
function expandmenu(id){
	var mySection = document.getElementById(id);
	if(mySection.style.display=="none"){		
		mySection.style.display="block";
	} 
	else{		
		mySection.style.display="none";
	} 
}
</script>
<div class="left">	
	<div id="left01">		
		<div class="left_menu_title">		
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title01')"><?php echo(lang('provinces'))?></a></div>			
			<div style="display:none" id="left_menu_title01">
				<div id="submenu"><a href="<?php echo(base_url())?>admin/provinces/add"><?php echo(lang('add_provinces'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/provinces/all"><?php echo(lang('list_provinces'))?></a></div>				
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title02')"><?php echo(lang('districts'))?></a></div>			
			<div style="display:none" id="left_menu_title02">
				<div id="submenu"><a href="<?php echo(base_url())?>admin/districts/add"><?php echo(lang('add_districts'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/districts/all"><?php echo(lang('list_districts'))?></a></div>
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title03')"><?php echo(lang('school'))?></a></div>
			<div style="display:none" id="left_menu_title03">				
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/school/add"><?php echo(lang('add_school'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/school/all"><?php echo(lang('list_school'))?></a></div>
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title04')"><?php echo(lang('diploma'))?></a></div>
			<div style="display:none" id="left_menu_title04">				
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/diploma/add"><?php echo(lang('add_diploma'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/diploma/all"><?php echo(lang('list_diploma'))?></a></div>
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title05')"><?php echo(lang('level'))?></a></div>
			<div style="display:none" id="left_menu_title05">				
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/level/add"><?php echo(lang('add_level'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/level/all"><?php echo(lang('list_level'))?></a></div>
			</div>
		</div>		
	</div>	
	<div id="left02">		
		<div class="left_menu_title">		
			<div id="mainmenu"><a href="<?php echo(base_url())?>admin/register"><?php echo(lang('admin_register_member'))?></a></div>							
			<div id="mainmenu"><a href="<?php echo(base_url())?>admin/register02"><?php echo(lang('find_teacher_current'))?></a></div>							
			<div id="mainmenu"><a href="<?php echo(base_url())?>admin/findteacher"><?php echo(lang('admin_register_teacher'))?></a></div>			
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title06')"><?php echo(lang('service_bkv'))?></a></div>
			<div id="left_menu_title06">				
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/teacher_pure/all"><?php echo(lang('select_teacher_pure'))?></a></div>
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/teacher_pure"><?php echo(lang('teacher_pure'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/teacher_quality/all"><?php echo(lang('select_teacher_quality'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/teacher_quality"><?php echo(lang('teacher_quality'))?></a></div>
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/teacher_online/all"><?php echo(lang('select_teacher_online'))?></a></div>
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/teacher_online"><?php echo(lang('teacher_online'))?></a></div>		
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title07')"><?php echo(lang('family_student_known'))?></a></div>
			<div id="left_menu_title07">				
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/secret_find_teacher"><?php echo(lang('secret_find_teacher'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/why_need_teacher"><?php echo(lang('why_need_teacher'))?></a></div>
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/process_selection"><?php echo(lang('process_selection'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/i_am_teacher"><?php echo(lang('i_am_teacher'))?></a></div>
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/salary_reference">Bảng lương tham khảo</a></div>
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title08')"><?php echo(lang('admin_exam_question_tnpt'))?></a></div>
			<div id="left_menu_title08">				
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/exam_question_tnpt/add"><?php echo(lang('admin_add_exam_question_tnpt'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/exam_question_tnpt/all"><?php echo(lang('admin_management_exam_question_tnpt'))?></a></div>
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title09')"><?php echo(lang('admin_exam_question_tsdh'))?></a></div>
			<div id="left_menu_title09">				
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/exam_question_tsdh/add"><?php echo(lang('admin_add_exam_question_tsdh'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/exam_question_tsdh/all"><?php echo(lang('admin_management_exam_question_tsdh'))?></a></div>
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title10')"><?php echo(lang('admin_key_tnpt'))?></a></div>
			<div id="left_menu_title10">				
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/key_tnpt/add"><?php echo(lang('admin_add_key_tnpt'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/key_tnpt/all"><?php echo(lang('admin_management_key_tnpt'))?></a></div>
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title11')"><?php echo(lang('admin_key_tsdh'))?></a></div>
			<div id="left_menu_title11">				
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/key_tsdh/add"><?php echo(lang('admin_add_key_tsdh'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/key_tsdh/all"><?php echo(lang('admin_management_key_tsdh'))?></a></div>
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title12')"><?php echo(lang('admin_secret_studing'))?></a></div>
			<div id="left_menu_title12">				
				<div id="submenu" ><a href="<?php echo(base_url())?>admin/secret_studing/add"><?php echo(lang('admin_add_secret_studing'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/secret_studing/all"><?php echo(lang('admin_management_secret_studing'))?></a></div>
			</div>			
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title09')"><?php echo(lang('admin_announcement'))?></a></div>
			<div id="left_menu_title09">
				<div id="submenu"><a href="<?php echo(base_url())?>admin/announcement/add"><?php echo(lang('admin_add_announcement'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/announcement/all"><?php echo(lang('admin_management_announcement'))?></a></div>
			</div>
			<div id="mainmenu"><a href="#" onclick="expandmenu('left_menu_title10')"><?php echo(lang('admin_news'))?></a></div>	
			<div id="left_menu_title10">
				<div id="submenu"><a href="<?php echo(base_url())?>admin/news/add"><?php echo(lang('admin_add_news'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/news/all"><?php echo(lang('admin_management_news'))?></a></div>
			</div>		
		</div>		
	</div>
	<div id="left02">		
		<div class="left_menu_title">			
			<div id="mainmenu" onclick="expandmenu('left_menu_title11')"><a href="#"><?php echo(lang('advertise'))?></a></div>
			<div id="left_menu_title11">
				<div id="submenu"><a href="<?php echo(base_url())?>admin/advertise/add"><?php echo(lang('admin_add_advertise'))?></a></div>
				<div id="submenu"><a href="<?php echo(base_url())?>admin/advertise/all"><?php echo(lang('admin_management_advertise'))?></a></div>
			</div>
			<div id="mainmenu"><a href="<?php echo(base_url())?>admin/contact"><?php echo(lang('contact'))?></a></div>				
			<div id="mainmenu"><a href="<?php echo(base_url())?>admin/banner">Banner</a></div>
			<div id="mainmenu"><a href="<?php echo(base_url())?>admin/logo">Logo</a></div>				
		</div>
	</div>	
	<div id="left02">
		<div class="left_menu_title">
			<div id="mainmenu"><a href="<?php echo(base_url())?>admin/register/changepass"><?php echo(lang('change_password'))?></a></div>				
		</div>
	</div>	
</div>
