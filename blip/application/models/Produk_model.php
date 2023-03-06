<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produk_model extends CI_Model
{

    public function get_produk()
    {
        $query = $this->db->get('tb_invoice');
        return $query->result_array();
    }
}
