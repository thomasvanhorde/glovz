<?php

define('DEBUG', false);
define('DEV', true);



if($_SERVER['SERVER_ADDR'] == '127.0.0.1'){
    Define_once('MONGO_HOST','localhost');
    Define_once('MONGO_BASE','test');
}else{
    Define_once('MONGO_HOST','mongodb://lpcm:lpcm@flame.mongohq.com:27033/lpcm');
    Define_once('MONGO_BASE','lpcm');    
}


/***
 * Using for String encode
 * */
//  En cas de changement, il faut régénérer les password <!>
define('GRAIN_SEL', 'b4d6g6hZrt4treD4hrt68kuyki65hr');
// Methode utilisé
define('ENCODE_METHOD', 'md5'); // sha1 | md5

// Use OoCss, ex Tmargin auto create if use in html code
Define_once('CSS_OBJECT',false);

// Use CSS Compressor
if(DEV)
    Define_once('CSS_COMPRESSOR',false);
else
    Define_once('CSS_COMPRESSOR',true);



// Defaut config
if($_SERVER['SCRIPT_FILENAME'] == 'D:/localhost/glovz/www/index.php'){ //Thomas
	Define_once('SYS_FOLDER','/');
	Define_once('ENGINE_URL','D:/localhost/glovz/engine/');
}

if($_SERVER['SCRIPT_FILENAME'] == 'C:/wwwroot/CMS/www/index.php'){  // Killian
    Define_once('SYS_FOLDER','/CMS/www/');
    Define_once('ENGINE_URL','C:/wwwroot/CMS/engine/');
}

if($_SERVER['SCRIPT_FILENAME'] == '/Users/aenyhm/Sites/www/glovz/trunk/www/index.php'){	// Fabien
	Define_once('SYS_FOLDER','/www/glovz/trunk/www/');
	Define_once('ENGINE_URL','/Users/aenyhm/Sites/www/glovz/trunk/engine/');
}


// mysql://utilisateur:motdepasse@serveur/base_de_donnees


?>