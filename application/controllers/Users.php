<?php
class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index()
    {
        $data["users"] = $this->users_model->get_users();
        $data["page_title"] = "List Of Users";

        $this->load->view('header', $data); 
        $this->load->view('users/index', $data);
        $this->load->view('footer');
    }
}
