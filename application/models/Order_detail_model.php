<?php


class Order_detail_model extends CI_Model
{
    public function get_orders()
    {
        $this->db->select('id,user_id,create_at,name,ship_at');
        $this->db->from('fs_order');
        $query = $this->db->get()->result_array();
        return $query;
    }
}