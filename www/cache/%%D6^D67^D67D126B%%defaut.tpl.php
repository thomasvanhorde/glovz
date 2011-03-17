<?php /* Smarty version 2.6.26, created on 2011-03-17 17:19:57
         compiled from controller/dashboard/view/defaut.tpl */ ?>
<h1>Dashboard</h1>

<p>J-n avant prochain jalon -> lien vers jalons<br />

 - c'est un overview, il faut donc avoir un minimum d'info sur tout, propositions :<br />
mes projets en cours?<br />
mes fiches de temps a jour?<br />
les dernières tâches sur lequelles j'ai travaillé</p>

<h3>Votre prochain jalon est le <?php echo $this->_tpl_vars['jalonDate']; ?>
</h3>
<p class="details">
    Cette date concerne :<br />
<?php echo $this->_tpl_vars['jalonDesc']; ?>
<br />
Il s'agit du projet <?php echo $this->_tpl_vars['jalonProjetNom']; ?>

</p>

<h3>Vos projets en cours</h3>
<p class="details"></p>

<h3>Les dernières tâches sur lesquelles vous avez travaillé</h3>
<p class="details">ici on met les taches de la last fiche temps</p>

<p class="message">votre fiche temps est à jour</p>