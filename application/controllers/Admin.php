<?php 
class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('order_model');
        $this->load->model('menu_model');
        $this->load->model('user_model');

        $this->load->library('session');
        $this->load->helper('form');

        // Cek apakah pengguna sudah login, jika tidak, arahkan ke halaman login
        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }



    public function index() {

        $user_id = $this->session->userdata('user_id');
        $data_users = $this->login_model->get_user_by_id($user_id);

        $data['level'] = $data_users['level'];
        $data['name'] = $data_users['name'];

        $this->load->view('admin_template/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin_template/footer', $data);
    }



    //////////////// START ORDERS ////////////////////////////////////////
    public function orders() {
        
        $user_id = $this->session->userdata('user_id');
        $data_users = $this->login_model->get_user_by_id($user_id);

        $data['level'] = $data_users['level'];
        $data['name'] = $data_users['name'];
        
        if ($data['level'] == "user") {
            $data['orders'] = $this->order_model->get_orders_by_user($user_id);

            $this->load->view('admin_template/header', $data);
            $this->load->view('admin/orders', $data);
            $this->load->view('admin_template/footer', $data);

        } else if ($data['level'] == "admin") {
            show_404();
        } else {
            redirect('login');
        }

    }

    public function update_order() {
        $order_id = $this->input->post('order_id');
        $action = $this->input->post('action');
    
        if ($order_id && $action) {
            // Debugging: Cek nilai yang diterima
            log_message('debug', "Order ID: $order_id, Action: $action");
            
            // Pastikan model dimuat
            $this->load->model('order_model');
            $this->order_model->update_order_quantity($order_id, $action);
            
            // Redirect atau tampilkan pesan sukses
            redirect('admin/orders');
        } else {
            show_error('Invalid request!');
        }
    }

    public function delete_order() {
        $order_id = $this->input->post('order_id');
        if ($order_id) {
            $this->order_model->delete_order($order_id);
            redirect('admin/orders');
        } else {
            show_error('Invalid order ID!');
        }
    }


    public function add_order() {
        // Ambil data dari form
        $menu_id = $this->input->post('menu_id');
        $user_id = $this->session->userdata('user_id'); 

        log_message('debug', "Menu ID: $menu_id, User ID: $user_id");
    
        // Validasi data
        if (!empty($menu_id) && !empty($user_id)) {
            $this->load->model('order_model');
            $this->order_model->add_order($menu_id, $user_id);
        } else {
            log_message('error', 'Menu ID atau User ID tidak ditemukan.');
        }
    
        redirect('admin/orders'); 
    }
    
    //////////////// END ORDERS ////////////////////////////////////////


    //////////////// START MENU ////////////////////////////////////////
    public function menu() {
        
        $user_id = $this->session->userdata('user_id');
        $data_users = $this->login_model->get_user_by_id($user_id);

        $data['level'] = $data_users['level'];
        $data['name'] = $data_users['name'];

        if ($data['level'] == 'admin') {
            $data['menus'] = $this->menu_model->get_menus();
            $data['users'] = $this->session->userdata('user_id');

            $this->load->view('admin_template/header', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('admin_template/footer', $data);

        } else if ($data['level'] == "user") {
            show_404();
        } else {
            redirect('login');
        }

    }

    public function menu_add() {
        $user_id = $this->session->userdata('user_id');
        $data_users = $this->login_model->get_user_by_id($user_id);

        $data['level'] = $data_users['level'];
        $data['name'] = $data_users['name'];

        if ($this->input->post()) {
            $config['upload_path'] = './assets/images/menu/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $upload_data = $this->upload->data();
                $data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga' => $this->input->post('harga'),
                    'gambar' => $upload_data['file_name'],
                    'category' => $this->input->post('category')
                );
                $this->menu_model->insert_menu($data);
                redirect('admin/menu');
            } else {

                $data['upload_error'] = $this->upload->display_errors();
            }
        }

        $this->load->view('admin_template/header', $data);
        $this->load->view('admin/menu_add', $data);
        $this->load->view('admin_template/footer', $data);
    }

    public function menu_edit($id) {

        $user_id = $this->session->userdata('user_id');
        $data_users = $this->login_model->get_user_by_id($user_id);

        $data['level'] = $data_users['level'];
        $data['name'] = $data_users['name'];

        $data['menu'] = $this->menu_model->get_menu($id);

        if ($this->input->post()) {
            $config['upload_path'] = './assets/images/menu/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $upload_data = $this->upload->data();
                $data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga' => $this->input->post('harga'),
                    'gambar' => $upload_data['file_name'],
                    'category' => $this->input->post('category')
                );
            } else {
                $data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga' => $this->input->post('harga'),
                    'category' => $this->input->post('category')
                );
            }
            $this->menu_model->update_menu($id, $data);
            redirect('admin/menu');
        }

        $this->load->view('admin_template/header', $data);
        $this->load->view('admin/menu_edit', $data);
        $this->load->view('admin_template/footer', $data);
    }

    public function menu_delete($id) {
        $this->menu_model->delete_menu($id);
        redirect('admin/menu');
    }
    //////////////// END MENU ////////////////////////////////////////


    //////////////// START USERS ////////////////////////////////////////
    public function users() {
        $user_id = $this->session->userdata('user_id');
        $data_users = $this->login_model->get_user_by_id($user_id);

        $data['level'] = $data_users['level'];
        $data['name'] = $data_users['name'];

        if ($data['level'] == 'admin') {
            $data['users'] = $this->user_model->get_users();

            $this->load->view('admin_template/header', $data);
            $this->load->view('admin/user', $data);
            $this->load->view('admin_template/footer', $data);

        } else if ($data['level'] == "user") {
            show_404();
        } else {
            redirect('login');
        }

    }

    public function users_add() {

        $user_id = $this->session->userdata('user_id');
        $data_users = $this->login_model->get_user_by_id($user_id);
    
        $data['level'] = $data_users['level'];
        $data['name'] = $data_users['name'];
    
        if ($this->input->post()) {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'level'    => $this->input->post('level'),
                'name'     => $this->input->post('name')
            );
    
            $this->user_model->add_user($data);

            redirect('admin/users');
        } else {

            $this->load->view('admin_template/header', $data);
            $this->load->view('admin/user_add');
            $this->load->view('admin_template/footer', $data);

        }
    }    

    public function users_edit($id) {
        $user_id = $this->session->userdata('user_id');
        $data_users = $this->login_model->get_user_by_id($user_id);

        $data['level'] = $data_users['level'];
        $data['name'] = $data_users['name'];

        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $level = $this->input->post('level');
            $name = $this->input->post('name');

            $this->user_model->update_user($username, $password, $level, $name);
            
            redirect('admin/users');
        } else {
            $data['user'] = $this->user_model->get_user($id);

            $this->load->view('admin_template/header', $data);
            $this->load->view('admin/user_edit', $data);
            $this->load->view('admin_template/footer', $data);
        }
    }

    public function users_delete($id) {
        $this->user_model->delete_user($id);
        redirect('admin/users');
    }
    //////////////// END USERS ////////////////////////////////////////
}
?>