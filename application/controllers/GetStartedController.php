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
            if(false === mail('dustinmoorman@gmail.com',"From QCMST", "This is a test from QCMST", "From: sales@quickcmsthemes.com \r\n")){
             die('MAIL SEND FAIL');
            }
        }
    }


}

