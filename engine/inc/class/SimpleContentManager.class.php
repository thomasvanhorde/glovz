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
        $this->_bdd = Base::Load(CLASS_BDD)->_connexion->selectCollection(CONTENT_MANAGER_COLLECTION);
        $this->_view = Base::Load('Component')->_view;
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
        $data['collection'] = (string)$this->_collection;
        return $this->_contentManager->save($data);
    }

    /***
     * @param  $param
     * @param  $value
     * @param bool $withRelation
     * @return object list
     */
    public function findBy($param, $value, $withRelation = false){
        $data = $this->_contentManager->find(array(
            $param => $value,
            "collection" => (string)$this->_collection,
        ));

        if($withRelation){
            if(is_object($data)){
                foreach($data as $i => $d){
                    foreach($d as $i2 => $d2){
                        if(strlen($d2) == strlen('4d76229711e18d9005000031') && $i2 != ATTRIBUTE_ID){
                            $data2[$i][$i2] = (object)$this->get($d2, false);
                        }
                        else {
                            $data2[$i][$i2] = $d2;
                        }

                    }
                }
                return $data2;
            }
            else
                return false;
        }
        else
            return $data;

    }

    public function editForm($blockName, $objectId, $action = false, $template = false){
        $data = $this->get($objectId, true);
        $this->_view->assign('data', $data);
        $this->_view->assign('id', $objectId);
        $this->addForm($blockName, $action, $template);
    }

    public function addForm($blockName, $action = false, $template = false){

        if(!$action)
            $action = 'defaut_add';

        $struct = $this->getStruct();
        $this->_view->assign('structure', $struct);

        $contentRef = array();
        foreach($struct->types as $types){
            foreach($types as $type){
                if(isset($type->contentRef) && !empty($type->contentRef)){
                    $ContentRefData = $this->_contentManager->getDataAll($type->contentRef);
                    $contentRef[(int)$type->contentRef] = $ContentRefData;
                }
            }
        }

        $this->_view->assign('contentRef', $contentRef);
        $this->_view->assign('action', $action);

        if(!$template)
            $this->_view->addBlock($blockName, 'contentManagerForm.tpl', 'inc/contentManager/');
        else
            $this->_view->addBlock($blockName, $template);

    }

}

