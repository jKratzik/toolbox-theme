<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
<head <?php hybrid_attr( 'head' ); ?>>
<?php wp_head(); ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>
	<div class="site-container">
		<div class="skip-link">
			<a href="#content" class="show-for-sr"><?php esc_html_e( 'Skip to content', 'toolbox' ); ?></a>
		</div>
		<header <?php hybrid_attr( 'header' ); ?>>
			<div class="row">
				<div <?php hybrid_attr( 'branding' ); ?>>
					<?php hybrid_site_title(); ?>
					<?php hybrid_site_description(); ?>
				</div>
                <?php hybrid_get_sidebar( 'header' ); // Loads the sidebar/header.php template. ?>
			</div>
		</header>
		<?php hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template. ?>
		<div id="main" class="row main">
			<?php hybrid_get_menu( 'breadcrumbs' ); // Loads the menu/breadcrumbs.php template. ?>