<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_moneycard_type`;");
E_C("CREATE TABLE `dede_moneycard_type` (
  `tid` int(11) NOT NULL auto_increment,
  `num` int(11) NOT NULL default '500',
  `money` int(11) NOT NULL default '50',
  `pname` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_moneycard_type` values('1','100','30','100点卡');");
E_D("replace into `dede_moneycard_type` values('2','200','55','200点卡');");
E_D("replace into `dede_moneycard_type` values('3','300','75','300点卡');");

require("../../inc/footer.php");
?>