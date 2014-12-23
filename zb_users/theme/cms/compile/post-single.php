<div class="containter" style="margin-left: 340px;">
		<div class="article-list">				
					<article class="article">

					<h1><a alt="<?php  echo $article->Title;  ?>" title="<?php  echo $article->Title;  ?>" href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></h1>

					<div class="content">
						<p><?php  echo $article->Content;  ?></p>
					</div>

					<div class="article-info">
						<i class="fa fa-calender"></i>
						 <?php  echo $article->Time('Y年m月d日');  ?>
						 <i class="fa fa-map-marker"></i>
						<a class="category tag"><?php  echo $article->Category->Name;  ?></a>
					</div>
					
				</article>
				<?php if (!$article->IsLock) { ?>
					<?php  include $this->GetTemplate('comments');  ?>		
				<?php } ?>
				<?php  include $this->GetTemplate('footer');  ?>
		</div>
		<?php  include $this->GetTemplate('post-slide');  ?>
</div>
