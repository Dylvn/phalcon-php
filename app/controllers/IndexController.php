<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->hello = 'BONJOUR PETIT CHENAPAN';
    }

}

