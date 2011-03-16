<?php
/**
 * User: Thomas
 * Date: 12/03/11
 * Time: 21:02
 */
 
 class Project extends SimpleContentManager {

    const COLLECTION = 4;

    public function __construct(){
        $this->_collection = self::COLLECTION;
        parent::__construct();
        Base::Load(CLASS_JALON)->last();
    }

    public function get($object_id, $withRelation = false){
        $data = parent::get($object_id, $withRelation);
        if($withRelation) {
            $data->jalon = Base::Load(CLASS_JALON)->findBy('projet', $object_id, true);
            $data->tache = Base::Load(CLASS_TACHE)->findBy('projet', $object_id, true);
        }
        return $data;
    }

}
