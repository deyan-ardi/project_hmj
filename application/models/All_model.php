<?php

defined('BASEPATH') or exit('No direct script access allowed');

class All_model extends CI_Model
{
	// **************************************************************
	// Start Landing Page
	// **************************************************************
	public function getLinks()
	{
		return $this->db->get('links')->result_array();
	}
	public function getLinksWhere()
	{
		$this->db->select('*');
		$this->db->from('links');
		return $this->db->where('type =', 'main')->get()->result_array();
	}
	public function getAllLanding()
	{
		return $this->db->get('links')->result_array();
	}
	public function insertLanding()
	{
		$query = [
			"title" => htmlspecialchars($this->input->post('title', true)),
			"icon" => htmlspecialchars($this->input->post('icon', true)),
			"href" => htmlspecialchars($this->input->post('links', true)),
			"type" => "content",
		];
		return $this->db->insert('links', $query);
	}
	public function getLanding($id)
	{
		return $this->db->where('id_links=' . $id)->get('links')->result_array();
	}
	public function editLanding($id)
	{
		$query = [
			"title" => htmlspecialchars($this->input->post('title', true)),
			"icon" => htmlspecialchars($this->input->post('icon', true)),
			"href" => htmlspecialchars($this->input->post('links', true)),
			"type" =>	htmlspecialchars($this->input->post('type', true)),
		];
		return $this->db->where("id_links=" . $id)->update('links', $query);
	}
	public function hapusLanding($id)
	{
		return $this->db->delete('links', array('id_links' => $id));
	}
	public function rowMain()
	{
		return $this->db->where('type =' . "'main'")->get('links')->num_rows();
	}
	public function setMain($id)
	{
		$query = [
			"type" => "main",
		];
		return $this->db->where("id_links=" . $id)->update('links', $query);
	}
	public function setOff($id)
	{
		$query = [
			"type" => "content",
		];
		return $this->db->where("id_links=" . $id)->update('links', $query);
	}
	// **************************************************************
	// End Landing Page
	// **************************************************************



	// **************************************************************
	// Start Bidang
	// **************************************************************
	public function insertBidang($data)
	{
		$query = array(
			'id_hmj' => $this->input->post('nama_kepengurusan', true),
			'nama_bidang' => $this->input->post('nama_bidang', true),
			'deskripsi_bidang' => $this->input->post('deskripsi_bidang', false),
			'ketua_foto' => $data['file']['file_name'],
			'ketua_nama' => $this->input->post('nama_koordinator', true),
		);
		return $this->db->insert('s1_detail_hmj', $query);
	}
	public function getAllBidangSelect()
	{
		$this->db->select('s1_detail_hmj.*,s1_hmj.nama_hmj');
		$this->db->from('s1_detail_hmj');
		$this->db->where('s1_hmj.status_pakai=' . "1");
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_detail_hmj.id_hmj');
		return $this->db->get()->result_array();
	}
	public function rowBidangActive($nama)
	{
		$this->db->select('s1_detail_hmj.*');
		$this->db->from('s1_detail_hmj');
		$this->db->where('s1_hmj.status_pakai=' . "1");
		$this->db->where('s1_detail_hmj.nama_bidang=' . "'$nama'");
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_detail_hmj.id_hmj');
		return $this->db->get()->num_rows();
	}

	public function getBidangSelectWhere($id)
	{
		$this->db->select('s1_detail_hmj.*,s1_hmj.status_pakai,s1_hmj.nama_hmj');
		$this->db->where('s1_hmj.status_pakai=' . "1");
		$this->db->where('s1_detail_hmj.id_detail_hmj=' . $id);
		$this->db->from('s1_detail_hmj');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_detail_hmj.id_hmj');
		return $this->db->get()->result_array();
	}

