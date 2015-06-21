<?php
$z[0]=Array("field","",254,276);
$z[0][4]['name']="seotitle";
$z[1]=Array("global","",277,303);
$z[1][4]['name']="cfg_webname";
$z[2]=Array("field","",347,405);
$z[2][4]['name']="description";
$z[2][4]['function']="html2text(@me)";
$z[3]=Array("field","",442,471);
$z[3][4]['name']="keywords";
$z[4]=Array("include","",617,652);
$z[4][4]['filename']="head.htm";
$z[5]=Array("include","",654,695);
$z[5][4]['filename']="inside_nyb.htm";
$z[6]=Array("field","",785,814);
$z[6][4]['name']="typename";
$z[7]=Array("field","",863,892);
$z[7][4]['name']="position";
$z[8]=Array("channelartlist","\r\n		<div class=\"cp\">\r\n	      <div class=\"cpl\">{dede:field name='typename' function='cn_substr(@me,50)'/}</div>\r\n		  <div class=\"cpr\"><a href=\"{dede:field name='typeurl'/}\">更多>></a></div>\r\n	    </div>\r\n	    <ul>\r\n		  {dede:arclist type='image' row='3' titlelen='35' orderby='pubdate'}\r\n		  <li>\r\n		    <div class=\"pp\" onMouseOver=\"this.className='pp1'\" onMouseOut=\"this.className='pp'\"><a href=\"[field:arcurl/]\" title=\"[field:fulltitle function='htmlspecialchars(@me)'/]\"><img src=\"[field:litpic/]\" alt=\"[field:title function='html2text(@me)'/]\"/></a></div>\r\n			<div class=\"pf\" onMouseOver=\"this.className='pf1'\" onMouseOut=\"this.className='pf'\"><a href=\"[field:arcurl/]\" title=\"[field:fulltitle function='htmlspecialchars(@me)'/]\"><span>[field:title/]</span></a></div>\r\n		  </li>\r\n		  {/dede:arclist}\r\n		</ul>\r\n		",961,1830);
$z[8][4]['row']="10";
$z[9]=Array("include","",1887,1930);
$z[9][4]['filename']="inside_right.htm";
$z[10]=Array("include","",1950,1985);
$z[10][4]['filename']="foot.htm";

?>