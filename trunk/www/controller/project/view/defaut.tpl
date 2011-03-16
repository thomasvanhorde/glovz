<h2>Liste des Projets</h2>

<p><a href="new/">Nouveau projet</a></p>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Durée (h)</th>
            <th>Clôturé</th>
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
            </tr>
        {/foreach}
    </tbody>
</table>
