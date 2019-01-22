<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
		<div class='logoAndTitle'>

			<div class='logo'>
				<img src="<?php bloginfo('template_directory'); ?>/images/mission-crit-logo.png" />
			</div>
	    <h1 class="title">
	      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
	        <?php bloginfo( 'name' ); ?>
	      </a>
	    </h1>
		</div>

	<div class="menu">
		<a class='menu-trigger active'>
		    <span></span>
		</a>
		<ul class="menu-ul slideMenu">
			<li><a class="menu-item" href="/" rel="relativeanchor">Home</a></li>
			<li><a class="menu-item" href="/race-history">History</a></li>
			<li><a class="menu-item" href="#about-nav" rel="relativeanchor">About</a></li>
			<li><a class="menu-item" href="#race-nav" rel="relativeanchor">Results</a></li>
			<li><a class="menu-item" href="#partners-nav" rel="relativeanchor">Sponsors</a></li>
			<li><a class="menu-item" href="#contact-nav" rel="relativeanchor">Contact</a></li>
		</ul>
	</div>

  </div><!-- /.container -->
</header><!--/.header-->
