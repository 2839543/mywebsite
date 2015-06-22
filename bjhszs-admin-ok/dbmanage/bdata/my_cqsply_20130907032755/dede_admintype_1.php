<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_admintype`;");
E_C("CREATE TABLE `dede_admintype` (
  `rank` float NOT NULL default '1',
  `typename` varchar(30) NOT NULL default '',
  `system` smallint(6) NOT NULL default '0',
  `purviews` text,
  PRIMARY KEY  (`rank`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_admintype` values('1','信息发布员','1','t_List t_AccList t_AccNew t_AccEdit t_AccDel a_List a_New a_Edit a_Del a_AccNew a_AccList a_AccEdit a_MyList a_MyEdit a_MyDel a_MyCheck sys_MdPwd sys_ArcBatch sys_Keyword sys_MakeHtml sys_Feedback sys_Upload sys_MyUpload pic_view plus_友情链接模块');");
E_D("replace into `dede_admintype` values('5','频道管理员','1','t_AccList t_AccNew t_AccEdit t_AccDel a_AccNew a_AccList a_AccEdit a_AccDel a_AccCheck a_MyList a_MyEdit a_MyDel a_MyCheck co_AddNote co_EditNote co_PlayNote co_ListNote co_ViewNote spec_New spec_List spec_Edit sys_MdPwd sys_Log sys_ArcTj sys_Source sys_Writer sys_Keyword sys_MakeHtml sys_Feedback sys_Upload sys_MyUpload member_List member_Edit plus_站内新闻发布 plus_友情链接模块 plus_留言簿模块 plus_投票模块 plus_广告管理 ');");
E_D("replace into `dede_admintype` values('10','超级管理员','1','admin_AllowAll ');");

require("../../inc/footer.php");
?>