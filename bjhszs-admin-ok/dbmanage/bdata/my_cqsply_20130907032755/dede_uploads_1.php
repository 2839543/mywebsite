<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_uploads`;");
E_C("CREATE TABLE `dede_uploads` (
  `aid` mediumint(8) unsigned NOT NULL auto_increment,
  `arcid` mediumint(8) unsigned NOT NULL default '0',
  `title` char(60) NOT NULL default '',
  `url` char(80) NOT NULL default '',
  `mediatype` smallint(6) NOT NULL default '1',
  `width` char(10) NOT NULL default '',
  `height` char(10) NOT NULL default '',
  `playtime` char(10) NOT NULL default '',
  `filesize` mediumint(8) unsigned NOT NULL default '0',
  `uptime` int(10) unsigned NOT NULL default '0',
  `mid` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`aid`),
  KEY `memberid` (`mid`),
  KEY `arcid` (`arcid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_uploads` values('1','7','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓','/uploads/allimg/130907/1-130ZFUS60-L.jpg','1','0','0','0','14251','1378515516','1');");
E_D("replace into `dede_uploads` values('2','8','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓','/uploads/allimg/130907/1-130ZFUZ20-L.jpg','1','0','0','0','14251','1378515542','1');");
E_D("replace into `dede_uploads` values('3','9','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓','/uploads/allimg/130907/1-130ZFU9110-L.jpg','1','0','0','0','14251','1378515551','1');");
E_D("replace into `dede_uploads` values('4','10','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓','/uploads/allimg/130907/1-130ZFU9180-L.jpg','1','0','0','0','14251','1378515558','1');");
E_D("replace into `dede_uploads` values('5','11','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓','/uploads/allimg/130907/1-130ZFU9270-L.jpg','1','0','0','0','14251','1378515567','1');");
E_D("replace into `dede_uploads` values('6','12','中式太平墓中式太平墓中式太平墓中式太平墓中式太平墓','/uploads/allimg/130907/1-130ZFU9370-L.jpg','1','0','0','0','14251','1378515577','1');");
E_D("replace into `dede_uploads` values('7','15','banner1','/uploads/allimg/130907/1-130ZG105490-L.jpg','1','0','0','0','103992','1378523149','1');");
E_D("replace into `dede_uploads` values('8','16','banner2','/uploads/allimg/130907/1-130ZG106140-L.jpg','1','0','0','0','113883','1378523174','1');");
E_D("replace into `dede_uploads` values('9','17','banner3','/uploads/allimg/130907/1-130ZG106250-L.jpg','1','0','0','0','74249','1378523185','1');");
E_D("replace into `dede_uploads` values('10','18','banner4','/uploads/allimg/130907/1-130ZG106370-L.jpg','1','0','0','0','117537','1378523197','1');");
E_D("replace into `dede_uploads` values('11','19','banner5','/uploads/allimg/130907/1-130ZG106480-L.jpg','1','0','0','0','59205','1378523208','1');");

require("../../inc/footer.php");
?>