<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_arctiny`;");
E_C("CREATE TABLE `dede_arctiny` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `typeid` smallint(5) unsigned NOT NULL default '0',
  `typeid2` varchar(90) NOT NULL default '0',
  `arcrank` smallint(6) NOT NULL default '0',
  `channel` smallint(5) NOT NULL default '1',
  `senddate` int(10) unsigned NOT NULL default '0',
  `sortrank` int(10) unsigned NOT NULL default '0',
  `mid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `sortrank` (`sortrank`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_arctiny` values('1','12','0','0','1','1378515456','1378515445','1');");
E_D("replace into `dede_arctiny` values('2','12','0','0','1','1378515463','1378515458','1');");
E_D("replace into `dede_arctiny` values('3','12','0','0','1','1378515469','1378515464','1');");
E_D("replace into `dede_arctiny` values('4','12','0','0','1','1378515476','1378515470','1');");
E_D("replace into `dede_arctiny` values('5','12','0','0','1','1378515481','1378515477','1');");
E_D("replace into `dede_arctiny` values('6','12','0','0','1','1378515487','1378519256','1');");
E_D("replace into `dede_arctiny` values('7','17','0','0','1','1378515533','1378515509','1');");
E_D("replace into `dede_arctiny` values('8','17','0','0','1','1378515546','1378515537','1');");
E_D("replace into `dede_arctiny` values('9','17','0','0','1','1378515555','1378515547','1');");
E_D("replace into `dede_arctiny` values('10','17','0','0','1','1378515563','1378515555','1');");
E_D("replace into `dede_arctiny` values('11','17','0','0','1','1378515571','1378515564','1');");
E_D("replace into `dede_arctiny` values('12','17','0','0','1','1378515584','1378520089','1');");
E_D("replace into `dede_arctiny` values('13','8','0','0','1','1378518888','1378518901','1');");
E_D("replace into `dede_arctiny` values('15','15','0','0','1','1378523166','1378523118','1');");
E_D("replace into `dede_arctiny` values('16','15','0','0','1','1378523179','1378523168','1');");
E_D("replace into `dede_arctiny` values('17','15','0','0','1','1378523190','1378523180','1');");
E_D("replace into `dede_arctiny` values('18','15','0','0','1','1378523201','1378523192','1');");
E_D("replace into `dede_arctiny` values('19','15','0','0','1','1378523212','1378523203','1');");

require("../../inc/footer.php");
?>