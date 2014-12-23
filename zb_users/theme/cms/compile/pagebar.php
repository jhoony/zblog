<?php if ($pagebar) { ?>
<div class="pagenavi">
	<?php  foreach ( $pagebar->buttons as $k=>$v) { ?> 
		<?php if ($pagebar->PageNow==$k) { ?>
			<span class="page-numbers current"><?php  echo $k;  ?></span>
		<?php }else{  ?>
			<a class="page-numbers" href="<?php  echo $v;  ?>"><?php  echo $k;  ?></a>
		<?php } ?>
	<?php  }   ?>
</div>
<?php } ?>