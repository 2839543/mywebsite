<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dede_co_mediaurls`;");
E_C("CREATE TABLE `dede_co_mediaurls` (
  `nid` mediumint(8) unsigned NOT NULL default '0',
  `hash` char(32) NOT NULL default '',
  `tofile` char(60) NOT NULL default '',
  KEY `hash` (`hash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dede_co_mediaurls` values('2','c98b118ad5b78da5a1a11496c3794912','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','95cc562da79ecca5290e628f4432bb68','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','b20efe0b7eb7b229816bcdf5c08e2bcf','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','2477e939305a3c00a16603185088490f','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','9b18580f3401c324eab9d587b394d456','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','2c27a499e170fdf195b885ee3bcdad8e','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','eaee65c2d0a7ea27ea6064d79fa53ed5','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','4dd1d2d07d971748871770aaca220402','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','7b54aa61c88f36d6a3f68975d4929a87','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','411dc7cc77a33ccbab03048720e145be','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','6189fca1a804b31ece818d509d8e2278','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','de724e23491e9b7604ea093bffb27b7b','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','e104feab04aee30b9aa0a3d228f437ad','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','0fa20cb4ddf6ec15ded405ac70c888b4','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','04de9d28966e28bbdcea4cf38dd3f484','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','9f5e83bd30632e70eefbf15faee4c057','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','b50d3451b56b041ab900d1f507371062','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','ab72fc5c3bba2d55c1e44bbe7c4e7d2e','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','7f6f808b6bec9a8bec2faa808e0bbfe2','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','c5bb400a0614534839d70cc6ffbfa356','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','3bf65d40e75b61a178560b3d767d36ff','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','7b9419258340938a2a50c6a3894da8a8','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','43a8fcc40aa7ae2c9ac3b644dffb64fc','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','aa3c15f8e39257745ad51db87222301e','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','a07c04310312eb1eeaed6f71b1bae6a7','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','f3cfba782e84ffd23f10348292c6d1a9','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','7e9b411c624ed144c7db3d984e1c36f2','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','12f8b4e8a38c80908416e1ad25fbdf1b','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','0a3d8b2af1f48a63d16ea1f2d5884a2a','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','dca491a4de466a9757f67e9cf1832ccd','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','2110020bd16e44f707e934a05dca0dd4','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','a0a5fdf5f93c2e86e84db9b97979093c','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','f1fed48dc9e66b51b0ce0ae6a9d0e561','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','f869f0a30cedaa635d5095c62eb732ba','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','1919fd284c5c0effd95e2c074577daac','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','659a5aea1948223383314e21ea2cafad','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','b6984456ca162e7d8edf1c62717c596d','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','8e691922a0902782609e37c22f4a2370','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','97d0f25a3acefd10b5feb0d34b301932','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','41ca1796221812fc8caef6f6ae152579','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','8392fd4eb8b35bdfda9d596a1ba2d001','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','466534c058171d3362dc090258c8a81c','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','4d8aab5458015caa65b1d06bb7eaea52','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','56ba4eb5a54c3a5a7fd05b3bf89a27eb','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','363f9d74b77a67f5c329442ab016d7da','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','cdfcdceca0c2197f524f5b46380bc470','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','bbf92c4cd45734d4deef2292b5848c73','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','b22f6e2df2a1f8d3ab3fe6c9a84672c6','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','71f96592b6ab4013f9bd3e1d615ba6ba','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','9b83bd21ae740f88e4bf703ff330a263','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','b27b4260fd33c4ec8d7018f1395133a1','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','69819b0aa2ee484a968471988cd180f3','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','be12e9853ecd9162b6039b9ba9c2a1a5','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','74e37e1e4646db3bd1fc779d0d335185','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','fb59ce0991280348cd04c0359274ec0c','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','ee4d00df8a18e8d8a62d52be373e95ba','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','66d720e16f6ff67bec4c77d3deb17ac5','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','c39de02eda6dd09bbe6c9156fdcb3205','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','e3eed5e5f86399f3431324aa7d3ecc7d','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','95a5d052da6868b99806fe7118386bbb','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','009987101cc4740eb1218c11e1a9db14','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','7d3a0de10b01dd6db42820b8b73f78ed','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','d26ac7bb87165dda363a959e0ee6149a','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','7b238638dca6adee0c0cae7a7053a1da','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','12e03ce8455c2ef1930ffc710e8ba725','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','db3c7707224f2df483e1e9d554f4f1c7','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','35cd87cf0771619fbccaa5bc0a8b24d3','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','2cb4406868197f165b47224c592972e0','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','4b2f2fb5a933aef2aac141deb3fba8c8','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','b3227e02e0138b71d58111f9a3489d2a','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','6c1a082b29c39203edaaec9e6d92a359','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','74529a089025aaf1588ab95287d20e7c','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','7743d73be1e7e2f3c94fcd6742862d99','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','e888e36d0aee4e868d69bf8dfdc37452','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','509996de5a39d50d12478375eda4ac07','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','66bafca2792083f81d86cfe517868395','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','03945183553304d5eeba7b5898674ad7','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','3403c8f52110a8de4d8966399c03ceb5','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('2','780ae7dbf2c00559dca394e3e4fed111','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F603');");
E_D("replace into `dede_co_mediaurls` values('4','24259edf8790ad61b7e76d34c01bdf70','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F604');");
E_D("replace into `dede_co_mediaurls` values('4','0fff21d784e1ff830342a42f835b61db','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F604');");
E_D("replace into `dede_co_mediaurls` values('4','4644e9021355cbd116610833be21b32b','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F604');");
E_D("replace into `dede_co_mediaurls` values('4','110ae56d1216e777bc09c1912f3a285e','http://www.dedecms.com/demoimg/uploads/allimg/c100407/12F604');");
E_D("replace into `dede_co_mediaurls` values('5','24259edf8790ad61b7e76d34c01bdf70','/uploads/allimg/c120309/13312PN3530-1J47.jpg');");
E_D("replace into `dede_co_mediaurls` values('5','0fff21d784e1ff830342a42f835b61db','/uploads/allimg/c120309/13312PO1420-24026.jpg');");
E_D("replace into `dede_co_mediaurls` values('5','4644e9021355cbd116610833be21b32b','/uploads/allimg/c120309/13312PO4S0-3L35.jpg');");
E_D("replace into `dede_co_mediaurls` values('5','110ae56d1216e777bc09c1912f3a285e','/uploads/allimg/c120309/13312PO5I0-4I22.jpg');");
E_D("replace into `dede_co_mediaurls` values('5','ed5110c37db5edb652f624669a524c78','/uploads/allimg/c120309/13312PP3K0-54531.jpg');");
E_D("replace into `dede_co_mediaurls` values('5','47841a5d28504dda07faa19ceaf4993d','/uploads/allimg/c120309/13312PP4640-E391.jpg');");
E_D("replace into `dede_co_mediaurls` values('5','849df118fb3cebc653ea099dce92a455','/uploads/allimg/c120309/13312PPE60-KW8.jpg');");
E_D("replace into `dede_co_mediaurls` values('5','14b6b0a3388229de9a2b590bb5544cb3','/uploads/allimg/c120309/13312PQ1540-S0B.jpg');");
E_D("replace into `dede_co_mediaurls` values('5','ca3709cbe2b8984c77912e87103eff7f','/uploads/allimg/c120309/13312PQ3160-91962.jpg');");
E_D("replace into `dede_co_mediaurls` values('5','2d1478702a17d47c0faf22979faf4dd5','/uploads/allimg/c120309/13312PQ4M0-10Z08.jpg');");

require("../../inc/footer.php");
?>