<?php
/**
 * Register theme styles
 */
function mosne_astronomy_club_register_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_register_style(
		'mosne-astronomy-club-style',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		$theme_version,
	);
	wp_enqueue_style( 'mosne-astronomy-club-style' );
}
add_action( 'wp_enqueue_scripts', 'mosne_astronomy_club_register_styles' );


/**
 * Register custom block styles
 */
if ( function_exists( 'register_block_style' ) ) {
	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'notes',
			'label'        => __( 'Notes', 'mosne-astronomy-club' ),
			'is_default'   => false,
			'inline_style' => '.is-style-notes {
				font-family: var(--wp--preset--font-family--space-mono);
				font-size: var(--wp--preset--font-size--medium);
			}',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'small-caps',
			'label'        => __( 'Small Caps', 'mosne-astronomy-club' ),
			'is_default'   => false,
			'inline_style' => '.is-style-small-caps {
				font-family: var(--wp--preset--font-family--space-mono);
				font-size: var(--wp--preset--font-size--small);
				text-transform: uppercase;
				letter-spacing: 3px;
			}',
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'         => 'small-caps',
			'label'        => __( 'Small Caps', 'mosne-astronomy-club' ),
			'is_default'   => false,
			'inline_style' => '.is-style-small-caps {
				font-family: var(--wp--preset--font-family--space-mono);
				font-size: var(--wp--preset--font-size--small);
				text-transform: uppercase;
				letter-spacing: 3px;
			}',
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'         => 'bolder',
			'label'        => __( 'Bolder', 'mosne-astronomy-club' ),
			'is_default'   => false,
			'inline_style' => '.is-style-bolder {
				font-weight: 700;
			}',
		)
	);
}

/**
 * Add a new category for the block patterns
 */
register_block_pattern_category(
	'telescope',
	array( 'label' => __( 'Telescope', 'mosne-astronomy-club' ) )
);
