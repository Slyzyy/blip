<?php

class Model_kategori extends CI_Model
{
    public function data_men()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'men'));
    }

    public function data_women()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'women'));
    }

    public function data_accessories()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'accessories'));
    }
}
