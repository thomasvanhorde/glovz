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
    {foreach from=$projects key=id item=project}
        <tr>
            <td><a href="{$BASE_URL}project/{$id}/">{$project.nom|utf8_decode}</a></td>
            <td>{$project.duree}</td>
            <td>
        	{if $project.cloture eq 'true'}
        		Oui
        	{else}
        		Non
       		{/if}
            </td>
            <td>
        		<a href="edit-project/{$project._id}/">Modifier</a> |
            	<a href="delete-project/{$project._id}/">Supprimer</a>
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>
