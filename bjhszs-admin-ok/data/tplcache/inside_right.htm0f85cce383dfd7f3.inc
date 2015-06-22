<?php
$z[0]=Array("field","if(@me=='1')@me='ABOUT US';else if(@me=='2')@me='CASE';else if(@me=='3')@me='DESIGNER';else if(@me=='4')@me='SERVICES';else if(@me=='5')@me='KNOWLEDGE';else if(@me=='6')@me='NEWS';else if(@me=='7')@me='CONTACT';else if(@me=='12')@me='DYNAMIC';",49,369);
$z[0][4]['name']="typeid";
$z[0][4]['runphp']="yes";
$z[0][4]['function']="GetTopid(@me)";
$z[1]=Array("field","",376,435);
$z[1][4]['name']="typeid";
$z[1][4]['function']="GetTopTypename(@me)";
$z[2]=Array("channel","\r\n  <a href='[field:typeurl/]'>[field:typename/]</a>\r\n  ",496,655);
$z[2][4]['type']="son";
$z[2][4]['currentstyle']="<a href='~typelink~' class='cur'>~typename~</a>";
$z[3]=Array("global","",839,867);
$z[3][4]['name']="dede_pcontact";

?>