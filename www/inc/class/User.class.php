<?php
/**
 * User: Thomas
 * Date: 14/03/11
 * Time: 11:16
 */
 
class User extends SimpleContentManager {

    const COLLECTION = 3;

    public function __construct(){
        $this->_collection = self::COLLECTION;
        parent::__construct();
    }


    public function connect($mail, $password){
        $user = $this->findBy('mail', $mail);
        foreach($user as $id => $dataUser){
            if($password == $dataUser['pwd']){
                return $this->createSession($this->get($id,true));
            }
        }
        return false;
    }

    private function createSession($user){
        $this->disconnect();
        
        $data['uid'] = $user->_id;
        $data['mail'] = $user->mail;

        $data['role']['id'] = $user->role->_id;
        $data['role']['label'] = utf8_encode($user->role->label);
        $data['role']['initial'] = utf8_encode($user->role->initial);

        $data['groupe']['id'] = $user->groupe->_id;
        $data['groupe']['label'] = utf8_encode($user->groupe->label);
        $data['groupe']['initial'] = utf8_encode($user->groupe->initial);

        $_SESSION['user'] = $data;

        return true;
    }

    public function isConnect(){
        if(isset($_SESSION['user']))
            return true;
        else
            return false;
    }
    
    public function disconnect(){
        $_SESSION['user'] = null;
        unset($_SESSION['user']);
        return true;
    }

    
}
