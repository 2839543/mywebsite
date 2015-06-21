<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_member_msg`;");
E_C("CREATE TABLE `dede_member_msg` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `mid` mediumint(8) unsigned NOT NULL default '0',
  `userid` char(20) NOT NULL default '',
  `ip` char(15) NOT NULL default '',
  `ischeck` smallint(6) NOT NULL default '0',
  `dtime` int(10) unsigned NOT NULL default '0',
  `msg` text,
  PRIMARY KEY  (`id`),
  KEY `id` (`ischeck`,`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_member_msg` values('1','1','admin','127.0.0.1','1','1270775620','<img src=''/member/templets/images/smiley/6.gif'' style=''cursor: pointer; position: relative;''>天气和心情都非常不错!');");
E_D("replace into `dede_member_msg` values('2','6','沙羡','127.0.0.1','1','1270775668','登录dedecms中!...<img src=''/member/templets/images/smiley/7.gif'' style=''cursor: pointer; position: relative;''>');");
E_D("replace into `dede_member_msg` values('3','4','like','127.0.0.1','1','1270775738','webdesign<img src=''/member/templets/images/smiley/1.gif'' style=''cursor: pointer; position: relative;''>');");

require("../../inc/footer.php");
?>