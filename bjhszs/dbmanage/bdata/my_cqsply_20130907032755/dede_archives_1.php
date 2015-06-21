<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_archives`;");
E_C("CREATE TABLE `dede_archives` (
  `id` mediumint(8) unsigned NOT NULL default '0',
  `typeid` smallint(5) unsigned NOT NULL default '0',
  `typeid2` varchar(90) NOT NULL default '0',
  `sortrank` int(10) unsigned NOT NULL default '0',
  `flag` set('c','h','p','f','s','j','a','b') default NULL,
  `ismake` smallint(6) NOT NULL default '0',
  `channel` smallint(6) NOT NULL default '1',
  `arcrank` smallint(6) NOT NULL default '0',
  `click` mediumint(8) unsigned NOT NULL default '0',
  `money` smallint(6) NOT NULL default '0',
  `title` char(60) NOT NULL default '',
  `shorttitle` char(36) NOT NULL default '',
  `color` char(7) NOT NULL default '',
  `writer` char(20) NOT NULL default '',
  `source` char(30) NOT NULL default '',
  `litpic` char(100) NOT NULL default '',
  `pubdate` int(10) unsigned NOT NULL default '0',
  `senddate` int(10) unsigned NOT NULL default '0',
  `mid` mediumint(8) unsigned NOT NULL default '0',
  `keywords` char(30) NOT NULL default '',
  `lastpost` int(10) unsigned NOT NULL default '0',
  `scores` mediumint(8) NOT NULL default '0',
  `goodpost` mediumint(8) unsigned NOT NULL default '0',
  `badpost` mediumint(8) unsigned NOT NULL default '0',
  `voteid` mediumint(8) NOT NULL,
  `notpost` tinyint(1) unsigned NOT NULL default '0',
  `description` varchar(255) NOT NULL default '',
  `filename` varchar(40) NOT NULL default '',
  `dutyadmin` mediumint(8) unsigned NOT NULL default '0',
  `tackid` int(10) NOT NULL default '0',
  `mtype` mediumint(8) unsigned NOT NULL default '0',
  `weight` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `sortrank` (`sortrank`),
  KEY `mainindex` (`arcrank`,`typeid`,`channel`,`flag`,`mid`),
  KEY `lastpost` (`lastpost`,`scores`,`goodpost`,`badpost`,`notpost`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_archives` values('1','12','0','1378515445','','1','1','0','60','0','重庆慧学科技有限公司前身重庆慧学科技有限公司前身','','','admin','未知','','1378515445','1378515456','1','重庆,慧学,科技,有限公司,前身,重庆,慧学,','0','0','0','0','0','0','重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身','','1','0','0','0');");
