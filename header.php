<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Edlen | The Power People</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-title" content="Edlen | The Power People" />
	<meta name="application-name" content="Edlen | The Power People" />
	<meta name="msapplication-config" content="ico/browserconfig.xml" />
	<meta name="theme-color" content="#117abe" />
	<link rel="apple-touch-icon" sizes="180x180" href="ico/apple-touch-icon-180.png" />
	<link rel="manifest" href="ico/manifest.json" />
	<link rel="icon" type="image/png" href="ico/favicon-32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="ico/favicon-16.png" sizes="16x16" />

	<?php wp_head(); ?>

</head>
<body>

<header>
	<div class="row-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo home_url(); ?>">
							<?php bloginfo('name'); ?>
						</a>
					</div>
					<?php
					wp_nav_menu( array(
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker())
					);
					?>
				</div>
			</nav>
		</div> <!-- .col-xs-12 .col-sm-12 .col-md-12 .col-lg-12 end -->
	</div> <!-- .row-fluid end -->
</header>