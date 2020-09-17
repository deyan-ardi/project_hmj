<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Admin extends CI_Controller
{
	public $data = [];
	public function index()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				$id = $_SESSION['user_id'];
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->data['title'] = "Admin - Setting Website";
				$this->data['active'] = "6";
				$this->data['flip'] = "false";
				$this->data['users'] = $this->ion_auth->users()->result();
				foreach ($this->data['users'] as $k => $user) {
					$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
				}
				$this->data['landing'] = $this->All_model->getAllLanding();
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/admin/index', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
	public function hapus_user($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				if ($this->ion_auth_model->getAdmin($id) > 0) {
					$this->session->set_flashdata('gagal', 'Dihapus, Anda tidak dapat menghapus level user Admin');
					return redirect('admin', 'refresh');
				} else {
					if ($this->ion_auth_model->hapusUser($id)) {
						$this->session->set_flashdata('berhasil', 'Dihapus');
						return redirect('admin', 'refresh');
					} else {
						$this->session->set_flashdata('gagal', 'Dihapus');
						return redirect('admin', 'refresh');
					}
				}
			} else {
				show_404();
			}
		}
	}
	public function tambah_landing()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				$id = $_SESSION['user_id'];
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->data['title'] = "Admin - Tambah Landing";
				$this->data['active'] = "6";
				$this->data['flip'] = "false";
				$this->form_validation->set_rules("title", "Title", "required");
				$this->form_validation->set_rules("icon", "Icon", "required");
				$this->form_validation->set_rules("links", "Href", "required");
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('admin/master/header', $this->data);
					$this->load->view('admin/page/admin/tambah_landing', $this->data);
					$this->load->view('admin/master/footer', $this->data);
				} else {
					if ($this->All_model->insertLanding()) {
						$this->session->set_flashdata('berhasil', 'Ditambahkan');
						redirect('admin/');
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Silahkan Cek Kembali Form Anda');
						redirect('admin/tambah_landing');
					}
				}
			} else {
				show_404();
			}
		}
	}
	public function edit_landing($id_landing = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				$id = $_SESSION['user_id'];
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->data['landing'] = $this->All_model->getLanding($id_landing);
				$this->data['title'] = "Admin - Tambah Landing";
				$this->data['active'] = "6";
				$this->data['flip'] = "false";
				$this->form_validation->set_rules("title", "Title", "required");
				$this->form_validation->set_rules("icon", "Icon", "required");
				$this->form_validation->set_rules("links", "Href", "required");
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('admin/master/header', $this->data);
					$this->load->view('admin/page/admin/edit_landing', $this->data);
					$this->load->view('admin/master/footer', $this->data);
				} else {
					if ($this->All_model->editLanding($id_landing)) {
						$this->session->set_flashdata('berhasil', 'Ditambahkan');
						redirect('admin/');
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Silahkan Cek Kembali Form Anda');
						redirect('admin/edit_landing');
					}
				}
			} else {
				show_404();
			}
		}
	}
	public function hapus_landing($id_landing = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				if ($this->All_model->hapusLanding($id_landing)) {
					$this->session->set_flashdata('berhasil', 'Dihapus');
					return redirect('admin', 'refresh');
				} else {
					$this->session->set_flashdata('gagal', 'Dihapus');
					return redirect('admin', 'refresh');
				}
			} else {
				show_404();
			}
		}
	}
	public function set_main($id_landing = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				if ($this->All_model->rowMain() < 4 && $this->All_model->rowMain() >= 0) {
					if ($this->All_model->setMain($id_landing)) {
						$this->session->set_flashdata('berhasil', 'Disetel');
						return redirect('admin', 'refresh');
					} else {
						$this->session->set_flashdata('gagal', 'Disetel, Terjadi Masalah Server');
						return redirect('admin', 'refresh');
					}
				} else {
					$this->session->set_flashdata('gagal', 'Disetel, Jumlah Tipe Main Pada Icon/Links Sudah Terpenuhi');
					return redirect('admin', 'refresh');
				}
			} else {
				show_404();
			}
		}
	}
	public function set_off($id_landing = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				if ($this->All_model->setOff($id_landing)) {
					$this->session->set_flashdata('berhasil', 'Disetel');
					return redirect('admin', 'refresh');
				} else {
					$this->session->set_flashdata('gagal', 'Disetel, Terjadi Masalah Server');
					return redirect('admin', 'refresh');
				}
			} else {
				show_404();
			}
		}
	}
	public function backup_database()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				$id = $_SESSION['user_id'];
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->data['title'] = "Admin - Backup Database Website";
				$this->data['active'] = "7";
				$this->data['flip'] = "false";
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/admin/backup', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
	public function proses_backup()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				$this->load->dbutil();
				// Backup your entire database and assign it to a variable
				$backup = $this->dbutil->backup();

				// Load the file helper and write the file to your server
				$this->load->helper('file');
				write_file('/path/to/mybackup.zip', $backup);

				// Load the download helper and send the file to your desktop
				$this->load->helper('download');
				force_download('mybackup.zip', $backup);
			} else {
				show_404();
			}
		}
	}
	public function import_database()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				$id = $_SESSION['user_id'];
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->data['title'] = "Admin - Backup Database Website";
				$this->data['active'] = "8";
				$this->data['flip'] = "false";
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/admin/import', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
}