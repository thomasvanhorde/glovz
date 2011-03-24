<?php
	/**
	 *	Contrôleur du rapport de statistiques
	 *
	 *	@author Jean-Baptiste Crestot
	 *	@version 1.0
	 */
	class report {
		// Attributs de la classe
		private $_view,
				$_report;

		/**
		 *	Constructeur :
		 		- Récupération de la bonne instance de Smarty
		 		- Déclaration du dossier contenant les vues de ce contrôleur
		 		- Récupération de la classe MongoDB nécessaire
		 *
		 *	@author Jean-Baptiste Crestot
		 *	@version 1.0
		 *	@see: CLASS_COMPONENT
		 *	@see: CLASS_REPORT
		 */
		public function __construct() {
			$this->_view = Base::Load(CLASS_COMPONENT)->_view;
			$this->_report = Base::Load(CLASS_REPORT);
		}

		/**
		 *	<méthode par défaut>
		 *
		 *	@author Jean-Baptiste Crestot
		 *	@version 1.0
		 */
		public function defaut() {
			return false;
		}
	}

/*
	Fin du fichier : report.class.php
	Chemin du fichier : /www/controller/report/
*/