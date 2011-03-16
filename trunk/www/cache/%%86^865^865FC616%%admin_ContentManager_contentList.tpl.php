<?php /* Smarty version 2.6.26, created on 2011-03-16 20:35:06
         compiled from /Users/aenyhm/Sites/www/glovz/trunk/engine/controller/admin/content/view/admin_ContentManager_contentList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_decode', '/Users/aenyhm/Sites/www/glovz/trunk/engine/controller/admin/content/view/admin_ContentManager_contentList.tpl', 18, false),array('modifier', 'truncate', '/Users/aenyhm/Sites/www/glovz/trunk/engine/controller/admin/content/view/admin_ContentManager_contentList.tpl', 18, false),)), $this); ?>
<h3>Liste des contenus</h3>
<?php $_from = $this->_tpl_vars['typeList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['type']):
?>
    <?php if ($this->_tpl_vars['type']['locked'] == 'false'): ?>
        <br /><h4 name="<?php echo $this->_tpl_vars['type']['name']; ?>
"><?php echo $this->_tpl_vars['type']['name']; ?>
</h4>
        <table>
            <tr>
                <?php $_from = $this->_tpl_vars['type']['index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kI'] => $this->_tpl_vars['dataI']):
?>
                    <th><?php echo $this->_tpl_vars['dataI']; ?>
</th>
                <?php endforeach; endif; unset($_from); ?>
                <th></th>
                <th></th>
            </tr>

            <?php $_from = $this->_tpl_vars['type']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['dataL']):
?>
            <tr>
                <?php $_from = $this->_tpl_vars['dataL']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k3'] => $this->_tpl_vars['dataLI']):
?>
                    <?php if (in_array ( $this->_tpl_vars['k3'] , $this->_tpl_vars['type']['index'] )): ?>
                        <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['dataLI'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 100, '..', true, true) : smarty_modifier_truncate($_tmp, 100, '..', true, true)); ?>
</td>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                <td>
                    <a href="<?php echo $this->_tpl_vars['k2']; ?>
/">Editer</a>
                </td>
                <td>
                    <a href="delete/<?php echo $this->_tpl_vars['k2']; ?>
/">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
        <a href="ajouter/<?php echo $this->_tpl_vars['k']; ?>
/#<?php echo $this->_tpl_vars['type']['name']; ?>
">Nouveau <?php echo $this->_tpl_vars['type']['name']; ?>
</a><br /><br />
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>