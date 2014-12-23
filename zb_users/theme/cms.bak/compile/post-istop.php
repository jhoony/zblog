				<article class="article">
					
					<?php 
						$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
						$content = $article->Content;
						preg_match_all($pattern,$content,$matchContent);
						$temp=$matchContent[1][0];			
					 ?>

					<?php if (isset($temp)) { ?>
					<div class="feature-img">
						<a alt="<?php  echo $article->Title;  ?>" title="<?php  echo $article->Title;  ?>" href="<?php  echo $article->Url;  ?>">
							<img alt="<?php  echo $article->Title;  ?>" src="<?php 
							echo $temp;
							 ?>"/>
						</a>
					</div>
					<?php } ?>
					<h1><a alt="<?php  echo $article->Title;  ?>" title="<?php  echo $article->Title;  ?>" href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></h1>

					<div class="content">
						<p><?php  echo $article->Intro;  ?></p>
					</div>

					<div class="article-info">
						<i class="fa fa-calender"></i>
						 <?php  echo $article->Time('Y年m月d日');  ?>
						 <i class="fa fa-map-marker"></i>
						<a class="category tag"><?php  echo $article->ViewNums;  ?></a>
					</div>

					<div class="readmore">
						<a alt="<?php  echo $article->Title;  ?>" title="<?php  echo $article->Title;  ?>" href="<?php  echo $article->Url;  ?>">+阅读全文</a>
					</div>
					
				</article>