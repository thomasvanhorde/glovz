<h1>Dashboard</h1>

<p>J-n avant prochain jalon -> lien vers jalons<br />

 - c'est un overview, il faut donc avoir un minimum d'info sur tout, propositions :<br />
mes projets en cours?<br />
mes fiches de temps a jour?<br />
les dernières tâches sur lequelles j'ai travaillé</p>

<h3>Votre prochain jalon est le {$jalon->date}</h3>
<p class="details">
    Cette date concerne :<br />
{$jalon->description}<br />
Il s'agit du projet {$jalon->projet->nom}
</p>

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

<h3>Les dernières tâches sur lesquelles vous avez travaillé</h3>
{if !empty($lastTask)}
    <table>
        <thead>
            <tr>
                <th>Label</th>
                <th>Description</th>
                <th>Personne concernée</th>
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
                <td>{$tache.utilisateur->nom} {$tache.utilisateur->prenom}</td>
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