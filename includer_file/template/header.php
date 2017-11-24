<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="Keywords" content="includer,初心者,wordpress,JavaScript,javascript,html,git" lang="ja">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php if ( is_home() || is_front_page() ) : ?>
<title>includerのホーム</title>
<?php else : ?>
<title><?php wp_title('includer | '); ?></title>
<?php endif; ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/change.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/prettify.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/prettify.js"></script>
<script>
var flag = true;
$(function(){
$('#header-in-in div.btn').on('click touchstart', function(){
   $('header nav ul').slideToggle(200);
   $('#header-in-in div.btn span.btn-icon').toggleClass("close");
	if(flag == true){
		flag = false;
		$('#second').animate({height : "183px"});
	}else{
		flag = true;
		$('#second').animate({height : "0"});
	}
   return false;
   });
});

$(function(){
	prettyPrint();
});
</script>
<!--twitter-->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!--google+-->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'ja'}
</script>
<?php wp_head(); ?>
</head>

<body onLoad="prettyPrint()">
<header>
		<div id="header-in">
				<div id="header-in-in">
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="includer"></a></h1>
						<div class="btn"><a href="#"><span class="btn-icon"></span></a></div>
						<ul class="sns-icon">
								<li id="fb-root" class="fb-share-button" data-href="http://includer.tokyo/blog/" data-layout="button" data-size="small" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fincluder.tokyo%2Fblog%2F&amp;src=sdkpreparse" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/icon_facebook.png" alt="#"></a></li>
								<li><a href="https://twitter.com/share" class="" data-url="http://includer.tokyo/blog/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/icon_twitter.png" alt="#"></a></li>
								<li class="" data-action="share"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/icon_google.png" alt="#"></a></li>
						</ul>

				</div><!--header-in-in-->
		</div><!--header-in-->
		<nav>
				<ul>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">home</a></li>
						<li><a href="<?php echo esc_url( home_url( '/contents' ) ); ?>">blog</a></li>
						<!-- <li><a href="#"></a></li> -->
				</ul>
		</nav>
				<nav id="second">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">home</a></li>
						<li><a href="<?php echo esc_url( home_url( '/contents' ) ); ?>">blog</a></li>
						<li><a href="#"></a></li>
				</nav><!--second-->

</header>