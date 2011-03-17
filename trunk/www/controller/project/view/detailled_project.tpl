<h2>{$project->nom}</h2>

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
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$project->jalon item=jalon}
	            <tr>
	                <td>{$jalon.label}</td>
	                <td>{$jalon.description}</td>
	                <td>{$jalon.date}</td>
	                <td><a href="edit/{$jalon._id}">Modifier</a></td>	<!-- surcharger le parent::_collection avec le bon id de collection -->
	            </tr>
	        {/foreach}
		</tbody>
	</table>
{else}
	<p>Pas de jalons.</p>
{/if}
<br />

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
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$project->tache item=tache}
	            <tr>
	                <td>{$tache.label}</td>
	                <td>{$tache.description}</td>
	                <td>{$tache.utilisateur->nom} {$tache.utilisateur->prenom}</td>
	                <td>{$tache.duree}</td>
	                <td><a href="edit/{$tache._id}">Modifier</a></td>
	            </tr>
	        {/foreach}
		</tbody>
	</table>
{else}
	<p>Pas de t�ches.</p>
{/if}
<br />

<!-- Membres du projet -->
<table>
	<caption>Membres | <a href="member/">Ajouter un membre</a></caption>
	<thead>
		<tr>
			<th>Nom</th>
			<th>Pr�nom</th>
			<th>Fonction</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<br />


<pre>{$project|print_r}</pre>
