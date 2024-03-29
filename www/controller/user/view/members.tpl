<h2>Liste des membres</h2>

<a id="newMember" class="btnNouveau" href="new/"><button type="button">Créer un nouveau membre</button></a>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$members item=member}
            <tr>
                <td>{$member.nom}</td>
                <td>{$member.prenom}</td>
                <td>{$member.mail}</td>
                <td>
                    <a href="edit/{$member._id}/#{$member.nom|strip}-{$member.prenom|strip}">Modifier</a> |
                    <a href="delete/{$member._id}/#{$member.nom|strip}-{$member.prenom|strip}">Supprimer</a>
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>

<div style="display: none;" id="dialogFormNewMember" class="dialogForm ui-dialog" title="Nouveau membre">{$formNewMember}</div>
<script type="text/javascript">
{literal}
    $("#newMember").click(function(){
        $( "#dialogFormNewMember" ).dialog( "open" );
        return false;
    });
{/literal}
</script>
