<h2>Projet {$project->nom}</h2>

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
		{foreach from=$project->jalon key=k item=jalon}
            <tr>
                <td>{$jalon.label}</td>
                <td>{$jalon.description}</td>
                <td>{$jalon.date}</td>
            </tr>
        {/foreach}
	</tbody>
</table>
