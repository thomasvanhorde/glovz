<?php /* Smarty version 2.6.26, created on 2011-03-16 20:34:36
         compiled from /Users/aenyhm/Sites/www/glovz/trunk/engine/controller/admin/structures/view/admin_ContentManager_structList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', '/Users/aenyhm/Sites/www/glovz/trunk/engine/controller/admin/structures/view/admin_ContentManager_structList.tpl', 15, false),)), $this); ?>
<table>
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php $_from = $this->_tpl_vars['struct']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['element']):
?>
        <tr>
            <td>
                <?php echo $this->_tpl_vars['element']['name']; ?>

            </td>
            <td>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['element']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, '..', true, true) : smarty_modifier_truncate($_tmp, 60, '..', true, true)); ?>

            </td>
            <td>
                <?php if ($this->_tpl_vars['element']['locked'] == 'false'): ?>
                    <a href="<?php echo $this->_tpl_vars['k']; ?>
/">Modifier</a>
                <?php else: ?>
                    verrouiller
                <?php endif; ?>
            </td>
            <td>
                <a href="clone/<?php echo $this->_tpl_vars['k']; ?>
/">Cloner</a>
            </td>
            <td>
                <?php if ($this->_tpl_vars['element']['locked'] == 'false'): ?>
                    <a href="delete/<?php echo $this->_tpl_vars['k']; ?>
/">Supprimer</a>
                <?php else: ?>
                    verrouiller
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>    
</table>    

<br /><br />
<a href="ajouter/">Nouvelle structure</a>
<br /><br />