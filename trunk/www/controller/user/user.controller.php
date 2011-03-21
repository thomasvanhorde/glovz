<?php

class user_controller {
    public function  __construct() {
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
        $this->_userClass = Base::Load(CLASS_USER);
    }

    public function defaut() {}

    public function members(){
        $allUser = $this->_userClass->getAll();
        $this->_view->assign('members', $allUser);
        $this->_view->addBlock('content','members.tpl');
    }

    public function membersPDF(){
        $allUser = $this->_userClass->getAll();
        $this->_view->assign('members', $allUser);
        Base::Load(CLASS_PDF)->simplePDF('members.tpl', 'exemple.pdf');
    }

    public function edit(){
        $this->_userClass->editForm('content', $_GET['param'][0], 'MemberData');
    }

    public function delete(){
        if($this->_userClass->remove($_GET['param'][0]))
            header('location: '.$_SERVER['REDIRECT_URL'].'../../');
    }

    public function newMember(){
        $this->_userClass->addForm('content', 'MemberData');
    }

    public function myProfil() {
        if($this->_userClass->isConnect()) {

            $param = array(
              'field' => array(
                  'role' => array(
                      'hidden' => true
                  ),
                  'groupe' => array(
                      'hidden' => true
                  )
              )
            );
            $this->_view->assign('formParam', $param);
            $this->_userClass->editForm('content', $_SESSION['user']['uid'], 'MemberData');
        }
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

    public function POST_MemberData($data){
        if(empty($data['id'])){ // new
            if($this->_userClass->save($data)) {

                $contentMail = $this->_view->addBlock('content','mail_newMember.tpl');

                Base::Load(CLASS_EMAIL)->SimpleMailHTML(
                    'no-reply@glovz.com',
                    'GlovZ Team',
                    $data['mail'],
                    'register',
                    $contentMail);

                header('location: '.$_SERVER['REDIRECT_URL']);
            }
        }
        else {// update
            if($this->_userClass->update($data, $data['id']))
                header('location: '.$_SERVER['REDIRECT_URL']);
        }
        exit();
    }


    public function needConnect(){
        if($this->_userClass->isConnect())
            return true;
        else
            $this->notAllow('you should login');
        //  header('location: '.BASE_URL);
    }
    public function needDT(){
        if($this->needConnect()){
            if(!$this->_userClass->isDT())
                $this->notAllow('you should was DT');
        }
    }

    private function notAllow($message){
        $this->_view->assign('erreur', $message);
        Base::Load(CLASS_VUE)->addBlock('content','notAllow.tpl', 'controller/user/view/');
    }

    
}
