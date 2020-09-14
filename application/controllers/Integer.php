<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Integer extends CI_Controller
{
	public function index()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home', 'refresh');
		} else {
			$this->data['title'] = "Integer - Manajemen Kegiatan";
			$this->data['active'] = "5";
			$id = $_SESSION['user_id'];
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/integer/index', $this->data);
			$this->load->view('admin/master/footer', $this->data);
		}
	}
	public function kegiatan()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home', 'refresh');
		} else {
			$this->data['title'] = "Integer - Manajemen Kegiatan";
			$this->data['active'] = "5";
			$id = $_SESSION['user_id'];
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/integer/index', $this->data);
			$this->load->view('admin/master/footer', $this->data);
		}
	}
	public function lomba()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home', 'refresh');
		} else {
			$this->data['title'] = "Integer - Manajemen Lomba";
			$this->data['active'] = "5";
			$id = $_SESSION['user_id'];
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/integer/lomba', $this->data);
			$this->load->view('admin/master/footer', $this->data);
		}
	}
}