{template:header}
	
	{template:post-left}

	{$q = trim(htmlspecialchars(GetVars('q','GET')))}
			{if $q != ''}
					{template:post-search}
			{else}
				{if $type=='article'}
					{template:post-single}					
				{else}
					{template:post-page}
				{/if}
			{/if}