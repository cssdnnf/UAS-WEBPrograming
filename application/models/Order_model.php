<?php 
class Order_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_orders_by_user($user_id) {
        $this->db->select('orders.*, menu.gambar, menu.judul, menu.harga');
        $this->db->from('orders');
        $this->db->join('menu', 'menu.id = orders.menu_id');
        $this->db->where('orders.user_id', $user_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_order_quantity($order_id, $action) {
        $order = $this->db->get_where('orders', ['id' => $order_id])->row_array();
        $current_quantity = $order['t_barang'];

        if ($action == 'increase') {
            $new_quantity = $current_quantity + 1;
        } elseif ($action == 'decrease' && $current_quantity > 1) {
            $new_quantity = $current_quantity - 1;
        } else {
            $new_quantity = $current_quantity;
        }

        $menu = $this->db->get_where('menu', ['id' => $order['menu_id']])->row_array();
        $total_price = $new_quantity * $menu['harga'];

        $this->db->where('id', $order_id);
        $this->db->update('orders', [
            't_barang' => $new_quantity,
            't_harga' => number_format($total_price, 3, '.', '')
        ]);
    }

    public function delete_order($order_id) {
        $this->db->delete('orders', ['id' => $order_id]);
    }



    public function add_order($menu_id, $user_id) {
        $this->db->select('harga');
        $this->db->from('menu');
        $this->db->where('id', $menu_id);
        $price_query = $this->db->get();
    
        if ($price_query->num_rows() == 0) {
            log_message('error', "Item price not found for menu_id: $menu_id");
            return;
        }
    
        $item_price = $price_query->row()->harga;
    
        $this->db->from('orders');
        $this->db->where('menu_id', $menu_id);
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $current_quantity = $row->t_barang;
            $new_quantity = $current_quantity + 1;
            $total_price = $item_price * $new_quantity;
            $formatted_total_price = number_format($total_price, 3, '.', '');
    
            $this->db->set('t_barang', $new_quantity);
            $this->db->set('t_harga', $formatted_total_price);
            $this->db->where('menu_id', $menu_id);
            $this->db->where('user_id', $user_id);
            $this->db->update('orders');
        } else {
            $total_price = $item_price;
            $formatted_total_price = number_format($total_price, 3, '.', '');
    
            $data = array(
                't_barang' => 1,
                't_harga' => $formatted_total_price,
                'menu_id' => $menu_id,
                'user_id' => $user_id
            );
    
            $this->db->insert('orders', $data);
        }
    }
    
    
    
    
    
}

?>