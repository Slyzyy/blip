<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('produk_model');
    }

    public function cetak_produk()
    {
        $data['produk'] = $this->produk_model->get_produk();
        $this->load->view('cetak_produk', $data);
    }
}
