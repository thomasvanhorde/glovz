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

        $this->_userClass = Base::Load(CLASS_USER);

        if ($this->_userClass->isConnect()) {
            $this->_userInfo = $this->_userClass->isConnect();
        }
        
    }

    public function myLast(){
        $projectList = $this->_userClass->getProject($this->_userInfo['uid']);
        foreach($projectList as $project){ $projectID[] = $project->_id;}
        $tmp = $this->_bdd
                ->find(array("collection" => (string)$this->_collection, 'projet' => array('$in' => $projectID)))
                ->sort( array('date' => -1 ) )
                ->limit(1);

        foreach($tmp as $i => $data){}
        return (object)$data;
    }

    public function myFirst(){
        $projectList = $this->_userClass->getProject($this->_userInfo['uid']);
        foreach($projectList as $project){ $projectID[] = $project->_id;}
        $tmp = $this->_bdd
                ->find(array("collection" => (string)$this->_collection, 'projet' => array('$in' => $projectID)))
                ->sort( array('date' => 1 ) )
                ->limit(1);

        foreach($tmp as $i => $data){
            $data['projet'] = (object)Base::Load(CLASS_PROJECT)->get($data['projet']);
        }
        return (object)$data;
    }


}

