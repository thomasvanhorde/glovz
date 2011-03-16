<?php /* Smarty version 2.6.26, created on 2011-03-16 22:31:09
         compiled from controller/project/view/defaut.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip', 'controller/project/view/defaut.tpl', 25, false),)), $this); ?>
<h2>Liste des Projets</h2>

<p><a href="new/">Nouveau projet</a></p>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Durée (h)</th>
            <th>Clôturé</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $_from = $this->_tpl_vars['projects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['project']):
?>
            <tr>
                <td><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
project/<?php echo $this->_tpl_vars['id']; ?>
/"><?php echo $this->_tpl_vars['project']['nom']; ?>
</a></td>
                <td><?php echo $this->_tpl_vars['project']['duree']; ?>
</td>
                <td>
                	<?php if ($this->_tpl_vars['project']['cloture'] == 'true'): ?>
                		Oui
                	<?php else: ?>
                		Non
               		<?php endif; ?>
                </td>
                <td><a href="edit/<?php echo $this->_tpl_vars['project']['_id']; ?>
/#<?php echo ((is_array($_tmp=$this->_tpl_vars['project']['nom'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
">Modifier</a></td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </tbody>
</table>