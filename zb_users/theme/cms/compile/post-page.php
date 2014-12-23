<div class="containter" style="margin-left: 340px;">
		<div class="article-list">				
				<article class="article">
					<h1><?php  echo $article->Title;  ?></h1>
					<div class="content">
						<?php  echo $article->Content;  ?>
					</div>
				</article>
		<?php  include $this->GetTemplate('footer');  ?>
		</div>
</div>
<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php } ?>
<?php  include $this->GetTemplate('post-slide');  ?>