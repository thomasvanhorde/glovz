<?php /* Smarty version 2.6.26, created on 2011-03-20 19:52:07
         compiled from controller/client/view/defaut.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_decode', 'controller/client/view/defaut.tpl', 16, false),)), $this); ?>
<h2>Liste des Clients</h2>

<a class="btnNouveau" href="create-client/"><input type="button" value="Créer un nouveau client" /></a></p>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Courriel</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $_from = $this->_tpl_vars['clients']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['client']):
?>
        <tr>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['client']['nom'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
</td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['client']['prenom'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
</td>
            <td><?php echo $this->_tpl_vars['client']['mail']; ?>
</td>
            <td>
           		<a href="edit-client/<?php echo $this->_tpl_vars['client']['_id']; ?>
/">Modifier</a> |
            	<a href="delete-client/<?php echo $this->_tpl_vars['client']['_id']; ?>
/">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </tbody>
</table>