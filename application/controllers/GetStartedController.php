<?php

class GetStartedController extends Zend_Controller_Action
{
    protected $_mail_headers = '';

    protected $_mail_to = '';

    protected $_mail_message = '';

    public function init()
    {
        $this->defineMailTo();
        $this->defineMailHeaders();
    }

    public function indexAction()
    {

    }

    public function thanksAction()
    {
        $post_data = $this->_request->getParams();

        $this->setMailMessage($post_data);

        if($post_data){
            if(false === mail(
                    $this->_mail_to,
                    "New QCMST Inquiry from " . $post_data['email'],
                    $this->_mail_message,
                    $this->_mail_headers
            )){

                error_log('MAIL SEND FAIL! Here was the contents: ' . $this->_mail_message);
            }
        }
    }

    private function defineMailTo(){
        $this->_mail_to = 'Dustin Moorman <dustinmoorman@gmail.com>, Frank Torres <frankjtorresjr@gmail.com>';
    }

    private function defineMailHeaders(){
        $headers = "From: sales@quickcmsthemes.com\r\n";
        $headers .= "Reply-To: sales@quickcmsthemes.com\r\n";
        $headers .= "Return-Path: sales@quickcmsthemes.com\r\n";

        $this->_mail_headers = $headers;
    }

    protected function setMailMessage($post_data){
        $this->_mail_message = 'At ' . date(DATE_RSS) . ' ' . $post_data['email'] . " made a new QCMST request!\r\n";
        $this->_mail_message .= "\r\n". $post_data['description'];

    }


}

