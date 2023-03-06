<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->model_barang->tampil_data()->result();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id' => $barang->id_brg,
            'qty' => 1,
            'price' => $barang->harga,
            'name' => $barang->nama_brg
        );

        $this->cart->insert($data);
        redirect('all_products');
    }

    public function detail_keranjang()
    {
        $data['title'] = 'Cart';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->session->userdata('email')) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('cart', $data);
            $this->load->view('templates/admin_footer');
        } else {
            redirect('auth');
        }
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('all_products');
    }

    public function pembayaran()
    {
        $data['title'] = 'Payment';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('pembayaran', $data);
        $this->load->view('templates/admin_footer');
    }

    public function proses_pesanan()
    {
        $data['title'] = 'Payment Process';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $is_processed = $this->model_invoice->index();

        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('payment_process', $data);
        } else {
            echo "Sorry, Your Order is Failed to Processed, Please try again";
        }
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $data['title'] = 'Payment';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('product_details', $data);
    }
}
