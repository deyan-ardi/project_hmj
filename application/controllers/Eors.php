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
            $this->data['kegiatan'] = $this->All_model->getAllKegiatanEors();
            $this->data['title'] = "EORS - Manajemen EORS";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "false";
            $this->data['flip'] = "false";
            $this->load->view('admin/master/header', $this->data);
            $this->load->view('admin/page/eors/index', $this->data);
            $this->load->view('admin/master/footer', $this->data);
        }
    }
    public function tambah_kegiatan()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['title'] = "EORS - Tambah Kegiatan";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "false";
            $this->data['flip'] = "false";
            // All Validations
            $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'required|max_length[100]');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|max_length[1000]');
            $this->form_validation->set_rules('persyaratan', 'Persyaratan', 'required|max_length[1000]');
            $this->form_validation->set_rules('tanggal_mulai', 'Tanggal Mulai', 'required');
            $this->form_validation->set_rules('tanggal_selesai', 'Tanggal Selesai', 'required');
            $this->form_validation->set_rules('target_pendaftar', 'Target Pendaftar', 'required');
            $this->form_validation->set_rules('aktivasi', 'Pengaturan Aktivasi', 'required');
            $this->form_validation->set_rules('data_pribadi', 'Pengaturan Data Pribadi', 'required');
            $this->form_validation->set_rules('data_pendidikan', 'Pengaturan Data Pendidikan', 'required');
            $this->form_validation->set_rules('wawancara', 'Pengaturan Wawancara', 'required');
            $this->form_validation->set_rules('file', 'Pengaturan File', 'required');
            if ($this->form_validation->run() == FALSE) {

                $this->load->view('admin/master/header', $this->data);
                $this->load->view('admin/page/eors/tambah_kegiatan', $this->data);
                $this->load->view('admin/master/footer', $this->data);
            } else {
                if ($_FILES["icon_kegiatan"]['error'] != 4) {
                    if ($this->All_model->cekNamaKegiatan($_POST['nama_kegiatan']) > 0) {
                        $this->session->set_flashdata('gagal', 'Ditambahkan, Nama Kegiatan Sudah Ada');
                        redirect('eors/tambah_kegiatan');
                    } else {
                        $except = "/,#";
                        if (strpbrk($_POST['nama_kegiatan'], $except)) {
                            $this->session->set_flashdata('gagal', 'Ditambahkan, Nama Kepengurusan Mengandung Karakter Yang Tidak Diperbolehkan');
                            redirect("eors/tambah_kegiatan");
                        } else {
                            $id_file = "eors";
                            $bagian = "kegiatan";
                            $tujuan = $_POST['nama_kegiatan'];
                            $upload = $this->All_model->uploadFile($bagian, $id_file, $tujuan);
                            if ($upload['result'] == "success") {
                                if ($this->All_model->insertKegiatanEors($upload)) {
                                    $this->session->set_flashdata('berhasil', 'Ditambahkan');
                                    redirect("eors");
                                } else {
                                    $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Form Inputan Anda');
                                    redirect("eors/tambah_kegiatan");
                                }
                            } else {
                                $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
                                redirect('eors/tambah_kegiatan');
                            }
                        }
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali File Yang Akan Diupload');
                    redirect('eors/tambah_kegiatan');
                }
            }
        }
    }
    public function aktivasi($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editAktivasi($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Diaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Diaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function nonaktivasi($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editNonaktivasi($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Dinonaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Dinonaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function nonaktif_penilaian($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editNonaktifPenilaian($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Dinonaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Dinonaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function aktif_penilaian($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editAktifPenilaian($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Dinonaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Dinonaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function nonaktif_hasil($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editNonaktifHasil($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Dinonaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Dinonaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function aktif_hasil($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                if ($this->All_model->editAktifHasil($id_user)) {
                    $this->session->set_flashdata('berhasil', 'Dinonaktivasi');
                    redirect("eors");
                } else {
                    $this->session->set_flashdata('gagal', 'Dinonaktivasi, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function hapus_kegiatan($id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            if ($this->All_model->getKegiatanEorsWhereNum($id_user) > 0) {
                $nama = $this->All_model->getKegiatanEorsWhere($id_user);
                $nama = $nama[0]['nama_kegiatan'];
                if ($this->All_model->deleteFolder($nama)) {
                    if ($this->All_model->hapusKegiatanEors($id_user)) {
                        $this->session->set_flashdata('berhasil', 'Dihapus');
                        redirect("eors");
                    } else {
                        $this->session->set_flashdata('gagal', 'Dihapus, Terjadi Masalah');
                        redirect('eors');
                    }
                } else {
                    $this->session->set_flashdata('gagal', 'Dihapus, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
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
            $data_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $this->data['id_halaman'] = $data_kegiatan[0]['nama_kegiatan'];
            $id_kegiatan = $data_kegiatan[0]['id_kegiatan'];
            $this->data['sie'] = $this->All_model->getAllPilihanWhere($id_kegiatan);
            $this->data['pendaftar'] = $this->All_model->getAllPendaftarEors($id_kegiatan);
            // var_dump($data_kegiatan);
            // die;
            if (!empty($data_kegiatan)) {
                $this->load->view('admin/master/header', $this->data);
                $this->load->view('admin/page/eors/admin', $this->data);
                $this->load->view('admin/master/footer', $this->data);
            } else {
                show_404();
            }
        }
    }
    public function tambah_sie($data = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['title'] = "EORS - Tambah Sie";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "false";
            $this->data['flip'] = "false";
            $this->data['jabatan'] = $this->All_model->getAllJabatan();
            $id_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $this->data['kegiatan'] = $id_kegiatan;
            $id_kegiatan = $id_kegiatan[0]['id_kegiatan'];
            // All Validations
            $this->form_validation->set_rules('nama_sie', 'Nama Sie', 'required');

            if ($this->form_validation->run() == FALSE) {
                if (!empty($id_kegiatan)) {
                    $this->load->view('admin/master/header', $this->data);
                    $this->load->view('admin/page/eors/tambah_sie', $this->data);
                    $this->load->view('admin/master/footer', $this->data);
                } else {
                    show_404();
                }
            } else {
                if ($this->All_model->getPilihanWhere($id_kegiatan, $_POST['nama_sie']) > 0) {
                    $this->session->set_flashdata('gagal', 'Ditambahkan, Sie Sudah Dipilih Sebelumnya');
                    redirect('eors/tambah_sie/' . urldecode($data));
                } else {
                    if ($this->All_model->inputSieEors($id_kegiatan)) {
                        $this->session->set_flashdata('berhasil', 'Ditambahkan');
                        redirect('eors/administrator/' . urldecode($data));
                    } else {
                        $this->session->set_flashdata('gagal', 'Ditambahkan, Sie Sudah Dipilih Sebelumnya');
                        redirect('eors/tambah_sie/' . urldecode($data));
                    }
                }
            }
        }
    }
    public function hapus_pendaftar($data = '', $id_user = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            $id_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $id_kegiatan = $id_kegiatan[0]['id_kegiatan'];
            if ($this->All_model->getKegiatanEorsWhereNum($id_kegiatan) > 0) {
                if ($this->All_model->hapusPendaftarEors($id_kegiatan, $id_user, urldecode($data))) {
                    $this->session->set_flashdata('berhasil', 'Dihapus');
                    redirect("eors/administrator/" . urldecode($data));
                } else {
                    $this->session->set_flashdata('gagal', 'Dihapus, Terjadi Masalah');
                    redirect("eors/administrator/" . urldecode($data));
                }
            } else {
                show_404();
            }
        }
    }
    public function tambah_peserta($data = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            $id = $_SESSION['user_id'];
            $this->data['group'] = $this->ion_auth_model->getGroup($id);
            $this->data['title'] = "EORS - Tambah Sie";
            $this->data['active'] = "10";
            $this->data['ckeditor'] = "false";
            $this->data['flip'] = "false";
            $data_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $this->data['kegiatan'] = $data_kegiatan;
            $id_kegiatan = $data_kegiatan[0]['id_kegiatan'];
            $this->data['jabatan'] = $this->All_model->getAllPilihanWhere($id_kegiatan);
            // All Validations
            $this->form_validation->set_rules('nim', 'Nama Sie', 'required');
            $this->form_validation->set_rules('nama_lengkap', 'Nama Sie', 'required');
            $this->form_validation->set_rules('angkatan', 'Nama Sie', 'required');
            $this->form_validation->set_rules('jenis_kelamin', 'Nama Sie', 'required');
            $this->form_validation->set_rules('agama', 'Nama Sie', 'required');
            $this->form_validation->set_rules('alamat_asal', 'Nama Sie', 'required|max_length[1000]');
            $this->form_validation->set_rules('alamat_sekarang', 'Nama Sie', 'required|max_length[1000]');
            $this->form_validation->set_rules('email', 'Nama Sie', 'required');
            $this->form_validation->set_rules('wa', 'Nama Sie', 'required');
            $this->form_validation->set_rules('pil_wajib', 'Nama Sie', 'required');
            if ($data_kegiatan[0]['informasi_pribadi'] == 1) {
                $this->form_validation->set_rules('riwayat_kesehatan', 'Riwayat Kesehatan', 'required');
                $this->form_validation->set_rules('hobi', 'Hobi', 'required');
                $this->form_validation->set_rules('motto_hidup', 'Motto Hidup', 'required');
            }
            if ($data_kegiatan[0]['informasi_pendidikan'] == 1) {
                $this->form_validation->set_rules('ipk', 'RIPK', 'required');
                $this->form_validation->set_rules('nama_sd', 'Nama Sekolah Dasar', 'required');
                $this->form_validation->set_rules('tahun_sd', 'Tahun Tamat Sekolah Dasar', 'required');
                $this->form_validation->set_rules('nama_smp', 'Nama Sekolah Menengah Pertama', 'required');
                $this->form_validation->set_rules('tahun_smp', 'Tahun Tamat Sekolah Menengah Pertama', 'required');
                $this->form_validation->set_rules('nama_sma', 'Nama Sekolah Menengah Atas', 'required');
                $this->form_validation->set_rules('tahun_sma', 'Tahun Sekolah Menengah Atas', 'required');
            }
            if ($this->form_validation->run() == FALSE) {
                if (!empty($id_kegiatan)) {
                    $jumlah_peserta = $this->All_model->countPesertaEors($id_kegiatan);
                    if ($this->All_model->updateJumlahPeserta($jumlah_peserta, $id_kegiatan)) {
                        $this->load->view('admin/master/header', $this->data);
                        $this->load->view('admin/page/eors/tambah_peserta', $this->data);
                        $this->load->view('admin/master/footer', $this->data);
                    }
                } else {
                    show_404();
                }
            } else {
                if ($data_kegiatan[0]['upload_file'] == 1) {
                    $id_file = "eors";

                    if ($_FILES['file_foto']['error'] == 4) {
                        $this->session->set_flashdata('gagal', 'Ditambahkan, Foto Masih Kosong');
                        redirect('eors/tambah_peserta/' . urldecode($data));
                    } else {
                        $bag_foto = "foto";
                        $tujuan_foto = $data_kegiatan[0]['nama_kegiatan'];
                        $upload = $this->All_model->uploadFile($bag_foto, $id_file, $tujuan_foto);
                        if ($upload['result'] == "success") {
                            $nama_foto = $upload['file_foto']['file_name'];
                        } else {
                            $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
                            redirect('eors/tambah_peserta/' . urldecode($data));
                        }
                    }
                    if ($_FILES['file_dokumen']['error'] == 4) {
                        $this->session->set_flashdata('gagal', 'Ditambahkan, File Masih Kosong');
                        redirect('eors/tambah_peserta/' . urldecode($data));
                    } else {
                        $bag_dokumen = "dokumen";
                        $tujuan_dokumen = $data_kegiatan[0]['nama_kegiatan'];
                        $upload = $this->All_model->uploadFile($bag_dokumen, $id_file, $tujuan_dokumen);
                        if ($upload['result'] == "success") {
                            $nama_dokumen = $upload['file_dokumen']['file_name'];
                        } else {
                            $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
                            redirect('eors/tambah_peserta/' . urldecode($data));
                        }
                    }
                } else {
                    $nama_dokumen = null;
                    $nama_foto = null;
                }

                if ($this->All_model->cekNimPeserta($_POST['nim'], $id_kegiatan) > 0) {
                    $this->session->set_flashdata('gagal', 'Ditambahkan, Peserta dengan Nim' . $_POST['nim'] . 'Sudah Melakukan Pendaftaran Pada Kegiatan Ini');
                    redirect('eors/tambah_peserta/' . urldecode($data));
                } else {

                    if ($this->All_model->inputDataPeserta($nama_dokumen, $nama_foto, $id_kegiatan)) {
                        $this->session->set_flashdata('berhasil', 'Ditambahkan');
                        redirect('eors/administrator/' . urldecode($data));
                    } else {
                        $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Ukuran dan Tipe dari File');
                        redirect('eors/tambah_peserta/' . urldecode($data));
                    }
                }
            }
        }
    }
    public function hapus_sie($data = '', $id_pilihan = '', $id_jabatan = '')
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            $kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $kegiatan = $kegiatan[0]['id_kegiatan'];
            if ($this->All_model->getPilihanWhere($kegiatan, $id_jabatan) > 0) {
                if ($this->All_model->hapusSie($kegiatan, $id_pilihan)) {
                    $this->session->set_flashdata('berhasil', 'Dihapus');
                    redirect("eors/administrator/" . urldecode($data));
                } else {
                    $this->session->set_flashdata('gagal', 'Dihapus, Terjadi Masalah');
                    redirect('eors');
                }
            } else {
                show_404();
            }
        }
    }
    public function proses_penilaian()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            $data = $_POST['kegiatan'];
            $user = $_POST['user'];
            // rumus penilaian
            $nilai_akhir = ($_POST['penilaian_1'] + $_POST['penilaian_2'] + $_POST['penilaian_3'] + $_POST['penilaian_4']) / 4;
            if ($nilai_akhir > 7.5) {
                $keterangan = "Direkomendasikan";
            } else {
                $keterangan = "Pilihan Opsional";
            }
            if ($this->All_model->setWawancara($user)) {
                if ($this->All_model->inputNilaiPesertaEors($nilai_akhir, $keterangan)) {
                    $this->session->set_flashdata('berhasil', 'Ditambahkan');
                    redirect('eors/detail_pendaftar/' . urldecode($data) . '/' . $_POST['user']);
                } else {
                    $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Inputan Nilai Anda');
                    redirect('eors/detail_pendaftar/' . urldecode($data) . '/' . $_POST['user']);
                }
            } else {
                $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Inputan Nilai Anda');
                redirect('eors/detail_pendaftar/' . urldecode($data) . '/' . $_POST['user']);
            }
        }
    }
    public function proses_hasil_akhir()
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group(eors)) {
            redirect('web/home', 'refresh');
        } else {
            $data = $_POST['kegiatan'];
            $user = $_POST['user'];
            if ($this->All_model->inputNilaiAkhirEors($user)) {
                $this->session->set_flashdata('berhasil', 'Ditambahkan');
                redirect('eors/detail_pendaftar/' . urldecode($data) . '/' . $_POST['user']);
            } else {
                $this->session->set_flashdata('gagal', 'Ditambahkan, Periksa Kembali Inputan Nilai Anda');
                redirect('eors/detail_pendaftar/' . urldecode($data) . '/' . $_POST['user']);
            }
        }
    }
    public function detail_pendaftar($data = '', $pendaftar = '')
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
            $this->data['data_nilai'] = $this->All_model->getNilaiWawancara($pendaftar);
            $data_kegiatan = $this->All_model->getKegiatanEorsWhereChar(urldecode($data));
            $id_kegiatan = $data_kegiatan[0]['id_kegiatan'];
            $data_jabatan = $this->All_model->getAllPilihanWhere($id_kegiatan);
            $this->data['jabatan'] = $data_jabatan;
            $data_pendaftar = $this->All_model->getAllPendaftarEorsWhere($id_kegiatan, $pendaftar);
            $this->data['kegiatan'] = $data_kegiatan;
            $this->data['pendaftar'] = $data_pendaftar;
            if (!empty($id_kegiatan) && !empty($data_pendaftar && !empty($data_jabatan))) {
                $this->load->view('admin/master/header', $this->data);
                $this->load->view('admin/page/eors/detail_pendaftar', $this->data);
                $this->load->view('admin/master/footer', $this->data);
            } else {
                show_404();
            }
        }
    }
}