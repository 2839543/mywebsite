<li>
		    <div class="nl[field:global runphp='yes' name=autoindex][/field:global]">&nbsp;</div>
			<div class="nr">
			  <div class="title"><span>---</span><a href="[field:arcurl/]" title="[field:fulltitle function='htmlspecialchars(@me)'/]"><b>[field:title/]</b></a></div>
			  <div class="content">[field:infos/]...</div>
			  <div class="more">
			    <div class="ml">[field:pubdate runphp='yes']
      $a="".strftime('%Y-%m-%d',@me)."";
      $b=strftime('%Y-%m-%d',@me);
      $ntime = time();
      $day3 = 3600 * 24 * 3;
      if(($ntime - @me) < $day3) @me = $a;
      else @me =$b;
    [/field:pubdate]</div>
				<div class="mr"><a href="[field:arcurl/]"><img src="/images1/de.jpg" /></a></div>
			  </div>
			</div>
		  </li>