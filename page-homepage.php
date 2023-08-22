<?php
/**
 * Template Name: Home Page
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-homepage.twig', 'page.twig' ), $context );