	public function editBidang($id)
	{
		$query = array(
			'id_hmj' => $this->input->post('nama_kepengurusan', true),
			'nama_bidang' => $this->input->post('nama_bidang', true),
			'deskripsi_bidang' => $this->input->post('deskripsi_bidang', false),
			'ketua_foto' => $this->input->post('old_foto', true),
			'ketua_nama' => $this->input->post('nama_koordinator', true),
		);
		return $this->db->where('id_detail_hmj=', $id)->update('s1_detail_hmj', $query);
	}

	public function editBidangFile($data, $id)
	{
		$query = array(
			'id_hmj' => $this->input->post('nama_kepengurusan', true),
			'nama_bidang' => $this->input->post('nama_bidang', true),
			'deskripsi_bidang' => $this->input->post('deskripsi_bidang', false),
			'ketua_foto' => $data['file']['file_name'],
			'ketua_nama' => $this->input->post('nama_koordinator', true),
		);
		return $this->db->where('id_detail_hmj=', $id)->update('s1_detail_hmj', $query);
	}

	public function deleteBidang($id, $nama)
	{
		$row = $this->db->where('id_detail_hmj', $id)->get('s1_detail_hmj')->row();
		if ($this->db->delete('s1_detail_hmj', array('id_detail_hmj' => $id))) {
			unlink('assets/upload/Folder_' . $nama . '/' . $row->ketua_foto);
		}
	}
	// **************************************************************
	// End Bidang
	// **************************************************************




	// **************************************************************
	// Start Kepengurusan
	// **************************************************************
	public function insertKepengurusan($foto_ketua, $foto_wakil, $foto_vertikal, $foto_landscape)
	{

		$query = [
			"nama_hmj" => $this->input->post('kepengurusan', true),
			"deskripsi_hmj" => $this->input->post('deskripsi_singkat', false),
			"ketua_hmj" => $this->input->post('ketua', true),
			"ketua_foto" => $foto_ketua,
			"wakil_hmj" => $this->input->post('wakil', true),
			"wakil_foto" => $foto_wakil,
			"visi_hmj" => $this->input->post('visi', false),
			"misi_hmj" => $this->input->post('misi', false),
			"landscape_struktur_hmj" => $foto_landscape,
			"vertikal_struktur_hmj" => $foto_vertikal,
			"status_pakai" => "0",
			"create_by" => $this->input->post('create_by', true),
			"create_at" => date("Y-m-d H:i:s"),
			"update_at" => date("Y-m-d H:i:s")
		];
		return $this->db->insert('s1_hmj', $query);
	}

	public function getAllKepengurusan()
	{
		return $this->db->order_by('create_at', 'desc')->get('s1_hmj')->result_array();
	}
	public function getKepengurusan($id)
	{
		return $this->db->where('id_hmj=' . $id)->get('s1_hmj')->result_array();
	}

	public function getActiveKepengurusan()
	{
		$this->db->SELECT('s1_hmj.*');
		$this->db->FROM('s1_hmj');
		$this->db->WHERE('s1_hmj.status_pakai = "1"');
		return $this->db->get()->result_array();
	}

	public function deleteFolder($dir)
	{
		$dirname = 'assets/upload/Folder_' . $dir . '/';
		$status = true;
		while ($status) {
			$status = false;
			$dir_handle = null;
			if (is_dir($dirname)) {
				$dir_handle = opendir($dirname);
				if (!$dir_handle) {
					return false;
				} else {
					while ($file = readdir($dir_handle)) {
						if ($file != "." && $file != "..") {
							if (!is_dir($dirname . "/" . $file)) {
								unlink($dirname . "/" . $file);
							} else {
								$status = true;
								$dirname = 'assets/upload/Folder_' . $dir . '/' . $file;
							}
						}
					}
					closedir($dir_handle);
					rmdir($dirname);
				}
			}
		}
		return true;
	}
	public function deleteKepengurusan($id)
	{
		return $this->db->delete('s1_hmj', array('id_hmj' => $id));
	}

