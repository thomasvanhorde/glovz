<?php /* Smarty version 2.6.26, created on 2011-03-20 21:49:00
         compiled from controller/user/view/members.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip', 'controller/user/view/members.tpl', 18, false),)), $this); ?>
<h2>Liste des membres</h2>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $_from = $this->_tpl_vars['members']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['member']):
?>
            <tr>
                <td><?php echo $this->_tpl_vars['member']['nom']; ?>
</td>
                <td><?php echo $this->_tpl_vars['member']['prenom']; ?>
</td>
                <td><?php echo $this->_tpl_vars['member']['mail']; ?>
</td>
                <td>
                    <a href="edit/<?php echo $this->_tpl_vars['member']['_id']; ?>
/#<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['nom'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['prenom'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
">Modifier</a>
                     - 
                    <a href="delete/<?php echo $this->_tpl_vars['member']['_id']; ?>
/#<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['nom'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
-<?php echo ((is_array($_tmp=$this->_tpl_vars['member']['prenom'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </tbody>
</table>

<a href="new/">Nouveau membre</a>
<a href="pdf/">PDF</a>