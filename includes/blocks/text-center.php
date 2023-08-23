<?php 

acf_register_block( array(
    'name'            => 'Text Center',
    'title'           => __( 'Text Center', 'your-text-domain' ),
    'description'     => __( 'A Text Center Block', 'your-text-domain' ),
    'render_callback' => 'my_text_center_block_render_callback',
    'category'        => 'formatting',
    'icon'            => 'admin-comments',
    'keywords'        => array( 'example' ),
) );

function my_text_center_block_render_callback( $block, $content = '', $is_preview = false ) {
    $context = Timber::context();

    // Store block values.
    $context['block'] = $block;

    // Store field values.
    $context['fields'] = get_fields();

    // Store $is_preview value.
    $context['is_preview'] = $is_preview;

    // Render the block.
    Timber::render( 'components/blocks/text-center.twig', $context );
}