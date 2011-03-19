<h2>{$project->nom}</h2>

<!-- Informations du projet -->
<ul>
	<li>Date de cr�ation : {$project->date_create|date_format:"%d/%m/%Y"}</li>
	<li>Chef de projet : {$project->cdp->prenom} {$project->cdp->nom} &lt;{$project->cdp->mail}&gt;</li>
	<li>Client : {$project->client->prenom} {$project->client->nom} &lt;{$project->client->mail}&gt;</li>
	<li>URL du serveur de d�veloppement : <a href="{$project->url_dev}">{$project->url_dev}</a></li>
	<li>URL du serveur de production : <a href="{$project->url_prod}">{$project->url_prod}</a></li>
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
<p><a href="create-milestone/">Cr�er un nouveau jalon</a></p>
{if !empty($project->jalon)}
	<table>
		<caption>-- Jalons --</caption>
		<thead>
			<tr>
				<th>Label</th>
				<th>Description</th>
				<th>Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$project->jalon item=jalon}
	            <tr>
	                <td>{$jalon.label}</td>
	                <td>{$jalon.description}</td>
	                <td>{$jalon.date}</td>
	                <td>
	                	<a href="edit-milestone/{$jalon._id}">Modifier</a> |
						<a href="{$BASE_URL}project/remove-milestone/{$project->_id}/{$jalon._id}/">Supprimer</a>
	                </td>
	            </tr>
	        {/foreach}
		</tbody>
	</table>
{/if}
<br />

<!-- T�ches du projet -->
<p><a href="create-task/">Cr�er une nouvelle t�che</a></p>
{if !empty($project->tache)}
	<table>
		<caption>-- T�ches --</caption>
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
	                <td>
	                	<a href="edit-task/{$tache._id}">Modifier</a>
	                	<a href="{$BASE_URL}project/remove-task/{$project->_id}/{$tache._id}/">Supprimer</a>
	                </td>
	            </tr>
	        {/foreach}
		</tbody>
	</table>
{/if}
<br />

<!-- Membres du projet -->
<table>
	<caption>{$allUsersContent}</caption>
	<thead>
		<tr>
			<th>Nom</th>
			<th>Pr�nom</th>
            <th>Fonction</th>
            <th>Action</th>
		</tr>
	</thead>
	<tbody>
    {if !empty($project->membre)}
        {foreach from=$project->membre item=membre}
            <tr>
                <td>{$membre->nom}</td>
                <td>{$membre->prenom}</td>
                <td>{$membre->groupe->label}</td>
                <td><a href="{$BASE_URL}project/remove-member/{$project->_id}/{$membre->_id}/">Supprimer</a></td>
            </tr>
        {/foreach}
    {/if}
	</tbody>
</table>