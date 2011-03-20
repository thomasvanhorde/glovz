<?php
/**
 * User: Thomas
 * Date: 12/03/11
 * Time: 22:20
 */


 class Tache extends SimpleContentManager {

    const COLLECTION = 6;

    public function __construct(){
        $this->_collection = self::COLLECTION;
        parent::__construct();
        
        $this->_userClass = Base::Load(CLASS_USER);

        if ($this->_userClass->isConnect()) {
            $this->_userInfo = $this->_userClass->isConnect();
        }

    }

    public function myLast($limit = 1){
        if(isset($this->_userInfo['uid'])){

            $tmp = $this->_bdd
                    ->find(array("collection" => (string)$this->_collection, 'utilisateur' => $this->_userInfo['uid']))
                    ->sort( array('date' => -1 ) )
                    ->limit($limit);
            
            $return = array();
            foreach($tmp as $i => $data){
                $data['projet'] = (object)Base::Load(CLASS_PROJECT)->get($data['projet']);
                $data['utilisateur'] = (object)Base::Load(CLASS_USER)->get($data['utilisateur']);
                if($limit == 1)
                    $return = $data;
                else
                    $return[$i] = $data;
            }
            return (object)$return;

        } else return false;
    }
}

