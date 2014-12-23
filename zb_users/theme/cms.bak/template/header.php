{php}
	date_default_timezone_set('Asia/Shanghai');
	$hour = date('H');
	$min = date('i');
	$sec = date('s');
	$hour_deg = $hour/12*360;
	$min_deg = $min/60*360;
	$sec_deg = $sec/60*360;
{/php}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="{$language}"/>
	<title>{$name}_{$title}</title>
	<style>
.plugin-myclock {
    margin: 0 0 20px;
    position: relative;
    width: 100%;
}

.clock:after {
    background: none repeat scroll 0 0 #333;
    border-radius: 50%;
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.5) inset;
    content: "";
    height: 260px;
    margin: 20px;
    position: absolute;
    width: 260px;
}

.clock:before {
    content: "";
}

.clock {
    background: none repeat scroll 0 0 #fff;
    border-radius: 50%;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.5), 0 -10px 60px rgba(0, 0, 0, 0.2) inset;
    height: 300px;
    left: 50%;
    margin: -150px 0 0 -150px;
    position: absolute;
    top: 50%;
    width: 300px;
    -webkit-transform: translate3d(50px, 50px, 50px);
}


.clock .pivot {
    background: url("pivot.png") repeat scroll 0 0 / 100% auto rgba(0, 0, 0, 0);
    border-radius: 50%;
    height: 16px;
    left: 50%;
    margin: -8px 0 0 -8px;
    position: absolute;
    top: 50%;
    width: 16px;
    z-index: 9999;
}


.clock .hour-hand {
    background: none repeat scroll 0 0 #fff;
    height: 80px;
    left: 50%;
    margin: 0 0 0 -5px;
    top: 70px;
    width: 10px;
    animation: hour_rotate 43200s infinite linear;
    -webkit-animation: hour_rotate 43200s infinite linear;
    -moz-animation: hour_rotate 43200s infinite linear;
    -o-animation: hour_rotate 43200s infinite linear;
    transform-origin: 50% 100%;
    -webkit-transform-origin: 50% 100%;
    -moz-transform-origin: 50% 100%;
    -o-transform-origin: 50% 100%;
}
.clock .clock-hand {
    border-radius: 5px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    position: absolute;
    z-index: 999;
}


.clock .minute-hand {
    background: none repeat scroll 0 0 #fff;
    height: 110px;
    left: 50%;
    margin: 0 0 0 -4px;
    top: 40px;
    width: 8px;
    transform-origin: 50% 100%;
    -webkit-transform-origin: 50% 100%;
    -moz-transform-origin: 50% 100%;
    -o-transform-origin: 50% 100%;
    animation: min_rotate 3600s infinite linear;
    -webkit-animation: min_rotate 3600s infinite linear;
    -moz-animation: min_rotate 3600s infinite linear;
    -o-animation: min_rotate 3600s infinite linear;
}


.clock .second-hand {
    background: none repeat scroll 0 0 #f00;
    height: 130px;
    left: 50%;
    margin: 0 0 0 -3px;
    top: 40px;
    width: 6px;
    transform-origin: 50% 110px;
    -webkit-transform-origin: 50% 110px;
    -moz-transform-origin: 50% 110px;
    -o-transform-origin: 50% 110px;
    animation: sec_rotate 60s infinite linear;
    -webkit-animation: sec_rotate 60s infinite linear;
    -moz-animation: sec_rotate 60s infinite linear;
    -o-animation: sec_rotate 60s infinite linear;
}


.clock .digit {
    color: #fff;
    font: 20px/20px Arial,Helvetica,sans-serif;
    height: 20px;
    left: 140px;
    position: absolute;
    text-align: center;
    top: 140px;
    white-space: pre;
    width: 20px;
    z-index: 998;
}
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
	<meta name="generator" content="{$zblogphp}" />
	<link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/styleCms.css" type="text/css" media="all"/>
	<link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/font-awesome.min.css" type="text/css" media="all"/>
	<link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/font-awesome.css" type="text/css" media="all"/>
	<script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
	<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<script src="{$host}zb_users/theme/{$theme}/js/clock.js" type="text/javascript"></script>
	<script src="{$host}zb_users/theme/{$theme}/js/jquery.js" type="text/javascript"></script>
{$header}
{if $type=='index'&&$page=='1'}
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
{/if}
</head>