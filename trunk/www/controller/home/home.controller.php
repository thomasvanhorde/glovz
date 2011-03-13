<?php

class home_controller {
    public function __construct() {
        $this->_view = Base::Load('Component')->_view;
    }

    public function defaut() {

        $this->_view->addBlock('content','content.tpl');


        /** Exemple */
        $data = Base::Load(CLASS_PROJECT)->get('4d76229711e18d9005000031',true);
        $this->_view->assign('foo', $data);
        /*  {$foo|var_dump} */
    }
}