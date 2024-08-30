<?php
class Menu_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
    public function get_menus() {
        $query = $this->db->get('menu');
        return $query->result_array();
    }

    public function get_menu($id) {
        $query = $this->db->get_where('menu', array('id' => $id));
        return $query->row_array();
    }

    public function insert_menu($data) {
        $data['id'] = $this->generate_new_id($data['category']);
        return $this->db->insert('menu', $data);
    }

    public function update_menu($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('menu', $data);
    }

    public function delete_menu($id) {
        return $this->db->delete('menu', array('id' => $id));
    }

    private function get_max_id_by_category($category) {
        $prefix = '';
        switch ($category) {
            case 'burgers':
                $prefix = '1';
                break;
            case 'sides':
                $prefix = '2';
                break;
            case 'drinks':
                $prefix = '3';
                break;
            case 'desserts':
                $prefix = '4';
                break;
            default:
                return null;
        }

        $this->db->select_max('id');
        $this->db->like('id', $prefix, 'after');
        $query = $this->db->get('menu');

        $result = $query->row();
        $max_id = $result ? $result->id : $prefix . '0000';

        $current_number = (int)substr($max_id, 1);

        return $current_number;
    }

    private function generate_random_number() {
        return str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
    }

    private function generate_new_id($category) {
        $prefix = '';
        switch ($category) {
            case 'burgers':
                $prefix = '1';
                break;
            case 'sides':
                $prefix = '2';
                break;
            case 'drinks':
                $prefix = '3';
                break;
            case 'desserts':
                $prefix = '4';
                break;
            default:
                return null;
        }

        $current_number = $this->get_max_id_by_category($category);
        $random_number = $this->generate_random_number();

        return $prefix . $random_number;
    }
}
?>
