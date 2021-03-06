<?php if ( has_nav_menu( 'primary' ) ) : // Check if there's a menu assigned to the 'primary' location. ?>
<div class="nav-primary">
	<nav <?php hybrid_attr( 'menu', 'primary' ); ?>>
		<?php wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container'       => '',
				'menu_id'         => 'menu-primary-items',
				'menu_class'      => 'menu-items',
				'fallback_cb'     => '',
				'items_wrap'      => '<ul id="%s" class="small-12 columns main-nav clone-mobile %s">%s</ul>'
			)
		); ?>
	</nav>
</div>
<?php endif; // End check for menu. ?>