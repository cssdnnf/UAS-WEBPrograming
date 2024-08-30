<?php 
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');

    }
    public function index() {
        // Cek apakah pengguna sudah login
        if ($this->session->userdata('user_id')) {
            redirect('admin'); // Arahkan ke halaman admin jika sudah login
        }

        // Jika belum login, tampilkan form login
        $this->load->view('form/login');
    }
    public function check_login() {        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $user = $this->login_model->login($username, $password);
        
        if ($user) {
            $this->session->set_userdata('user_id', $user->id);
            redirect('admin');
        } else {
            $this->session->set_userdata('error', 'Invalid username or password');
            redirect('login');
        }
    }
    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('/');
    }

}
?>