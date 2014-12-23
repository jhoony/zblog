<div class="sidebar">

	<div class="plugin-myclock" style="height:220px;">
		<div id="my_clock" class="clock">
                <div class="pivot"></div>
                <div class="hour-hand clock-hand"></div>
                <div class="minute-hand clock-hand"></div>
                <div class="second-hand clock-hand"></div>
                <span class="digit" style="transform: translate3d(55px, -95px, 0px);">1</span>
                <span class="digit" style="transform: translate3d(95px, -55px, 0px);">2</span>
                <span class="digit" style="transform: translate3d(110px, 0px, 0px);">3</span>
                <span class="digit" style="transform: translate3d(95px, 55px, 0px);">4</span>
                <span class="digit" style="transform: translate3d(55px, 95px, 0px);">5</span>
                <span class="digit" style="transform: translate3d(0px, 110px, 0px);">6</span>
                <span class="digit" style="transform: translate3d(-55px, 95px, 0px);">7</span>
                <span class="digit" style="transform: translate3d(-95px, 55px, 0px);">8</span>
                <span class="digit" style="transform: translate3d(-110px, 0px, 0px);">9</span>
                <span class="digit" style="transform: translate3d(-95px, -55px, 0px);">10</span>
                <span class="digit" style="transform: translate3d(-55px, -95px, 0px);">11</span>
                <span class="digit" style="transform: translate3d(0px, -110px, 0px);">12</span>
		</div>
	</div>

	<div id="text-2" class="widget sidebox widget_text" style="">
			<i class="fa fa-caret-down"></i>
			<h2>SimpleHome 2.0</h2>
			<div class="textwidget">
				<a alt="SimpleHome 2.0" href="<?php  echo $host;  ?>">
					<img src="<?php  echo $host;  ?>zb_users/theme/cms/style/images/screenshot.png">
				</a>
			</div>
	</div>

	<div class="widget sidebox widget_hot_tags" id="hot_tags-2" style="">		
		<i class="fa fa-caret-down"></i><h2>热门标签</h2>		
		<div class="tagcloud">
			<?php  if(isset($modules['tags'])){echo $modules['tags']->Content;}  ?>
		</div>	
	</div>

	<div id="da-top-threads-2" class="widget sidebox ds-widget-top-threads" style="">
		<i class="fa fa-caret-down"></i>
		<h2>最近发表</h2>
		<ul id="ds-top-thread" class="ds-top-threads" data-range="weekly" data-num-items="5">
			<?php  if(isset($modules['previous'])){echo $modules['previous']->Content;}  ?>
		</ul>
	</div>

	<div id="lastst-comment-2" class="widget sidebox widget-latest-comment">
		<i class="fa fa-caret-down"></i>
		<h2>最近评论</h2>
		<ul>
			<?php  if(isset($modules['comments'])){echo $modules['comments']->Content;}  ?>
		</ul>
	</div>

	<div id="archives-2" class="widget sidebox widget-archive">
		<i class="fa fa-caret-down"></i>
		<h2>文章归档</h2>
		<ul>
			<?php  if(isset($modules['archives'])){echo $modules['archives']->Content;}  ?>
		</ul>
	</div>

	<div id="nav-menu-3" class="widget sidebox widget-nav-menu">
		<i class="fa fa-caret-down"></i>
		<h2>友情链接</h2>
		<ul class="widget-nav-menu">
			<?php  if(isset($modules['link'])){echo $modules['link']->Content;}  ?>
		</ul>
	</div>
</div>