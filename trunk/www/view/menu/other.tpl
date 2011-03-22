<div id="barre">

    {* Titre *}
    <h1><img src="{$BASE_URL}themes/glovz/img/titre.png" alt="glovz - Suivi de projets" /></h1>
    
    {* Menu *}
    <ul id="menu">
        <li><a {if $myURL.0 == 'dashboard'}class="actif" {/if}href="{$BASE_URL}dashboard/">Tableau de bord</a></li>
        <li><a {if $myURL.0 == 'project'}class="actif" {/if}href="{$BASE_URL}project/">Projets</a></li>

        {if $isDT}
            <li><a {if $myURL.0 == 'client'}class="actif" {/if}href="{$BASE_URL}client/">Clients</a></li>
            <li><a {if $myURL.0 == 'members'}class="actif" {/if}href="{$BASE_URL}members/">Membres</a></li>
        {/if}
        
        <li><a {if $myURL.0 == 'timesheet'}class="actif" {/if}href="{$BASE_URL}timesheet/">Feuille de temps</a></li>
    </ul>
</div>
