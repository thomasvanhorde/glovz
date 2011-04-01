<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		{* Encodage *}
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    
	    {* Titre *}
	    <title>{ $title }</title>
	    
	    {* Feuilles de style *}
	    <link rel="stylesheet" media="screen" href="{$BASE_URL}themes/glovz/soft-reset.css" />
	    <link rel="stylesheet" media="screen" href="{$BASE_URL}themes/package/accueil.css" />

	</head>
	<body>
		{* Titre *}
		<h1><img src="{$BASE_URL}themes/glovz/img/titre_accueil.png" alt="glovz - Suivi de projets" /></h1>
		
		{* Contenu *}
		<div id="contenu">
            {$content}
		</div>
	</body>
</html>
