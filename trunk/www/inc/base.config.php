<?php



// Defaut config
if($_SERVER['SCRIPT_FILENAME'] == '/var/www/lpcm/glovz/trunk/www/index.php'){ // Serveur Thomas
    Define_once('SYS_FOLDER','/');
	Define_once('ENGINE_URL','/var/www/lpcm/glovz/trunk/engine/');
    Define_once('DEV', true);
    Define_once('MONGO_HOST','localhost');
    Define_once('MONGO_BASE','test');
}

/*  En local pour les autres => Uniquement si Thomas es là (Thomas's local) */
/*
Define_once('MONGO_HOST','mongodb://10.70.224.118');
Define_once('MONGO_BASE','test');
*/


Define_once('MONGO_HOST','localhost');
Define_once('MONGO_BASE','test');

/* A tester à l'extérieur de la fac */
/*
Define_once('MONGO_HOST','mongodb://glovz.thomas-vanhorde.fr');
Define_once('MONGO_BASE','test');
*/

/*  Ne plus utiliser */
/*
Define_once('MONGO_HOST','mongodb://lpcm:lpcm@flame.mongohq.com:27033/lpcm');
Define_once('MONGO_BASE','lpcm');
*/


/***
 * Using for String encode
 * */
//  En cas de changement, il faut regénérer les password <!>
define('GRAIN_SEL', 'b4d6g6hZrt4treD4hrt68kuyki65hr');
// Methode utilis�
define('ENCODE_METHOD', 'md5'); // sha1 | md5


// Defaut config
if($_SERVER['SCRIPT_FILENAME'] == 'D:/localhost/glovz/www/index.php'){ //Thomas
    //Define_once('SYS_FOLDER','/www/');  //  http://glovztest.fr/www/
    Define_once('SYS_FOLDER','/');
	Define_once('ENGINE_URL','D:/localhost/glovz/engine/');
}

if($_SERVER['SCRIPT_FILENAME'] == '/Users/aenyhm/Sites/www/glovz/trunk/www/index.php'){	// Fabien
	Define_once('SYS_FOLDER','/www/glovz/trunk/www/');
	Define_once('ENGINE_URL','/Users/aenyhm/Sites/www/glovz/trunk/engine/');
}

if($_SERVER['SCRIPT_FILENAME'] == '/Applications/MAMP/htdocs/glovz/www/index.php') { // JB
	Define_once('SYS_FOLDER','/glovz/www/');
	Define_once('ENGINE_URL','/Applications/MAMP/htdocs/glovz/engine/');
}

Define_once('FORCE_ENCODE_UTF8', false);
Define_once('GZIP_COMPRESS', true);
Define_once('DEBUG', false);
Define_once('DEV', true);

?>
