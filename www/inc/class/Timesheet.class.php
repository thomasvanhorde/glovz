<?php
/**
 * User: jb crestot
 * Date: 22/03/11
 * Time: 20:42
 */

 class Timesheet extends SimpleContentManager {

     const COLLECTION = 6;

     public function __construct(){
         $this->_collection = self::COLLECTION;
         parent::__construct();
     }


 }


 