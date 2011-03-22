{assign var=date value="/"|explode:$jalon->date}

<div id="bloc_etape">
	<p>
		La prochaine étape importante concernant<br />le projet
		{* TODO: rajouter l'URL du projet à récupérer *}
		<a href="{$BASE_URL}project/{$project->_id}/">{$jalon->projet->nom|utf8_decode}</a>
		se déroulera le <strong>{$date.2}/{$date.1}/{$date.0}</strong>.
	</p>
</div>
