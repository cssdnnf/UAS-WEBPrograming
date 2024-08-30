<?php
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('home_model');
        
        $this->load->library('session');
    }

    public function index() {
        
        $user_id = $this->session->userdata('user_id');
        $data_users = $this->login_model->get_user_by_id($user_id);

        // Cek apakah $data_users tidak null dan merupakan array dengan elemen yang diperlukan
        if (is_array($data_users)) {
            $data['level'] = isset($data_users['level']) ? $data_users['level'] : 'default_level';
            $data['name'] = isset($data_users['name']) ? $data_users['name'] : 'default_name';
        } else {
            // Handle kasus ketika $data_users tidak valid
            $data['level'] = 'default_level';
            $data['name'] = 'default_name';
        }

        // untuk table setting
        $data['setting'] = $this->home_model->get_setting();

        // untuk table menu
        $data['menu'] = $this->home_model->get_menu();

        $this->load->view('templates/header', $data);
        $this->load->view('home/home');
        $this->load->view('home/menu', $data);
        $this->load->view('home/gallery');
        $this->load->view('home/team');
        $this->load->view('home/faq');
        $this->load->view('home/lokasi');
        $this->load->view('home/contact');
        $this->load->view('templates/footer');
        
    }
}