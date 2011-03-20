{assign var=date value="/"|explode:$jalon->date}
<h3>Votre prochain jalon est le {$date.2}/{$date.1}/{$date.0}</h3>
<p class="details">
    Cette date concerne :<br />
{$jalon->description}<br />
Il s'agit du projet {$jalon->projet->nom}
</p>
