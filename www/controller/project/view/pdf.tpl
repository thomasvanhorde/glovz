<h1>Projet</h1>

<h2>
    {$project->nom}
</h2>

<img src="http://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=Projet%20{$project->nom|urlencode}%20{$project->myURL}&choe=UTF-8" />

<!-- Informations du projet -->
<ul>
    <li>Date de création : {$project->date_create|date_format:"%d/%m/%Y"}</li>
    <li>Chef de projet : {$project->cdp->prenom} {$project->cdp->nom} &lt;{$project->cdp->mail}&gt;</li>
    <li>Client : {$project->client->prenom} {$project->client->nom} &lt;{$project->client->mail}&gt;</li>
    <li>URL du serveur de développement : <a href="{$project->url_dev}">{$project->url_dev}</a></li>
    <li>URL du serveur de production : <a href="{$project->url_prod}">{$project->url_prod}</a></li>
    <li>Durée estimée : {$project->duree} heures</li>
    <li>Durée passée :  {if $project->tacheTotalH <= 100} {$project->tacheTotalH} heures, soit {$project->avancement|ceil}% du projet
                        {else} Durée estimée dépassée ({$project->tacheTotalH} heures)
                        {/if} </li>
    <li>Clôturé :
	{if $project->cloture eq 'true'}
            Oui
	{else}
            Non
	{/if}
    </li>
</ul>


<img src="http://chart.googleapis.com/chart?cht=p3&chd=t:{$project->avancement|ceil},{$project->avancementR|ceil}&chs=250x100&chl=Fait|Restant" />


<!-- Jalons du projet -->

<h3>Jalons</h3>
<table>
    {if !empty($project->jalon)}
    <thead>
        <tr>
            <th>Label</th>
            <th>Description</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$project->jalon item=jalon}
        {assign var=date value="/"|explode:$jalon.date}
            <tr>
                <td>{$jalon.label}</td>
                <td>{$jalon.description}</td>
                <td>{$date.2}/{$date.1}/{$date.0}</td>
            </tr>
        {/foreach}
    </tbody>
    {/if}
</table>


<!--Tâches du projet -->
<h3>Tâches</h3>
<table>
    {if !empty($project->tache)}
    <thead>
        <tr>
            <th>Label</th>
            <th>Description</th>
            <th>Personne concernée</th>
            <th>Durée (h)</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$project->tache key=taskType item=task}
        <tr>
            <th>
                    {if $taskType == 0}Maquette{/if}
                    {if $taskType == 1}Intégration{/if}
                    {if $taskType == 2}Développement{/if}
                    {if $taskType == 3}Test{/if}
            </th>
        </tr>
            {foreach from=$task item=tache}
        <tr>
            <td><a href="{$BASE_URL}timesheet/{$tache._id}/">{$tache.label}</a></td>
            <td>{$tache.description}</td>
            <td>{$tache.utilisateur->nom} {$tache.utilisateur->prenom}</td>
            <td>{$tache.duree}</td>
        </tr>
            {/foreach}
        {/foreach}
    </tbody>{/if}
</table>



<!-- Membres du projet -->
<h3>Membres</h3>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Fonction</th>
        </tr>
    </thead>
    <tbody>
    {if !empty($project->membre)}
        {foreach from=$project->membre item=membre}
        <tr>
            <td>{$membre->nom}</td>
            <td>{$membre->prenom}</td>
            <td>{$membre->groupe->label}</td>
        </tr>
        {/foreach}
    {/if}
    </tbody>
</table>
