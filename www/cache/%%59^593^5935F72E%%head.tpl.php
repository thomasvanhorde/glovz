<?php /* Smarty version 2.6.26, created on 2011-03-20 23:12:10
         compiled from view/inc/head.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_decode', 'view/inc/head.tpl', 6, false),)), $this); ?>
<head>
	<!-- Encodage -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <!-- Titre -->
    <title><?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
</title>
    
    <!-- Feuilles de style -->
    <link rel="stylesheet/less" media="screen" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
themes/jquery.validity.css" />
    <link rel="stylesheet/less" media="screen" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
themes/admin/niceforms/niceforms-default.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
/themes/admin/datepicker/datepicker.css" />
    <link rel="stylesheet/less" media="screen" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
themes/glovz/soft-reset.css" />
    <link rel="stylesheet/less" media="screen" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
themes/glovz/global.less" />

	<!-- Scripts JS -->
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/glovz/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/glovz/less.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/cufon/cufon-yui.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/cufon/Harabara_700.font.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/cufon/Opificio_400.font.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/glovz/defaut.js"></script>
	
	<!-- Typographies -->
    <?php echo '
    <script>
	    Cufon.replace(\'h2\', {fontFamily: \'Harabara\'});
	    Cufon.replace(\'h3\', {fontFamily: \'Harabara\'});
	    Cufon.replace(\'#menu a, legend\', {fontFamily: \'Opificio\'});
    </script>
    '; ?>

</head>