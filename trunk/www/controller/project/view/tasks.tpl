<h2>Liste des tâches</h2>
<table>
    <thead>
        <tr>
            <th>Label</th>
            <th>Type</th>
            <th>Description</th>
            <th>Durée (h)</th>
            <th>Clôturé</th>
            <th>Utilisateur</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$tasks item=task}
            <tr>
                <td>{$task.label}</td>
                <td>{$task.type}</td>
                <td>{$task.description}</td>
                <td>{$task.duree}</td>
                <td>{$task.cloture}</td>
                <td>{$task.utilisateur}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
