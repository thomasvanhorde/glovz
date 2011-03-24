<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	{include file='view/inc/head.tpl'}
	<body>
		<!-- Barre latérale -->
        {$menu}
        
        <!-- En-tête -->
        {$userbar}
        
		<!-- Contenu -->
		<div id="contenu">
            {$content}
		</div>

		{include file='view/inc/bottomJs.tpl'}
	</body>
</html>
