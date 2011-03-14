<h2>Liste des t�ches</h2>
<table>
    <thead>
        <tr>
            <th>Label</th>
            <th>Type</th>
            <th>Description</th>
            <th>Dur�e (h)</th>
            <th>Cl�tur�</th>
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
