<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('pic_model');
		$this->load->library('form_validation');
		$this->load->helper('file');
		$this->load->helper('url');
	}

	public function form(){
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->load->view('header_user');
			$this->load->view('upload_form_user');
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function file_data(){
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {

			$this->form_validation->set_rules('nik', 'NIK', 'required|is_natural|is_unique[identitas.nik]|exact_length[16]');
			$this->form_validation->set_message('required', '{field} tidak boleh kosong');
			$this->form_validation->set_message('is_natural', '{field} hanya boleh berupa angka');
			$this->form_validation->set_message('is_unique', '{field} sudah tersimpan di dalam database, harap masukkan {field} lainnya');
			$this->form_validation->set_message('exact_length', '{field} harus memiliki panjang {param} digit');

	    if ($this->form_validation->run() == FALSE){
				$this->load->view('header_user');
				$this->load->view('upload_form_user');
				$this->load->view('footer');
			} else {
				$data['nik'] = $this->input->post('nik');
				$data['nama'] = $this->input->post('nama');
				$data['jeniskelamin'] = $this->input->post('jeniskelamin');
				$data['tempatlahir'] = $this->input->post('tempatlahir');
				$data['tanggallahir'] = $this->input->post('tanggallahir');
				$data['kecamatan'] = $this->input->post('kecamatan');
				$data['kelurahan'] = $this->input->post('kelurahan');
				$data['alamat'] = $this->input->post('alamat');
				$data['keterangan'] = $this->input->post('keterangan');
				if (!empty($this->input->post('jenisprogram'))) {
					$array = $this->input->post('jenisprogram[]');
		    	$data['jenisprogram'] = implode(', ',$array);
				} else {
					$data['jenisprogram'] = $this->input->post('jenisprogram[]');
				}
				
				$config['upload_path']          = APPPATH. '../assets/uploads/wajah/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 10000;
				$config['file_ext_tolower']			= true;

				$this->load->library('upload', $config);
					
				if ($this->upload->do_upload('fotowajah')) {
					$upload_data = $this->upload->data();
					$data['fotowajah'] = $upload_data['file_name'];
				}

				$config2['upload_path']          = APPPATH. '../assets/uploads/rumah/';
				$config2['allowed_types']        = 'gif|jpg|png';
				$config2['max_size']             = 10000;
				$config2['file_ext_tolower']			= true;

				$this->upload->initialize($config2);
				$this->load->library('upload', $config2);
				if ($this->upload->do_upload('fotorumah')) {
					$upload_data_rumah = $this->upload->data();
					$data['fotorumah'] = $upload_data_rumah['file_name'];
				}

				$this->pic_model->store_pic_data($data);

				redirect('/');
			}
		} else {
			header("location:" .base_url());
		}
	}

	public function index()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->load->model('pic_model');
			$data['picture_list'] = $this->pic_model->get_all_pics();
			
			// $data['picture_list'] = $this->db->get('identitas')->result();
			$data['filter_kecamatan'] = "";
			$data['filter_kelurahan'] = "";

			$this->load->view('header_user');
			$this->load->view('picture_list_user', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function detail( $id = NULL )	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->db->where('id', $id);
			$data['picture_list'] = $this->db->get('identitas')->result();

			$this->load->view('header_user');
			$this->load->view('detail_user', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function daerah() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$filter_kecamatan = $this->input->post('filter_kecamatan');
			$filter_kelurahan = $this->input->post('filter_kelurahan');

			if (empty($filter_kecamatan) && empty($filter_kelurahan)) {
			$this->load->model('pic_model');

			$data['picture_list'] = $this->pic_model->get_all_pics();
			$data['filter_kecamatan'] = "";
			$data['filter_kelurahan'] = "";

			$this->load->view('header_user');
			$this->load->view('picture_list_user', $data);
			$this->load->view('footer');
			
			} else if (empty($filter_kelurahan)) {

				$this->db->where('kecamatan', $filter_kecamatan);
				$data['picture_list'] = $this->db->get('identitas')->result();

				$data['filter_kecamatan'] = $filter_kecamatan;
				$data['filter_kelurahan'] = $filter_kelurahan;

				$this->load->view('header_user');
				$this->load->view('picture_list_user', $data);
				$this->load->view('footer');
			
			} else {		
				$this->db->where('kecamatan', $filter_kecamatan);
				$this->db->where('kelurahan', $filter_kelurahan);
				$data['picture_list'] = $this->db->get('identitas')->result();

				$data['filter_kecamatan'] = $filter_kecamatan;
				$data['filter_kelurahan'] = $filter_kelurahan;

				$this->load->view('header_user');
				$this->load->view('picture_list_user', $data);
				$this->load->view('footer');
			}
		} else {
			header("location:" .base_url());
		}	
	}
	
	public function update( $id = NULL ) {
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->db->where('id', $id);
			$data['picture_list'] = $this->db->get('identitas')->result();
			$this->load->view('header_user');
			$this->load->view('update_user', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function action_update($id = NULL) {
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			// $data['nik'] = $this->input->post('nik');
			$data['nama'] = $this->input->post('nama');
			$data['jeniskelamin'] = $this->input->post('jeniskelamin');
			$data['tempatlahir'] = $this->input->post('tempatlahir');
			$data['tanggallahir'] = $this->input->post('tanggallahir');
			$data['kecamatan'] = $this->input->post('kecamatan');
			$data['kelurahan'] = $this->input->post('kelurahan');
			$data['alamat'] = $this->input->post('alamat');
			$data['keterangan'] = $this->input->post('keterangan');
			$array = $this->input->post('jenisprogram[]');
	  	$data['jenisprogram'] = implode(', ',$array);

			$config['upload_path']          = APPPATH. '../assets/uploads/wajah/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;

			$this->load->library('upload', $config);
				
			if ($this->upload->do_upload('fotowajah')) {
				$upload_data = $this->upload->data();
				$data['fotowajah'] = $upload_data['file_name'];
			}

			$config2['upload_path']          = APPPATH. '../assets/uploads/rumah/';
			$config2['allowed_types']        = 'gif|jpg|png';
			$config2['max_size']             = 10000;

			$this->upload->initialize($config2);
			$this->load->library('upload', $config2);
			if ($this->upload->do_upload('fotorumah')) {
				$upload_data_rumah = $this->upload->data();
				$data['fotorumah'] = $upload_data_rumah['file_name'];
			}

			$this->pic_model->model_update($data, $id);

			redirect('/');

		} else {
			header("location:" .base_url());
		}
	}

	public function kecamatan()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->db->where('kecamatan', 'Bogor-Tengah');
			$data['bogor_tengah'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kecamatan', 'Bogor-Utara');
			$data['bogor_utara'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kecamatan', 'Bogor-Timur');
			$data['bogor_timur'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kecamatan', 'Bogor-Selatan');
			$data['bogor_selatan'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kecamatan', 'Bogor-Barat');
			$data['bogor_barat'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kecamatan', 'Bogor-Sareal');
			$data['bogor_sareal'] = $this->db->get('identitas')->num_rows();

			$data['total_kecamatan'] = $data['bogor_tengah'] + $data['bogor_utara'] + $data['bogor_timur'] + $data['bogor_selatan'] + $data['bogor_barat'] + $data['bogor_sareal'];

			if ($data['total_kecamatan'] == 0) {
				$data['total_kecamatan'] = 0.0000001;
			}		

			$data['persen_bogor_tengah'] = ($data['bogor_tengah'] * 100) / $data['total_kecamatan'];
			$data['persen_bogor_tengah'] = round($data['persen_bogor_tengah'], 0);

			$data['persen_bogor_utara'] = ($data['bogor_utara'] * 100) / $data['total_kecamatan'];
			$data['persen_bogor_utara'] = round($data['persen_bogor_utara'], 0);

			$data['persen_bogor_timur'] = ($data['bogor_timur'] * 100) / $data['total_kecamatan'];
			$data['persen_bogor_timur'] = round($data['persen_bogor_timur'], 0);

			$data['persen_bogor_selatan'] = ($data['bogor_selatan'] * 100) / $data['total_kecamatan'];
			$data['persen_bogor_selatan'] = round($data['persen_bogor_selatan'], 0);

			$data['persen_bogor_barat'] = ($data['bogor_barat'] * 100) / $data['total_kecamatan'];
			$data['persen_bogor_barat'] = round($data['persen_bogor_barat'], 0);

			$data['persen_bogor_sareal'] = ($data['bogor_sareal'] * 100) / $data['total_kecamatan'];
			$data['persen_bogor_sareal'] = round($data['persen_bogor_sareal'], 0);			

			$this->load->view('header_user');
			$this->load->view('kecamatan', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function kecamatan_print() {
			$this->db->where('kecamatan', 'Bogor-Tengah');
			$data['bogor_tengah'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kecamatan', 'Bogor-Utara');
			$data['bogor_utara'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kecamatan', 'Bogor-Timur');
			$data['bogor_timur'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kecamatan', 'Bogor-Selatan');
			$data['bogor_selatan'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kecamatan', 'Bogor-Barat');
			$data['bogor_barat'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kecamatan', 'Bogor-Sareal');
			$data['bogor_sareal'] = $this->db->get('identitas')->num_rows();

			$data['total_kecamatan'] = $data['bogor_tengah'] + $data['bogor_utara'] + $data['bogor_timur'] + $data['bogor_selatan'] + $data['bogor_barat'] + $data['bogor_sareal'];

			if ($data['total_kecamatan'] == 0) {
				$data['total_bogor_utara'] = 0.0000001;
			}		
			
			$data['persen_bogor_tengah'] = ($data['bogor_tengah'] * 100) / $data['total_kecamatan'];
			$data['persen_bogor_tengah'] = round($data['persen_bogor_tengah'], 0);

			$data['persen_bogor_utara'] = ($data['bogor_utara'] * 100) / $data['total_kecamatan'];
			$data['persen_bogor_utara'] = round($data['persen_bogor_utara'], 0);

			$data['persen_bogor_timur'] = ($data['bogor_timur'] * 100) / $data['total_kecamatan'];
			$data['persen_bogor_timur'] = round($data['persen_bogor_timur'], 0);

			$data['persen_bogor_selatan'] = ($data['bogor_selatan'] * 100) / $data['total_kecamatan'];
			$data['persen_bogor_selatan'] = round($data['persen_bogor_selatan'], 0);

			$data['persen_bogor_barat'] = ($data['bogor_barat'] * 100) / $data['total_kecamatan'];
			$data['persen_bogor_barat'] = round($data['persen_bogor_barat'], 0);

			$data['persen_bogor_sareal'] = ($data['bogor_sareal'] * 100) / $data['total_kecamatan'];
			$data['persen_bogor_sareal'] = round($data['persen_bogor_sareal'], 0);

			$this->load->view('header_print');
			$this->load->view('kecamatan_print', $data);
			$this->load->view('footer_print');
	}


	public function bogortengah()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->db->where('kelurahan', 'Babakan');
			$data['babakan'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Babakan Pasar');
			$data['babakan_pasar'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cibogor');
			$data['cibogor'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Ciwaringin');
			$data['ciwaringin'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Gudang');
			$data['gudang'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kebon Kelapa');
			$data['kebon_kelapa'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Pabaton');
			$data['pabaton'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Paledang');
			$data['paledang'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Panaragan');
			$data['panaragan'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sempur');
			$data['sempur'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Tegallega');
			$data['tegallega'] = $this->db->get('identitas')->num_rows();

			$data['total_bogor_tengah'] = $data['babakan'] + $data['babakan_pasar'] + $data['cibogor'] + $data['ciwaringin'] + $data['gudang'] + $data['kebon_kelapa'] + $data['pabaton'] + $data['paledang'] + $data['panaragan'] + $data['sempur'] + $data['tegallega'];

			if ($data['total_bogor_tengah'] == 0) {
				$data['total_bogor_tengah'] = 0.0000001;
			}		

			$data['persen_babakan'] = ($data['babakan'] * 100) / $data['total_bogor_tengah'];
			$data['persen_babakan'] = round($data['persen_babakan'], 0);

			$data['persen_babakan_pasar'] = ($data['babakan_pasar'] * 100) / $data['total_bogor_tengah'];
			$data['persen_babakan_pasar'] = round($data['persen_babakan_pasar'], 0);

			$data['persen_cibogor'] = ($data['cibogor'] * 100) / $data['total_bogor_tengah'];
			$data['persen_cibogor'] = round($data['persen_cibogor'], 0);

			$data['persen_ciwaringin'] = ($data['ciwaringin'] * 100) / $data['total_bogor_tengah'];
			$data['persen_ciwaringin'] = round($data['persen_ciwaringin'], 0);

			$data['persen_gudang'] = ($data['gudang'] * 100) / $data['total_bogor_tengah'];
			$data['persen_gudang'] = round($data['persen_gudang'], 0);

			$data['persen_kebon_kelapa'] = ($data['kebon_kelapa'] * 100) / $data['total_bogor_tengah'];
			$data['persen_kebon_kelapa'] = round($data['persen_kebon_kelapa'], 0);

			$data['persen_pabaton'] = ($data['pabaton'] * 100) / $data['total_bogor_tengah'];
			$data['persen_pabaton'] = round($data['persen_pabaton'], 0);

			$data['persen_paledang'] = ($data['paledang'] * 100) / $data['total_bogor_tengah'];
			$data['persen_paledang'] = round($data['persen_paledang'], 0);

			$data['persen_panaragan'] = ($data['panaragan'] * 100) / $data['total_bogor_tengah'];
			$data['persen_panaragan'] = round($data['persen_panaragan'], 0);

			$data['persen_sempur'] = ($data['sempur'] * 100) / $data['total_bogor_tengah'];
			$data['persen_sempur'] = round($data['persen_sempur'], 0);

			$data['persen_tegallega'] = ($data['tegallega'] * 100) / $data['total_bogor_tengah'];
			$data['persen_tegallega'] = round($data['persen_tegallega'], 0);

			$this->load->view('header_user');
			$this->load->view('bogortengah', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogortengah_print()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {
			$this->db->where('kelurahan', 'Babakan');
			$data['babakan'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Babakan Pasar');
			$data['babakan_pasar'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cibogor');
			$data['cibogor'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Ciwaringin');
			$data['ciwaringin'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Gudang');
			$data['gudang'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kebon Kelapa');
			$data['kebon_kelapa'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Pabaton');
			$data['pabaton'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Paledang');
			$data['paledang'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Panaragan');
			$data['panaragan'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sempur');
			$data['sempur'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Tegallega');
			$data['tegallega'] = $this->db->get('identitas')->num_rows();

			$data['total_bogor_tengah'] = $data['babakan'] + $data['babakan_pasar'] + $data['cibogor'] + $data['ciwaringin'] + $data['gudang'] + $data['kebon_kelapa'] + $data['pabaton'] + $data['paledang'] + $data['panaragan'] + $data['sempur'] + $data['tegallega'];

			if ($data['total_bogor_tengah'] == 0) {
				$data['total_bogor_tengah'] = 0.0000001;
			}		

			$data['persen_babakan'] = ($data['babakan'] * 100) / $data['total_bogor_tengah'];
			$data['persen_babakan'] = round($data['persen_babakan'], 0);

			$data['persen_babakan_pasar'] = ($data['babakan_pasar'] * 100) / $data['total_bogor_tengah'];
			$data['persen_babakan_pasar'] = round($data['persen_babakan_pasar'], 0);

			$data['persen_cibogor'] = ($data['cibogor'] * 100) / $data['total_bogor_tengah'];
			$data['persen_cibogor'] = round($data['persen_cibogor'], 0);

			$data['persen_ciwaringin'] = ($data['ciwaringin'] * 100) / $data['total_bogor_tengah'];
			$data['persen_ciwaringin'] = round($data['persen_ciwaringin'], 0);

			$data['persen_gudang'] = ($data['gudang'] * 100) / $data['total_bogor_tengah'];
			$data['persen_gudang'] = round($data['persen_gudang'], 0);

			$data['persen_kebon_kelapa'] = ($data['kebon_kelapa'] * 100) / $data['total_bogor_tengah'];
			$data['persen_kebon_kelapa'] = round($data['persen_kebon_kelapa'], 0);

			$data['persen_pabaton'] = ($data['pabaton'] * 100) / $data['total_bogor_tengah'];
			$data['persen_pabaton'] = round($data['persen_pabaton'], 0);

			$data['persen_paledang'] = ($data['paledang'] * 100) / $data['total_bogor_tengah'];
			$data['persen_paledang'] = round($data['persen_paledang'], 0);

			$data['persen_panaragan'] = ($data['panaragan'] * 100) / $data['total_bogor_tengah'];
			$data['persen_panaragan'] = round($data['persen_panaragan'], 0);

			$data['persen_sempur'] = ($data['sempur'] * 100) / $data['total_bogor_tengah'];
			$data['persen_sempur'] = round($data['persen_sempur'], 0);

			$data['persen_tegallega'] = ($data['tegallega'] * 100) / $data['total_bogor_tengah'];
			$data['persen_tegallega'] = round($data['persen_tegallega'], 0);

			$this->load->view('header_print');
			$this->load->view('bogortengah_print', $data);
			$this->load->view('footer_print');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogorutara()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->db->where('kelurahan', 'Bantarjati');
			$data['bantarjati'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cibuluh');
			$data['cibuluh'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Ciluar');
			$data['ciluar'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cimahpar');
			$data['cimahpar'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Ciparigi');
			$data['ciparigi'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kedung Halang');
			$data['kedung_halang'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Tanah Baru');
			$data['tanah_baru'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Tegal Gundil');
			$data['tegal_gundil'] = $this->db->get('identitas')->num_rows();

			$data['total_bogor_utara'] = $data['bantarjati'] + $data['cibuluh'] + $data['ciluar'] + $data['cimahpar'] + $data['ciparigi'] + $data['kedung_halang'] + $data['tanah_baru'] + $data['tegal_gundil'];

			if ($data['total_bogor_utara'] == 0) {
				$data['total_bogor_utara'] = 0.0000001;
			}		

			$data['persen_bantarjati'] = ($data['bantarjati'] * 100) / $data['total_bogor_utara'];
			$data['persen_bantarjati'] = round($data['persen_bantarjati'], 0);

			$data['persen_cibuluh'] = ($data['cibuluh'] * 100) / $data['total_bogor_utara'];
			$data['persen_cibuluh'] = round($data['persen_cibuluh'], 0);

			$data['persen_ciluar'] = ($data['ciluar'] * 100) / $data['total_bogor_utara'];
			$data['persen_ciluar'] = round($data['persen_ciluar'], 0);

			$data['persen_cimahpar'] = ($data['cimahpar'] * 100) / $data['total_bogor_utara'];
			$data['persen_cimahpar'] = round($data['persen_cimahpar'], 0);

			$data['persen_ciparigi'] = ($data['ciparigi'] * 100) / $data['total_bogor_utara'];
			$data['persen_ciparigi'] = round($data['persen_ciparigi'], 0);

			$data['persen_kedung_halang'] = ($data['kedung_halang'] * 100) / $data['total_bogor_utara'];
			$data['persen_kedung_halang'] = round($data['persen_kedung_halang'], 0);

			$data['persen_tanah_baru'] = ($data['tanah_baru'] * 100) / $data['total_bogor_utara'];
			$data['persen_tanah_baru'] = round($data['persen_tanah_baru'], 0);

			$data['persen_tegal_gundil'] = ($data['tegal_gundil'] * 100) / $data['total_bogor_utara'];
			$data['persen_tegal_gundil'] = round($data['persen_tegal_gundil'], 0);

			$this->load->view('header_user');
			$this->load->view('bogorutara', $data);
			$this->load->view('footer');

		} else {
			header("location:" .base_url());
		}
	}

	public function bogorutara_print()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->db->where('kelurahan', 'Bantarjati');
			$data['bantarjati'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cibuluh');
			$data['cibuluh'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Ciluar');
			$data['ciluar'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cimahpar');
			$data['cimahpar'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Ciparigi');
			$data['ciparigi'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kedung Halang');
			$data['kedung_halang'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Tanah Baru');
			$data['tanah_baru'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Tegal Gundil');
			$data['tegal_gundil'] = $this->db->get('identitas')->num_rows();

			$data['total_bogor_utara'] = $data['bantarjati'] + $data['cibuluh'] + $data['ciluar'] + $data['cimahpar'] + $data['ciparigi'] + $data['kedung_halang'] + $data['tanah_baru'] + $data['tegal_gundil'];

			if ($data['total_bogor_utara'] == 0) {
				$data['total_bogor_utara'] = 0.0000001;
			}		

			$data['persen_bantarjati'] = ($data['bantarjati'] * 100) / $data['total_bogor_utara'];
			$data['persen_bantarjati'] = round($data['persen_bantarjati'], 0);

			$data['persen_cibuluh'] = ($data['cibuluh'] * 100) / $data['total_bogor_utara'];
			$data['persen_cibuluh'] = round($data['persen_cibuluh'], 0);

			$data['persen_ciluar'] = ($data['ciluar'] * 100) / $data['total_bogor_utara'];
			$data['persen_ciluar'] = round($data['persen_ciluar'], 0);

			$data['persen_cimahpar'] = ($data['cimahpar'] * 100) / $data['total_bogor_utara'];
			$data['persen_cimahpar'] = round($data['persen_cimahpar'], 0);

			$data['persen_ciparigi'] = ($data['ciparigi'] * 100) / $data['total_bogor_utara'];
			$data['persen_ciparigi'] = round($data['persen_ciparigi'], 0);

			$data['persen_kedung_halang'] = ($data['kedung_halang'] * 100) / $data['total_bogor_utara'];
			$data['persen_kedung_halang'] = round($data['persen_kedung_halang'], 0);

			$data['persen_tanah_baru'] = ($data['tanah_baru'] * 100) / $data['total_bogor_utara'];
			$data['persen_tanah_baru'] = round($data['persen_tanah_baru'], 0);

			$data['persen_tegal_gundil'] = ($data['tegal_gundil'] * 100) / $data['total_bogor_utara'];
			$data['persen_tegal_gundil'] = round($data['persen_tegal_gundil'], 0);

			$this->load->view('header_print');
			$this->load->view('bogorutara_print', $data);
			$this->load->view('footer_print');

		} else {
			header("location:" .base_url());
		}
	}

	public function bogortimur()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->db->where('kelurahan', 'Baranangsiang');
			$data['baranangsiang'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Katulampa');
			$data['katulampa'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sindangrasa');
			$data['sindangrasa'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sindangsari');
			$data['sindangsari'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sukasari');
			$data['sukasari'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Tajur');
			$data['tajur'] = $this->db->get('identitas')->num_rows();

			$data['total_bogor_timur'] = $data['baranangsiang'] + $data['katulampa'] + $data['sindangrasa'] + $data['sindangsari'] + $data['sukasari'] + $data['tajur'];

			if ($data['total_bogor_timur'] == 0) {
				$data['total_bogor_timur'] = 0.0000001;
			}	
			
			$data['persen_baranangsiang'] = ($data['baranangsiang'] * 100) / $data['total_bogor_timur'];
			$data['persen_baranangsiang'] = round($data['persen_baranangsiang'], 0);

			$data['persen_katulampa'] = ($data['katulampa'] * 100) / $data['total_bogor_timur'];
			$data['persen_katulampa'] = round($data['persen_katulampa'], 0);

			$data['persen_sindangrasa'] = ($data['sindangrasa'] * 100) / $data['total_bogor_timur'];
			$data['persen_sindangrasa'] = round($data['persen_sindangrasa'], 0);

			$data['persen_sindangsari'] = ($data['sindangsari'] * 100) / $data['total_bogor_timur'];
			$data['persen_sindangsari'] = round($data['persen_sindangsari'], 0);

			$data['persen_sukasari'] = ($data['sukasari'] * 100) / $data['total_bogor_timur'];
			$data['persen_sukasari'] = round($data['persen_sukasari'], 0);

			$data['persen_tajur'] = ($data['tajur'] * 100) / $data['total_bogor_timur'];
			$data['persen_tajur'] = round($data['persen_tajur'], 0);

			$this->load->view('header_user');
			$this->load->view('bogortimur', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogortimur_print()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->db->where('kelurahan', 'Baranangsiang');
			$data['baranangsiang'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Katulampa');
			$data['katulampa'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sindangrasa');
			$data['sindangrasa'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sindangsari');
			$data['sindangsari'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sukasari');
			$data['sukasari'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Tajur');
			$data['tajur'] = $this->db->get('identitas')->num_rows();

			$data['total_bogor_timur'] = $data['baranangsiang'] + $data['katulampa'] + $data['sindangrasa'] + $data['sindangsari'] + $data['sukasari'] + $data['tajur'];

			if ($data['total_bogor_timur'] == 0) {
				$data['total_bogor_timur'] = 0.0000001;
			}	
			
			$data['persen_baranangsiang'] = ($data['baranangsiang'] * 100) / $data['total_bogor_timur'];
			$data['persen_baranangsiang'] = round($data['persen_baranangsiang'], 0);

			$data['persen_katulampa'] = ($data['katulampa'] * 100) / $data['total_bogor_timur'];
			$data['persen_katulampa'] = round($data['persen_katulampa'], 0);

			$data['persen_sindangrasa'] = ($data['sindangrasa'] * 100) / $data['total_bogor_timur'];
			$data['persen_sindangrasa'] = round($data['persen_sindangrasa'], 0);

			$data['persen_sindangsari'] = ($data['sindangsari'] * 100) / $data['total_bogor_timur'];
			$data['persen_sindangsari'] = round($data['persen_sindangsari'], 0);

			$data['persen_sukasari'] = ($data['sukasari'] * 100) / $data['total_bogor_timur'];
			$data['persen_sukasari'] = round($data['persen_sukasari'], 0);

			$data['persen_tajur'] = ($data['tajur'] * 100) / $data['total_bogor_timur'];
			$data['persen_tajur'] = round($data['persen_tajur'], 0);

			$this->load->view('header_print');
			$this->load->view('bogortimur_print', $data);
			$this->load->view('footer_print');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogorselatan()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->db->where('kelurahan', 'Batutulis');
			$data['batutulis'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Bojongkerta');
			$data['bojongkerta'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Bondongan');
			$data['bondongan'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cikaret');
			$data['cikaret'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cipaku');
			$data['cipaku'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Empang');
			$data['empang'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Ganteng');
			$data['ganteng'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Harjasari');
			$data['harjasari'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kertamaya');
			$data['kertamaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Lawang Gintung');
			$data['lawang_gintung'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Muarasari');
			$data['muarasari'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Mulyaharja');
			$data['mulyaharja'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Pakuan');
			$data['pakuan'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Pamoyanan');
			$data['pamoyanan'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Rancamaya');
			$data['rancamaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Ranggamekar');
			$data['ranggamekar'] = $this->db->get('identitas')->num_rows();

			$data['total_bogor_selatan'] = $data['batutulis'] + $data['bojongkerta'] + $data['bondongan'] + $data['cikaret'] + $data['cipaku'] + $data['empang'] + $data['ganteng'] + $data['harjasari'] + $data['kertamaya'] + $data['lawang_gintung'] + $data['muarasari'] + $data['mulyaharja'] + $data['pakuan'] + $data['pamoyanan'] + $data['rancamaya'] + $data['ranggamekar'];

			if ($data['total_bogor_selatan'] == 0) {
				$data['total_bogor_selatan'] = 0.0000001;
			}	
			
			$data['persen_batutulis'] = ($data['batutulis'] * 100) / $data['total_bogor_selatan'];
			$data['persen_batutulis'] = round($data['persen_batutulis'], 0);

			$data['persen_bojongkerta'] = ($data['bojongkerta'] * 100) / $data['total_bogor_selatan'];
			$data['persen_bojongkerta'] = round($data['persen_bojongkerta'], 0);

			$data['persen_bondongan'] = ($data['bondongan'] * 100) / $data['total_bogor_selatan'];
			$data['persen_bondongan'] = round($data['persen_bondongan'], 0);

			$data['persen_cikaret'] = ($data['cikaret'] * 100) / $data['total_bogor_selatan'];
			$data['persen_cikaret'] = round($data['persen_cikaret'], 0);

			$data['persen_cipaku'] = ($data['cipaku'] * 100) / $data['total_bogor_selatan'];
			$data['persen_cipaku'] = round($data['persen_cipaku'], 0);

			$data['persen_empang'] = ($data['empang'] * 100) / $data['total_bogor_selatan'];
			$data['persen_empang'] = round($data['persen_empang'], 0);

			$data['persen_ganteng'] = ($data['ganteng'] * 100) / $data['total_bogor_selatan'];
			$data['persen_ganteng'] = round($data['persen_ganteng'], 0);

			$data['persen_harjasari'] = ($data['harjasari'] * 100) / $data['total_bogor_selatan'];
			$data['persen_harjasari'] = round($data['persen_harjasari'], 0);

			$data['persen_kertamaya'] = ($data['kertamaya'] * 100) / $data['total_bogor_selatan'];
			$data['persen_kertamaya'] = round($data['persen_kertamaya'], 0);

			$data['persen_lawang_gintung'] = ($data['lawang_gintung'] * 100) / $data['total_bogor_selatan'];
			$data['persen_lawang_gintung'] = round($data['persen_lawang_gintung'], 0);

			$data['persen_muarasari'] = ($data['muarasari'] * 100) / $data['total_bogor_selatan'];
			$data['persen_muarasari'] = round($data['persen_muarasari'], 0);

			$data['persen_mulyaharja'] = ($data['mulyaharja'] * 100) / $data['total_bogor_selatan'];
			$data['persen_mulyaharja'] = round($data['persen_mulyaharja'], 0);

			$data['persen_pakuan'] = ($data['pakuan'] * 100) / $data['total_bogor_selatan'];
			$data['persen_pakuan'] = round($data['persen_pakuan'], 0);

			$data['persen_pamoyanan'] = ($data['pamoyanan'] * 100) / $data['total_bogor_selatan'];
			$data['persen_pamoyanan'] = round($data['persen_pamoyanan'], 0);

			$data['persen_rancamaya'] = ($data['rancamaya'] * 100) / $data['total_bogor_selatan'];
			$data['persen_rancamaya'] = round($data['persen_rancamaya'], 0);

			$data['persen_ranggamekar'] = ($data['ranggamekar'] * 100) / $data['total_bogor_selatan'];
			$data['persen_ranggamekar'] = round($data['persen_ranggamekar'], 0);

			$this->load->view('header_user');
			$this->load->view('bogorselatan', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogorselatan_print()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->db->where('kelurahan', 'Batutulis');
			$data['batutulis'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Bojongkerta');
			$data['bojongkerta'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Bondongan');
			$data['bondongan'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cikaret');
			$data['cikaret'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cipaku');
			$data['cipaku'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Empang');
			$data['empang'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Ganteng');
			$data['ganteng'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Harjasari');
			$data['harjasari'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kertamaya');
			$data['kertamaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Lawang Gintung');
			$data['lawang_gintung'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Muarasari');
			$data['muarasari'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Mulyaharja');
			$data['mulyaharja'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Pakuan');
			$data['pakuan'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Pamoyanan');
			$data['pamoyanan'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Rancamaya');
			$data['rancamaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Ranggamekar');
			$data['ranggamekar'] = $this->db->get('identitas')->num_rows();

			$data['total_bogor_selatan'] = $data['batutulis'] + $data['bojongkerta'] + $data['bondongan'] + $data['cikaret'] + $data['cipaku'] + $data['empang'] + $data['ganteng'] + $data['harjasari'] + $data['kertamaya'] + $data['lawang_gintung'] + $data['muarasari'] + $data['mulyaharja'] + $data['pakuan'] + $data['pamoyanan'] + $data['rancamaya'] + $data['ranggamekar'];

			if ($data['total_bogor_selatan'] == 0) {
				$data['total_bogor_selatan'] = 0.0000001;
			}	
			
			$data['persen_batutulis'] = ($data['batutulis'] * 100) / $data['total_bogor_selatan'];
			$data['persen_batutulis'] = round($data['persen_batutulis'], 0);

			$data['persen_bojongkerta'] = ($data['bojongkerta'] * 100) / $data['total_bogor_selatan'];
			$data['persen_bojongkerta'] = round($data['persen_bojongkerta'], 0);

			$data['persen_bondongan'] = ($data['bondongan'] * 100) / $data['total_bogor_selatan'];
			$data['persen_bondongan'] = round($data['persen_bondongan'], 0);

			$data['persen_cikaret'] = ($data['cikaret'] * 100) / $data['total_bogor_selatan'];
			$data['persen_cikaret'] = round($data['persen_cikaret'], 0);

			$data['persen_cipaku'] = ($data['cipaku'] * 100) / $data['total_bogor_selatan'];
			$data['persen_cipaku'] = round($data['persen_cipaku'], 0);

			$data['persen_empang'] = ($data['empang'] * 100) / $data['total_bogor_selatan'];
			$data['persen_empang'] = round($data['persen_empang'], 0);

			$data['persen_ganteng'] = ($data['ganteng'] * 100) / $data['total_bogor_selatan'];
			$data['persen_ganteng'] = round($data['persen_ganteng'], 0);

			$data['persen_harjasari'] = ($data['harjasari'] * 100) / $data['total_bogor_selatan'];
			$data['persen_harjasari'] = round($data['persen_harjasari'], 0);

			$data['persen_kertamaya'] = ($data['kertamaya'] * 100) / $data['total_bogor_selatan'];
			$data['persen_kertamaya'] = round($data['persen_kertamaya'], 0);

			$data['persen_lawang_gintung'] = ($data['lawang_gintung'] * 100) / $data['total_bogor_selatan'];
			$data['persen_lawang_gintung'] = round($data['persen_lawang_gintung'], 0);

			$data['persen_muarasari'] = ($data['muarasari'] * 100) / $data['total_bogor_selatan'];
			$data['persen_muarasari'] = round($data['persen_muarasari'], 0);

			$data['persen_mulyaharja'] = ($data['mulyaharja'] * 100) / $data['total_bogor_selatan'];
			$data['persen_mulyaharja'] = round($data['persen_mulyaharja'], 0);

			$data['persen_pakuan'] = ($data['pakuan'] * 100) / $data['total_bogor_selatan'];
			$data['persen_pakuan'] = round($data['persen_pakuan'], 0);

			$data['persen_pamoyanan'] = ($data['pamoyanan'] * 100) / $data['total_bogor_selatan'];
			$data['persen_pamoyanan'] = round($data['persen_pamoyanan'], 0);

			$data['persen_rancamaya'] = ($data['rancamaya'] * 100) / $data['total_bogor_selatan'];
			$data['persen_rancamaya'] = round($data['persen_rancamaya'], 0);

			$data['persen_ranggamekar'] = ($data['ranggamekar'] * 100) / $data['total_bogor_selatan'];
			$data['persen_ranggamekar'] = round($data['persen_ranggamekar'], 0);

			$this->load->view('header_print');
			$this->load->view('bogorselatan_print', $data);
			$this->load->view('footer_print');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogorbarat()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->db->where('kelurahan', 'Balumbang Jaya');
			$data['balumbang_jaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Bubulak');
			$data['bubulak'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cilendek Barat');
			$data['cilendek_barat'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cilendek Timur');
			$data['cilendek_timur'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Curuk');
			$data['curuk'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Curug Mekar');
			$data['curug_mekar'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Gunung Batu');
			$data['gunung_batu'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Loji');
			$data['loji'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Margajaya');
			$data['margajaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Menteng');
			$data['menteng'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Pasir Jaya');
			$data['pasir_jaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Pasir Kuda');
			$data['pasir_kuda'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Pasir Mulya');
			$data['pasir_mulya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Semplak');
			$data['semplak'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sindang Barang');
			$data['sindang_barang'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Situ');
			$data['situ'] = $this->db->get('identitas')->num_rows();

			$data['total_bogor_barat'] = $data['balumbang_jaya'] + $data['bubulak'] + $data['cilendek_barat'] + $data['cilendek_timur'] + $data['curuk'] + $data['curug_mekar'] + $data['gunung_batu'] + $data['loji'] + $data['margajaya'] + $data['menteng'] + $data['pasir_jaya'] + $data['pasir_kuda'] + $data['pasir_mulya'] + $data['semplak'] + $data['sindang_barang'] + $data['situ'];

			if ($data['total_bogor_barat'] == 0) {
				$data['total_bogor_barat'] = 0.0000001;
			}	
			
			$data['persen_balumbang_jaya'] = ($data['balumbang_jaya'] * 100) / $data['total_bogor_barat'];
			$data['persen_balumbang_jaya'] = round($data['persen_balumbang_jaya'], 0);

			$data['persen_bubulak'] = ($data['bubulak'] * 100) / $data['total_bogor_barat'];
			$data['persen_bubulak'] = round($data['persen_bubulak'], 0);

			$data['persen_cilendek_barat'] = ($data['cilendek_barat'] * 100) / $data['total_bogor_barat'];
			$data['persen_cilendek_barat'] = round($data['persen_cilendek_barat'], 0);

			$data['persen_cilendek_timur'] = ($data['cilendek_timur'] * 100) / $data['total_bogor_barat'];
			$data['persen_cilendek_timur'] = round($data['persen_cilendek_timur'], 0);

			$data['persen_curuk'] = ($data['curuk'] * 100) / $data['total_bogor_barat'];
			$data['persen_curuk'] = round($data['persen_curuk'], 0);

			$data['persen_curug_mekar'] = ($data['curug_mekar'] * 100) / $data['total_bogor_barat'];
			$data['persen_curug_mekar'] = round($data['persen_curug_mekar'], 0);

			$data['persen_gunung_batu'] = ($data['gunung_batu'] * 100) / $data['total_bogor_barat'];
			$data['persen_gunung_batu'] = round($data['persen_gunung_batu'], 0);

			$data['persen_loji'] = ($data['loji'] * 100) / $data['total_bogor_barat'];
			$data['persen_loji'] = round($data['persen_loji'], 0);

			$data['persen_margajaya'] = ($data['margajaya'] * 100) / $data['total_bogor_barat'];
			$data['persen_margajaya'] = round($data['persen_margajaya'], 0);

			$data['persen_menteng'] = ($data['menteng'] * 100) / $data['total_bogor_barat'];
			$data['persen_menteng'] = round($data['persen_menteng'], 0);

			$data['persen_pasir_jaya'] = ($data['pasir_jaya'] * 100) / $data['total_bogor_barat'];
			$data['persen_pasir_jaya'] = round($data['persen_pasir_jaya'], 0);

			$data['persen_pasir_kuda'] = ($data['pasir_kuda'] * 100) / $data['total_bogor_barat'];
			$data['persen_pasir_kuda'] = round($data['persen_pasir_kuda'], 0);

			$data['persen_pasir_mulya'] = ($data['pasir_mulya'] * 100) / $data['total_bogor_barat'];
			$data['persen_pasir_mulya'] = round($data['persen_pasir_mulya'], 0);

			$data['persen_semplak'] = ($data['semplak'] * 100) / $data['total_bogor_barat'];
			$data['persen_semplak'] = round($data['persen_semplak'], 0);

			$data['persen_sindang_barang'] = ($data['sindang_barang'] * 100) / $data['total_bogor_barat'];
			$data['persen_sindang_barang'] = round($data['persen_sindang_barang'], 0);

			$data['persen_situ'] = ($data['situ'] * 100) / $data['total_bogor_barat'];
			$data['persen_situ'] = round($data['persen_situ'], 0);

			$this->load->view('header_user');
			$this->load->view('bogorbarat', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogorbarat_print()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->db->where('kelurahan', 'Balumbang Jaya');
			$data['balumbang_jaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Bubulak');
			$data['bubulak'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cilendek Barat');
			$data['cilendek_barat'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Cilendek Timur');
			$data['cilendek_timur'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Curuk');
			$data['curuk'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Curug Mekar');
			$data['curug_mekar'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Gunung Batu');
			$data['gunung_batu'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Loji');
			$data['loji'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Margajaya');
			$data['margajaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Menteng');
			$data['menteng'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Pasir Jaya');
			$data['pasir_jaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Pasir Kuda');
			$data['pasir_kuda'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Pasir Mulya');
			$data['pasir_mulya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Semplak');
			$data['semplak'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sindang Barang');
			$data['sindang_barang'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Situ');
			$data['situ'] = $this->db->get('identitas')->num_rows();

			$data['total_bogor_barat'] = $data['balumbang_jaya'] + $data['bubulak'] + $data['cilendek_barat'] + $data['cilendek_timur'] + $data['curuk'] + $data['curug_mekar'] + $data['gunung_batu'] + $data['loji'] + $data['margajaya'] + $data['menteng'] + $data['pasir_jaya'] + $data['pasir_kuda'] + $data['pasir_mulya'] + $data['semplak'] + $data['sindang_barang'] + $data['situ'];

			if ($data['total_bogor_barat'] == 0) {
				$data['total_bogor_barat'] = 0.0000001;
			}	
			
			$data['persen_balumbang_jaya'] = ($data['balumbang_jaya'] * 100) / $data['total_bogor_barat'];
			$data['persen_balumbang_jaya'] = round($data['persen_balumbang_jaya'], 0);

			$data['persen_bubulak'] = ($data['bubulak'] * 100) / $data['total_bogor_barat'];
			$data['persen_bubulak'] = round($data['persen_bubulak'], 0);

			$data['persen_cilendek_barat'] = ($data['cilendek_barat'] * 100) / $data['total_bogor_barat'];
			$data['persen_cilendek_barat'] = round($data['persen_cilendek_barat'], 0);

			$data['persen_cilendek_timur'] = ($data['cilendek_timur'] * 100) / $data['total_bogor_barat'];
			$data['persen_cilendek_timur'] = round($data['persen_cilendek_timur'], 0);

			$data['persen_curuk'] = ($data['curuk'] * 100) / $data['total_bogor_barat'];
			$data['persen_curuk'] = round($data['persen_curuk'], 0);

			$data['persen_curug_mekar'] = ($data['curug_mekar'] * 100) / $data['total_bogor_barat'];
			$data['persen_curug_mekar'] = round($data['persen_curug_mekar'], 0);

			$data['persen_gunung_batu'] = ($data['gunung_batu'] * 100) / $data['total_bogor_barat'];
			$data['persen_gunung_batu'] = round($data['persen_gunung_batu'], 0);

			$data['persen_loji'] = ($data['loji'] * 100) / $data['total_bogor_barat'];
			$data['persen_loji'] = round($data['persen_loji'], 0);

			$data['persen_margajaya'] = ($data['margajaya'] * 100) / $data['total_bogor_barat'];
			$data['persen_margajaya'] = round($data['persen_margajaya'], 0);

			$data['persen_menteng'] = ($data['menteng'] * 100) / $data['total_bogor_barat'];
			$data['persen_menteng'] = round($data['persen_menteng'], 0);

			$data['persen_pasir_jaya'] = ($data['pasir_jaya'] * 100) / $data['total_bogor_barat'];
			$data['persen_pasir_jaya'] = round($data['persen_pasir_jaya'], 0);

			$data['persen_pasir_kuda'] = ($data['pasir_kuda'] * 100) / $data['total_bogor_barat'];
			$data['persen_pasir_kuda'] = round($data['persen_pasir_kuda'], 0);

			$data['persen_pasir_mulya'] = ($data['pasir_mulya'] * 100) / $data['total_bogor_barat'];
			$data['persen_pasir_mulya'] = round($data['persen_pasir_mulya'], 0);

			$data['persen_semplak'] = ($data['semplak'] * 100) / $data['total_bogor_barat'];
			$data['persen_semplak'] = round($data['persen_semplak'], 0);

			$data['persen_sindang_barang'] = ($data['sindang_barang'] * 100) / $data['total_bogor_barat'];
			$data['persen_sindang_barang'] = round($data['persen_sindang_barang'], 0);

			$data['persen_situ'] = ($data['situ'] * 100) / $data['total_bogor_barat'];
			$data['persen_situ'] = round($data['persen_situ'], 0);

			$this->load->view('header_print');
			$this->load->view('bogorbarat_print', $data);
			$this->load->view('footer_print');
		} else {
			header("location:" .base_url());
		}
	}

	public function tanahsareal()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {

			$this->db->where('kelurahan', 'Cibadak');
			$data['cibadak'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kayumanis');
			$data['kayumanis'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kebon Pedes');
			$data['kebon_pedes'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kedung Badak');
			$data['kedung_badak'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kedung Jaya');
			$data['kedung_jaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kedug Waringin');
			$data['kedug_waringin'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kencana');
			$data['kencana'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Mekarwangi');
			$data['mekarwangi'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sukadamai');
			$data['sukadamai'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sukaresmi');
			$data['sukaresmi'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Tanah Sareal');
			$data['tanah_sareal'] = $this->db->get('identitas')->num_rows();

			$data['total_bogor_sareal'] = $data['cibadak'] + $data['kayumanis'] + $data['kebon_pedes'] + $data['kedung_badak'] + $data['kedung_jaya'] + $data['kedug_waringin'] + $data['kencana'] + $data['mekarwangi'] + $data['sukadamai'] + $data['sukaresmi'] + $data['tanah_sareal'];

			if ($data['total_bogor_sareal'] == 0) {
				$data['total_bogor_sareal'] = 0.0000001;
			}	
			
			$data['persen_cibadak'] = ($data['cibadak'] * 100) / $data['total_bogor_sareal'];
			$data['persen_cibadak'] = round($data['persen_cibadak'], 0);

			$data['persen_kayumanis'] = ($data['kayumanis'] * 100) / $data['total_bogor_sareal'];
			$data['persen_kayumanis'] = round($data['persen_cibadak'], 0);

			$data['persen_kebon_pedes'] = ($data['kebon_pedes'] * 100) / $data['total_bogor_sareal'];
			$data['persen_kebon_pedes'] = round($data['persen_cibadak'], 0);

			$data['persen_kedung_badak'] = ($data['kedung_badak'] * 100) / $data['total_bogor_sareal'];
			$data['persen_kedung_badak'] = round($data['persen_cibadak'], 0);

			$data['persen_kedung_jaya'] = ($data['kedung_jaya'] * 100) / $data['total_bogor_sareal'];
			$data['persen_kedung_jaya'] = round($data['persen_cibadak'], 0);

			$data['persen_kedug_waringin'] = ($data['kedug_waringin'] * 100) / $data['total_bogor_sareal'];
			$data['persen_kedug_waringin'] = round($data['persen_cibadak'], 0);

			$data['persen_kencana'] = ($data['kencana'] * 100) / $data['total_bogor_sareal'];
			$data['persen_kencana'] = round($data['persen_cibadak'], 0);

			$data['persen_mekarwangi'] = ($data['mekarwangi'] * 100) / $data['total_bogor_sareal'];
			$data['persen_mekarwangi'] = round($data['persen_cibadak'], 0);

			$data['persen_sukadamai'] = ($data['sukadamai'] * 100) / $data['total_bogor_sareal'];
			$data['persen_sukadamai'] = round($data['persen_cibadak'], 0);

			$data['persen_sukaresmi'] = ($data['sukaresmi'] * 100) / $data['total_bogor_sareal'];
			$data['persen_sukaresmi'] = round($data['persen_cibadak'], 0);

			$data['persen_tanah_sareal'] = ($data['tanah_sareal'] * 100) / $data['total_bogor_sareal'];
			$data['persen_tanah_sareal'] = round($data['persen_cibadak'], 0);

			$this->load->view('header_user');
			$this->load->view('tanahsareal', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function tanahsareal_print()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {

			$this->db->where('kelurahan', 'Cibadak');
			$data['cibadak'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kayumanis');
			$data['kayumanis'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kebon Pedes');
			$data['kebon_pedes'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kedung Badak');
			$data['kedung_badak'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kedung Jaya');
			$data['kedung_jaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kedug Waringin');
			$data['kedug_waringin'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kencana');
			$data['kencana'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Mekarwangi');
			$data['mekarwangi'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sukadamai');
			$data['sukadamai'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Sukaresmi');
			$data['sukaresmi'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Tanah Sareal');
			$data['tanah_sareal'] = $this->db->get('identitas')->num_rows();

			$data['total_bogor_sareal'] = $data['cibadak'] + $data['kayumanis'] + $data['kebon_pedes'] + $data['kedung_badak'] + $data['kedung_jaya'] + $data['kedug_waringin'] + $data['kencana'] + $data['mekarwangi'] + $data['sukadamai'] + $data['sukaresmi'] + $data['tanah_sareal'];

			if ($data['total_bogor_sareal'] == 0) {
				$data['total_bogor_sareal'] = 0.0000001;
			}	
			
			$data['persen_cibadak'] = ($data['cibadak'] * 100) / $data['total_bogor_sareal'];
			$data['persen_cibadak'] = round($data['persen_cibadak'], 0);

			$data['persen_kayumanis'] = ($data['kayumanis'] * 100) / $data['total_bogor_sareal'];
			$data['persen_kayumanis'] = round($data['persen_cibadak'], 0);

			$data['persen_kebon_pedes'] = ($data['kebon_pedes'] * 100) / $data['total_bogor_sareal'];
			$data['persen_kebon_pedes'] = round($data['persen_cibadak'], 0);

			$data['persen_kedung_badak'] = ($data['kedung_badak'] * 100) / $data['total_bogor_sareal'];
			$data['persen_kedung_badak'] = round($data['persen_cibadak'], 0);

			$data['persen_kedung_jaya'] = ($data['kedung_jaya'] * 100) / $data['total_bogor_sareal'];
			$data['persen_kedung_jaya'] = round($data['persen_cibadak'], 0);

			$data['persen_kedug_waringin'] = ($data['kedug_waringin'] * 100) / $data['total_bogor_sareal'];
			$data['persen_kedug_waringin'] = round($data['persen_cibadak'], 0);

			$data['persen_kencana'] = ($data['kencana'] * 100) / $data['total_bogor_sareal'];
			$data['persen_kencana'] = round($data['persen_cibadak'], 0);

			$data['persen_mekarwangi'] = ($data['mekarwangi'] * 100) / $data['total_bogor_sareal'];
			$data['persen_mekarwangi'] = round($data['persen_cibadak'], 0);

			$data['persen_sukadamai'] = ($data['sukadamai'] * 100) / $data['total_bogor_sareal'];
			$data['persen_sukadamai'] = round($data['persen_cibadak'], 0);

			$data['persen_sukaresmi'] = ($data['sukaresmi'] * 100) / $data['total_bogor_sareal'];
			$data['persen_sukaresmi'] = round($data['persen_cibadak'], 0);

			$data['persen_tanah_sareal'] = ($data['tanah_sareal'] * 100) / $data['total_bogor_sareal'];
			$data['persen_tanah_sareal'] = round($data['persen_cibadak'], 0);

			$this->load->view('header_print');
			$this->load->view('tanahsareal_print', $data);
			$this->load->view('footer_print');
		} else {
			header("location:" .base_url());
		}
	}

}
