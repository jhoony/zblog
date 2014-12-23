<?php  include $this->GetTemplate('header');  ?>
	
	<?php  include $this->GetTemplate('post-left');  ?>

	<?php  $q = trim(htmlspecialchars(GetVars('q','GET')));  ?>
			<?php if ($q != '') { ?>
					<?php  include $this->GetTemplate('post-search');  ?>
			<?php }else{  ?>
				<?php if ($type=='article') { ?>
					<?php  include $this->GetTemplate('post-single');  ?>					
				<?php }else{  ?>
					<?php  include $this->GetTemplate('post-page');  ?>
				<?php } ?>
			<?php } ?>