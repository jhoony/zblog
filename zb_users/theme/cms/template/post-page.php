<div class="containter" style="margin-left: 340px;">
		<div class="article-list">				
				<article class="article">
					<h1>{$article.Title}</h1>
					<div class="content">
						{$article.Content}
					</div>
				</article>
		{template:footer}
		</div>
</div>
{if !$article.IsLock}
{template:comments}
{/if}
{template:post-slide}