	public function ubahStatus()
	{
		$query = [
			"status_pakai" => "0",
		];
		return $this->db->where("status_pakai=" . "1")->update('s1_hmj', $query);
	}
	public function sinkronasi($id)
	{
		$query = [
			"status_pakai" => "1",
		];
		return $this->db->where("id_hmj=" . $id)->update('s1_hmj', $query);
	}
	public function getKepengurusanSelect()
	{
		return $this->db->where('status_pakai=' . "1")->get('s1_hmj')->result_array();
	}
	public function rowKepengurusanSelect()
	{
		return $this->db->where('status_pakai=' . "1")->get('s1_hmj')->num_rows();
	}
	public function rowNamaKepengurusan($data)
	{
		return $this->db->where('nama_hmj=' . "'$data'")->get('s1_hmj')->num_rows();
	}
	// **************************************************************
	// End Kepengurusan
	// **************************************************************




	// **************************************************************
	// Main Upload File
	// **************************************************************
	public function uploadFile($nama, $id_file, $hmj)
	{

		// Variabel
		$folder = 'assets/upload/Folder_' . $hmj;
		// $folder = 'assets/upload/Folder_' . $hmj . '/' . date('dmY');
		// var_dump($folder);
		if (!file_exists($folder) && !is_dir($folder)) {
			$umask = umask(0);
			mkdir($folder, 0777, true);
			umask($umask);
		}

		if ($id_file == "kepengurusan") {
			$config['upload_path'] = $folder;
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']  = '1048';
			$config['encrypt_name'] = TRUE;
			$config['remove_space'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($nama == "ketua") {
				if ($this->upload->do_upload('foto_ketua')) {
					$return = array('result' => 'success', 'file_ketua' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'file_ketua' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "wakil") {
				if ($this->upload->do_upload('foto_wakil')) {
					$return = array('result' => 'success', 'file_wakil' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'file_wakil' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "vertikal") {
				if ($this->upload->do_upload('foto_vertikal')) {
					$return = array('result' => 'success', 'file_vertikal' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'file_vertikal' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "landscape") {
				if ($this->upload->do_upload('foto_landscape')) {
					$return = array('result' => 'success', 'file_landscape' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'file_landscape' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			}
		} else if ($id_file == "berkas") {
			$config['upload_path'] = $folder;
			$config['allowed_types'] = 'pdf';
			$config['max_size']  = '10048';
			$config['file_name'] = $nama;
			$config['remove_space'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			// Load konfigurasi uploadnya    
			if ($this->upload->do_upload('file')) {
				// Lakukan upload dan Cek jika proses upload berhasil      
				// Jika berhasil :      
				$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
				return $return;
			} else {
				// Jika gagal :      
				$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
				return $return;
			}
		} else if ($id_file == "bidang") {
			$config['upload_path'] = $folder;
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']  = '1045';
			$config['file_name'] = $nama;
			$config['remove_space'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			// Load konfigurasi uploadnya    
			if ($this->upload->do_upload('file')) {
				// Lakukan upload dan Cek jika proses upload berhasil      
				// Jika berhasil :      
				$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
				return $return;
			} else {
				// Jika gagal :      
				$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
				return $return;
			}
		} else if ($id_file == "informasi") {
			$config['upload_path'] = $folder;
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']  = '1048';
			$config['encrypt_name'] = TRUE;
			$config['remove_space'] = TRUE;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($nama == "foto_1") {
				if ($this->upload->do_upload('foto_1')) {
					// Lakukan upload dan Cek jika proses upload berhasil      
					// Jika berhasil :      
					$return = array('result' => 'success', 'foto_1' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'foto_1' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "foto_2") {
				if ($this->upload->do_upload('foto_2')) {
					// Lakukan upload dan Cek jika proses upload berhasil      
					// Jika berhasil :      
					$return = array('result' => 'success', 'foto_2' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'foto_2' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			} else if ($nama == "foto_3") {
				if ($this->upload->do_upload('foto_3')) {
					// Lakukan upload dan Cek jika proses upload berhasil      
					// Jika berhasil :      
					$return = array('result' => 'success', 'foto_3' => $this->upload->data(), 'error' => '');
					return $return;
				} else {
					// Jika gagal :      
					$return = array('result' => 'failed', 'foto_3' => '', 'error' => $this->upload->display_errors());
					return $return;
				}
			}
		}
	}
	// **************************************************************
	// End Upload File
	// **************************************************************



	// **************************************************************
	// Start Kategori Berkas
	// **************************************************************


	public function insertKategoriBerkas()
	{
		$query = [
			"id_hmj" => $this->input->post('id_kepengurusan', true),
			"nama_kegiatan" => $this->input->post('kategori', true),
			"deskripsi_kegiatan" => $this->input->post('deskripsi_kategori', false),
			"create_by" => $this->input->post('create_by', true),
			"create_at" => date("Y-m-d H:i:s"),
			"update_at" => date("Y-m-d H:i:s")
		];
		return $this->db->insert('s1_kegiatan_hmj', $query);
	}
	public function cekKategoriBerkas($kategori)
	{
		$this->db->select('s1_kegiatan_hmj.*');
		$this->db->from('s1_kegiatan_hmj');
		$this->db->where('s1_kegiatan_hmj.nama_kegiatan=' . "'$kategori'");
		$this->db->where('s1_hmj.status_pakai = ' . '1');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_kegiatan_hmj.id_hmj');
		return $this->db->get()->num_rows();
	}
	public function editKategoriBerkas($id)
	{
		$query = [
			"nama_kegiatan" => $this->input->post('kategori', true),
			"deskripsi_kegiatan" => $this->input->post('deskripsi_kategori', false),
			"create_by" => $this->input->post('create_by', true),
			"update_at" => date("Y-m-d H:i:s")
		];
		return $this->db->where("id_kegiatan_hmj=" . $id)->update('s1_kegiatan_hmj', $query);
	}
	public function getKepengurusanHapus($id)
	{
		$this->db->select('s1_hmj.*');
		$this->db->from('s1_kegiatan_hmj');
		$this->db->where('s1_kegiatan_hmj.id_kegiatan_hmj = ' . $id);
		$this->db->where('s1_hmj.status_pakai = ' . '1');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_kegiatan_hmj.id_hmj');
		return $this->db->get()->result_array();
	}
	public function getKepengurusanHapusBerkas($id)
	{
		$this->db->select('s1_hmj.*');
		$this->db->from('s1_detail_kegiatan');
		$this->db->where('s1_detail_kegiatan.id_detail_kegiatan = ' . $id);
		$this->db->where('s1_hmj.status_pakai = ' . '1');
		$this->db->join('s1_kegiatan_hmj', 's1_kegiatan_hmj.id_kegiatan_hmj = s1_detail_kegiatan.id_kegiatan_hmj');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_kegiatan_hmj.id_hmj');
		return $this->db->get()->result_array();
	}
	public function deleteKategoriBerkas($id, $nama)
	{
		// Berelasi dlu
		$row =  $this->db->select('*')->from('s1_detail_kegiatan')->where('s1_detail_kegiatan.id_kegiatan_hmj =' . $id)->join('s1_kegiatan_hmj', 's1_kegiatan_hmj.id_kegiatan_hmj = s1_detail_kegiatan.id_kegiatan_hmj')->get()->result_array();
		if ($this->db->delete('s1_kegiatan_hmj', array('id_kegiatan_hmj' => $id))) {
			foreach ($row as $data) {
				unlink('assets/upload/Folder_' . $nama . '/' . $data['kode_repositori']);
			}
			return true;
		}
	}

	public function getKepengurusanForKategoriBerkas($id)
	{
		$this->db->select('s1_hmj.*');
		$this->db->where('s1_kegiatan_hmj.id_kegiatan_hmj=' . $id);
		$this->db->from('s1_kegiatan_hmj');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_kegiatan_hmj.id_hmj');
		return $this->db->get()->result_array();
	}


	public function getOnlyActiveKategoriBerkas()
	{
		$this->db->SELECT('s1_kegiatan_hmj.*');
		$this->db->FROM('s1_kegiatan_hmj');
		$this->db->JOIN('s1_hmj', 's1_kegiatan_hmj.id_hmj = s1_hmj.id_hmj');
		$this->db->WHERE('s1_hmj.status_pakai = "1"');
		return $this->db->get()->result_array();
	}

	public function getActiveKategoriBerkas()
	{
		$this->db->SELECT('s1_kegiatan_hmj.*');
		$this->db->FROM('s1_kegiatan_hmj');
		$this->db->JOIN('s1_hmj', 's1_kegiatan_hmj.id_hmj = s1_hmj.id_hmj');
		$this->db->WHERE('s1_hmj.status_pakai= "1"');
		return $this->db->get()->result_array();
	}
	public function getAllBerkas()
	{
		return $this->db->get('s1_detail_kegiatan')->result_array();
	}
	public function getKategoriBerkas($id)
	{
		return $this->db->where('id_kegiatan_hmj=' . $id)->get('s1_kegiatan_hmj')->result_array();
	}
	public function getAllKategoriBerkasFromKepengurusan($id)
	{
		return $this->db->where('id_hmj=' . $id)->order_by('create_at', 'desc')->get('s1_kegiatan_hmj')->result_array();
	}
	public function getAllKategoriBerkas()
	{
		return $this->db->get('s1_kegiatan_hmj')->result_array();
	}

	// **************************************************************
	// End Kategori Berkas
	// **************************************************************



	// **************************************************************
	// Start Detail Berkas
	// **************************************************************
	public function insertBerkas($file_berkas)
	{
		$query = [
			"id_kegiatan_hmj" => $this->input->post('id_kategori_berkas', true),
			"nama_repositori" => $this->input->post('nama_berkas', true),
			"deskripsi_repositori" => $this->input->post('deskripsi_detail', false),
			"kode_repositori" => $file_berkas['file']['file_name'],
			"create_by" => $this->input->post('create_by', true),
			"create_at" => date("Y-m-d H:i:s"),
			"update_at" => date("Y-m-d H:i:s")
		];
		return $this->db->insert('s1_detail_kegiatan', $query);
	}
	public function deleteBerkas($id, $nama)
	{
		$row = $this->db->where('id_detail_kegiatan=' . $id)->get('s1_detail_kegiatan')->row();
		if ($this->db->delete('s1_detail_kegiatan', array('id_detail_kegiatan' => $id))) {
			unlink('assets/upload/Folder_' . $nama . '/' . $row->kode_repositori);
			return true;
		}
	}
	public function editBerkasFile($data, $id)
	{
		$query = array(
			'id_kegiatan_hmj' => $this->input->post('id_kategori_berkas', true),
			'nama_repositori' => $this->input->post('nama_berkas', true),
			'kode_repositori' => $data['file']['file_name'],
			'deskripsi_repositori' => $this->input->post('deskripsi_detail', false),
			'create_by' => $this->input->post('create_by', true),
			'update_at' => date("Y-m-d H:i:s")
		);
		return $this->db->where('id_detail_kegiatan=', $id)->update('s1_detail_kegiatan', $query);
	}
	public function editBerkas($id)
	{
		$query = array(
			'id_kegiatan_hmj' => $this->input->post('id_kategori_berkas', true),
			'nama_repositori' => $this->input->post('nama_berkas', true),
			'kode_repositori' => $this->input->post('old_berkas', true),
			'deskripsi_repositori' => $this->input->post('deskripsi_detail', false),
			'create_by' => $this->input->post('create_by', true),
			'update_at' => date("Y-m-d H:i:s")
		);
		return $this->db->where('id_detail_kegiatan=', $id)->update('s1_detail_kegiatan', $query);
	}
	public function getSelectedBerkas($id)
	{
		$this->db->select('s1_detail_kegiatan.*');
		$this->db->from('s1_detail_kegiatan');
		$this->db->where('s1_detail_kegiatan.id_detail_kegiatan=' . $id);
		return $this->db->get()->result_array();
	}
	public function getOnlyActiveKategoriBerkasForBerkas()
	{
		$this->db->SELECT('s1_detail_kegiatan.*, s1_kegiatan_hmj.nama_kegiatan');
		$this->db->FROM('s1_detail_kegiatan');
		$this->db->JOIN('s1_kegiatan_hmj', 's1_kegiatan_hmj.id_kegiatan_hmj = s1_detail_kegiatan.id_kegiatan_hmj');
		$this->db->JOIN('s1_hmj', 's1_kegiatan_hmj.id_hmj = s1_hmj.id_hmj');
		$this->db->WHERE('s1_hmj.status_pakai= "1"');
		return $this->db->get()->result_array();
	}
	public function getActiveBerkas()
	{
		$this->db->SELECT('s1_detail_kegiatan.*,s1_kegiatan_hmj.nama_kegiatan');
		$this->db->FROM('s1_detail_kegiatan');
		$this->db->JOIN('s1_kegiatan_hmj', 's1_kegiatan_hmj.id_kegiatan_hmj = s1_detail_kegiatan.id_kegiatan_hmj');
		$this->db->JOIN('s1_hmj', 's1_kegiatan_hmj.id_hmj = s1_hmj.id_hmj');
		$this->db->WHERE('s1_hmj.status_pakai= "1"');
		return $this->db->get()->result_array();
	}
	public function rowNamaBerkas($data)
	{
		return $this->db->where('nama_repositori=' . "'$data'")->get('s1_detail_kegiatan')->num_rows();
	}
	public function getNamaKepengurusanForBerkas($id)
	{
		$this->db->select('s1_hmj.nama_hmj');
		$this->db->where('s1_detail_hmj.id_detail_hmj=' . $id);
		$this->db->from('s1_detail_hmj');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_detail_hmj.id_hmj');
		return $this->db->get()->result_array();
	}
	public function getNamaKategoriBerkasForBerkas($id)
	{
		$this->db->select('s1_kegiatan_hmj.nama_kegiatan');
		$this->db->where('s1_detail_kegiatan.id_kegiatan_hmj=' . $id);
		$this->db->from('s1_detail_kegiatan');
		$this->db->join('s1_kegiatan_hmj', 's1_kegiatan_hmj.id_kegiatan_hmj = s1_detail_kegiatan.id_kegiatan_hmj');
		return $this->db->get()->result_array();
	}
	public function getAllBerkasFromKategoriBerkas($id)
	{
		return $this->db->where('id_kegiatan_hmj=' . $id)->order_by("create_at", "desc")->get('s1_detail_kegiatan')->result_array();
	}
	// **************************************************************
	// End Detail Berkas
	// **************************************************************

	// **************************************************************
	// Start Informasi Web
	// **************************************************************
	public function getInformasiAll()
	{
		return $this->db->order_by('create_at', 'DESC')->get('s1_informasi')->result_array();
	}
	public function getInformasiWhere($id)
	{
		return $this->db->where('id_informasi=' . $id)->get('s1_informasi')->result_array();
	}
	public function tambahDataInformasi($foto_1, $foto_2, $foto_3, $file_doc, $namaKepengurusan)
	{
		$query = array(
			'foto1_informasi' => $foto_1,
			'foto2_informasi' => $foto_2,
			'foto3_informasi' => $foto_3,
			'video_informasi' => $this->input->post('video', false),
			'nama_kepengurusan' => $namaKepengurusan,
			'judul_informasi' => $this->input->post('judul_informasi', true),
			'kategori_informasi' => $this->input->post('kategori', true),
			'konten_informasi' => $this->input->post('konten', false),
			'file_informasi' => $file_doc,
			'create_at' => date("Y-m-d H:i:s"),
			'create_by' => $this->input->post('create_by', true),

		);
		return $this->db->insert('s1_informasi', $query);
	}
	public function deleteInformasi($id)
	{
		$row = $this->db->where('id_informasi', $id)->get('s1_informasi')->row();
		if ($this->db->delete('s1_informasi', array('id_informasi' => $id))) {
			unlink('assets/upload/Folder_informasi/berkas/' . $row->file_informasi);
			unlink('assets/upload/Folder_informasi/foto/' . $row->foto1_informasi);
			unlink('assets/upload/Folder_informasi/foto/' . $row->foto2_informasi);
			unlink('assets/upload/Folder_informasi/foto/' . $row->foto3_informasi);
			return true;
		}
	}
	// **************************************************************
	// End Informasi Web
	// **************************************************************


	// **************************************************************
	// Start Halaman Guest Website
	// **************************************************************
	public function getTotalPengurus($id)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('users_groups', 'users_groups.user_id = users.id', 'inner');
		$this->db->where('users_groups.group_id =' . $id);
		return $this->db->get()->num_rows();
	}
	public function getTotalSistem()
	{
		return $this->db->get('links')->num_rows();
	}
	public function getTotalKegiatan()
	{
		$this->db->select('*');
		$this->db->WHERE('s1_hmj.status_pakai= "1"');
		$this->db->from('s1_kegiatan_hmj');
		$this->db->join('s1_hmj', 's1_hmj.id_hmj = s1_kegiatan_hmj.id_hmj');
		return $this->db->get()->num_rows();
	}
	public function getTotalBerita()
	{
		$cari = "Karya Tulis";
		return $this->db->where('kategori_informasi=' . "'$cari'")->get('s1_informasi')->num_rows();
	}
	public function getTotalFile()
	{
		$this->db->SELECT('*');
		$this->db->FROM('s1_detail_kegiatan');
		$this->db->JOIN('s1_kegiatan_hmj', 's1_kegiatan_hmj.id_kegiatan_hmj = s1_detail_kegiatan.id_kegiatan_hmj');
		$this->db->JOIN('s1_hmj', 's1_kegiatan_hmj.id_hmj = s1_hmj.id_hmj');
		$this->db->WHERE('s1_hmj.status_pakai= "1"');
		return $this->db->get()->num_rows();
	}
	public function getPengumumanLimit()
	{
		$this->db->select('*');
		$this->db->from('s1_informasi');
		$this->db->where('kategori_informasi="Pengumuman"');
		$this->db->order_by('create_at', 'DESC');
		$this->db->limit(4);
		return $this->db->get()->result_array();
	}
	public function getRedaksiLimit()
	{
		$this->db->select('*');
		$this->db->from('s1_informasi');
		$this->db->where('kategori_informasi="Karya Tulis"');
		$this->db->or_where('kategori_informasi="Berita"');
		$this->db->order_by('create_at', 'DESC');
		$this->db->limit(4);
		return $this->db->get()->result_array();
	}
	public function getAllPengumuman()
	{
		$this->db->select('*');
		$this->db->from('s1_informasi');
		$this->db->where('kategori_informasi="Pengumuman"');
		$this->db->order_by('create_at', 'DESC');
		return $this->db->get()->result_array();
	}
	public function getAllBerita()
	{
		$this->db->select('*');
		$this->db->from('s1_informasi');
		$this->db->where('kategori_informasi="Karya Tulis"');
		$this->db->or_where('kategori_informasi="Berita"');
		$this->db->order_by('create_at', 'DESC');
		return $this->db->get()->result_array();
	}
	public function getDetailBeritaWhere($id)
	{
		return $this->db->where('id_informasi=' . $id)->get('s1_informasi')->result_array();
	}
	public function rowBerita()
	{
		return $this->db->where('kategori_informasi="Berita"')->get('s1_informasi')->num_rows();
	}
	public function rowKaryaTulis()
	{
		return $this->db->where('kategori_informasi="Karya Tulis"')->get('s1_informasi')->num_rows();
	}
	public function getDetailPengumumanWhere($id)
	{
		return $this->db->where('id_informasi=' . $id)->get('s1_informasi')->result_array();
	}
	// **************************************************************
	// End Halaman Guest Website
	// **************************************************************

}
