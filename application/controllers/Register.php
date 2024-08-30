<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('register_model');
    }

    public function index() {
        $this->load->view('form/register');
    }

    public function process() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);
            $name = $this->input->post('name', TRUE);

            if ($this->register_model->username_exists($username)) {
                redirect('register?error=username_duplikat');
            } else {
                if ($this->register_model->register_user($username, $password, $name)) {
                    redirect('login');
                } else {
                    show_error('There was a problem with the registration.');
                }
            }
        } else {
            show_404();
        }
    }
}


?>