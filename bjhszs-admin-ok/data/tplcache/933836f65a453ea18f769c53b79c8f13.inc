<div class="cp">
	      <div class="cpl">{dede:field name='typename' function='cn_substr(@me,50)'/}</div>
		  <div class="cpr"><a href="{dede:field name='typeurl'/}">更多>></a></div>
	    </div>
	    <ul>
		  {dede:arclist type='image' row='3' titlelen='35' orderby='pubdate'}
		  <li>
		    <div class="pp" onMouseOver="this.className='pp1'" onMouseOut="this.className='pp'"><a href="[field:arcurl/]" title="[field:fulltitle function='htmlspecialchars(@me)'/]"><img src="[field:litpic/]" alt="[field:title function='html2text(@me)'/]"/></a></div>
			<div class="pf" onMouseOver="this.className='pf1'" onMouseOut="this.className='pf'"><a href="[field:arcurl/]" title="[field:fulltitle function='htmlspecialchars(@me)'/]"><span>[field:title/]</span></a></div>
		  </li>
		  {/dede:arclist}
		</ul>