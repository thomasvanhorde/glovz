<?php /* Smarty version 2.6.26, created on 2011-03-16 20:32:35
         compiled from controller/user/view/connect.tpl */ ?>
<?php if ($this->_tpl_vars['erreur'] == 'true'): ?>
    erreur de login
<?php endif; ?>

<form method="post" action="">
    <fieldset class="form">
        <input type="hidden" name="todo" value="User[connect]" />
        <p>
            <label for="user_email">email:</label>
            <input name="user_email" id="user_email" type="text" value="" />

        </p>
        <p>
            <label for="user_password">Password:</label>
            <input name="user_password" id="user_password" type="password" />
        </p>
        <input type="submit" value="connexion" />
    </fieldset>
</form>