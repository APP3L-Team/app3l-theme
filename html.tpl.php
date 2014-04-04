<?php

require_once 'vendor/autoload.php';

$twig = new libs\TwigManager();


echo $twig->render('layout.html.twig', array(
	'css' => $css,
	'language' => $language,
	'rdf_namespaces' => $rdf_namespaces,
	'grddl_profile' => $grddl_profile,
	'head_title' => $head_title,
	'head_title_array' => $head_title_array,
	'head' => $head,
	'styles' => $styles,
	'scripts' => $scripts,
	'page_top' => $page_top,
	'page' => $page,
	'page_bottom' => $page_bottom,
	'classes' => $classes,
	'attributes' => $attributes
));

?>