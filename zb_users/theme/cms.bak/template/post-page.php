<div class="containter" style="margin-left: 340px;">				
				<article class="article">
					
					{php}
						$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
						$content = $article->Content;
						preg_match_all($pattern,$content,$matchContent);
						$temp=$matchContent[1][0];			
					{/php}

					{if isset($temp)}
					<div class="feature-img">
						<a alt="{$article.Title}" title="{$article.Title}" href="{$article.Url}">
							<img alt="{$article.Title}" src="{php}
							echo $temp;
							{/php}"/>
						</a>
					</div>
					{/if}
					<h1><a alt="{$article.Title}" title="{$article.Title}" href="{$article.Url}">{$article.Title}</a></h1>

					<div class="content">
						<p>{$article.Intro}</p>
					</div>

					<div class="article-info">
						<i class="fa fa-calender"></i>
						 {$article.Time('Y年m月d日')}
						 <i class="fa fa-map-marker"></i>
						<a class="category tag">{$article.ViewNums}</a>
					</div>

					<div class="readmore">
						<a alt="{$article.Title}" title="{$article.Title}" href="{$article.Url}">+阅读全文</a>
					</div>
					
				</article>
</div>