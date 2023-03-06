<?php

class Kategori extends CI_Controller
{
    public function men()
    {
        $data['title'] = 'Men';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['men'] = $this->model_kategori->data_men()->result();

        $this->load->view('cat-men', $data);
        // $this->load->view('templates/admin_header', $data);
        // $this->load->view('templates/admin_sidebar', $data);
        // $this->load->view('templates/admin_topbar', $data);
        // $this->load->view('men', $data);
        // $this->load->view('templates/admin_footer');
    }

    public function women()
    {
        $data['title'] = 'Women';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['women'] = $this->model_kategori->data_women()->result();

        $this->load->view('cat-women', $data);
        // $this->load->view('templates/admin_header', $data);
        // $this->load->view('templates/admin_sidebar', $data);
        // $this->load->view('templates/admin_topbar', $data);
        // $this->load->view('women', $data);
        // $this->load->view('templates/admin_footer');
    }

    public function accessories()
    {
        $data['title'] = 'Accessories';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['accessories'] = $this->model_kategori->data_accessories()->result();

        $this->load->view('cat-accessories', $data);
        // $this->load->view('templates/admin_header', $data);
        // $this->load->view('templates/admin_sidebar', $data);
        // $this->load->view('templates/admin_topbar', $data);
        // $this->load->view('accessories', $data);
        // $this->load->view('templates/admin_footer');
    }
}
