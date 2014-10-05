<?php
/**
 * Server Default Landing Page - Index
 *
 * @package Server Default LP
 * @since 1.0
 */

$domain = strtolower( str_replace( 'www.', '', $_SERVER['HTTP_HOST'] ) );

$host = array(
	'name' => 'Hazard Media Group',
	'legal_name' => 'Hazard Media Group LLC',
	'url' => 'http://hazardmediagroup.com',
	'email' => 'info@hazardmediagroup.com',
	'phone' => '(650) 539-9109'
);

$ga = '';
switch( $domain ) {

	case 'aboutmongolia.org' :
		$ga = 'UA-35021181-1';
		break;

	case 'austinmahonemusic.com' :
		$ga = 'UA-49101014-1';
		break;

	case 'endangeredlanguage.com' :
		$ga = 'UA-45781427-1';
		break;

	case 'erdenetcarpet.com' :
		$ga = 'UA-35028743-1';
		break;

	case 'crazyfortunecookie.com' :
		$ga = 'UA-47165306-1';
		break;

	case 'goyocashmere.com' :
		$ga = 'UA-35024241-1';
		break;

	case 'hazardmediagroup.com' :
		$ga = 'UA-21682797-2';
		break;

	case 'jasonchenmusic.com' :
		$ga = 'UA-22413889-1';
		break;

	case 'mongoldude.com' :
		$ga = 'UA-32236084-1';
		break;

	case 'coltonjameswiscombe.com' :
		$ga = 'UA-46115599-1';
		break;

	case 'shykidx.com' :
		$ga = 'UA-49093112-1';
		break;

	default :
		$ga = 'UA-55422859-1'; // hazard-media.com accnt
		break;

}

?><!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
		
	<title><?php echo "Web Hosting | {$host['name']}"; ?></title>
	
	<!--[if IE]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<meta name="author" content="<?php echo $host['name']; ?>">
	<meta name="copyright" content="<?php echo date( 'Y' ) . ", {$host['legal_name']}"; ?>">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">

	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="cache-control" content="max-age=0">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="Expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/server-lp.css?v=1.0">

	<?php if( !empty( $ga ) ) : ?>
	<!-- GOOGLE ANALYTICS -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', <?php echo "'$ga'"; ?>, 'auto');
		ga('send', 'pageview');
		ga('send', 'event', 'Server Default LP', 'Page View', <?php echo "'$domain'"; ?>);

	</script>
	<!-- END - GOOGLE ANALYTICS -->
	<?php endif; ?>

</head>
<body class="frame">

	<header id="page-header" class="row">
		<div class="wrapper cell">

			<div id="logo"><?php echo $host['name']; ?></div>

			<div id="contact-links">
				<ul>
					<li class="phone"><?php echo $host['phone']; ?></li>
					<li class="uppercase"><?php echo "<a href='{$host['url']}'>Contact Us</a>"; ?></li>
				</ul>
			</div><!--#contact-links-->

		</div><!--.wrapper-->
	</header>

	<div id="content" class="row expand">
		<div class="wrapper cell">

			<h1><?php echo $domain; ?></h1>
			<p>
				<span>Another site successfully hosted by</span>
				<span><?php echo "<a href='{$host['url']}'>{$host['name']}</a>"; ?></span>
			</p>

		</div><!--.wrapper-->
	</div><!--#content-->

	<footer id="page-footer" class="row">
		<div class="wrapper">

			<p class="inquiries"><?php echo "Purchasing Inquiries: <a href='mailto:{$host['email']}'>{$host['email']}</a>"; ?></p>
			<p class="disclaimer"><?php echo "Copyright &copy; " . date( 'Y' ) . ", <a href='{$host['url']}'>{$host['legal_name']}</a>.  All rights reserved."; ?></p>

		</div><!--.wrapper-->
	</footer>

</body>
</html>