<?php 

acf_register_block( array(
    'name'            => 'Homepage Hero',
    'title'           => __( 'Homepage Hero', 'homepage-hero-block' ),
    'description'     => __( 'A hero block for the homepage.', 'your-text-domain' ),
    'render_callback' => 'homepage_hero_block_render_callback',
    'category'        => 'formatting',
    'icon'            => 'admin-comments',
    'keywords'        => array( 'example' ),
) );

function homepage_hero_block_render_callback( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    // Store block values.
    $context['block'] = $block;

    // Store field values.
    $context['fields'] = get_fields();

    // Store $is_preview value.
    $context['is_preview'] = $is_preview;

    // Render the block.
    Timber::render( 'components/blocks/homepage_hero.twig', $context );
}