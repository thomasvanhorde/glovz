{if $erreur == "true" }
    erreur de login
{/if}

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