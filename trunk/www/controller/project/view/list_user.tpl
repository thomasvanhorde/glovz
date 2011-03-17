<h2>Ajouter un membre au projet</h2>

<form method="post">
	<p>
		<select name="member">
			<option value="0">--</option>
			{foreach from=$users key=id item=user}
            <option value="{$id}">{$user.prenom} {$user.nom}</option>
      		{/foreach}
		</select>
	</p>
	<p><input type="submit" value="Lier ce membre" /></p>
</form>
