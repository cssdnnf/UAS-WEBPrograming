<?php 
class Home_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    // table setting
    public function get_setting() {
        $query = $this->db->get('setting');
        return $query->result_array();
    }

    // table menu
    public function get_menu() {
        $query = $this->db->get('menu');
        return $query->result_array();
    }
}

?>