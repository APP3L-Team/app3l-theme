<?php

require_once 'vendor/autoload.php';

use libs\TwigProxy as Twig;

function app3l_html(&$vars)
{
	$twig = new Twig();
	return  $twig->render('layout.html.twig', $vars);
}

function app3l_page(&$vars)
{
	$twig = new Twig();
	return  $twig->render('page.html.twig', $vars);
}