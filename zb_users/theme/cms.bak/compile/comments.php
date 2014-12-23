<label id="AjaxCommentBegin"></label><?php if ($socialcomment) { ?>
<section class="comments">
<?php  echo $socialcomment;  ?>
</section>
<?php }else{  ?>

<section class="comments">
	<?php if ($article->CommNums==0) { ?>
	<h1>额 本文暂时没人评论 来添加一个吧</h1>
	<?php } ?>
	<?php if ($article->CommNums>0) { ?>
	<h1>已有<?php  echo $article->CommNums;  ?>位网友发表了看法：</h1>
	<!--评论输出-->
	<?php  foreach ( $comments as $key => $comment) { ?> 
		<?php  include $this->GetTemplate('comment');  ?>
	<?php  }   ?>

	<?php  include $this->GetTemplate('pagebar');  ?>
	<div class="clear"></div>
	<?php } ?>

	<!--评论框-->
	<?php if (!$article->IsLock) { ?>
		<?php  include $this->GetTemplate('commentpost');  ?>
	<?php } ?>

</section>
<?php } ?><label id="AjaxCommentEnd"></label>