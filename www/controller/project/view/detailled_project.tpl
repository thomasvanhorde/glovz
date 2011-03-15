<h2>Projet {$project->nom}</h2>

<!-- Informations du projet -->
<ul>
	<li>Date de cr�ation : {$project->date_create|date_format:"%d/%m/%Y"}</li>
	<li>Chef de projet : {$project->cdp->prenom} {$project->cdp->nom} &lt;{$project->cdp->mail}&gt;</li>
	<li>Client : {$project->client->prenom} {$project->client->nom} &lt;{$project->client->mail}&gt;</li>
	<li>URL du serveur de d�veloppement : {$project->url_dev}</li>
	<li>URL du serveur de production : {$project->url_prod}</li>
	<li>Dur�e estim�e : {$project->duree} heures</li>
	<li>Cl�tur� :
		{if $project->cloture eq 'true'}
        	Oui
    	{else}
    		Non
   		{/if}
   	</li>
</ul>

<!-- Jalons du projet -->
{if !empty($project->jalon)}
	<table>
		<caption>Jalons</caption>
		<thead>
			<tr>
				<th>Label</th>
				<th>Description</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$project->jalon item=jalon}
	            <tr>
	                <td>{$jalon.label}</td>
	                <td>{$jalon.description}</td>
	                <td>{$jalon.date}</td>
	            </tr>
	        {/foreach}
		</tbody>
	</table>
{else}
	<p>Pas de jalons.</p>
{/if}

<!-- T�ches du projet -->
{if !empty($project->tache)}
	<table>
		<caption>T�ches</caption>
		<thead>
			<tr>
				<th>Label</th>
				<th>Description</th>
				<th>Personne concern�e</th>
				<th>Dur�e (h)</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$project->tache item=tache}
	            <tr>
	                <td>{$tache.label}</td>
	                <td>{$tache.description}</td>
	                <td>{$tache.utilisateur}</td>
	                <td>{$tache.duree}</td>
	            </tr>
	        {/foreach}
		</tbody>
	</table>
{else}
	<p>Pas de t�ches.</p>
{/if}

<br /><pre>{$project|print_r}</pre>
