<?php

class GetStartedController extends Zend_Controller_Action
{
    protected $_mail_headers = '';

    public function init()
    {

        $headers = "From: sales@quickcmsthemes.com\r\n";
        $headers .= "Reply-To: sales@quickcmsthemes.com\r\n";
        $headers .= "Return-Path: sales@quickcmsthemes.com\r\n";

        $this->_mail_headers = $headers;
    }

    public function indexAction()
    {

    }

    public function thanksAction()
    {
        if($this->_request->getParams()){
            if(false === mail('dustinmoorman@gmail.com',"From QCMST", "This is a test from QCMST", $this->_mail_headers)){
             die('MAIL SEND FAIL');
            }
        }
    }


}

