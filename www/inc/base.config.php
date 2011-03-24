<?php

	/**
	 *	Configuration de base
	 *
	 *	@author Thomas Van Horde
	 *	@version 1.0
	 */

	// Serveur personnel de Thomas
	if ($_SERVER['SCRIPT_FILENAME'] == '/var/www/lpcm/glovz/trunk/www/index.php') {
		define_once('SYS_FOLDER', '/');
		define_once('ENGINE_URL', '/var/www/lpcm/glovz/trunk/engine/');
		define_once('DEV', true);
		define_once('MONGO_HOST', 'localhost');
		define_once('MONGO_BASE', 'test');
	}

	// Pour pouvoir se connecter à la fac sur la base du PC de Thomas
	/*
	define_once('MONGO_HOST','mongodb://10.70.224.118');
	define_once('MONGO_BASE','test');
	*/

	/* Configuration de Thomas */
	define_once('MONGO_HOST','mongodb://192.168.0.23');
	define_once('MONGO_BASE','test');

	define_once('MONGO_HOST','localhost');
	define_once('MONGO_BASE','test');

	/* A tester à l'extérieur de la fac */
	/*
	define_once('MONGO_HOST','mongodb://glovz.thomas-vanhorde.fr');
	define_once('MONGO_BASE','test');
	*/

	/*  Ne plus utiliser */
	/*
	define_once('MONGO_HOST','mongodb://lpcm:lpcm@flame.mongohq.com:27033/lpcm');
	define_once('MONGO_BASE','lpcm');
	*/

	/**
	* Using for String encode
	*/
	//  En cas de changement, il faut regénérer les password <!>
	define('GRAIN_SEL', 'b4d6g6hZrt4treD4hrt68kuyki65hr');
	// Methode utilisée
	define('ENCODE_METHOD', 'md5'); // sha1 | md5


	// Configuration par défaut
	if($_SERVER['SCRIPT_FILENAME'] == 'D:/localhost/glovz/www/index.php'){ // Thomas
	//define_once('SYS_FOLDER','/www/');  //  http://glovztest.fr/www/
	define_once('SYS_FOLDER','/');
	define_once('ENGINE_URL','D:/localhost/glovz/engine/');
	}

	if($_SERVER['SCRIPT_FILENAME'] == '/Users/aenyhm/Sites/www/glovz/glovz/www/index.php'){	// Fabien
	define_once('SYS_FOLDER','/www/glovz/glovz/www/');
	define_once('ENGINE_URL','/Users/aenyhm/Sites/www/glovz/glovz/engine/');
	}

	if($_SERVER['SCRIPT_FILENAME'] == '/Applications/MAMP/htdocs/glovz/www/index.php') { // JB
	define_once('SYS_FOLDER','/glovz/www/');
	define_once('ENGINE_URL','/Applications/MAMP/htdocs/glovz/engine/');
	}

	define_once('FORCE_ENCODE_UTF8', false);
	define_once('GZIP_COMPRESS', true);
	define_once('DEBUG', false);
	define_once('DEV', true);

/*
	Fin du fichier : base.config.php
	Chemin du fichier : /www/inc/
*/