<?php
$z[0]=Array("field","",39,97);
$z[0][4]['name']="typename";
$z[0][4]['function']="cn_substr(@me,50)";
$z[1]=Array("field","",135,163);
$z[1][4]['name']="typeurl";
$z[2]=Array("arclist","\r\n		  <li><span>[field:pubdate runphp='yes']\r\n      \$a=\"\".strftime('%Y-%m-%d',@me).\"\";\r\n      \$b=strftime('%Y-%m-%d',@me);\r\n      \$ntime = time();\r\n      \$day3 = 3600 * 24 * 3;\r\n      if((\$ntime - @me) < \$day3) @me = \$a;\r\n      else @me =\$b;\r\n    [/field:pubdate]</span>·<a href=\"[field:arcurl/]\" title=\"[field:fulltitle function='htmlspecialchars(@me)'/]\">[field:title/]</a></li>\r\n		  ",210,667);
$z[2][4]['titlelen']="150";
$z[2][4]['row']="5";
$z[2][4]['orderby']="pubdate";

?>