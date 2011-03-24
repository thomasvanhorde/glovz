<?php

	/**
	 *	Empêche de redéclarer une variable
	 *
	 *	@author Thomas Van Horde
	 *	@version 1.0
	 */
	function define_once($name, $value) {
		if (!defined($name))
			define($name, $value);
	}

	/**
	 *	Encodage en md5 ou sha1 avec un grain de sel
	 *
	 *	@author Thomas Van Horde
	 *	@version 1.0
	 */
	function selEncode($string, $method = 'md5') {
		switch ($method) {
			case 'md5' :
				return md5($string.GRAIN_SEL);
			break;
			case 'sha1' :
				return sha1($string.GRAIN_SEL);
			break;
			case 'base64' :
				return base64_encode($string.GRAIN_SEL);
			break;
		}
	}

	/**
	 *	Décodage de la chaîne cryptée
	 *
	 *	@author Thomas Van Horde
	 *	@version 1.0
	 */
	function selDecode($string, $method = 'base64') {
		switch($method) {
			case 'base64' :
				$tmp = base64_decode($string);
				$tmp2 = explode(GRAIN_SEL, $tmp);
				return $tmp2[0];
			break;
		}
	}

/*
	Fin du fichier : functions.php
	Chemin du fichier : /www/inc/
*/