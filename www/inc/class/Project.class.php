<?php
/**
 * User: Thomas
 * Date: 12/03/11
 * Time: 21:02
 */
 
 class Project extends SimpleContentManager {

    const COLLECTION = 4;
    const DB_COLLECTION_PROJECT_USER = 'projectUser';
     
    public function __construct(){
        $this->_collection = self::COLLECTION;
        parent::__construct();
    }

    public function get($object_id, $withRelation = false){
        $data = parent::get($object_id, $withRelation);
        if($withRelation) {
            $data->jalon = Base::Load(CLASS_JALON)->findBy('projet', $object_id, true);
            $data->tache = Base::Load(CLASS_TACHE)->findBy('projet', $object_id, true);
            $data->membre = $this->getMember($object_id);
        }
        return $data;
    }

    public function addMember($projectId, $memberID){
        $bdd = Base::Load(CLASS_BDD)->_connexion->selectCollection(self::DB_COLLECTION_PROJECT_USER);
        if($bdd->insert(array('projectID' => $projectId, 'member' => $memberID)))
            return true;
        else
            return false;
    }

    public function getMember($projectId){
        $bdd = Base::Load(CLASS_BDD)->_connexion->selectCollection(self::DB_COLLECTION_PROJECT_USER);
        $tmp = $bdd->find(array('projectID'=>$projectId));
        foreach($tmp as $d){
            $data[] = Base::Load(CLASS_USER)->get($d['member'], true);
        }
        if(isset($data))
            return (object)$data;
        else
            return false;
    }

    public function removeMember($projectId, $memberID){
        $bdd = Base::Load(CLASS_BDD)->_connexion->selectCollection(self::DB_COLLECTION_PROJECT_USER);
        $bdd->remove(array('projectID' => $projectId, 'member' => $memberID));
    }


}
