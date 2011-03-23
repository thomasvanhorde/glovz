<form method="post" class="buttonRight" >
    <p>
        <input type="hidden" value="addMember" name="todo">
        <input type="hidden" value="{$project->_id}" name="projectID">
        <select name="member">
        {foreach from=$allUsers key=id item=user}

            {if !in_array($id, $listIdMembres)}
                <option value="{$id}">{$user.nom} {$user.prenom}</option>
            {/if}
        {/foreach}
        </select>

        <input type="submit" value="Ajouter ce membre" />
    </p>
</form>
