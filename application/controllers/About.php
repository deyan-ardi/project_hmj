<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class About extends CI_Controller
{

	public function index()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['title'] = "Admin - Setting Website";
			$this->data['active'] = "9";
			$this->data['flip'] = "false";
			$this->data['landing'] = $this->All_model->getAllLanding();
			$this->load->view('admin/master/header', $this->data);
			$this->load->view('admin/page/about/index', $this->data);
			$this->load->view('admin/master/footer', $this->data);
		}
	}
}
