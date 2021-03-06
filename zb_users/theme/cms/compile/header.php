<?php 
	date_default_timezone_set('Asia/Shanghai');
	$hour = date('H');
	$min = date('i');
	$sec = date('s');
	$hour_deg = $hour/12*360;
	$min_deg = $min/60*360;
	$sec_deg = $sec/60*360;
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php  echo $language;  ?>" lang="<?php  echo $language;  ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="<?php  echo $language;  ?>"/>
	<title><?php  echo $name;  ?>_<?php  echo $title;  ?></title>
	<style>
@keyframes sec_rotate {
    from {transform: rotate(<?=($sec_deg)?>deg);} to {transform: rotate(<?=(360+$sec_deg)?>deg);}
}
@-webkit-keyframes sec_rotate {
    from {-webkit-transform: rotate(<?=($sec_deg)?>deg);} to {-webkit-transform: rotate(<?=(360+$sec_deg)?>deg);}
}
@-moz-keyframes sec_rotate {
    from {-moz-transform: rotate(<?=($sec_deg)?>deg);} to {-moz-transform: rotate(<?=(360+$sec_deg)?>deg);}
}
@-o-keyframes sec_rotate {
    from {-o-transform: rotate(<?=($sec_deg)?>deg);} to {-o-transform: rotate(<?=(360+$sec_deg)?>deg);}
}
@keyframes min_rotate {
    from {transform: rotate(<?=($min_deg)?>deg);} to {transform: rotate(<?=(360+$min_deg)?>deg);}
}
@-webkit-keyframes min_rotate {
    from {-webkit-transform: rotate(<?=($min_deg)?>deg);} to {-webkit-transform: rotate(<?=(360+$min_deg)?>deg);}
}
@-moz-keyframes min_rotate {
    from {-moz-transform: rotate(<?=($min_deg)?>deg);} to {-moz-transform: rotate(<?=(360+$min_deg)?>deg);}
}
@-o-keyframes min_rotate {
    from {-o-transform: rotate(<?=($min_deg)?>deg);} to {-o-transform: rotate(<?=(360+$min_deg)?>deg);}
}
@keyframes hour_rotate {
    from {transform: rotate(<?=($hour_deg)?>deg);} to {transform: rotate(<?=(360+$hour_deg)?>deg);}
}
@-webkit-keyframes hour_rotate {
    from {-webkit-transform: rotate(<?=($hour_deg)?>deg);} to {-webkit-transform: rotate(<?=(360+$hour_deg)?>deg);}
}
@-moz-keyframes hour_rotate {
    from {-moz-transform: rotate(<?=($hour_deg)?>deg);} to {-moz-transform: rotate(<?=(360+$hour_deg)?>deg);}
}
@-o-keyframes hour_rotate {
    from {-o-transform: rotate(<?=($hour_deg)?>deg);} to {-o-transform: rotate(<?=(360+$hour_deg)?>deg);}
}
	</style>
	<meta name="generator" content="<?php  echo $zblogphp;  ?>" />
	<link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/styleCms.css" type="text/css" media="all"/>
	<link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/font-awesome.min.css" type="text/css" media="all"/>
	<link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/font-awesome.css" type="text/css" media="all"/>
	<script src="<?php  echo $host;  ?>zb_system/script/common.js" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/js/clock.js" type="text/javascript"></script>
	<!--script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/js/jquery.js" type="text/javascript"></script-->
	<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/js/custom.js" type="text/javascript"></script>
<?php  echo $header;  ?>
<?php if ($type=='index'&&$page=='1') { ?>
	<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" />
<?php } ?>
</head>