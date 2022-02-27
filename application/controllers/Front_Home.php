<?php
class Front_Home extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Home';
    }

    public function index()
    {
        
        
        $this->render_front('front/index', $this->data);
    }
}