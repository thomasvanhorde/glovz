<?php /* Smarty version 2.6.26, created on 2011-03-20 22:37:15
         compiled from controller/dashboard/view/project_open.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_decode', 'controller/dashboard/view/project_open.tpl', 12, false),)), $this); ?>
<h3>Vos projets en cours</h3>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Chef de projet</th>
        </tr>
    </thead>
    <tbody>
    <?php $_from = $this->_tpl_vars['projects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['project']):
?>
        <tr>
            <td><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
project/<?php echo $this->_tpl_vars['project']->_id; ?>
/"><?php echo ((is_array($_tmp=$this->_tpl_vars['project']->nom)) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
</a></td>
            <td><?php echo $this->_tpl_vars['project']->cdp->nom; ?>
 <?php echo $this->_tpl_vars['project']->cdp->prenom; ?>
</td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
    </tbody>
</table>