{assign var=date value="/"|explode:$jalon->date}

<div id="bloc_etape">
	<p>
        {if $jalon->projet->_id}
		La prochaine étape importante concernant<br />le projet
		<a href="{$BASE_URL}project/{$jalon->projet->_id}/">{$jalon->projet->nom}</a>
		se déroulera le <strong>{$date.2}/{$date.1}/{$date.0}</strong>.
        {else}
            <br />Aucun jalon à venir.<br />
        {/if}
	</p>
</div>
