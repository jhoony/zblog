{if $pagebar}
<div class="pagenavi">
	{foreach $pagebar.buttons as $k=>$v}
		{if $pagebar.PageNow==$k}
			<span class="page-numbers current">{$k}</span>
		{else}
			<a class="page-numbers" href="{$v}">{$k}</a>
		{/if}
	{/foreach}
</div>
{/if}