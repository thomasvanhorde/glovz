<?php /* Smarty version 2.6.26, created on 2011-03-20 22:37:15
         compiled from controller/dashboard/view/mileston_next.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'explode', 'controller/dashboard/view/mileston_next.tpl', 1, false),)), $this); ?>
<?php $this->assign('date', ((is_array($_tmp="/")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['jalon']->date) : explode($_tmp, $this->_tpl_vars['jalon']->date))); ?>
<h3>Votre prochain jalon est le <?php echo $this->_tpl_vars['date']['2']; ?>
/<?php echo $this->_tpl_vars['date']['1']; ?>
/<?php echo $this->_tpl_vars['date']['0']; ?>
</h3>
<p class="details">
    Cette date concerne :<br />
<?php echo $this->_tpl_vars['jalon']->description; ?>
<br />
Il s'agit du projet <?php echo $this->_tpl_vars['jalon']->projet->nom; ?>

</p>