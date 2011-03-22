<form method="post" class="buttonRight" >
    <p>
        <input type="hidden" value="addMember" name="todo">
        <input type="hidden" value="{$project->_id}" name="projectID">
        <select name="member">
        {foreach from=$allUsers key=id item=user}
            <option value="{$id}">{$user.nom} {$user.prenom}</option>
        {/foreach}
        </select>

        <input type="submit" value="Ajouter ce membre" />
    </p>
</form>
