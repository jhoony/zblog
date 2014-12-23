<div class="containter" style="margin-left: 340px;">
		<div class="article-list">
			{$q = trim(htmlspecialchars(GetVars('q','GET')))}
    		{$array=Getlist(10,null,null,null,null,$q);}
    		{if count($array) > '0'} 
        		{foreach $array as $a}					
					<article class="article">
					
					{php}
						$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
						$content = $a->Content;
						preg_match_all($pattern,$content,$matchContent);			
					{/php}

					{if isset($matchContent[1][0])}
					<div class="feature-img">
						<a alt="{$a.Title}" title="{$a.Title}" href="{$a.Url}">
							<img alt="{$a.Title}" src="{php}
							echo $matchContent[1][0];
							{/php}"/>
						</a>
					</div>
					{/if}
					<h1><a alt="{$a.Title}" title="{$a.Title}" href="{$a.Url}">{$a.Title}</a></h1>

					<div class="content">
						<p>{$a.Intro}</p>
					</div>

					<div class="article-info">
						<i class="fa fa-calender"></i>
						 {$a.Time('Y年m月d日')}
						 <i class="fa fa-map-marker"></i>
						<a class="category tag">{$a.ViewNums}</a>
					</div>

					<div class="readmore">
						<a alt="{$a.Title}" title="{$a.Title}" href="{$a.Url}">+阅读全文</a>
					</div>
					
				</article>
				{/foreach}
				{template:footer}
		</div>
			{else}
				{template:post-searchno}
			{/if}
	</div>
</div>
{template:post-slide}