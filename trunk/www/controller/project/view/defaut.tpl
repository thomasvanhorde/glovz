<h2>Liste des projets</h2>

<p><a href="create-project/">Créer un nouveau projet</a></p>
<br />
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Durée (h)</th>
            <th>Clôturé</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$projects key=id item=project}
        <tr>
            <td><a href="{$BASE_URL}project/{$id}/">{$project.nom}</a></td>
            <td>{$project.duree}</td>
            <td>
        	{if $project.cloture eq 'true'}
        		Oui
        	{else}
        		Non
       		{/if}
            </td>
            <td><a href="edit-project/{$project._id}/">Modifier</a></td>
        </tr>
    {/foreach}
    </tbody>
</table>
