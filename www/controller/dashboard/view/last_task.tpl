{if !empty($lastTask)}
    <table>
    	<caption>Derni�res t�ches effectu�es</caption>
        <thead>
            <tr>
            	<th>Date</th>
                <th>Libell�</th>
                <th>Description</th>
                <th>Projet</th>
                <th>Dur�e (h)</th>
            </tr>
        </thead>
        <tbody>
        {foreach from=$lastTask item=tache}
        	<tr>
        		<td>{$tache.date_create|date_format:"%d/%m/%Y"}</td>
                <td>{$tache.label}</td>
                <td>{$tache.description|truncate:30}</td>
                <td><a href="{$BASE_URL}project/{$tache.projet->_id}/">{$tache.projet->nom}</a></td>
                <td>{$tache.duree}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
{/if}