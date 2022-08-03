<?php
/**
 * Plugin Name: Fuentes Bunny.
 * Plugin URI: https://creativaonline.es
 * Description: Cambie las fuentes de Google por Bunny Fonts para que las fuentes cumplan con GDPR.
 * Author: CreativaOnline
 * Version: 1.0
 * Author URI: https://creativaonline.es
 */

/**
 * Filtrar als peticiones entrantes y las reemplaza por la de Bunny.
 */
function fuentes_bunny_src( $src ){

	$src = str_replace( 'fonts.googleapis.com/css2', 'fonts.bunny.net/css', $src );
	$src = str_replace( 'fonts.googleapis.com/css', 'fonts.bunny.net/css', $src );
	$src = str_replace( 'fonts.googleapis.com', 'fonts.bunny.net', $src );

	return $src;

}

add_filter( 'style_loader_src', 'fuentes_bunny_src' );
add_filter( 'wp_resource_hints', 'fuentes_bunny_src' );
