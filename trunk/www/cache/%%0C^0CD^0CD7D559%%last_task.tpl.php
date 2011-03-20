<?php /* Smarty version 2.6.26, created on 2011-03-20 22:37:15
         compiled from controller/dashboard/view/last_task.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_decode', 'controller/dashboard/view/last_task.tpl', 17, false),array('modifier', 'truncate', 'controller/dashboard/view/last_task.tpl', 18, false),array('modifier', 'date_format', 'controller/dashboard/view/last_task.tpl', 21, false),)), $this); ?>
<h3>Les dernières tâches sur lesquelles vous avez travaillé</h3>
<?php if (! empty ( $this->_tpl_vars['lastTask'] )): ?>
    <table>
        <thead>
            <tr>
                <th>Label</th>
                <th>Description</th>
                <th>Projet</th>
                <th>Durée (h)</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $_from = $this->_tpl_vars['lastTask']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tache']):
?>
                <tr>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['tache']['label'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
</td>
                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tache']['description'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 30) : smarty_modifier_truncate($_tmp, 30)); ?>
</td>
                <td><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
project/<?php echo $this->_tpl_vars['tache']['projet']->_id; ?>
/"><?php echo $this->_tpl_vars['tache']['projet']->nom; ?>
</a></td>
                <td><?php echo $this->_tpl_vars['tache']['duree']; ?>
</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['tache']['date_create'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
</td>
                <td>
                    <a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
project/edit-task/<?php echo $this->_tpl_vars['tache']['_id']; ?>
/">Modifier</a>
                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
        </tbody>
    </table>
<?php endif; ?>