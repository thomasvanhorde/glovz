<?php
	/**
	 *	Index du système MVC
	 *		- Paramètres à modifier dans /www/inc/base.config.php
	 *		- PHP 5.2+ requis
	 *	@author Thomas Van Horde
	 *	@version 1.0
	 */

	// Start Session
	session_start();

	header("Pragma: no-cache"); header('Content-type: text/html; charset=utf-8');

	// Include base functions
	include 'inc/functions.php';

	// Load website config
	include 'inc/base.config.php';

	// Load engine config
	if (!include ENGINE_URL.'inc/base.config.php')
		header('location: error_config.php');

	// load class config
	if (!include FOLDER_INC.'class.config.php')
		header('location: error_config.php');

	if (DEBUG) {
		include ENGINE_URL.FOLDER_CLASS.'Debug.class.php';
		Debug::log('Init');
		Debug::logSpeed();
	}

	// ClassLoader Init
	if (!include ENGINE_URL.FOLDER_CLASS.'Base.class.php') {
		header('location: error_config.php');
	}

	// Load MVC from Url rewriting
	$SiteObj = Base::Load(CLASS_BASE);
	$SiteObj->Start($_SERVER['REQUEST_URI']);
	$SiteObj->Display();

	// Less PHP
	if (DEV) {
		Base::Load(CLASS_LESS)->Load('themes/glovz/global.less', 'themes/package/global.css');
		Base::Load(CLASS_LESS)->Load('themes/glovz/accueil.less', 'themes/package/accueil.css');
	}

/*
	Fin du fichier : index.php
	Chemin du fichier : /www/
*/