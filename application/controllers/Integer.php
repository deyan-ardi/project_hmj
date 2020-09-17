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
	public function tambah_kegiatan()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home', 'refresh');
		} else {
			$this->data['title'] = "Integer - Tambah Kegiatan";
			$this->data['active'] = "5";
			$id = $_SESSION['user_id'];
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->form_validation->set_rules("tema_kegiatan", "Tema Kegiatan", "required|max_length[100]");
			$this->form_validation->set_rules("nama_kegiatan", "Nama Kegiatan", "required|max_length[100]");
			$this->form_validation->set_rules("deskripsi", "Deskripsi Kegiatan", "required|max_length[1000]");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_kegiatan', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				// Cek dlu apakah nama kegiatan sudah ada atau belum
				// Setelah itu cek apakah kedua file sudah diisi?
				// Setelah itu cek apakah file satu sudah cocok atau belum?
				// Cek apakah file dua sudah cocok atau belum
				// Jika keduanya sudah, input data, jika berhasil redirect jika gagal redirect
			}
		}
	}
	public function tambah_sponsor()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home', 'refresh');
		} else {
			$this->data['title'] = "Integer - Tambah Sponsor";
			$this->data['active'] = "5";
			$id = $_SESSION['user_id'];
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->form_validation->set_rules("nama_sponsor", "Nama Sponsor", "required|max_length[100]");
			$this->form_validation->set_rules("deskripsi", "Deskripsi", "required|max_length[1000]");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_sponsor', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				// Cek dlu apakah nama kegiatan sudah ada atau belum
				// Setelah itu cek apakah kedua file sudah diisi?
				// Setelah itu cek apakah file satu sudah cocok atau belum?
				// Cek apakah file dua sudah cocok atau belum
				// Jika keduanya sudah, input data, jika berhasil redirect jika gagal redirect
			}
		}
	}
	public function tambah_tanggal()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home', 'refresh');
		} else {
			$this->data['title'] = "Integer - Tambah Tanggal";
			$this->data['active'] = "5";
			$id = $_SESSION['user_id'];
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->form_validation->set_rules("tanggal", "Tanggal", "required");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_hari', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				// Cek dlu apakah nama kegiatan sudah ada atau belum
				// Setelah itu cek apakah kedua file sudah diisi?
				// Setelah itu cek apakah file satu sudah cocok atau belum?
				// Cek apakah file dua sudah cocok atau belum
				// Jika keduanya sudah, input data, jika berhasil redirect jika gagal redirect
			}
		}
	}
	public function tambah_kegiatan_perhari()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home', 'refresh');
		} else {
			$this->data['title'] = "Integer - Tambah Kegiatan Perhari";
			$this->data['active'] = "5";
			$id = $_SESSION['user_id'];
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->form_validation->set_rules("tanggal", "Tanggal", "required");
			$this->form_validation->set_rules("nama_kegiatan", "Nama Kegiatan", "required|max_length[1000]");
			$this->form_validation->set_rules("tempat_kegiatan", "Tempat Kegiatan", "required|max_length[1000]");
			$this->form_validation->set_rules("jam_mulai", "Jam Mulai", "required");
			$this->form_validation->set_rules("jam_selesai", "Jam Selesai", "required");
			$this->form_validation->set_rules("menit_mulai", "Menit Mulai", "required");
			$this->form_validation->set_rules("menit_selesai", "Menit Selesai", "required");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_kegiatan_perhari', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				// Cek dlu apakah nama kegiatan sudah ada atau belum
				// Setelah itu cek apakah kedua file sudah diisi?
				// Setelah itu cek apakah file satu sudah cocok atau belum?
				// Cek apakah file dua sudah cocok atau belum
				// Jika keduanya sudah, input data, jika berhasil redirect jika gagal redirect
			}
		}
	}
	public function set_kegiatan()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home', 'refresh');
		} else {
			$this->data['title'] = "Integer - Set Kegiatan";
			$this->data['active'] = "5";
			$id = $_SESSION['user_id'];
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->form_validation->set_rules("nama_kegiatan", "Nama Kegiatan", "required");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/set_kegiatan', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				// Cek dlu apakah nama kegiatan sudah ada atau belum
				// Setelah itu cek apakah kedua file sudah diisi?
				// Setelah itu cek apakah file satu sudah cocok atau belum?
				// Cek apakah file dua sudah cocok atau belum
				// Jika keduanya sudah, input data, jika berhasil redirect jika gagal redirect
			}
		}
	}
	public function tambah_kategori_lomba()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home', 'refresh');
		} else {
			$this->data['title'] = "Integer - Tambah Kategori Lomba";
			$this->data['active'] = "5";
			$id = $_SESSION['user_id'];
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->form_validation->set_rules("kategori_lomba", "Kategori Lomba", "required|max_length[100]");
			$this->form_validation->set_rules("deskripsi", "Deskripsi Kategori", "required|max_length[1000]");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_kategori_lomba', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				// Cek dlu apakah nama kegiatan sudah ada atau belum
				// Setelah itu cek apakah kedua file sudah diisi?
				// Setelah itu cek apakah file satu sudah cocok atau belum?
				// Cek apakah file dua sudah cocok atau belum
				// Jika keduanya sudah, input data, jika berhasil redirect jika gagal redirect
			}
		}
	}
	public function tambah_lomba()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('web/home', 'refresh');
		} else {
			$this->data['title'] = "Integer - Tambah Lomba";
			$this->data['active'] = "5";
			$id = $_SESSION['user_id'];
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->form_validation->set_rules("kategori_lomba", "Kategori Lomba", "required");
			$this->form_validation->set_rules("nama_lomba", "Nama Lomba", "required|max_length[100]");
			$this->form_validation->set_rules("deskripsi", "Deskripsi Lomba", "required|max_length[1000]");
			$this->form_validation->set_rules("link", "Link Pendaftaran", "required|max_length[100]");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_lomba', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				// Cek dlu apakah nama kegiatan sudah ada atau belum
				// Setelah itu cek apakah kedua file sudah diisi?
				// Setelah itu cek apakah file satu sudah cocok atau belum?
				// Cek apakah file dua sudah cocok atau belum
				// Jika keduanya sudah, input data, jika berhasil redirect jika gagal redirect
			}
		}
	}
	public function tambah_informasi()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home', 'refresh');
		} else {
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			// Taken from models repository
			$this->data['title'] = "Integer - Tambah Data Informasi";
			$this->data['active'] = "5";
			$this->data['flip'] = "false";
			// All Validations
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('judul_informasi', 'Judul Informasi', 'required|max_length[100]');
			$this->form_validation->set_rules('konten', 'Konten', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_informasi', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				// $namaKepengurusan = $this->All_model->getActiveKepengurusan();
				// $namaKepengurusan = $namaKepengurusan[0]['nama_hmj'];
				// $id_file = "informasi";
				// $tujuan = "informasi/foto";
				// // List Ekstensi
				// $ekstensi = array("jpg", "png");

				// if ($_FILES["foto_1"]['error'] == 0) {
				// 	// Cek Ekstensi Foto 1
				// 	$file_foto1 = $_FILES["foto_1"]['name'];
				// 	$pecah_1 = explode(".", $file_foto1);
				// 	$ekstensi_1 = $pecah_1[1];
				// }
				// if ($_FILES["foto_2"]['error'] == 0) {
				// 	// Cek Ekstensi Foto 2
				// 	$file_foto2 = $_FILES["foto_2"]['name'];
				// 	$pecah_2 = explode(".", $file_foto2);
				// 	$ekstensi_2 = $pecah_2[1];
				// }
				// if ($_FILES["foto_3"]['error'] == 0) {
				// 	// Cek Ekstensi Foto 3
				// 	$file_foto3 = $_FILES["foto_3"]['name'];
				// 	$pecah_3 = explode(".", $file_foto3);
				// 	$ekstensi_3 = $pecah_3[1];
				// }
				// // Foto 1
				// if (($_FILES["foto_1"]['error'] == 0 && $_FILES["foto_2"]['error'] != 0 && $_FILES["foto_3"]['error'] != 0 && in_array($ekstensi_1, $ekstensi)) || ($_FILES["foto_1"]['error'] == 0 && $_FILES["foto_2"]['error'] == 0 && $_FILES["foto_3"]['error'] != 0 && in_array($ekstensi_1, $ekstensi) && in_array($ekstensi_2, $ekstensi)) || ($_FILES["foto_1"]['error'] == 0 && $_FILES["foto_2"]['error'] == 0 && $_FILES["foto_3"]['error'] == 0 && in_array($ekstensi_1, $ekstensi) && in_array($ekstensi_2, $ekstensi) && in_array($ekstensi_3, $ekstensi))) {
				// 	$id_foto_1 = "foto_1";
				// 	$upload = $this->All_model->uploadFile($id_foto_1, $id_file, $tujuan);
				// 	if ($upload['result'] == "success") {
				// 		$foto_1 = $upload['foto_1']['file_name'];
				// 		// var_dump($foto_1);
				// 	} else {
				// 		$foto_1 = NULL;
				// 		$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
				// 		redirect("web/tambah_data_informasi");
				// 	}
				// } else {
				// 	$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Foto di Slide, Apakah File Sudah Sesuai?');
				// 	redirect("web/tambah_data_informasi");
				// }
				// // Foto 2
				// if (($_FILES["foto_2"]['error'] == 0 && $_FILES["foto_1"]['error'] == 0 && $_FILES["foto_3"]['error'] != 0 && in_array($ekstensi_2, $ekstensi) && in_array($ekstensi_1, $ekstensi)) || ($_FILES["foto_3"]['error'] == 0 && $_FILES["foto_2"]['error'] == 0 && $_FILES["foto_1"]['error'] == 0 && in_array($ekstensi_1, $ekstensi) && in_array($ekstensi_2, $ekstensi) && in_array($ekstensi_3, $ekstensi))) {
				// 	$id_foto_2 = "foto_2";
				// 	$upload = $this->All_model->uploadFile($id_foto_2, $id_file, $tujuan);
				// 	if ($upload['result'] == "success") {
				// 		$foto_2 = $upload['foto_2']['file_name'];
				// 		// var_dump($foto_2);
				// 	} else {
				// 		$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
				// 		redirect("web/tambah_data_informasi");
				// 	}
				// } else {
				// 	if (($_FILES["foto_1"]['error'] != 0)) {
				// 		$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Foto di Slide, Apakah File Sudah Sesuai?');
				// 		redirect("web/tambah_data_informasi");
				// 	}
				// }
				// // Foto 3
				// if ($_FILES["foto_3"]['error'] == 0 && $_FILES["foto_2"]['error'] == 0 && $_FILES["foto_1"]['error'] == 0 && in_array($ekstensi_1, $ekstensi) && in_array($ekstensi_2, $ekstensi) && in_array($ekstensi_3, $ekstensi)) {
				// 	$id_foto_3 = "foto_3";
				// 	$upload = $this->All_model->uploadFile($id_foto_3, $id_file, $tujuan);
				// 	if ($upload['result'] == "success") {
				// 		$foto_3 = $upload['foto_3']['file_name'];
				// 		// var_dump($foto_3);
				// 	} else {
				// 		$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
				// 		redirect("web/tambah_data_informasi");
				// 	}
				// } else {
				// 	if (($_FILES["foto_2"]['error'] != 0 && $_FILES["foto_1"]['error'] != 0) || ($_FILES["foto_1"]['error'] != 0 && $_FILES["foto_3"]['error'] == 0) || ($_FILES["foto_1"]['error'] == 0 && $_FILES["foto_3"]['error'] == 0)) {
				// 		$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Foto di Slide, Apakah File Sudah Sesuai?');
				// 		redirect("web/tambah_data_informasi");
				// 	}
				// }

				// if ($_FILES["file"]['error'] == 0) {
				// 	$id_berkas = "berkas";
				// 	$tujuan_berkas = "informasi/berkas";
				// 	$nama = date('dmYHis');
				// 	$upload = $this->All_model->uploadFile($nama, $id_berkas, $tujuan_berkas);
				// 	if ($upload['result'] == "success") {
				// 		$file_doc = $upload['file']['file_name'];
				// 		// var_dump($file_doc);
				// 	} else {
				// 		// var_dump($upload);
				// 		$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
				// 		redirect("web/tambah_data_informasi");
				// 	}
				// }
				// // Jika foto dan doc kosong
				// if (empty($foto_2)) {
				// 	$foto_2 = null;
				// }
				// if (empty($foto_3)) {
				// 	$foto_3 = null;
				// }
				// if (empty($file_doc)) {
				// 	$file_doc = null;
				// }
				// if ($this->All_model->tambahDataInformasi($foto_1, $foto_2, $foto_3, $file_doc, $namaKepengurusan)) {
				// 	$this->session->set_flashdata('berhasil', 'Ditambahkan');
				// 	redirect("web/informasi_hmj");
				// } else {
				// 	$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
				// 	redirect("web/tambah_data_informasi");
				// }
			}
		}
	}
}