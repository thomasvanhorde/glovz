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
}

