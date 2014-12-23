<div class="left" style="left: 0px;">

		<div class="face-area">
			<div class="face-img">
				<a title="回到首页" alt="回到首页" href="{$host}">
				<img src="{$host}zb_users/theme/cms/style/images/face.png">
				</a>
			</div>
			<div class="face-name">Jhoony</div>
		</div>

		<div class="search">
			<form name="search" method="post" action="{$host}/zb_system/cmd.php?act=search">
				<input id="a" type="text" placeholder="Your keywords" name="q">
				<input type="submit" value="">
			</form>
		</div>

		<div class="nav">
			<ul>
				<li><a href="{$host}" title="首页">Home</a></li>
				{if $user.ID>0}
				<li><a href="{$host}zb_system/admin/?act=admin" title="后台管理" target="_blank">BgManage</a></li>
				<li><a href="{$host}zb_system/cmd.php?act=ArticleEdt" title="新建文章" target="_blank">NewArticle</a></li>
				<li><a href="{$host}zb_system/cmd.php?act=CommentMng" title="评论管理" target="_blank">CommManage</a></li>
				{/if}
				<li><a href="" title="关于我">About</a></li>
			</ul>
		</div>
	</div>