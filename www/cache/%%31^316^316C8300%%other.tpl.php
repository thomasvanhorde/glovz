<?php /* Smarty version 2.6.26, created on 2011-03-20 22:37:12
         compiled from view/menu/other.tpl */ ?>
<div id="barre">

    <!-- Titre -->
    <h1><img src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
themes/glovz/img/titre.png" alt="glovz - Suivi de projets" /></h1>
    <!-- Menu -->
    <ul id="menu">
        <li><a <?php if ($this->_tpl_vars['myURL']['0'] == 'dashboard'): ?>class="actif"<?php endif; ?> href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
dashboard/">Tableau de bord</a></li>

        <li><a <?php if ($this->_tpl_vars['myURL']['0'] == 'project'): ?>class="actif"<?php endif; ?>href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
project/">Projets</a></li>

        <?php if ($this->_tpl_vars['isDT']): ?>
            <li><a <?php if ($this->_tpl_vars['myURL']['0'] == 'client'): ?>class="actif"<?php endif; ?>href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
client/">Clients</a></li>
        <?php endif; ?>
        
        <?php if ($this->_tpl_vars['isDT']): ?>
            <li><a <?php if ($this->_tpl_vars['myURL']['0'] == 'members'): ?>class="actif"<?php endif; ?>href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
members/">Membres</a></li>
        <?php endif; ?>

        <li><a <?php if ($this->_tpl_vars['myURL']['0'] == 'profil'): ?>class="actif"<?php endif; ?>href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
profil/">Profil</a></li>

        
    </ul>
 
    <a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
disconnect/" class="bouton">Déconnexion</a>
</div>
 