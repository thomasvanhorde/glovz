<?php /* Smarty version 2.6.26, created on 2011-03-20 22:37:15
         compiled from view/other.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'view/inc/head.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<body>
        <script type="text/javascript">BASE_URL = "<?php echo $this->_tpl_vars['BASE_URL']; ?>
";</script>
		<!-- BARRE LATÉRALE -->
        <?php echo $this->_tpl_vars['menu']; ?>

		<!-- CONTENU -->
		<div id="contenu">
            <?php echo $this->_tpl_vars['content']; ?>

		</div>
	</body>
</html>