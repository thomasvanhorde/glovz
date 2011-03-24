<?php
	
	/**
	 *	Contrôleur des projets
	 *
	 *	@author Fabien Nouaillat
	 *	@version 1.1
	 */
	class project_controller {
		
		// Attributs de la classe
		private $_view,
				$_projectClass,
				$_milestoneClass,
				$_taskClass,
				$_userClass,
                $_listIdMembres;
		
		/**
		 *	Constructeur :
		 		- Récupération de la bonne instance de Smarty
		 		- Déclaration du dossier contenant les vues de ce contrôleur
		 		- Récupération des classes MongoDB nécessaires
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.1
		 *	@see: CLASS_COMPONENT
		 *	@see: CLASS_PROJECT
		 *	@see: CLASS_JALON
		 *	@see: CLASS_TACHE
		 *	@see: CLASS_USER
		 */
		public function __construct() {
			$this->_view			= Base::Load(CLASS_COMPONENT)->_view;
			$this->_projectClass	= Base::Load(CLASS_PROJECT);
			$this->_milestoneClass	= Base::Load(CLASS_JALON);
			$this->_taskClass		= Base::Load(CLASS_TACHE);
			$this->_userClass		= Base::Load(CLASS_USER);

            if ($this->_userClass->isConnect()) {
                $this->_userInfo = $this->_userClass->isConnect();
            }
        }
		
		/**
		 *	Choix de la vue à afficher selon l'URL
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function defaut() {
            $this->_view->assign('isDT',$this->_userClass->isDT());
            
			// Si l'URL contient un paramètre (l'id du projet choisi), on redirige vers le détail de ce projet
			if (isset($_GET['param'][0])) {
				$current_project = $this->_projectClass->get($_GET['param'][0], true);
				$allUsers = $this->_userClass->getAll();

                $param = array(
                  'field' => array(
                      'projet' => array(
                          'value' => $_GET['param'][0],
                          'hidden' => true
                      ),
                      'utilisateur' => array(
                          'value' => $_SESSION['user']['uid'],
                          'hidden' => true
                      ),
                      'cloture' => array(
                          'hidden' => true
                      )
                  )
                );

                $this->_view->assign('formParam', $param);
                $this->_milestoneClass->addForm('formNewJalon', 'MilestoneData');
                
                $this->_view->assign('formParam', $param);
                $this->_taskClass->addForm('formNewTache', 'TaskData');

				// Chargement du formulaire des jalons
				$this->_milestoneClass->addForm('formNewJalon', 'MilestoneData');
				$this->_taskClass->addForm('formNewTache', 'TaskData');
                
				$this->_view->assign('allUsers', $allUsers);

                echo '<pre>';
                var_dump($current_project);
                exit();
				$this->_view->assign('project', $current_project);

                if(is_object($current_project->membre)){
                    foreach ($current_project->membre as $key) {
                        $this->_listIdMembres[] = $key->_id;
                    }
                }

				$this->_view->assign('listIdMembres', $this->_listIdMembres);
				
				$this->_view->addBlock('allUsersContent','list_user.tpl');
				$this->_view->addBlock('content','detailled_project.tpl');
			}

			// Sinon on affiche la liste de tous les projets
			else {
                if($this->_userClass->isDT())
				    $allProjects = $this->_projectClass->getAll();
                else
                    $allProjects = $this->_userClass->getProject($this->_userInfo['uid']);

				$this->_view->assign('projects', $allProjects);
				$this->_view->addBlock('content','defaut.tpl');
			}
		}


        public function pdf(){
            $this->_view->assign('isDT',$this->_userClass->isDT());

			// Si l'URL contient un paramètre (l'id du projet choisi), on redirige vers le détail de ce projet
			if (isset($_GET['param'][0])) {
				$current_project = $this->_projectClass->get($_GET['param'][0], true);
				$allUsers = $this->_userClass->getAll();

				$this->_view->assign('allUsers', $allUsers);
				$this->_view->assign('project', $current_project);

                if(is_array($current_project->membre)){
                    foreach ($current_project->membre as $key) {
                        $this->_listIdMembres[] = $key->_id;
                    }
                }
				$this->_view->assign('listIdMembres', $this->_listIdMembres);

				$this->_view->addBlock('allUsersContent','list_user.tpl');
                Base::Load(CLASS_PDF)->simplePDF('pdf.tpl', 'Project-'.$current_project->nom.'-'.date('Y-m-d').'.pdf');
            }
        }
		
		
		// OPÉRATIONS SUR LES PROJETS
		
		/**
		 *	Création d'un nouveau projet
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function createProject() {
			$this->_projectClass->addForm('content', 'ProjectData');
		}
		
		/**
		 *	Modification d'un projet
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function editProject() {
			$this->_projectClass->editForm('content', $_GET['param'][0], 'ProjectData');
		}
		
		/**
		 *	Suppression d'un projet
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function deleteProject() {
			$this->_projectClass->remove($_GET['param'][0]);
			header('location: '.$_SERVER['REDIRECT_URL'].'../../');
		}
		
		/**
		 *	Enregistrement d'un projet
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function POST_ProjectData($data) {
			if (empty($data['id'])) { // Création
				$return = $this->_projectClass->save($data);
                $this->_projectClass->addMember($return['id'], $return['cdp']);
				header('location: '.Base::getUrl(3));
			}
			else { // Édition
				if ($this->_projectClass->update($data, $data['id']))
				header('location: '.Base::getUrl(3));
			}
			exit();
		}
		
		
		// OPÉRATIONS SUR LES JALONS
		
		/**
		 *	Création d'un nouveau jalon
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function createMilestone() {
			$this->_milestoneClass->addForm('content', 'MilestoneData');
		}
		
		/**
		 *	Modification d'un jalon
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function editMilestone() {
			$this->_milestoneClass->editForm('content', $_GET['param'][0], 'MilestoneData');
		}
		
		/**
		 *	Suppression d'un jalon
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function deleteMilestone() {
			if (isset($_GET['param'][0]) && isset($_GET['param'][1])) {
				$this->_milestoneClass->remove($_GET['param'][1]);
				header('location: '.$_SERVER['REDIRECT_URL'].'../../'.$_GET['param'][0].'/');
			}
		}
		
		/**
		 *	Enregistrement d'un jalon
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function POST_MilestoneData($data) {
			if (empty($data['id'])) { // Création
				$this->_milestoneClass->save($data);
				header('location: '.Base::getUrl(1));
			}
			else { // Édition
				if ($this->_milestoneClass->update($data, $data['id']))
				header('location: '.Base::getUrl(3));
			}
			exit();
		}
		
		
		// OPÉRATIONS SUR LES TÂCHES
		
		/**
		 *	Création d'une nouvelle tâche
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function createTask() {
			$this->_taskClass->addForm('content', 'TaskData');
		}
		
		/**
		 *	Modification d'une tâche
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function editTask() {
			$this->_taskClass->editForm('content', $_GET['param'][0], 'TaskData');
		}

		/**
		 *	Enregistrement d'une tâche
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function POST_TaskData($data) {
			if (empty($data['id'])) { // Création
				$this->_taskClass->save($data);
				header('location: '.Base::getUrl(3));
			}
			else { // Édition
				if ($this->_taskClass->update($data, $data['id']))
				header('location: '.Base::getUrl(3));
			}
			exit();
		}
		
		
		// OPÉRATIONS SUR LES MEMBRES
		
		/**
		 *	Liaison d'un membre à un projet
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function POST_addMember($data) {
			$this->_projectClass->addMember($data['projectID'], $data['member']);
			header('location: '.$_SERVER['REDIRECT_URL']);
			exit();
		}
		
		/**
		 *	Extirpation d'un membre à un projet
		 *
		 *	@author Thomas Van Horde
		 *	@version: 1.0
		 */
		public function removeMember() {
			if (isset($_GET['param'][0])) {
				$this->_projectClass->removeMember($_GET['param'][0], $_GET['param'][1]);
				header('location: '.$_SERVER['REDIRECT_URL'].'../../'.$_GET['param'][0].'/');
			}
		}
	}

/*
	Fin du fichier : project.controller.php
	Chemin du fichier : /www/controller/project/
*/