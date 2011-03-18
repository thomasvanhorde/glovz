<?php
	/**
	 *	User: Fabien
	 *	Date: 18/03/11
	 *	Time: 22:57
	 */
	class Client extends SimpleContentManager {
	
		const COLLECTION = 5;
		
		public function __construct() {
			$this->_collection = self::COLLECTION;
			parent::__construct();
		}

	}
