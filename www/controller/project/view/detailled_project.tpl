

<div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all"></div>
<h2>
    {$project->nom}
</h2>

<!-- Informations du projet -->
<ul class="floatL">
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

<img class="qr floatR" src="http://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=Projet%20{$project->nom}%20{$project->myURL}&choe=UTF-8" />


<script type="text/javascript">
    {literal}
    $(function() {
        $( "#progressbar" ).progressbar({
            value: {/literal}{$project->avancement}{literal},
            complete: function(event, ui) {
                // console.log('test');
            }
        });
            $( "#progressbar.ui-progressbar-value" ).html({/literal}{$project->avancement}{literal});
    });
    {/literal}
</script>

<!-- Jalons du projet -->




<table>
    <caption>Jalons
    {if $isDT }
        <a href="create-milestone/"><input type="button" value="Créer un nouveau jalon" id="nouveauJalon" class="buttonRight" /></a>

        <div style="display: none;" id="dialogFormNouveauJalon" class="dialogForm ui-dialog" title="Nouveau jalon">{$formNewJalon}</div>
        <script type="text/javascript">
            {literal}
            $("#nouveauJalon").click(function(){
                $( "#dialogFormNouveauJalon" ).dialog( "open" );
                return false;
            });
            {/literal}
        </script>
    {/if}
    </caption>
    {if !empty($project->jalon)}
    <thead>
        <tr>
            <th>Label</th>
            <th>Description</th>
            <th>Date</th>
            {if $isDT }<th>Actions</th>{/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$project->jalon item=jalon}
        {assign var=date value="/"|explode:$jalon.date}
            <tr>
                <td>{$jalon.label|truncate:15}</td>
                <td>{$jalon.description|truncate:20}</td>
                <td>{$date.2}/{$date.1}/{$date.0}</td>
                {if $isDT }<td>
                    <a href="{$BASE_URL}project/edit-milestone/{$jalon._id}/">Modifier</a> |
                    <a href="{$BASE_URL}project/delete-milestone/{$project->_id}/{$jalon._id}/">Supprimer</a>
                </td>{/if}
            </tr>
        {/foreach}
    </tbody>
    {/if}
</table>



<br />

<!--Tâches du projet -->


<table>
    <caption>
        Tâches

        {if $isDT }
        <a href="create-task/"><input type="button" value="Créer une nouvelle tâche" id="nouvelleTache" class="buttonRight" /></a>

        <div style="display: none;" id="dialogFormNouvelleTache" class="dialogForm ui-dialog" title="Nouvelle tâche">{$formNewTache}</div>
        <script type="text/javascript">
            {literal}
            $("#nouvelleTache").click(function(){
                $( "#dialogFormNouvelleTache" ).dialog( "open" );
                return false;
            });
            {/literal}
        </script>
        {/if}
    </caption>
    {if !empty($project->tache)}
    <thead>
        <tr>
            <th>Label</th>
            <th>Description</th>
            <th>Personne concernée</th>
            <th>Durée (h)</th>
            {if $isDT }<th>Actions</th>{/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$project->tache key=taskType item=task}
        <tr>
            <th colspan="10">
                    {if $taskType == 0}Maquette{/if}
                    {if $taskType == 1}Intégration{/if}
                    {if $taskType == 2}Développement{/if}
                    {if $taskType == 3}Test{/if}
            </th>
        </tr>
            {if is_array($task)}
                {foreach from=$task item=tache}
                    <tr>
                        <td><a href="{$BASE_URL}timesheet/{$tache._id}/">{$tache.label}</a></td>
                        <td>{if !is_object($tache.description)}{$tache.description|truncate:20}{/if}</td>
                        <td>{$tache.utilisateur->nom} {$tache.utilisateur->prenom}</td>
                        <td>{$tache.duree}</td>
                        {if $isDT }<td>
                            <a href="{$BASE_URL}project/edit-task/{$tache._id}/">Modifier</a> |
                            <a href="{$BASE_URL}project/delete-task/{$project->_id}/{$tache._id}/">Supprimer</a>
                        </td>{/if}
                    </tr>
                {/foreach}
            {/if}
        {/foreach}
    </tbody>{/if}
</table>

<br />

<!-- Membres du projet -->

<table>
    <caption>
        Membres
        {if $isDT }{$allUsersContent}{/if}
    </caption>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Fonction</th>
            {if $isDT }<th>Action</th>{/if}
        </tr>
    </thead>
    <tbody>
    {if !empty($project->membre)}
        {foreach from=$project->membre item=membre}
        <tr>
            <td>{$membre->nom}</td>
            <td>{$membre->prenom}</td>
            <td>{$membre->groupe->label}</td>
            {if $isDT }<td><a href="{$BASE_URL}project/remove-member/{$project->_id}/{$membre->_id}/">Supprimer</a></td>{/if}
        </tr>
        {/foreach}
    {/if}
    </tbody>
</table>
