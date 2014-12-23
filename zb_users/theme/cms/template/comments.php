{if $socialcomment}
<section class="comments">
{$socialcomment}
</section>
{else}

<section class="comments">
	{if $article.CommNums==0}
	<h1>额 本文暂时没人评论 来添加一个吧</h1>
	{/if}
	{if $article.CommNums>0}
	<h1>已有{$article.CommNums}位网友发表了看法：</h1>
	<!--评论输出-->
	{foreach $comments as $key => $comment}
		{template:comment}
	{/foreach}

	{template:pagebar}
	<div class="clear"></div>
	{/if}

	<!--评论框-->
	{if !$article.IsLock}
		{template:commentpost}
	{/if}

</section>
{/if}