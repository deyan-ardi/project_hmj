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
			// For Detail Aktif Kegiatan
			$this->data['active_integer'] = $this->All_model->getActiveKegiatanInteger();
			// For Integer Data Table
			$this->data['integer'] = $this->All_model->getAllInteger();
			// For Sponsor Data Table
			$this->data['sponsor'] = $this->All_model->getOnlyActiveSponsor();
			// For Hari Data Table
			$this->data['hari'] = $this->All_model->getOnlyActiveHari();
			// For Detail Hari Data Table
			$this->data['detail_hari'] = $this->All_model->getActiveDetailHari();
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
			// For Detail Aktif Kegiatan
			$this->data['active_integer'] = $this->All_model->getActiveKegiatanInteger();
			// For Integer Data Table
			$this->data['integer'] = $this->All_model->getAllInteger();
			// For Sponsor Data Table
			$this->data['sponsor'] = $this->All_model->getOnlyActiveSponsor();
			// For Hari Data Table
			$this->data['hari'] = $this->All_model->getOnlyActiveHari();
			// For Detail Hari Data Table
			$this->data['detail_hari'] = $this->All_model->getActiveDetailHari();
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
			$id_active_kegiatan = $this->All_model->getActiveKegiatanInteger();
			// For Kategori Lomba Data Table
			$this->data['kategori_lomba'] = $this->All_model->getOnlyActiveKategoriLomba();
			// For Lomba Data Table
			$this->data['lomba'] = $this->All_model->getOnlyActiveLombaInteger();
			// For Informasi Data Table
			$this->data['berita'] = $this->All_model->getOnlyActiveBeritaInteger();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			if (!empty($id_active_kegiatan)) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/lomba', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				show_404();
			}
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
			$this->form_validation->set_rules("tema_integer", "Tema Kegiatan", "required|max_length[100]");
			$this->form_validation->set_rules("nama_integer", "Nama Kegiatan", "required|max_length[100]");
			$this->form_validation->set_rules("deskripsi_integer", "Deskripsi Kegiatan", "required|max_length[1000]");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_kegiatan', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				$id_file = "integer";

				// FOTO
				if (($_FILES["foto"]['error'] == 0)) {
					$id_foto = "foto";
					$tujuan = "integer/foto";
					$upload = $this->All_model->uploadFile($id_foto, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						$foto = $upload['foto']['file_name'];
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Foto, Apakah File Sudah Sesuai?');
						redirect("integer/tambah_kegiatan");
					}
				}

				// VIDEO
				if (($_FILES["video"]['error'] == 0)) {
					$id_video = "video";
					$tujuan = "integer/video";
					$upload = $this->All_model->uploadFile($id_video, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						$video = $upload['video']['file_name'];
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Video, Apakah File Sudah Sesuai?');
						redirect("integer/tambah_kegiatan");
					}
				}

				if (empty($foto)) {
					$foto = null;
				}
				if (empty($video)) {
					$video = null;
				}

				if ($this->All_model->tambahDataInteger($foto, $video)) {
					$this->session->set_flashdata('berhasil', 'Ditambahkan');
					redirect("integer/kegiatan");
				} else {
					$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
					redirect("integer/tambah_kegiatan");
				}
			}
		}
	}
	public function hapus_data_integer($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home', 'refresh');
		} else {
			if ($this->All_model->deleteInteger($id)) {
				$this->session->set_flashdata('berhasil', 'Dihapus');
				redirect('integer/kegiatan');
			} else {
				$this->session->set_flashdata('gagal', 'Dihapus, Parameter Tidak Sesuai');
				redirect('integer/kegiatan');
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
			$this->form_validation->set_rules("nama_sponsor_integer", "Nama Sponsor", "required|max_length[100]");
			$this->form_validation->set_rules("deskripsi_sponsor_integer", "Deskripsi", "required|max_length[1000]");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_sponsor', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				$id_file = "integer";
				$id_aktif_integer = $this->All_model->getActiveKegiatanInteger();
				// SPONSOR
				if (($_FILES["sponsor"]['error'] == 0)) {
					$id_sponsor = "sponsor";
					$tujuan = "integer/sponsor";
					$upload = $this->All_model->uploadFile($id_sponsor, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						$sponsor = $upload['sponsor']['file_name'];
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Logo Sponsor, Apakah File Sudah Sesuai?');
						redirect("integer/tambah_sponsor");
					}
				}
				if (empty($sponsor)) {
					$sponsor = null;
				}
				if (empty($id_aktif_integer)) {
					$this->session->set_flashdata('gagal', 'Ditambahkan, Tidak Ada Kegiatan Yang Aktif');
					redirect("integer/tambah_sponsor");
				} else {
					if ($this->All_model->tambahDataSponsor($sponsor, $id_aktif_integer)) {
						$this->session->set_flashdata('berhasil', 'Ditambahkan');
						redirect("integer/kegiatan");
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
						redirect("integer/tambah_sponsor");
					}
				}
			}
		}
	}
	public function hapus_data_sponsor_integer($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home', 'refresh');
		} else {
			if ($this->All_model->deleteSponsor($id)) {
				$this->session->set_flashdata('berhasil', 'Dihapus');
				redirect('integer/kegiatan');
			} else {
				$this->session->set_flashdata('gagal', 'Dihapus, Parameter Tidak Sesuai');
				redirect('integer/kegiatan');
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
			$id_aktif_integer = $this->All_model->getActiveKegiatanInteger();
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->form_validation->set_rules("nama_hari_integer", "Tanggal", "required");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_hari', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				if ($this->All_model->tambahDataHari($id_aktif_integer)) {
					$this->session->set_flashdata('berhasil', 'Ditambahkan');
					redirect("integer/kegiatan");
				} else {
					$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
					redirect("integer/tambah_tanggal");
				}
			}
		}
	}
	public function hapus_data_hari_integer($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home', 'refresh');
		} else {
			if ($this->All_model->deleteHari($id)) {
				$this->session->set_flashdata('berhasil', 'Dihapus');
				redirect('integer/kegiatan');
			} else {
				$this->session->set_flashdata('gagal', 'Dihapus, Parameter Tidak Sesuai');
				redirect('integer/kegiatan');
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
			$this->data['hari'] = $this->All_model->getOnlyActiveHari();
			$this->form_validation->set_rules("hari_integer", "Tanggal", "required");
			$this->form_validation->set_rules("nama_detail_hari_integer", "Nama Kegiatan", "required|max_length[1000]");
			$this->form_validation->set_rules("tempat_detail_hari_integer", "Tempat Kegiatan", "required|max_length[1000]");
			$this->form_validation->set_rules("waktu_mulai_jam", "Jam Mulai", "required");
			$this->form_validation->set_rules("waktu_akhir_jam", "Jam Selesai", "required");
			$this->form_validation->set_rules("waktu_mulai_menit", "Menit Mulai", "required");
			$this->form_validation->set_rules("waktu_akhir_menit", "Menit Selesai", "required");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_kegiatan_perhari', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				$waktu_mulai = $_POST['waktu_mulai_jam'] . ":" . $_POST['waktu_mulai_menit'];
				if ($this->All_model->tambahDataDetailHari()) {
					$this->session->set_flashdata('berhasil', 'Ditambahkan');
					redirect("integer/kegiatan");
				} else {
					$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
					redirect("integer/tambah_tanggal");
				}
			}
		}
	}
	public function hapus_data_detail_hari_integer($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home', 'refresh');
		} else {
			if ($this->All_model->deleteDetailHari($id)) {
				$this->session->set_flashdata('berhasil', 'Dihapus');
				redirect('integer/kegiatan');
			} else {
				$this->session->set_flashdata('gagal', 'Dihapus, Parameter Tidak Sesuai');
				redirect('integer/kegiatan');
			}
		}
	}
	public function set_kegiatan()
	{
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(group)) {
			redirect('integer/index', 'refresh');
		} else {
			$this->data['title'] = "Integer - Tambah Kategori Lomba";
			$this->data['active'] = "5";
			$id = $_SESSION['user_id'];
			$this->data['flip'] = "false";
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['integer'] = $this->All_model->getAllInteger();
			$this->data['select_integer'] = $this->All_model->getIntegerSelect();
			// Validation Form
			$this->form_validation->set_rules("id_integer", "Nama Kegiatan Integer", "required");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/set_kegiatan', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				$id_status = $_POST['id_integer'];
				if ($this->All_model->rowIntegerSelect() > 0) {
					if ($this->All_model->ubahStatusInteger()) {
						if ($this->All_model->sinkronasiInteger($id_status)) {
							$this->session->set_flashdata('berhasil', 'Disinkronasi');
							redirect("integer/kegiatan");
						} else {
							$this->session->set_flashdata('gagal', 'Disinkronasi, periksa kembali inputan anda');
							redirect("integer/set_kegiatan");
						}
					} else {
						$this->session->set_flashdata('gagal', 'Disinkronasi, periksa kembali inputan anda');
						redirect("integer/set_kegiatan");
					}
				} else {
					if ($this->All_model->sinkronasiInteger($id_status)) {
						$this->session->set_flashdata('berhasil', 'Disinkronasi');
						redirect("integer/kegiatan");
					} else {
						$this->session->set_flashdata('gagal', 'Disinkronasi, periksa kembali inputan anda');
						redirect("integer/set_kegiatan");
					}
				}
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
			$this->form_validation->set_rules("nama_kategori_lomba_integer", "Kategori Lomba", "required|max_length[100]");
			$this->form_validation->set_rules("deskripsi_kategori_lomba_integer", "Deskripsi Kategori", "required|max_length[1000]");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_kategori_lomba', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				$id_file = "integer";
				$id_aktif_integer = $this->All_model->getActiveKegiatanInteger();
				// ICON KATEGORI LOMBA
				if (($_FILES["icon_kategori"]['error'] == 0)) {
					$id_icon_kategori = "icon_kategori";
					$tujuan = "integer/icon_kategori";
					$upload = $this->All_model->uploadFile($id_icon_kategori, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						$icon_kategori = $upload['icon_kategori']['file_name'];
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Icon Kategori Lomba, Apakah File Sudah Sesuai?');
						redirect("integer/tambah_kategori_lomba");
					}
				}
				if (empty($icon_kategori)) {
					$icon_kategori = null;
				}

				if ($this->All_model->tambahDataKategoriLombaInteger($icon_kategori, $id_aktif_integer)) {
					$this->session->set_flashdata('berhasil', 'Ditambahkan');
					redirect("integer/lomba");
				} else {
					$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
					redirect("integer/tambah_kategori_lomba");
				}
			}
		}
	}
	public function hapus_data_kategori_lomba_integer($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home', 'refresh');
		} else {
			if ($this->All_model->deleteKategoriLombaInteger($id)) {
				$this->session->set_flashdata('berhasil', 'Dihapus');
				redirect('integer/lomba');
			} else {
				$this->session->set_flashdata('gagal', 'Dihapus, Parameter Tidak Sesuai');
				redirect('integer/lomba');
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
			$this->data['kategori'] = $this->All_model->getOnlyActiveKategoriLomba();
			$this->form_validation->set_rules("id_kategori_lomba_integer", "Kategori Lomba", "required");
			$this->form_validation->set_rules("nama_lomba_integer", "Nama Lomba", "required|max_length[100]");
			$this->form_validation->set_rules("deskripsi_lomba_integer", "Deskripsi Lomba", "required|max_length[1000]");
			$this->form_validation->set_rules("pendaftaran_lomba_integer", "Link Pendaftaran", "required|max_length[100]");
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_lomba', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				$id_file = "integer";
				// ICON LOMBA
				if (($_FILES["icon_lomba"]['error'] == 0)) {
					$id_icon_lomba = "icon_lomba";
					$tujuan = "integer/icon_lomba";
					$upload = $this->All_model->uploadFile($id_icon_lomba, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						$icon_lomba = $upload['icon_lomba']['file_name'];
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Icon Lomba, Apakah File Sudah Sesuai?');
						redirect("integer/tambah_lomba");
					}
				}
				if (empty($icon_lomba)) {
					$icon_lomba = null;
				}

				if ($this->All_model->tambahDataLombaInteger($icon_lomba)) {
					$this->session->set_flashdata('berhasil', 'Ditambahkan');
					redirect("integer/lomba");
				} else {
					$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
					redirect("integer/tambah_lomba");
				}
			}
		}
	}
	public function hapus_data_lomba_integer($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home', 'refresh');
		} else {
			if ($this->All_model->deleteLombaInteger($id)) {
				$this->session->set_flashdata('berhasil', 'Dihapus');
				redirect('integer/lomba');
			} else {
				$this->session->set_flashdata('gagal', 'Dihapus, Parameter Tidak Sesuai');
				redirect('integer/lomba');
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
			$this->form_validation->set_rules('kategori_berita_integer', 'Kategori', 'required');
			$this->form_validation->set_rules('nama_berita_integer', 'Judul Informasi', 'required|max_length[100]');
			$this->form_validation->set_rules('konten_berita_integer', 'Konten', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/master/header', $this->data);
				$this->load->view('admin/page/integer/tmb_informasi', $this->data);
				$this->load->view('admin/master/footer', $this->data);
			} else {
				$id_file = "integer";
				$id_aktif_integer = $this->All_model->getActiveKegiatanInteger();
				// FOTO1
				if (($_FILES["foto_1"]['error'] == 0)) {
					$id_foto_1 = "foto_1";
					$tujuan = "integer/berita/foto";
					$upload = $this->All_model->uploadFile($id_foto_1, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						$foto_1 = $upload['foto_1']['file_name'];
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Foto, Apakah File Sudah Sesuai?');
						redirect("integer/tambah_informasi");
					}
				}
				// FOTO2
				if (($_FILES["foto_2"]['error'] == 0)) {
					$id_foto_2 = "foto_2";
					$tujuan = "integer/berita/foto";
					$upload = $this->All_model->uploadFile($id_foto_2, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						$foto_2 = $upload['foto_2']['file_name'];
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Foto, Apakah File Sudah Sesuai?');
						redirect("integer/tambah_informasi");
					}
				}
				// FOTO3
				if (($_FILES["foto_3"]['error'] == 0)) {
					$id_foto_3 = "foto_3";
					$tujuan = "integer/berita/foto";
					$upload = $this->All_model->uploadFile($id_foto_3, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						$foto_3 = $upload['foto_3']['file_name'];
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Foto, Apakah File Sudah Sesuai?');
						redirect("integer/tambah_informasi");
					}
				}
				// PDF
				if (($_FILES["file"]['error'] == 0)) {
					$id_file_1 = "file";
					$tujuan = "integer/berita/file";
					$upload = $this->All_model->uploadFile($id_file_1, $id_file, $tujuan);
					if ($upload['result'] == "success") {
						$file = $upload['file']['file_name'];
					} else {
						$this->session->set_flashdata('gagal', 'Ditambahkan, Terjadi Masalah Pada Video, Apakah File Sudah Sesuai?');
						redirect("integer/tambah_informasi");
					}
				}
				if (empty($foto_1)) {
					$foto_1 = null;
				}
				if (empty($foto_2)) {
					$foto_2 = null;
				}
				if (empty($foto_3)) {
					$foto_3 = null;
				}
				if (empty($file)) {
					$file = null;
				}
				if ($this->All_model->tambahDataBerita($foto_1, $foto_2, $foto_3, $file, $id_aktif_integer)) {
					$this->session->set_flashdata('berhasil', 'Ditambahkan');
					redirect("integer/lomba");
				} else {
					$this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
					redirect("integer/tambah_informasi");
				}
			}
		}
	}
	public function hapus_data_informasi($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('web/home', 'refresh');
		} else {
			if ($this->All_model->deleteBerita($id)) {
				$this->session->set_flashdata('berhasil', 'Dihapus');
				redirect('integer/kegiatan');
			} else {
				$this->session->set_flashdata('gagal', 'Dihapus, Parameter Tidak Sesuai');
				redirect('integer/kegiatan');
			}
		}
	}
}