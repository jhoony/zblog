<?php  include $this->GetTemplate('header');  ?>
	<?php  include $this->GetTemplate('post-top');  ?>
	<?php  include $this->GetTemplate('post-left');  ?>

	<div class="containter" style="margin-left: 340px;">
		<div class="article-list">
		<?php if (count($articles) > '0') { ?>
			<?php  foreach ( $articles as $article) { ?> 
				<?php if ($article->IsTop) { ?>
          			<?php  include $this->GetTemplate('post-istop');  ?>
          		<?php }else{  ?>
					<?php  include $this->GetTemplate('post-multi');  ?>
				<?php } ?>
			<?php  }   ?>
			<?php  include $this->GetTemplate('pagebar');  ?>
			<div class="clear"></div>
			<?php  include $this->GetTemplate('footer');  ?>
		<?php }else{  ?>
			<?php  include $this->GetTemplate('noarticle');  ?>
		<?php } ?>
		</div>
		<?php  include $this->GetTemplate('post-slide');  ?>