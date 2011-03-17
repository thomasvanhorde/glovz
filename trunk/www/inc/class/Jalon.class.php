<?php
/**
 * User: Thomas
 * Date: 12/03/11
 * Time: 21:02
 */
 
class Jalon extends SimpleContentManager {

    const COLLECTION = 7;

    public function __construct(){
        $this->_collection = self::COLLECTION;
        parent::__construct();
    }

    public function last(){

        // récupérer les id des projets auquel appartient l'utilisateur

        // récupérer le dernier jalons parmis ces projets
        $tmp = $this->_bdd
                ->find(array("collection" => (string)$this->_collection))
                ->sort( array('date' => -1 ) )
                ->limit(1);

        foreach($tmp as $i => $data){}

        return (object)$data;
    }
}

