<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_member_flink`;");
E_C("CREATE TABLE `dede_member_flink` (
  `aid` mediumint(8) unsigned NOT NULL auto_increment,
  `mid` mediumint(8) unsigned NOT NULL default '0',
  `title` varchar(30) NOT NULL default '',
  `url` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_member_flink` values('1','2','织梦内容管理系统','http://www.dedecms.com');");
E_D("replace into `dede_member_flink` values('2','3','织梦内容管理系统','http://www.dedecms.com');");
E_D("replace into `dede_member_flink` values('3','4','织梦内容管理系统','http://www.dedecms.com');");
E_D("replace into `dede_member_flink` values('4','5','织梦内容管理系统','http://www.dedecms.com');");
E_D("replace into `dede_member_flink` values('5','6','织梦内容管理系统','http://www.dedecms.com');");
E_D("replace into `dede_member_flink` values('6','7','织梦内容管理系统','http://www.dedecms.com');");

require("../../inc/footer.php");
?>