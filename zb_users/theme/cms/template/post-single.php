<div class="containter" style="margin-left: 340px;">
		<div class="article-list">				
					<article class="article">

					<h1><a alt="{$article.Title}" title="{$article.Title}" href="{$article.Url}">{$article.Title}</a></h1>

					<div class="content">
						<p>{$article.Content}</p>
					</div>

					<div class="article-info">
						<i class="fa fa-calender"></i>
						 {$article.Time('Y年m月d日')}
						 <i class="fa fa-map-marker"></i>
						<a class="category tag">{$article.Category.Name}</a>
					</div>
					
				</article>
				{if !$article.IsLock}
					{template:comments}		
				{/if}
				{template:footer}
		</div>
		{template:post-slide}
</div>
