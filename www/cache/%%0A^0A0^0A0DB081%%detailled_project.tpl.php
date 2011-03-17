<?php /* Smarty version 2.6.26, created on 2011-03-17 18:03:29
         compiled from controller/project/view/detailled_project.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'controller/project/view/detailled_project.tpl', 5, false),array('modifier', 'print_r', 'controller/project/view/detailled_project.tpl', 94, false),)), $this); ?>
<h2><?php echo $this->_tpl_vars['project']->nom; ?>
</h2>

<!-- Informations du projet -->
<ul>
	<li>Date de création : <?php echo ((is_array($_tmp=$this->_tpl_vars['project']->date_create)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
</li>
	<li>Chef de projet : <?php echo $this->_tpl_vars['project']->cdp->prenom; ?>
 <?php echo $this->_tpl_vars['project']->cdp->nom; ?>
 &lt;<?php echo $this->_tpl_vars['project']->cdp->mail; ?>
&gt;</li>
	<li>Client : <?php echo $this->_tpl_vars['project']->client->prenom; ?>
 <?php echo $this->_tpl_vars['project']->client->nom; ?>
 &lt;<?php echo $this->_tpl_vars['project']->client->mail; ?>
&gt;</li>
	<li>URL du serveur de développement : <?php echo $this->_tpl_vars['project']->url_dev; ?>
</li>
	<li>URL du serveur de production : <?php echo $this->_tpl_vars['project']->url_prod; ?>
</li>
	<li>Durée estimée : <?php echo $this->_tpl_vars['project']->duree; ?>
 heures</li>
	<li>Clôturé :
		<?php if ($this->_tpl_vars['project']->cloture == 'true'): ?>
        	Oui
    	<?php else: ?>
    		Non
   		<?php endif; ?>
   	</li>
</ul>

<!-- Jalons du projet -->
<?php if (! empty ( $this->_tpl_vars['project']->jalon )): ?>
	<table>
		<caption>Jalons</caption>
		<thead>
			<tr>
				<th>Label</th>
				<th>Description</th>
				<th>Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $_from = $this->_tpl_vars['project']->jalon; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['jalon']):
?>
	            <tr>
	                <td><?php echo $this->_tpl_vars['jalon']['label']; ?>
</td>
	                <td><?php echo $this->_tpl_vars['jalon']['description']; ?>
</td>
	                <td><?php echo $this->_tpl_vars['jalon']['date']; ?>
</td>
	                <td><a href="edit/<?php echo $this->_tpl_vars['jalon']['_id']; ?>
">Modifier</a></td>	<!-- surcharger le parent::_collection avec le bon id de collection -->
	            </tr>
	        <?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>
<?php else: ?>
	<p>Pas de jalons.</p>
<?php endif; ?>
<br />

<!-- Tâches du projet -->
<?php if (! empty ( $this->_tpl_vars['project']->tache )): ?>
	<table>
		<caption>Tâches</caption>
		<thead>
			<tr>
				<th>Label</th>
				<th>Description</th>
				<th>Personne concernée</th>
				<th>Durée (h)</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $_from = $this->_tpl_vars['project']->tache; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tache']):
?>
	            <tr>
	                <td><?php echo $this->_tpl_vars['tache']['label']; ?>
</td>
	                <td><?php echo $this->_tpl_vars['tache']['description']; ?>
</td>
	                <td><?php echo $this->_tpl_vars['tache']['utilisateur']->nom; ?>
 <?php echo $this->_tpl_vars['tache']['utilisateur']->prenom; ?>
</td>
	                <td><?php echo $this->_tpl_vars['tache']['duree']; ?>
</td>
	                <td><a href="edit/<?php echo $this->_tpl_vars['tache']['_id']; ?>
">Modifier</a></td>
	            </tr>
	        <?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>
<?php else: ?>
	<p>Pas de tâches.</p>
<?php endif; ?>
<br />

<!-- Membres du projet -->
<table>
	<caption>Membres | <a href="member/">Ajouter un membre</a></caption>
	<thead>
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Fonction</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<br />


<pre><?php echo ((is_array($_tmp=$this->_tpl_vars['project'])) ? $this->_run_mod_handler('print_r', true, $_tmp) : print_r($_tmp)); ?>
</pre>