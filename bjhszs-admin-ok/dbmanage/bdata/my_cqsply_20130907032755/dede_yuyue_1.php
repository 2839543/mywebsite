<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_yuyue`;");
E_C("CREATE TABLE `dede_yuyue` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `hometel` varchar(15) NOT NULL,
  `ill` text NOT NULL,
  `state` int(1) NOT NULL default '0',
  `date` date NOT NULL,
  `ip` varchar(40) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>