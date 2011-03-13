<?php
/**
 * User: Thomas
 * Date: 12/03/11
 * Time: 22:27
 */


abstract class SimpleContentManager {

    protected $_collection;
    protected $_contentManager;

    public function __construct(){
        $this->_contentManager = Base::Load(CLASS_CONTENT_MANAGER);
    }

    /***
     * @return object structure
     */
    public function getStruct(){
        return $this->_contentManager->getStruct($this->_collection);
    }

    /***
     * @return object data
     */
    public function getAll(){
        return $this->_contentManager->getDataAll($this->_collection);
    }

    /***
     * @param  $object_id
     * @param bool $withRelation
     * @return object data with object relation
     */
    public function get($object_id, $withRelation = false){
        if($withRelation)
            return $this->_contentManager->findOneWithChild($object_id);
        else
            return $this->_contentManager->findOne($object_id);
    }

    /***
     * @param  $object_id
     * @return bool
     */
    public function remove($object_id){
        return $this->_contentManager->remove($object_id);
    }

    /***
     * @param  $data
     * @param  $object_id
     * @return bool
     */
    public function update($data, $object_id){
        return $this->_contentManager->save($data, $object_id);
    }

    /***
     * @param  $data
     * @return bool
     */
    public function save($data){
        $data['collection'] = self::COLLECTION;
        return $this->_contentManager->save($data);
    }

    /***
     * @param  $projectID
     * @return object list
     */
    public function findByProject($projectID){
        return $this->_contentManager->find(array(
            "projet" => $projectID,
            "collection" => (string)$this->_collection,
        ));
    }

}

