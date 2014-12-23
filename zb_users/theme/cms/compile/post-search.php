<div class="containter" style="margin-left: 340px;">
		<div class="article-list">
			<?php  $q = trim(htmlspecialchars(GetVars('q','GET')));  ?>
    		<?php  $array=Getlist(10,null,null,null,null,$q);;  ?>
    		<?php if (count($array) > '0') { ?> 
        		<?php  foreach ( $array as $a) { ?> 					
					<article class="article">
					
					<?php 
						$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
						$content = $a->Content;
						preg_match_all($pattern,$content,$matchContent);			
					 ?>

					<?php if (isset($matchContent[1][0])) { ?>
					<div class="feature-img">
						<a alt="<?php  echo $a->Title;  ?>" title="<?php  echo $a->Title;  ?>" href="<?php  echo $a->Url;  ?>">
							<img alt="<?php  echo $a->Title;  ?>" src="<?php 
							echo $matchContent[1][0];
							 ?>"/>
						</a>
					</div>
					<?php } ?>
					<h1><a alt="<?php  echo $a->Title;  ?>" title="<?php  echo $a->Title;  ?>" href="<?php  echo $a->Url;  ?>"><?php  echo $a->Title;  ?></a></h1>

					<div class="content">
						<p><?php  echo $a->Intro;  ?></p>
					</div>

					<div class="article-info">
						<i class="fa fa-calender"></i>
						 <?php  echo $a->Time('Y年m月d日');  ?>
						 <i class="fa fa-map-marker"></i>
						<a class="category tag"><?php  echo $a->ViewNums;  ?></a>
					</div>

					<div class="readmore">
						<a alt="<?php  echo $a->Title;  ?>" title="<?php  echo $a->Title;  ?>" href="<?php  echo $a->Url;  ?>">+阅读全文</a>
					</div>
					
				</article>
				<?php  }   ?>
				<?php  include $this->GetTemplate('footer');  ?>
		</div>
			<?php }else{  ?>
				<?php  include $this->GetTemplate('post-searchno');  ?>
			<?php } ?>
	</div>
</div>
<?php  include $this->GetTemplate('post-slide');  ?>