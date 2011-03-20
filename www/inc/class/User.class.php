<?php
/**
 * User: Thomas
 * Date: 14/03/11
 * Time: 11:16
 */
 
class User extends SimpleContentManager {

    const COLLECTION = 3;
    const DB_COLLECTION_PROJECT_USER = 'projectUser';

    public function __construct(){
        $this->_collection = self::COLLECTION;
        parent::__construct();
    }


    public function connect($mail, $password){
        $user = $this->findBy('mail', $mail);

        if(is_object($user)){
            foreach($user as $id => $dataUser){
                if($password == $dataUser['pwd']){
                    return $this->createSession($this->get($id,true));
                }
            }
        }
        return false;
    }
	
    private function createSession($user){
        $this->disconnect();
        
        $data['uid'] = $user->_id;
        $data['nom']	= utf8_encode($user->nom);
        $data['prenom']	= utf8_encode($user->prenom);
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
            return $_SESSION['user'];
        else
            return false;
    }
    
    public function disconnect(){
        $_SESSION['user'] = null;
        unset($_SESSION['user']);
        return true;
    }

    public function isDT(){
        $info = $this->isConnect();
        if($info['role']['initial'] == 'DT')
            return true;
        else
            return false;
    }

    public function getProject($memberID){
        $bdd = Base::Load(CLASS_BDD)->_connexion->selectCollection(self::DB_COLLECTION_PROJECT_USER);
        $tmp = $bdd->find(array('member'=>$memberID));
        foreach($tmp as $d){
            $data[] = Base::Load(CLASS_USER)->get($d['projectID'], true);
        }
        if(isset($data))
            return (object)$data;
        else
            return false;
    }

    
}
