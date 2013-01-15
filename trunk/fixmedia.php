<?
/*
Plugin Name: Botón Fixmedia
Version: 0.7
Plugin URI: http://fixmedia.org
Description: Añade el botón de "fixear" a cada post del blog.
Author: Daniel Aguilar
Author URI: http://soydac.com/
Tags: fixmedia, noticias, corregir, ampliar, medios, periodismo
License: GPL2
*/

add_filter('the_content','fixmedia_add_button');
function fixmedia_add_button($content) {
	$options = get_option('fixmedia_options');
	if (!$options['pages'] && is_page()) {return $content;}
	return $content . '<div class="fix_button_wrapper">
		<iframe src="http://fixmedia.org/services/fixit?' . (($options['color']=='grey') ? 'style=gray&' : '') . 'url=' . get_permalink() . '" scrolling="no"
		frameborder="0" style="border:none; overflow:hidden; width:100px; height:23px;"
		allowTransparency="true"></iframe></div>
	';
}



add_action('admin_menu', 'fixmedia_admin_add_page');
function fixmedia_admin_add_page() {
	add_options_page('Opciones Botón Fixmedia', 'Botón Fixmedia', 'manage_options', 'fixmedia', 'fixmedia_options');
}

function fixmedia_options() {?>
	<div>
	<h2>Opciones Botón Fixmedia</h2>
	<p>Opciones básicas de configuración del plugin que inserta el Botón Fixmeda en los posts del blog</p>
	<form action="options.php" method="post">
	<?php settings_fields('fixmedia_options'); ?>
	<?php do_settings_sections('fixmedia'); ?>

	<p class="submit"><input name="Submit" type="submit" value="Guardar cambios" /></p>
	</form></div>

<? }

add_action('admin_init', 'fixmedia_admin_init');
function fixmedia_admin_init(){
	register_setting( 'fixmedia_options', 'fixmedia_options' );
	add_settings_section('fixmedia_main', 'Visualización', 'fixmedia_section_text', 'fixmedia');
	add_settings_field('fixmedia_color', 'Esquema de color del botón', 'fixmedia_color', 'fixmedia', 'fixmedia_main');
	add_settings_field('fixmedia_pages', '¿Mostrar el botón de fixmeda en páginas?', 'fixmedia_pages', 'fixmedia', 'fixmedia_main');

}

function fixmedia_section_text() {}

function fixmedia_color() {
	$options = get_option('fixmedia_options');
	echo "
		<select id='fixmedia_color' name='fixmedia_options[color]'>
			<option value='grey' " . (($options['color']=='grey') ? 'selected' : '') . ">Gris</option>
			<option value='normal' " . (($options['color']!='grey') ? 'selected' : '') . ">Normal</option>
		</select>
	";
	echo "
		<select id='fixmedia_pages' name='fixmedia_options[pages]'>
			<option value='1' " . (($options['pages']) ? 'selected' : '') . ">Sí</option>
			<option value='0' " . ((!$options['pages']) ? 'selected' : '') . ">No</option>
		</select>
	";
}
function fixmedia_pages() {
	$options = get_option('fixmedia_options');
	echo "
		<select id='fixmedia_pages' name='fixmedia_options[pages]'>
			<option value='1' " . (($options['pages']) ? 'selected' : '') . ">Sí</option>
			<option value='0' " . ((!$options['pages']) ? 'selected' : '') . ">No</option>
		</select>
	";
}
