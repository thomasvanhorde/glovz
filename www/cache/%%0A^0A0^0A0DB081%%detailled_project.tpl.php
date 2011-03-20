<?php /* Smarty version 2.6.26, created on 2011-03-20 19:29:25
         compiled from controller/project/view/detailled_project.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'controller/project/view/detailled_project.tpl', 5, false),array('modifier', 'utf8_decode', 'controller/project/view/detailled_project.tpl', 36, false),array('modifier', 'truncate', 'controller/project/view/detailled_project.tpl', 36, false),)), $this); ?>
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
	<li>URL du serveur de développement : <a href="<?php echo $this->_tpl_vars['project']->url_dev; ?>
"><?php echo $this->_tpl_vars['project']->url_dev; ?>
</a></li>
	<li>URL du serveur de production : <a href="<?php echo $this->_tpl_vars['project']->url_prod; ?>
"><?php echo $this->_tpl_vars['project']->url_prod; ?>
</a></li>
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
<h3>-- Jalons --</h3>
<a class="btnNouveau" href="create-milestone/"><input type="button" value="Créer un nouveau jalon" /></a>
<?php if (! empty ( $this->_tpl_vars['project']->jalon )): ?>
	<table>
		<thead>
			<tr>
				<th>Label</th>
				<th>Description</th>
				<th>Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php $_from = $this->_tpl_vars['project']->jalon; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['jalon']):
?>
	            <tr>
	                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['jalon']['label'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 15) : smarty_modifier_truncate($_tmp, 15)); ?>
</td>
	                <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['jalon']['description'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</td>
	                <td><?php echo $this->_tpl_vars['jalon']['date']; ?>
</td>
	                <td>
	                	<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
project/edit-milestone/<?php echo $this->_tpl_vars['jalon']['_id']; ?>
/">Modifier</a> |
						<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
project/delete-milestone/<?php echo $this->_tpl_vars['project']->_id; ?>
/<?php echo $this->_tpl_vars['jalon']['_id']; ?>
/">Supprimer</a>
	                </td>
	            </tr>
	        <?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>
<?php endif; ?>
<br />

<!-- Tâches du projet -->
<h3>-- Tâches --</h3>
<a class="btnNouveau" href="create-task/"><input type="button" value="Créer une nouvelle tâche" /></a>
<?php if (! empty ( $this->_tpl_vars['project']->tache )): ?>
    <table>
        <thead>
            <tr>
                <th>Label</th>
                <th>Description</th>
                <th>Personne concernée</th>
                <th>Durée (h)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $_from = $this->_tpl_vars['project']->tache; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['taskType'] => $this->_tpl_vars['task']):
?>
            <tr>
                <th colspan="10">
                    <?php if ($this->_tpl_vars['taskType'] == 0): ?>Maquette<?php endif; ?>
                    <?php if ($this->_tpl_vars['taskType'] == 1): ?>Intégration<?php endif; ?>
                    <?php if ($this->_tpl_vars['taskType'] == 2): ?>Développement<?php endif; ?>
                    <?php if ($this->_tpl_vars['taskType'] == 3): ?>Test<?php endif; ?>
                </th>
            </tr>
            <?php $_from = $this->_tpl_vars['task']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tache']):
?>
                <tr>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['tache']['label'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
</td>
                    <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tache']['description'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</td>
                    <td><?php echo $this->_tpl_vars['tache']['utilisateur']->nom; ?>
 <?php echo $this->_tpl_vars['tache']['utilisateur']->prenom; ?>
</td>
                    <td><?php echo $this->_tpl_vars['tache']['duree']; ?>
</td>
                    <td>
                        <a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
project/edit-task/<?php echo $this->_tpl_vars['tache']['_id']; ?>
/">Modifier</a> |
                        <a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
project/delete-task/<?php echo $this->_tpl_vars['project']->_id; ?>
/<?php echo $this->_tpl_vars['tache']['_id']; ?>
/">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        <?php endforeach; endif; unset($_from); ?>
        </tbody>
    </table>
<?php endif; ?>
<br />

<!-- Membres du projet -->
<h3><?php echo $this->_tpl_vars['allUsersContent']; ?>
</h3>
<table>
	<thead>
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
            <th>Fonction</th>
            <th>Action</th>
		</tr>
	</thead>
	<tbody>
    <?php if (! empty ( $this->_tpl_vars['project']->membre )): ?>
        <?php $_from = $this->_tpl_vars['project']->membre; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['membre']):
?>
            <tr>
                <td><?php echo $this->_tpl_vars['membre']->nom; ?>
</td>
                <td><?php echo $this->_tpl_vars['membre']->prenom; ?>
</td>
                <td><?php echo $this->_tpl_vars['membre']->groupe->label; ?>
</td>
                <td><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
project/remove-member/<?php echo $this->_tpl_vars['project']->_id; ?>
/<?php echo $this->_tpl_vars['membre']->_id; ?>
/">Supprimer</a></td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
	</tbody>
</table>