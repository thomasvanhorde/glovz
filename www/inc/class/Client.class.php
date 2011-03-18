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
		
		public function last() {
			$tmp = $this->_bdd
						->find(array("collection" => (string)$this->_collection))
						->sort(array('date' => -1))
						->limit(1);
			
			foreach($tmp as $i => $data){}
			
			return (object)$data;
		}
	}
