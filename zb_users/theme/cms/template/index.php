{template:header}
	{template:post-top}
	{template:post-left}

	<div class="containter" style="margin-left: 340px;">
		<div class="article-list">
		{if count($articles) > '0'}
			{foreach $articles as $article}
				{if $article.IsTop}
          			{template:post-istop}
          		{else}
					{template:post-multi}
				{/if}
			{/foreach}
			{template:pagebar}
			<div class="clear"></div>
			{template:footer}
		{else}
			{template:noarticle}
		{/if}
		</div>
		{template:post-slide}