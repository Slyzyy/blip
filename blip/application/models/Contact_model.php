<?php

class Contact_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tbl_contact');
    }

    public function aksi_tambah($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_produk()
    {
        $query = $this->db->get('tbl_contact');
        return $query->result_array();
    }
}
