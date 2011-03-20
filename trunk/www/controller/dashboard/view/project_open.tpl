<h3>Vos projets en cours</h3>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Chef de projet</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$projects key=id item=project}
        <tr>
            <td><a href="{$BASE_URL}project/{$project->_id}/">{$project->nom|utf8_decode}</a></td>
            <td>{$project->cdp->nom} {$project->cdp->prenom }</td>
        </tr>
    {/foreach}
    </tbody>
</table>