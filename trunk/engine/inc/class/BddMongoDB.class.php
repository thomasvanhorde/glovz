<?php

class BddMongoDB{
    var $_connexion;
    function __construct(){
        $connexion = new mongo(MONGO_HOST);
        $this->_connexion = $connexion->selectDB(MONGO_BASE);
    }
}

?>