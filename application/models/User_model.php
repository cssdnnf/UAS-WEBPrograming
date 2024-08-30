<?php
class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_users() {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function get_user($id) {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }

    public function add_user($data) {
        return $this->db->insert('users', $data);
    }

    public function update_user($username, $password = null, $level, $name) {
        $data = array(
            'level' => $level,
            'name'  => $name
        );
        
        if (!empty($password)) {
            $data['password'] = md5($password);
        }
        
        $this->db->where('username', $username);
        return $this->db->update('users', $data);
    }

    public function delete_user($id) {

        $this->db->trans_start();
        
        $this->db->where('user_id', $id);
        $this->db->delete('orders');

        $this->db->delete('users', array('id' => $id));

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}
