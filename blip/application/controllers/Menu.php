<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('menu_model', 'menu');
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> New menu added! </div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/admin_footer', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
            redirect('menu/submenu');
        }
    }

    public function menu_delete($id)
    {
        $check_data = $this->menu->countSubMenu(['menu_id' => $id]);
        if ($check_data > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Delete the data sub menu first to delete this menu</div>');
            redirect('menu');
        } else {
            $where = ['id' => $id];
            $this->menu->delete_data('user_menu', $where);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your menu has been delete!</div>');
        redirect('menu');
    }

    public function submenu_edit($id)
    {
        $where = ['user_sub_menu.id' => $id];
        $data_submenu = $this->menu->getOneSubMenuWhere($where);
        $data['title'] = 'Edit Sub Menu';
        $data['sub_menu'] = $data_submenu;
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('menu/submenu-edit', $data);
        $this->load->view('templates/admin_footer');
    }

    public function submenu_update()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $menu_id = $this->input->post('menu_id');
        $url = $this->input->post('url');
        $icon = $this->input->post('icon');
        $active = $this->input->post('active');
        if (empty($active)) {
            $active = 0;
        }

        $data = array(
            'title' => $title,
            'menu_id' => $menu_id,
            'url' => $url,
            'icon' => $icon,
            'is_active' => $active
        );
        //yang ini, tinggal ganti nama tabelnya aja
        $where = ['id' => $id];
        $this->menu->update_data($data, 'user_sub_menu', $where);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your sub menu has been updated!</div>');
        redirect('menu/submenu');
    }

    public function submenu_delete($id)
    {
        $where = ['id' => $id];
        $this->menu->delete_data('user_sub_menu', $where);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your sub menu has been delete!</div>');
        redirect('menu/submenu');
    }

    public function update()
    {
        $data['title'] = 'Edit Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/menu-edit', $data);
        $this->load->view('templates/footer');
    }
}
