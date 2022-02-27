<?php
class Front_About extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'About';
    }

    public function index()
    {
        $this->render_front('front/about', $this->data);
    }
}