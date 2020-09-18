<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Eors extends CI_Controller
{
    public function index()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['title'] = "EORS - Manajemen EORS";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "false";
            $this->data['flip'] = "false";
            $this->load->view('admin/master/header', $this->data);
            $this->load->view('admin/page/eors/index', $this->data);
            $this->load->view('admin/master/footer', $this->data);
        }
    }
    public function administrator($data = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['title'] = "EORS - Manajemen EORS";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "false";
            $this->data['flip'] = "false";
            $this->load->view('admin/master/header', $this->data);
            $this->load->view('admin/page/eors/admin', $this->data);
            $this->load->view('admin/master/footer', $this->data);
        }
    }
    public function detail_pendaftar($kegiatan = '', $pendaftar = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['title'] = "EORS - Manajemen EORS";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "false";
            $this->data['flip'] = "false";
            $this->load->view('admin/master/header', $this->data);
            $this->load->view('admin/page/eors/detail_pendaftar', $this->data);
            $this->load->view('admin/master/footer', $this->data);
        }
    }
}