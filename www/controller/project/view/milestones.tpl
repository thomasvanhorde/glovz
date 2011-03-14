<h2>Liste des jalons</h2>
<table>
    <thead>
        <tr>
            <th>Label</th>
            <th>Description</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$milestones item=milestone}
            <tr>
                <td>{$milestone.label}</td>
                <td>{$milestone.description}</td>
                <td>{$milestone.date}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
