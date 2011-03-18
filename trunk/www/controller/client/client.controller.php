<?php

class client_controller {

    public function __construct() {
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
        $this->_clientClass = Base::Load(CLASS_CLIENT);
    }
	
	# Méthode appelée par défaut
    public function defaut() {
    	$allClients = $this->_clientClass->getAll();
    	$this->_view->assign('clients', $allClients);
    	$this->_view->addBlock('content','defaut.tpl');
    }
    
    public function create() {
        $this->_clientClass->addForm('content', 'ClientData');
    }

    # Traitement du formulaires
    public function POST_ClientData($data) {
    	if (empty($data['id'])) {
            $this->_clientClass->save($data);
            header('location: '.$_SERVER['REDIRECT_URL']);
        }
        exit();
    }
}
