=== Botón Fixmedia ===
Contributors: dacmail, nxtmdia
Tags: button, share, fix, fixmedia, news, media
Requires at least: 3.0
Tested up to: 3.4.2
Stable tag: 0.7
License: GPLv2

== Description ==

[Fixmedia.org](http://fixmedia.org/ "Fixmedia.org") es una herramienta para mejorar las noticias colectivamente.
[Fixmedia.org](http://fixmedia.org/ "Fixmedia.org") is a web app to improve and to fix collectively the news.

== Installation ==

1. Sube la carpeta fixmedia a la carpeta /wp-content/plugins/  | Upload the 'fixmedia' folder to the `/wp-content/plugins/` directory /
2. Activa el plugin a través del menú Plugins de WordPress | Activate the plugin through the 'Plugins' menu in WordPress
3. Configúralo en el menú Ajustes -> Botón Fixmedia | Administer in Settings -> Botón Fixmedia

== Screenshots ==

1. Así queda el botón de Fixmedia al pie de tus posts o noticias. Como ves incluye un contador de fixes. / This is how Fixmedia Button looks at the bottom of your posts or news. As you can see, it includes a fix-counter
2. Las opciones del plugin las encontrarás en el menú "Ajustes" de tu WordPress. / Plugin options can be found at "Settings" menu of your WordPress
3. Esta es la página de opciones del botón Fixmedia / This is the options page of Fixmedia Button plugin.

== Frequently Asked Questions ==

= ¿Se puede colocar el botón en otra posición distinta a la que sale por defecto? =

Sí, pero para ello tendrás que editar algo de CSS, el botón está "envuelto" por un div con la clase 'fix_button_wrapper', puedes darle los estilos pertinentes para cambiar su posición.

== Changelog ==

= 0.7 =
* Añadia opción para ocultar el botón en páginas
= 0.6 =
* Corregida incompatibilidad con algunos themes que ya usaban la función add_button()
= 0.5 =
* El botón ahora se añade en un div.fix_button_wrapper, por lo que se le pueden dar estilos a través de CSS