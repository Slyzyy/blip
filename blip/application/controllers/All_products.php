<?php

class All_products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_barang');
    }
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $data['title'] = 'Men';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('all_products', $data);
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['search'] = $this->model_barang->get_product_keyword($keyword);
        $this->load->view('search_products', $data);
    }
}
