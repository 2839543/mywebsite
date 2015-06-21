<div class="cp">
		  <div class="cpl">{dede:field name='typename' function='cn_substr(@me,50)'/}</div>
		  <div class="cpr"><a href="{dede:field name='typeurl'/}">更多>></a></div>
		</div>
	    <ul>
		  {dede:arclist titlelen='150' row='5' orderby='pubdate'}
		  <li><span>[field:pubdate runphp='yes']
      $a="".strftime('%Y-%m-%d',@me)."";
      $b=strftime('%Y-%m-%d',@me);
      $ntime = time();
      $day3 = 3600 * 24 * 3;
      if(($ntime - @me) < $day3) @me = $a;
      else @me =$b;
    [/field:pubdate]</span>·<a href="[field:arcurl/]" title="[field:fulltitle function='htmlspecialchars(@me)'/]">[field:title/]</a></li>
		  {/dede:arclist}
		</ul>