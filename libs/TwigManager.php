<?php

namespace libs;

class TwigManager {
	
	public static $themeRoot;
	public static $viewsRoot;
	public static $cacheRoot;
	
	public static $loader;
	public static $twig;
	
	public function __construct()
	{
		if (!self::$themeRoot)
			self::$themeRoot = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR;
		
		if (!self::$viewsRoot)
			self::$viewsRoot = self::$themeRoot.'views';
		
		if (!self::$cacheRoot)
			self::$cacheRoot = self::$themeRoot.'cache';
		
		if (!self::$loader)
		{
			self::$loader = new \Twig_Loader_Filesystem(self::$viewsRoot);
			
			self::$twig = new \Twig_Environment(self::$loader, array(
				//'cache' => self::$cacheRoot,
			));
			
			self::$twig->addFunction(new \Twig_SimpleFunction('t', 't'));
			
			self::$twig->addFunction(new \Twig_SimpleFunction('render', function($value) {
				return render($value); // fix strict warning
			}));
			
			self::$twig->addFunction(new \Twig_SimpleFunction('theme', 'theme' ));
		}
	}
	
	public function render($view, $values)
	{
		return self::$twig->render($view, $values);
	}
}