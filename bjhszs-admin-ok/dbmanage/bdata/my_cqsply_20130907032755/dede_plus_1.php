<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_plus`;");
E_C("CREATE TABLE `dede_plus` (
  `aid` mediumint(8) unsigned NOT NULL auto_increment,
  `plusname` varchar(30) NOT NULL default '',
  `menustring` varchar(200) NOT NULL default '',
  `mainurl` varchar(50) NOT NULL default '',
  `writer` varchar(30) NOT NULL default '',
  `isshow` smallint(6) NOT NULL default '1',
  `filelist` text,
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_plus` values('27','友情链接模块','<m:item name=''友情链接'' link=''friendlink_main.php'' rank=''plus_友情链接'' target=''main'' />','','织梦团队','1','');");
E_D("replace into `dede_plus` values('24','文件管理器','<m:item name=''文件管理器'' link=''file_manage_main.php'' rank=''plus_文件管理器'' target=''main'' />','','织梦团队','1','');");
E_D("replace into `dede_plus` values('23','百度新闻','<m:item name=''百度新闻'' link=''baidunews.php'' rank=''plus_百度新闻'' target=''main'' />','','织梦团队','1','baidunews.php');");
E_D("replace into `dede_plus` values('25','广告管理','<m:item name=''广告管理'' link=''ad_main.php'' rank=''plus_广告管理'' target=''main'' />','','织梦官方','1','');");
E_D("replace into `dede_plus` values('10','挑错管理','<m:item name=''挑错管理'' link=''erraddsave.php'' rank=''plus_挑错管理'' target=''main'' />','','织梦团队','1','<m:item name=''挑错管理'' link=''catalog_do.php?dopost=erraddsave.php'' rank=''plus_挑错管理'' target=''main'' />');");
E_D("replace into `dede_plus` values('28','在线留言','<m:item name=''在线留言'' link=''yuyue_admin.php'' rank=''plus_在线留言'' target=''main'' />','','Gump','1','');");

require("../../inc/footer.php");
?>