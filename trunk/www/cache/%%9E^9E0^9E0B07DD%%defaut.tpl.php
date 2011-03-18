<?php /* Smarty version 2.6.26, created on 2011-03-18 23:10:06
         compiled from controller/client/view/defaut.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'print_r', 'controller/client/view/defaut.tpl', 24, false),)), $this); ?>
<h2>Liste des Clients</h2>

<p><a href="new/">Nouveau client</a></p>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Courriel</th>
        </tr>
    </thead>
    <tbody>
        <?php $_from = $this->_tpl_vars['clients']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['client']):
?>
        <tr>
            <td><?php echo $this->_tpl_vars['client']['nom']; ?>
</td>
            <td><?php echo $this->_tpl_vars['client']['prenom']; ?>
</td>
            <td><?php echo $this->_tpl_vars['client']['mail']; ?>
</td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </tbody>
</table>

<br />
<pre><?php echo ((is_array($_tmp=$this->_tpl_vars['clients'])) ? $this->_run_mod_handler('print_r', true, $_tmp) : print_r($_tmp)); ?>
</pre>