<?php /* Smarty version 2.6.26, created on 2011-03-19 22:35:26
         compiled from controller/project/view/list_user.tpl */ ?>
<h2>Ajouter un membre au projet</h2>

<form method="post">
    <input type="hidden" value="addMember" name="todo">
    <input type="hidden" value="<?php echo $this->_tpl_vars['project']->_id; ?>
" name="projectID">
    <select name="member">
        <?php $_from = $this->_tpl_vars['allUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['user']):
?>
        <option value="<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['user']['nom']; ?>
 <?php echo $this->_tpl_vars['user']['prenom']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
    </select>

    <input type="submit" value="Ajouter ce membre" />

</form>