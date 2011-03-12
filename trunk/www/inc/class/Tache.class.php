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
    }
}

