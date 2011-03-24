<h2>Liste des projets</h2>

{if $isDT}
<a class="btnNouveau" href="create-project/"><input type="button" value="Créer un nouveau projet" /></a>
{/if}

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Durée (h)</th>
            <th>Clôturé</th>
            {if $isDT}<th>Actions</th>{/if}
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
            {if $isDT}
            <td>
                <a href="edit-project/{$project._id}/">Modifier</a> |
            	<a href="delete-project/{$project._id}/">Supprimer</a> |
            	<a href="pdf/{$project._id}/">Éditer un Rapport</a>
            </td>
            {/if}
        </tr>
    {/foreach}
    </tbody>
</table>
