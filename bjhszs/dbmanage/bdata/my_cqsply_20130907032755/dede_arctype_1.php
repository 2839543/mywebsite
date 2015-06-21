<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_arctype`;");
E_C("CREATE TABLE `dede_arctype` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `reid` smallint(5) unsigned NOT NULL default '0',
  `topid` smallint(5) unsigned NOT NULL default '0',
  `sortrank` smallint(5) unsigned NOT NULL default '50',
  `typename` char(30) NOT NULL default '',
  `typedir` char(60) NOT NULL default '',
  `isdefault` smallint(6) NOT NULL default '0',
  `defaultname` char(15) NOT NULL default 'index.html',
  `issend` smallint(6) NOT NULL default '0',
  `channeltype` smallint(6) default '1',
  `maxpage` smallint(6) NOT NULL default '-1',
  `ispart` smallint(6) NOT NULL default '0',
  `corank` smallint(6) NOT NULL default '0',
  `tempindex` char(50) NOT NULL default '',
  `templist` char(50) NOT NULL default '',
  `temparticle` char(50) NOT NULL default '',
  `namerule` char(50) NOT NULL default '',
  `namerule2` char(50) NOT NULL default '',
  `modname` char(20) NOT NULL default '',
  `description` char(150) NOT NULL default '',
  `keywords` varchar(60) NOT NULL default '',
  `seotitle` varchar(80) NOT NULL default '',
  `moresite` tinyint(1) unsigned NOT NULL default '0',
  `sitepath` char(60) NOT NULL default '',
  `siteurl` char(50) NOT NULL default '',
  `ishidden` smallint(6) NOT NULL default '0',
  `cross` tinyint(1) NOT NULL default '0',
  `crossid` text,
  `content` text,
  `smalltypes` text,
  PRIMARY KEY  (`id`),
  KEY `reid` (`reid`,`isdefault`,`channeltype`,`ispart`,`corank`,`topid`,`ishidden`),
  KEY `sortrank` (`sortrank`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_arctype` values('1','0','0','10','关于我们','{cmspath}/about','1','index.html','1','1','-1','1','0','myweb/singlepage.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','关于我们','0','{cmspath}/about','','0','0','','','');");
E_D("replace into `dede_arctype` values('2','1','1','10','公司简介','{cmspath}/about/gsjj','1','index.html','1','1','-1','1','0','myweb/singlepage.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','公司简介','0','{cmspath}/about','','0','0','','','');");
E_D("replace into `dede_arctype` values('3','1','1','20','营销部介绍','{cmspath}/about/yxbjs','1','index.html','1','1','-1','1','0','myweb/singlepage.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','营销部介绍','0','{cmspath}/about','','0','0','','','');");
E_D("replace into `dede_arctype` values('4','1','1','30','部门文化','{cmspath}/about/bmwh','1','index.html','1','1','-1','1','0','myweb/singlepage.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','部门文化','0','{cmspath}/about','','0','0','','','');");
E_D("replace into `dede_arctype` values('5','0','0','20','购墓须知','{cmspath}/gmxz','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','购墓须知','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('6','0','0','30','墓型展示','{cmspath}/mxzs','1','index.html','1','1','-1','0','0','{style}/index_article.htm','myweb/list_pro.htm','myweb/pro_article.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','墓型展示','0','{cmspath}/mxzs','','0','0','','','');");
E_D("replace into `dede_arctype` values('7','0','0','40','殡葬文化','{cmspath}/bzwh','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','殡葬文化','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('8','0','0','50','常见问题','{cmspath}/cjwt','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','常见问题','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('9','0','0','60','新闻资讯','{cmspath}/news','1','index.html','1','1','-1','0','0','{style}/index_article.htm','myweb/list_articlet.htm','myweb/list_articlet.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','新闻资讯','0','{cmspath}/news','','0','0','','','');");
E_D("replace into `dede_arctype` values('10','0','0','70','联系我们','{cmspath}/lxwm','1','index.html','1','1','-1','1','0','myweb/singlepage1.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','联系我们','0','{cmspath}/lxwm','','0','0','','','');");
E_D("replace into `dede_arctype` values('11','0','0','80','陵园风景','{cmspath}/lyfj','1','index.html','1','1','-1','0','0','{style}/index_article.htm','myweb/list_image.htm','myweb/article_article.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','陵园风景','0','{cmspath}/lyfj','','0','0','','','');");
E_D("replace into `dede_arctype` values('12','9','9','10','公司新闻','{cmspath}/news/gsxw','1','index.html','1','1','-1','0','0','{style}/index_article.htm','myweb/list_articlet.htm','myweb/article_articlet.htm','/news/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','公司新闻','0','{cmspath}/news','','0','0','','','');");
E_D("replace into `dede_arctype` values('13','9','9','20','行业新闻','{cmspath}/news/hyxw','1','index.html','1','1','-1','0','0','{style}/index_article.htm','myweb/list_articlet.htm','myweb/article_articlet.htm','/news/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','行业新闻','0','{cmspath}/news','','0','0','','','');");
E_D("replace into `dede_arctype` values('14','9','9','30','媒体报道','{cmspath}/news/mtbd','1','index.html','1','1','-1','0','0','{style}/index_article.htm','myweb/list_articlet.htm','myweb/article_articlet.htm','/news/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','媒体报道','0','{cmspath}/news','','0','0','','','');");
E_D("replace into `dede_arctype` values('15','0','0','90','图文动态','{cmspath}/twdt','1','index.html','1','1','-1','0','0','{style}/index_article.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','图文动态','0','','','1','0','','','');");
E_D("replace into `dede_arctype` values('16','0','0','85','留言板','{cmspath}/message','1','index.html','1','1','-1','1','0','myweb/message.htm','{style}/list_article.htm','{style}/article_article.htm','{typedir}/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','留言板','0','','','0','0','','','');");
E_D("replace into `dede_arctype` values('17','6','6','10','墓型分类1','{cmspath}/mxzs/mxflone','1','index.html','1','1','-1','0','0','{style}/index_article.htm','myweb/list_pro.htm','myweb/pro_article.htm','/mxzs/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','墓型分类1','0','{cmspath}/mxzs','','0','0','','','');");
E_D("replace into `dede_arctype` values('18','6','6','20','墓型分类2','{cmspath}/mxzs/mxfltwo','1','index.html','1','1','-1','0','0','{style}/index_article.htm','myweb/list_pro.htm','myweb/pro_article.htm','/mxzs/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','墓型分类2','0','{cmspath}/mxzs','','0','0','','','');");
E_D("replace into `dede_arctype` values('19','6','6','30','墓型分类3','{cmspath}/mxzs/mxflthree','1','index.html','1','1','-1','0','0','{style}/index_article.htm','myweb/list_pro.htm','myweb/list_pro.htm','/mxzs/{aid}.html','{typedir}/list_{tid}_{page}.html','default','','','墓型分类3','0','{cmspath}/mxzs','','0','0','','','');");

require("../../inc/footer.php");
?>