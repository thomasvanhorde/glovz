<h3>Les dernières tâches sur lesquelles vous avez travaillé</h3>
{if !empty($lastTask)}
    <table>
        <thead>
            <tr>
                <th>Label</th>
                <th>Description</th>
                <th>Projet</th>
                <th>Durée (h)</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {foreach from=$lastTask item=tache}
                <tr>
                <td>{$tache.label|utf8_decode}</td>
                <td>{$tache.description|utf8_decode|truncate:30}</td>
                <td><a href="{$BASE_URL}project/{$tache.projet->_id}/">{$tache.projet->nom}</a></td>
                <td>{$tache.duree}</td>
                <td>{$tache.date_create|date_format:"%d/%m/%Y"}</td>
                <td>
                    <a href="{$BASE_URL}project/edit-task/{$tache._id}/">Modifier</a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
{/if}