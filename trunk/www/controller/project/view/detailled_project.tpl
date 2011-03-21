<h2>{$project->nom}</h2>

<!-- Informations du projet -->
<ul>
    <li>Date de création : {$project->date_create|date_format:"%d/%m/%Y"}</li>
    <li>Chef de projet : {$project->cdp->prenom} {$project->cdp->nom} &lt;{$project->cdp->mail}&gt;</li>
    <li>Client : {$project->client->prenom} {$project->client->nom} &lt;{$project->client->mail}&gt;</li>
    <li>URL du serveur de développement : <a href="{$project->url_dev}">{$project->url_dev}</a></li>
    <li>URL du serveur de production : <a href="{$project->url_prod}">{$project->url_prod}</a></li>
    <li>Durée estimée : {$project->duree} heures</li>
    <li>Clôturé :
	{if $project->cloture eq 'true'}
    	Oui
	{else}
		Non
	{/if}
    </li>
</ul>
<div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all"></div>
<script type="text/javascript">
    {literal}
    $(function() {
        $( "#progressbar" ).progressbar({
                value: 59
                    // TODO mettre la bonne valeur de progression
        });
    });
    {/literal}
</script>

<!-- Jalons du projet -->
<h3>-- Jalons --</h3>
{if $isDT }
<a class="btnNouveau" href=""><input type="button" value="Créer un nouveau jalon" id="nouveauJalon"/></a>
{/if}
{if !empty($project->jalon)}
<table>
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
                <td>{$jalon.label|utf8_decode|truncate:15}</td>
                <td>{$jalon.description|utf8_decode|truncate:20}</td>
                <td>{$date.2}/{$date.1}/{$date.0}</td>
                {if $isDT }<td>
                    <a href="{$BASE_URL}project/edit-milestone/{$jalon._id}/">Modifier</a> |
                    <a href="{$BASE_URL}project/delete-milestone/{$project->_id}/{$jalon._id}/">Supprimer</a>
                </td>{/if}
            </tr>
        {/foreach}
    </tbody>
</table>
<div id="dialog-form">
    <form>
    </form>
</div>
<script type="text/javascript">
    {literal}
    $("#nouveauJalon").click(function(){
        $( "#dialog-form" ).dialog( "open" );
    });

    $( "#dialog:ui-dialog" ).dialog( "destroy" );

    var name = $( "#name" ),
        email = $( "#email" ),
        password = $( "#password" ),
        allFields = $( [] ).add( name ).add( email ).add( password ),
        tips = $( ".validateTips" );

    function updateTips( t ) {
        tips
            .text( t )
            .addClass( "ui-state-highlight" );
        setTimeout(function() {
            tips.removeClass( "ui-state-highlight", 1500 );
        }, 500 );
    }

    function checkLength( o, n, min, max ) {
        if ( o.val().length > max || o.val().length < min ) {
            o.addClass( "ui-state-error" );
            updateTips( "Length of " + n + " must be between " +
                min + " and " + max + "." );
            return false;
        } else {
            return true;
        }
    }

    function checkRegexp( o, regexp, n ) {
        if ( !( regexp.test( o.val() ) ) ) {
            o.addClass( "ui-state-error" );
            updateTips( n );
            return false;
        } else {
            return true;
        }
    }

    $( "#dialog-form" ).dialog({
        autoOpen: false,
        height: 300,
        width: 350,
        modal: true,
        buttons: {
            Envoyer: function() {
                var bValid = true;
//                allFields.removeClass( "ui-state-error" );
//
//                bValid = bValid && checkLength( name, "username", 3, 16 );
//                bValid = bValid && checkLength( email, "email", 6, 80 );
//                bValid = bValid && checkLength( password, "password", 5, 16 );
//
//                bValid = bValid && checkRegexp( name, /^[a-z]([0-9a-z_])+$/i, "Username may consist of a-z, 0-9, underscores, begin with a letter." );
//                // From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
//                bValid = bValid && checkRegexp( email, /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com" );
//                bValid = bValid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );
//
//                if ( bValid ) {
//                    $( "#users tbody" ).append( "<tr>" +
//                        "<td>" + name.val() + "</td>" +
//                        "<td>" + email.val() + "</td>" +
//                        "<td>" + password.val() + "</td>" +
//                    "</tr>" );
//                    $( this ).dialog( "close" );
//                }
            $( this ) --> form . submit();
            },
            Annuler: function() {
                $( this ).dialog( "close" );
            }
        },
        close: function() {
            allFields.val( "" ).removeClass( "ui-state-error" );
        }
    });
    {/literal}
</script>
{/if}
<br />

<!-- Tâches du projet -->
<h3>-- Tâches --</h3>
{if $isDT }
<a class="btnNouveau" href="create-task/"><input type="button" value="Créer une nouvelle tâche" /></a>
{/if}
{if !empty($project->tache)}
<table>
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
            {foreach from=$task item=tache}
        <tr>
            <td>{$tache.label|utf8_decode}</td>
            <td>{$tache.description|utf8_decode|truncate:20}</td>
            <td>{$tache.utilisateur->nom} {$tache.utilisateur->prenom}</td>
            <td>{$tache.duree}</td>
            {if $isDT }<td>
                <a href="{$BASE_URL}project/edit-task/{$tache._id}/">Modifier</a> |
                <a href="{$BASE_URL}project/delete-task/{$project->_id}/{$tache._id}/">Supprimer</a>
            </td>{/if}
        </tr>
            {/foreach}
        {/foreach}
    </tbody>
</table>
{/if}
<br />

<!-- Membres du projet -->
<h3>-- Membres --</h3>
{if $isDT }<h3>{$allUsersContent}</h3>{/if}
<table>
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