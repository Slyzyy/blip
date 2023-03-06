<?php

class Invoice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
    }

    public function index()
    {
        $data['title'] = 'Invoice';
        $data['invoice'] = $this->model_invoice->tampil_data();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates/admin_footer');
    }

    public function detail($id_invoice)
    {
        $data['title'] = 'Detail Invoice';
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates/admin_footer');
    }

    public function print_invoice()
    {
        $data['invoice'] = $this->model_invoice->get_invoice();
        $this->load->view('admin/print_invoice', $data);
    }
}
