<?php

	/**
	* 	Contrôleur des feuille de temps
	*
	* 	@author Jean-Baptiste Crestot
	* 	@version 1.0
	*/
	class timesheet_controller {

		// Attributs de la classe
		private $_view,
				$_userClass,
				$_projectClass,
				$_taskClass,
				$_timesheet;

		/**
		 *	Constructeur :
		 		- Récupération de la bonne instance de Smarty
		 		- Déclaration du dossier contenant les vues de ce contrôleur
		 		- Récupération des classes MongoDB nécessaires
		 *
		 *	@author Jean-Baptiste Crestot
		 *	@version 1.0
		 *	@see: CLASS_COMPONENT
		 *	@see: CLASS_USER
		 *	@see: CLASS_PROJECT
		 *	@see: CLASS_TIMESHEET
		 *	@see: CLASS_TACHE
		 */
		public function __construct() {
			$this->_view = Base::Load(CLASS_COMPONENT)->_view;
			$this->_userClass = Base::Load(CLASS_USER);
			$this->_projectClass = Base::Load(CLASS_PROJECT);
			$this->_timesheet = Base::Load(CLASS_TIMESHEET);
			$this->_taskClass = Base::Load(CLASS_TACHE);

			if ($this->_userClass->isConnect()) {
				$this->_userInfo = $this->_userClass->isConnect();
			}
		}

		/**
		 *	Envoi vers la vue de l'historique
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function history() {
			$myTask = $this->_taskClass->Valid();
			$this->_view->assign('MyDayTache', $myTask);
			$this->_view->addBlock('content', 'history.tpl');
		}

		/**
		 *	Affichage de la vue par défaut
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function defaut() {
			if (isset($_GET['param'][0])) {
				$this->viewEditTask($_GET['param'][0]);
			}
			else {
				$this->nonValid();
			}
		}

		/**
		 *	Affichage complet d'une tâche
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function viewEditTask($taskID) {
			$param = array(
				'field' => array(
					'valide' => array(
						'hidden' => true
					),
					'cloture' => array(
						'hidden' => true
					),
					'projet' => array(
						'hidden' => true
					),
					'utilisateur' => array(
						'hidden' => true
					),
				)
			);
			$this->_view->assign('formParam', $param);
			$this->_taskClass->editForm('content', $taskID, 'project[TaskData]');
		}

		/**
		 *	Vérification d'une fiche
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function nonValid() {
			$param = array(
				'field' => array(
					'valide' => array(
						'hidden' => true
					),
					'utilisateur' => array(
						'hidden' => true,
						'value' => $this->_userInfo['uid']
					)
				)
			);
			$this->_view->assign('formParam', $param);

			$semaine = date('W',strtotime(date('Y').'-'.date('m').'-'.date('d')));
			$this->_view->assign('semaine', $semaine);

			$myProject = $this->_userClass->getProject($this->_userInfo['uid']);
			$this->_view->assign('MyProject', $myProject);

			$myTask = $this->_taskClass->noValid();
			$this->_view->assign('MyDayTache', $myTask);
			$this->_view->addBlock('formCustomHour', 'formNewTache.tpl');
			$this->_timesheet->addForm('formNewTache_classic', 'newTache','myFormNewTask.tpl');
			$this->_view->addBlock('content', 'default.tpl');
		}

		/**
		 *	Formulaire d'ajout d'une nouvelle tâche
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function POST_newTache($data) {
			unset($data['inputSlider']);
			if($this->_taskClass->save($data))
				header('location: '.Base::getUrl(1));
			exit();
		}
	}

/*
	Fin du fichier : timesheet.controller.php
	Chemin du fichier : /www/controller/timesheet/
*/