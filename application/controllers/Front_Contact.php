<?php
class Front_Contact extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Contact';
    }

    public function index()
    {
        $this->render_front('front/contact', $this->data);
    }
}