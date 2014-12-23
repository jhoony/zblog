{if $user.ID>0}
<div class="top">
	<div class="top-center">
		<div class="top-left">
			<span>欢迎您,<a href="{$host}zb_system/admin/member_edit.php?act=MemberEdt&id={$user.ID}">{$user.Name}</a></span>
			<span>|</span>
			<span><a href="{$host}zb_system/cmd.php?act=logout">退出</a></span>
		</div>
		<div class="top-right">
			<span>控制面板</span>
		</div>
	</div>
</div>
{else}
<div class="top">
	<div class="top-center">
		<div class="top-left">
			<span>您好,&nbsp;<a href="{$host}zb_system/login.php">登录</a></span>
			<span>|</span>
			<span><a href="{$host}?reg">注册</a></span>
		</div>
		<div class="top-right">
			<span>控制面板</span>
		</div>
	</div>
</div>
{/if}

