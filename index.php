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

	<link rel="apple-touch-icon" href="images/touch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/touch-icon-iphone-retina.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/touch-icon-ipad-retina.png">

	<link rel="stylesheet" href="css/server-lp.css?v=1.0">

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