<?php

class GetStartedController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {

    }

    public function thanksAction()
    {
        if($this->_request->getParams()){
            die(print_r($this->_request->getParams()));
        }
    }


}

