<h2>Liste des Clients</h2>

<p><a href="new/">Nouveau client</a></p>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Courriel</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$clients item=client}
        <tr>
            <td>{$client.nom}</td>
            <td>{$client.prenom}</td>
            <td>{$client.mail}</td>
        </tr>
        {/foreach}
    </tbody>
</table>

<br />
<pre>{$clients|print_r}</pre>
