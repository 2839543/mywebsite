<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_purview`;");
E_C("CREATE TABLE `dede_purview` (
  `mid` mediumint(8) default '0',
  `typeid` smallint(5) default '0',
  `rank` smallint(6) default NULL,
  `pkey` varchar(30) character set latin1 NOT NULL,
  `pvalue` text NOT NULL,
  KEY `pkey` USING BTREE (`pkey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>