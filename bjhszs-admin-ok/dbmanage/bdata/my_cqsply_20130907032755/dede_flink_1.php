<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_flink`;");
E_C("CREATE TABLE `dede_flink` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `sortrank` smallint(6) NOT NULL default '0',
  `url` char(60) NOT NULL default '',
  `webname` char(30) NOT NULL default '',
  `msg` char(200) NOT NULL default '',
  `email` char(50) NOT NULL default '',
  `logo` char(60) NOT NULL default '',
  `dtime` int(10) unsigned NOT NULL default '0',
  `typeid` smallint(5) unsigned NOT NULL default '0',
  `ischeck` smallint(6) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_flink` values('12','1','http://www.baidu.com','重庆陵园','','','','1378516082','1','2');");
E_D("replace into `dede_flink` values('13','1','http://www.baidu.com','重庆陵园','','','','1378516097','1','2');");
E_D("replace into `dede_flink` values('14','1','http://www.163.com','网易','','','/uploads/flink/1309070909371334.jpg','1378516177','1','2');");
E_D("replace into `dede_flink` values('15','1','http://www.163.com','网易','','','/uploads/flink/1309070909523486.jpg','1378516192','1','2');");

require("../../inc/footer.php");
?>