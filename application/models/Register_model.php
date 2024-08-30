<?php
class Register_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function username_exists($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        return ($query->num_rows() > 0);
    }

    public function register_user($username, $password, $name) {
        $data = array(
            'username' => $username,
            'password' => md5($password),
            'level' => 'user',
            'name' => $name
        );
        return $this->db->insert('users', $data);
    }
}
