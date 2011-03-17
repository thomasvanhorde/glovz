<?php

class project_controller {

    public  function __construct() {
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
        $this->_projectClass = Base::Load(CLASS_PROJECT);
        $this->_userClass = Base::Load(CLASS_USER);
    }
	
	# Méthode appelée par défaut
    public function defaut() {
        # Si l'url contient un paramètre (l'id du projet choisi) on redirige vers le détail de ce projet
        if (isset($_GET['param'][0])) {
        	$current_project = $this->_projectClass->get($_GET['param'][0], true);

            $allUsers = $this->_userClass->getAll();
            $this->_view->assign('allUsers', $allUsers);
            $this->_view->assign('project', $current_project);

            $this->_view->addBlock('allUsersContent','list_user.tpl');
        	$this->_view->addBlock('content','detailled_project.tpl');
        }
        # Sinon on affiche la liste de tous les projets
        else {
        	$allProjects = $this->_projectClass->getAll();
        	$this->_view->assign('projects', $allProjects);
        	$this->_view->addBlock('content','defaut.tpl');
        }
    }

    public function removeMember(){
        if (isset($_GET['param'][0])) {
            $this->_projectClass->removeMember($_GET['param'][0], $_GET['param'][1]);
            header('location: '.$_SERVER['REDIRECT_URL'].'../../'.$_GET['param'][0].'/');
        }
    }
	
	# Insertion des formulaires de création (projet|jalon|tâche)
    public function create() {
        $this->_projectClass->addForm('content', 'ProjectData');
    /*  Thomas : Pas possible ça
        $this->_projectClass->addForm('content', 'MilestoneData');
        $this->_projectClass->addForm('content', 'TaskData');*/
    }

    
    # Édition des formulaires précédemment créés
    public function editProject() {
        $this->_projectClass->editForm('content', $_GET['param'][0], 'ProjectData');
    }
    
    public function editMilestone() {
        $this->_projectClass->editForm('content', $_GET['param'][0], 'MilestoneData');
    }
    
    public function editTask() {
        $this->_projectClass->editForm('content', $_GET['param'][0], 'TaskData');
    }
    
    # Traitement des formulaires
    public function POST_ProjectData($data) {
    	if (empty($data['id'])) { # Nouveau
            $this->_projectClass->save($data);
            header('location: '.$_SERVER['REDIRECT_URL']);
        }
        else { # Édition
            if ($this->_projectClass->update($data, $data['id']))
                header('location: '.$_SERVER['REDIRECT_URL']);
        }
        exit();
    }
    
   	public function POST_MilestoneData($data) {
    	if (empty($data['id'])) { # Nouveau
            $this->_projectClass->save($data);
            header('location: '.$_SERVER['REDIRECT_URL']);
        }
        else { # Édition
            if ($this->_projectClass->update($data, $data['id']))
                header('location: '.$_SERVER['REDIRECT_URL']);
        }
        exit();
    }
    
    public function POST_TaskData($data) {
    	if (empty($data['id'])) { # Nouveau
            $this->_projectClass->save($data);
            header('location: '.$_SERVER['REDIRECT_URL']);
        }
        else { # Édition
            if ($this->_projectClass->update($data, $data['id']))
                header('location: '.$_SERVER['REDIRECT_URL']);
        }
        exit();
    }

    // Lier un membre à un projet
    //todo: envoi de mail
    //todo: verifier que le membre n'es pas deja associé au projet
    public function POST_addMember($data){
        $this->_projectClass->addMember($data['projectID'], $data['member']);
        header('location: '.$_SERVER['REDIRECT_URL']);
        exit();
    }

}
