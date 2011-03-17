<h2>Liste des membres</h2>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Pr�nom</th>
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
                    <a href="edit/{$member._id}/#{$member.nom|strip}-{$member.prenom|strip}">Modifier</a>
                     - 
                    <a href="delete/{$member._id}/#{$member.nom|strip}-{$member.prenom|strip}">Supprimer</a>
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>

<a href="new/">Nouveau membre</a>
<a href="pdf/">PDF</a>
