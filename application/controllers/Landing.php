<?php defined('BASEPATH') or exit('No direct script access allowed');


class Landing extends CI_Controller
{
	public function index()
	{
		//all data
		$data['links'] = $this->All_model->getLinks();
		$data['mainLinks'] = $this->All_model->getLinksWhere();

		//title data
		$data['title'] = "SSO Informatics :: Landing Page - User";

		//load views
		$this->load->view('landing/master/header', $data);
		$this->load->view('landing/index', $data);
		$this->load->view('landing/master/footer');
	}
}
