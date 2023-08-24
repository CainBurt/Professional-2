<?php
/**
 * Template Name: Solutions Page
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-solutions.twig', 'page.twig' ), $context );