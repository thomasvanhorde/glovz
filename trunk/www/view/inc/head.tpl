<head>
	<!-- Encodage -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <!-- Titre -->
    <title>{ $title|utf8_decode }</title>
    
    <!-- Feuilles de style -->
    <link rel="stylesheet" media="screen" href="{$BASE_URL}themes/glovz/soft-reset.css" />
    <link rel="stylesheet" media="screen" href="{$BASE_URL}themes/package/global.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="{$BASE_URL}themes/glovz/jquery-ui.css" />
    <link rel="stylesheet" media="screen" href="{$BASE_URL}themes/jquery.validity.css" />
    <link rel="stylesheet" media="screen" href="{$BASE_URL}themes/admin/niceforms/niceforms-default.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="{$BASE_URL}/themes/admin/datepicker/datepicker.css" />




	<!-- Scripts JS -->
    <script type="text/javascript" src="{$BASE_URL}js/glovz/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="{$BASE_URL}js/glovz/jquery-ui.min.js"></script>

    <script type="text/javascript" src="{$BASE_URL}js/cufon/cufon-yui.js"></script>
    <script type="text/javascript" src="{$BASE_URL}js/cufon/Harabara_700.font.js"></script>
    <script type="text/javascript" src="{$BASE_URL}js/cufon/Opificio_400.font.js"></script>
    <script type="text/javascript" src="{$BASE_URL}js/glovz/defaut.js"></script>
	<script type="text/javascript">
		var BASE_URL = '{$BASE_URL}';
	</script>
	
	<!-- Typographies -->
    {literal}
    <script type="text/javascript">
	    Cufon.replace('h2', {fontFamily: 'Harabara'});
	    Cufon.replace('caption', {fontFamily: 'Harabara'});
	    Cufon.replace('h3, #menu a, legend, #en_tete p, #en_tete a, .ui-dialog-title', {fontFamily: 'Opificio'});
    </script>
    {/literal}
</head>
