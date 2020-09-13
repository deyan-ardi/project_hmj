<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Guest extends CI_Controller
{
	public function index()
	{
		$this->load->view('welcome_message');
	}
}