<form action="">
    <p>
        <label for="user_email">Courriel</label>
        <input class="saisie" name="user_email" id="user_email" type="text" value="" size="35" />
    </p>
    <p>
        <label for="user_password">Mot de passe</label>
        <input class="saisie" name="user_password" id="user_password" type="password" size="35" />
    </p>
    <p id="bouton">
    	<input type="hidden" name="todo" value="user[connect]" />
    	<button type="submit">Connexion</button>
    </p>
</form>

{if $erreur == "true" }
<p id="erreur">La connexion a échouée.</p>
{/if}
