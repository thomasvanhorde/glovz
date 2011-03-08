<?php

define('CONTENT_MANAGER_COLLECTION','ContentManager');

include ENGINE_URL.FOLDER_CLASS.'ContentManager/ContentType.class.php';
include ENGINE_URL.FOLDER_CLASS.'ContentManager/ContentStruct.class.php';

class ContentManager {

    var $_type;
    var $_struct;

    function __construct(){
       $this->_type = new ContentType();
       $this->_struct = new ContentStruct();
       $this->_BBD = Base::Load(CLASS_BDD)->_connexion;
       $this->_collection = $this->_BBD->selectCollection(CONTENT_MANAGER_COLLECTION);
    }

    /***
     * @return 
     */
    function getType(){
        return $this->_type->get();
    }

    /***
     * @param bool $structID
     * @return 
     */
    function getStruct($structID = false){
        $structures =  $this->_struct->get();
        if($structID)
            $structures = $structures[$structID];
        return $structures;
    }

    /***
     * @param bool $structID
     * @return 
     */
    function getStructAll($structID = false){
        $structures =  $this->_struct->getAll();
        if($structID)
            $structures = $structures[$structID];
        return $structures;
    }

    /***
     * @param  $id
     * @return string
     */
    function getCollectioName($id){
        return 'ContentManager_'.$id;
    }

    /***
     * @param bool $collection
     * @return array
     */
    function getDataAll($collection = false){
        $ContentManager = $this->_BBD->selectCollection(CONTENT_MANAGER_COLLECTION);

        if($collection)
            $dataCM = $ContentManager->find(array('collection' => $collection));
        else
            $dataCM = $ContentManager->find();

        $data = array();
        foreach($dataCM as $a){
            $data[(string)$a['_id']] = $a;
        }

        return $data;
    }

    function save($data, $id = false){
        if(!$id){ // new
            if($this->insert($data))
                return true;
        }
        else {// update
            if($this->update($data, $id))
                return true;
        }
        return false;
    }

    /***
     * @param  $data
     * @return bool
     */
    private function insert($data){
        $data['date_create'] = time();
        if($this->_collection->insert($data))
            return true;
        else
            return false;
    }


    /***
     * @param  $data
     * @param  $id
     * @return bool
     */
    private function update($data, $id){
        $data['date_update'] = time();
        $data['date_create'] = (int)$data['date_create'];
        $theObjId = new MongoId($id);
        unset($data['id']);
        // $this->_collection->update(array("_id"=>$theObjId), array('$set' => $data));
        if($this->_collection->update(array("_id"=>$theObjId), $data))
            return true;
        else
            return false;
    }

    function remove($id){
        $theObjId = new MongoId($id);
        if($this->_collection->remove(array('_id'=>$theObjId), true))
            return true;
        else
            return false;
    }

    /***
     * @param  $id
     * @return 
     */
    function findOne($id){
        $ContentManager = $this->_BBD->selectCollection(CONTENT_MANAGER_COLLECTION);
        $theObjId = new MongoId($id);

        foreach($ContentManager->findOne(array("_id"=>$theObjId)) as $i => $d){
            $content[$i] = utf8_decode($d);
        }

        return $content;
    }

    function find(){
        $ContentManager = $this->_BBD->selectCollection(CONTENT_MANAGER_COLLECTION);
        $dataCM = $ContentManager->find();

        return $dataCM;
    }

}


?>