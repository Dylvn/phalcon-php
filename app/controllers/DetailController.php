<?php

class DetailController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->hello = 'BONJOUR PETIT CHENAPAN';
    }

    public function showAction($id)
    {
        $this->view->id = $id;
    }

}

