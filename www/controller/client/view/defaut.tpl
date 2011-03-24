<h2>Liste des Clients</h2>

<a class="btnNouveau" href="create-client/"><button type="button">Créer un nouveau client</button/></a>
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
            <td>{$client.nom}</td>
            <td>{$client.prenom}</td>
            <td>{$client.mail}</td>
            <td>
           		<a href="edit-client/{$client._id}/">Modifier</a> |
            	<a href="delete-client/{$client._id}/">Supprimer</a>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>
