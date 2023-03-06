<?php

class Contact extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('contact', $data);
    }

    public function list()
    {
        $data['contact'] = $this->contact_model->tampil_data()->result();
        $data['title'] = 'Contact List';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('list_contact.php', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function tambah_aksi()
    {

        $id_contact = $this->input->post('id_contact');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $messages = $this->input->post('messages');

        $data = array(
            'id_contact'    => $id_contact,
            'name'          => $name,
            'email'         => $email,
            'messages'        => $messages
        );

        $this->contact_model->aksi_tambah($data, 'tbl_contact');
        redirect('contact');
    }
}
