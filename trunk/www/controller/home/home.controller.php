<?php

class home_controller {
    public function __construct() {
        $this->_contentManager = Base::Load(CLASS_CONTENT_MANAGER);
    }

    public function defaut() {
        var_dump($this->_contentManager);
    }
}