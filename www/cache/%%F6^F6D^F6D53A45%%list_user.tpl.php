<?php /* Smarty version 2.6.26, created on 2011-03-17 17:43:14
         compiled from controller/project/view/list_user.tpl */ ?>
<h2>Ajouter un membre au projet</h2>

<form method="post">
	<p>
		<select name="member">
			<option value="0">--</option>
			<?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['user']):
?>
            <option value="<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['user']['prenom']; ?>
 <?php echo $this->_tpl_vars['user']['nom']; ?>
</option>
      		<?php endforeach; endif; unset($_from); ?>
		</select>
	</p>
	<p><input type="submit" value="Lier ce membre" /></p>
</form>