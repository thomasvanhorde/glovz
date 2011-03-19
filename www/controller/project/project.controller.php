<?php
	
	/**
	 *	Contrôleur des projets
	 *
	 *	@author Fabien Nouaillat
	 *	@version: 1.1
	 */
	class project_controller {
		
		// Attributs de la classe
		private $_view,
				$_projectClass,
				$_userClass;
		
		/**
		 *	Constructeur :
		 		- Récupération de la bonne instance de Smarty
		 		- Déclaration du dossier contenant les vues de ce contrôleur
		 		- Récupération des classes MongoDB nécessaires
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 *	@see: CLASS_COMPONENT
		 *	@see: CLASS_PROJECT
		 *	@see: CLASS_USER
		 */
		public function __construct() {
			$this->_view			= Base::Load(CLASS_COMPONENT)->_view;
			$this->_projectClass	= Base::Load(CLASS_PROJECT);
			$this->_userClass		= Base::Load(CLASS_USER);
		}
		
		/**
		 *	Choix de la vue à afficher selon l'URL
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 */
		public function defaut() {
			// Si l'URL contient un paramètre (l'id du projet choisi), on redirige vers le détail de ce projet
			if (isset($_GET['param'][0])) {
				$current_project = $this->_projectClass->get($_GET['param'][0], true);
				
				$allUsers = $this->_userClass->getAll();
				$this->_view->assign('allUsers', $allUsers);
				$this->_view->assign('project', $current_project);
				
				$this->_view->addBlock('allUsersContent','list_user.tpl');
				$this->_view->addBlock('content','detailled_project.tpl');
			}
			// Sinon on affiche la liste de tous les projets
			else {
				$allProjects = $this->_projectClass->getAll();
				$this->_view->assign('projects', $allProjects);
				$this->_view->addBlock('content','defaut.tpl');
			}
		}
		
		
		// OPÉRATIONS SUR LES PROJETS
		
		/**
		 *	Création d'un nouveau projet
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 */
		public function createProject() {
			$this->_projectClass->addForm('content', 'ProjectData');
		}
		
		/**
		 *	Modification d'un projet
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 */
		public function editProject() {
			$this->_projectClass->editForm('content', $_GET['param'][0], 'ProjectData');
		}
		
		/**
		 *	Enregistrement d'un projet
		 *
		 *	@author Thomas Van Horde
		 *	@version: 1.0
		 */
		public function POST_ProjectData($data) {
			if (empty($data['id'])) { // Création
				$this->_projectClass->save($data);
				header('location: '.$_SERVER['REDIRECT_URL']);
			}	
			else { // Édition
				if ($this->_projectClass->update($data, $data['id']))
				header('location: '.$_SERVER['REDIRECT_URL']);
			}
			exit();
		}
		
		
		// OPÉRATIONS SUR LES JALONS
		
		/**
		 *	Création d'un nouveau jalon
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 */
		public function createMilestone() {
			$this->_projectClass->addForm('content', 'MilestoneData');
		}
		
		/**
		 *	Modification d'un jalon
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 */
		public function editMilestone() {
			$this->_projectClass->editForm('content', $_GET['param'][0], 'MilestoneData');
		}
		
		/**
		 *	Suppression d'un jalon
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 */
		public function deleteMilestone() {
			if (isset($_GET['param'][0])) {
				$this->_projectClass->supprimerJalon($_GET['param'][0], $_GET['param'][1]);
				header('location: '.$_SERVER['REDIRECT_URL'].'../../'.$_GET['param'][0].'/');
			}
		}
		
		/**
		 *	Enregistrement d'un jalon
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 */
		public function POST_MilestoneData($data) {
			if (empty($data['id'])) { // Création
				$this->_projectClass->save($data);
				header('location: '.$_SERVER['REDIRECT_URL']);
			}
			else { // Édition
				if ($this->_projectClass->update($data, $data['id']))
				header('location: '.$_SERVER['REDIRECT_URL']);
			}
			exit();
		}
		
		
		// OPÉRATIONS SUR LES TÂCHES
		
		/**
		 *	Création d'une nouvelle tâche
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 */
		public function createTask() {
			$this->_projectClass->addForm('content', 'TaskData');
		}
		
		/**
		 *	Modification d'une tâche
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 */
		public function editTask() {
			$this->_projectClass->editForm('content', $_GET['param'][0], 'TaskData');
		}

		/**
		 *	Enregistrement d'une tâche
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 */
		public function POST_TaskData($data) {
			if (empty($data['id'])) { // Création
				$this->_projectClass->save($data);
				header('location: '.$_SERVER['REDIRECT_URL']);
			}
			else { // Édition
				if ($this->_projectClass->update($data, $data['id']))
				header('location: '.$_SERVER['REDIRECT_URL']);
			}
			exit();
		}
		
		
		// OPÉRATIONS SUR LES MEMBRES
		
		/**
		 *	Liaison d'un membre à un projet
		 *
		 *	@author Thomas Van Horde
		 *	@version: 1.0
		 */
		// TODO : envoi de mail & vérifier que le membre n'est pas déjà associé au projet
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
				$this->_projectClass->retirerMembre($_GET['param'][0], $_GET['param'][1]);
				header('location: '.$_SERVER['REDIRECT_URL'].'../../'.$_GET['param'][0].'/');
			}
		}
	}

/*
	Fin du fichier : project.controller.php
	Chemin du fichier : /www/controller/project/
*/