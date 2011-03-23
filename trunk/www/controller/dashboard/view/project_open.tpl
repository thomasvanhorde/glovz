<table>
	<caption>Projets en cours</caption>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Chef de projet</th>
            <th>Avancement</th>
            <th>Rapport</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$projects key=id item=project}
        <tr>
            <td><a href="{$BASE_URL}project/{$project->_id}/">{$project->nom|utf8_decode}</a></td>
            <td>{$project->cdp->nom} {$project->cdp->prenom }</td>
             <td>{$project->avancement|ceil} %</td>
             <td><a href="{$BASE_URL}report/{$project->_id}/" title="cliquez pour editer un rapport">Editer</a></td>
            <!--        TODO mettre le bon url     -->
        </tr>
    {/foreach}
    </tbody>
</table>
