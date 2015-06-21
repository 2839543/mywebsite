<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_multiserv_config`;");
E_C("CREATE TABLE `dede_multiserv_config` (
  `remoteuploads` smallint(6) NOT NULL default '0',
  `remoteupUrl` text NOT NULL,
  `rminfo` text,
  `servinfo` mediumtext,
  PRIMARY KEY  (`remoteuploads`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_multiserv_config` values('0','http://img.dedecms.com','a:4:{s:6:\"rmhost\";s:0:\"\";s:6:\"rmport\";s:0:\"\";s:6:\"rmname\";s:0:\"\";s:5:\"rmpwd\";s:0:\"\";}','');");

require("../../inc/footer.php");
?>