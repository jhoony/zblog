<div class="commentpost" id="comment">
	<div class="ds-reset">

    <h1><span>{if $user.ID>0}{$user.Name#}{/if}<a rel="nofollow" id="cancel-reply" href="#comment" style="display:none;"><small>取消回复</small></a></span>发表评论</h1>
	<form id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}" >
	<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
{if $user.ID>0}
	<input type="hidden" name="inpName" id="inpName" value="{$user.Name}" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />	
{else}
	<p><label for="name">名 称</label><input type="text" name="inpName" id="inpName" class="text" value="{$user.Name}" size="28" tabindex="1" /><font color="#ff6f3d">必填</font></p>
	<p><label for="email">邮 箱</label><input type="text" name="inpEmail" id="inpEmail" class="text" value="{$user.Email}" size="28" tabindex="2" />选填</p>
	<p><label for="homepage">网 址</label><input type="text" name="inpHomePage" id="inpHomePage" class="text" value="{$user.HomePage}" size="28" tabindex="3" />选填</p>
{if $option['ZC_COMMENT_VERIFY_ENABLE']}
	<p><label for="inpVerify">验证码</label><input type="text" name="inpVerify" id="inpVerify" value="" size="28" tabindex="5" /><img src="{$article.ValidCodeUrl}" class="verifyimg" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();" /> <font color="#ff6f3d">必填</font></p>
{/if}

{/if}
	<!--verify-->
	<div class="ds-textarea-wrapper ds-rounded-top">
	<p><textarea name="txaArticle" id="txaArticle" class="text" placeholder="欢迎小伙伴们吐槽..."></textarea></p>
	<p><input name="sumbit" type="submit" value="点我" onclick="return VerifyMessage()" class="button" />◎欢迎参与讨论，请在这里发表您的看法、交流您的观点。</p>
	</div>
	</form>
</div>
</div>