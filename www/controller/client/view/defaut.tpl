<h2>Liste des Clients</h2>

<a class="btnNouveau" href="create-client/"><input type="button" value="Créer un nouveau client" /></a></p>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Courriel</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$clients item=client}
        <tr>
            <td>{$client.nom|utf8_decode}</td>
            <td>{$client.prenom|utf8_decode}</td>
            <td>{$client.mail}</td>
            <td>
           		<a href="edit-client/{$client._id}/">Modifier</a> |
            	<a href="delete-client/{$client._id}/">Supprimer</a>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>
