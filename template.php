<?php

require_once 'vendor/autoload.php';

function app3l_html(&$vars)
{
	$twig = new libs\TwigManager();
	return  $twig->render('layout.html.twig', $vars);
}

function app3l_page(&$vars)
{
	$twig = new libs\TwigManager();
	return  $twig->render('page.html.twig', $vars);
}