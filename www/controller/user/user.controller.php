<?php

class user_controller {
    public function  __construct() {
        $this->_view = Base::Load('Component')->_view;
        $this->_userClass = Base::Load(CLASS_USER);
    }

    public function defaut() {
    }

    public function members(){
        $allUser = $this->_userClass->getAll();
        $this->_view->assign('members', $allUser);
        $this->_view->addBlock('content','members.tpl');
    }

    public function myProfil() {
        $data = $this->_userClass->get($_SESSION['user']['uid'], true);
        $this->_view->assign('data', $data);
        $this->_view->addBlock('content','myprofil.tpl');
    }

    public function disconnect() {
        if($this->_userClass->disconnect())
            header('location: '.SYS_FOLDER);
    }

    public function connect() {
        $this->_view->addBlock('content','connect.tpl');
    }

    public function POST_connect($data){
        if($this->_userClass->connect($data['user_email'], $data['user_password']))
            header('location: '.$_SERVER['REDIRECT_URL'].'../');
        else {
            $this->_view->assign('erreur', true);
            $this->connect();
        }
    }
}
