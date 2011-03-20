<?php /* Smarty version 2.6.26, created on 2011-03-20 19:28:57
         compiled from controller/project/view/defaut.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_decode', 'controller/project/view/defaut.tpl', 16, false),)), $this); ?>
<h2>Liste des projets</h2>

<a class="btnNouveau" href="create-project/"><input type="button" value="Créer un nouveau projet" /></a>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Durée (h)</th>
            <th>Clôturé</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php $_from = $this->_tpl_vars['projects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['project']):
?>
        <tr>
            <td><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
project/<?php echo $this->_tpl_vars['id']; ?>
/"><?php echo ((is_array($_tmp=$this->_tpl_vars['project']['nom'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
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
            <td>
        		<a href="edit-project/<?php echo $this->_tpl_vars['project']['_id']; ?>
/">Modifier</a> |
            	<a href="delete-project/<?php echo $this->_tpl_vars['project']['_id']; ?>
/">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
    </tbody>
</table>