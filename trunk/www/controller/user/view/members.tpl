<h2>Liste des membres</h2>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$members item=member}
            <tr>
                <td>{$member.nom}</td>
                <td>{$member.prenom}</td>
                <td>{$member.mail}</td>
            </tr>
        {/foreach}
    </tbody>
</table>

<a href="new/">Nouveau membre</a>