<?php

class BlogController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function showAction($id)
    {
        $this->view->id = $id;
    }

}

