<h1>Dashboard</h1>

<p>J-n avant prochain jalon -> lien vers jalons<br />

 - c'est un overview, il faut donc avoir un minimum d'info sur tout, propositions :<br />
mes projets en cours?<br />
mes fiches de temps a jour?<br />
les derni�res t�ches sur lequelles j'ai travaill�</p>

<h3>Votre prochain jalon est le {$jalon->date}</h3>
<p class="details">
    Cette date concerne :<br />
{$jalon->description}<br />
Il s'agit du projet {$jalon->projet->nom}
</p>

<h3>Vos projets en cours</h3>
<p class="details"></p>

<h3>Les derni�res t�ches sur lesquelles vous avez travaill�</h3>
<p class="details">ici on met les taches de la last fiche temps</p>

<p class="message">votre fiche temps est � jour</p>