E_D("replace into `dede_archives` values('2','12','0','1378515458','','1','1','0','164','0','重庆慧学科技有限公司前身重庆慧学科技有限公司前身','','','admin','未知','','1378515458','1378515463','1','重庆,慧学,科技,有限公司,前身,重庆,慧学,','0','0','0','0','0','0','重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身','','1','0','0','1');");
E_D("replace into `dede_archives` values('3','12','0','1378515464','','1','1','0','176','0','重庆慧学科技有限公司前身重庆慧学科技有限公司前身','','','admin','未知','','1378515464','1378515469','1','重庆,慧学,科技,有限公司,前身,重庆,慧学,','0','0','0','0','0','0','重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身','','1','0','0','2');");
E_D("replace into `dede_archives` values('4','12','0','1378515470','','1','1','0','134','0','重庆慧学科技有限公司前身重庆慧学科技有限公司前身','','','admin','未知','','1378515470','1378515476','1','重庆,慧学,科技,有限公司,前身,重庆,慧学,','0','0','0','0','0','0','重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身','','1','0','0','3');");
E_D("replace into `dede_archives` values('5','12','0','1378515477','','1','1','0','117','0','重庆慧学科技有限公司前身重庆慧学科技有限公司前身','','','admin','未知','','1378515477','1378515481','1','重庆,慧学,科技,有限公司,前身,重庆,慧学,','0','0','0','0','0','0','重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身','','1','0','0','4');");
E_D("replace into `dede_archives` values('6','12','0','1378519256','','-1','1','0','70','0','重庆慧学科技有限公司前身重庆慧学科技有限公司前身','','','admin','未知','','1378519256','1378515487','1','重庆,慧学,科技,有限公司,前身,重庆,慧学,','0','0','0','0','0','0','重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身重庆慧学科技有限公司前身','','1','0','0','5');");
E_D("replace into `dede_archives` values('7','17','0','1378515509','p','1','1','0','198','0','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓','','','admin','未知','/uploads/allimg/130907/1-130ZFUS60-L.jpg','1378515509','1378515533','1','中式,太平,墓,中式,太平,墓,','0','0','0','0','0','0','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平','','1','0','0','6');");
E_D("replace into `dede_archives` values('8','17','0','1378515537','p','1','1','0','53','0','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓','','','admin','未知','/uploads/allimg/130907/1-130ZFUZ20-L.jpg','1378515537','1378515546','1','中式,太平,墓,中式,太平,墓,','0','0','0','0','0','0','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平','','1','0','0','7');");
E_D("replace into `dede_archives` values('9','17','0','1378515547','p','1','1','0','196','0','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓','','','admin','未知','/uploads/allimg/130907/1-130ZFU9110-L.jpg','1378515547','1378515555','1','中式,太平,墓,中式,太平,墓,','0','0','0','0','0','0','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平','','1','0','0','8');");
E_D("replace into `dede_archives` values('10','17','0','1378515555','p','1','1','0','170','0','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓','','','admin','未知','/uploads/allimg/130907/1-130ZFU9180-L.jpg','1378515555','1378515563','1','中式,太平,墓,中式,太平,墓,','0','0','0','0','0','0','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平','','1','0','0','9');");
E_D("replace into `dede_archives` values('11','17','0','1378515564','p','1','1','0','155','0','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓','','','admin','未知','/uploads/allimg/130907/1-130ZFU9270-L.jpg','1378515564','1378515571','1','中式,太平,墓,中式,太平,墓,','0','0','0','0','0','0','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平','','1','0','0','10');");
E_D("replace into `dede_archives` values('12','17','0','1378520089','p','-1','1','0','97','0','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓','','','admin','未知','/uploads/allimg/130907/1-130ZFU9370-L.jpg','1378520089','1378515584','1','中式,太平,墓,中式,太平,墓,','0','0','0','0','0','0','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓中式太平','','1','0','0','11');");
E_D("replace into `dede_archives` values('13','8','0','1378518901','','-1','1','0','142','0','常见问题常见问题常见问题常见问题常见问题常见问题','','','admin','未知','','1378518901','1378518888','1','常见问题,常见问题,','0','0','0','0','0','0','常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题常见问题','','1','0','0','12');");
E_D("replace into `dede_archives` values('15','15','0','1378523118','p','1','1','0','100','0','banner1','','','admin','未知','/uploads/allimg/130907/1-130ZG105490-L.jpg','1378523118','1378523166','1','banner1,banner1,','0','0','0','0','0','0','','','1','0','0','14');");
E_D("replace into `dede_archives` values('16','15','0','1378523168','p','1','1','0','90','0','banner2','','','admin','未知','/uploads/allimg/130907/1-130ZG106140-L.jpg','1378523168','1378523179','1','banner2,banner2,','0','0','0','0','0','0','','','1','0','0','15');");
E_D("replace into `dede_archives` values('17','15','0','1378523180','p','1','1','0','80','0','banner3','','','admin','未知','/uploads/allimg/130907/1-130ZG106250-L.jpg','1378523180','1378523190','1','banner3,banner3,','0','0','0','0','0','0','','','1','0','0','16');");
E_D("replace into `dede_archives` values('18','15','0','1378523192','p','1','1','0','70','0','banner4','','','admin','未知','/uploads/allimg/130907/1-130ZG106370-L.jpg','1378523192','1378523201','1','banner4,banner4,','0','0','0','0','0','0','','','1','0','0','17');");
E_D("replace into `dede_archives` values('19','15','0','1378523203','p','1','1','0','60','0','banner5','','','admin','未知','/uploads/allimg/130907/1-130ZG106480-L.jpg','1378523203','1378523212','1','banner5,banner5,','0','0','0','0','0','0','','','1','0','0','18');");

require("../../inc/footer.php");
?>