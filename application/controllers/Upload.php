<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('pic_model');
		$this->load->library('form_validation');
		$this->load->helper('file');
		$this->load->helper('url');
	}
	
	public function form(){
		$this->load->view('header');
		$this->load->view('upload_form');
		$this->load->view('footer');
	}
	
	public function file_data(){
		$this->form_validation->set_rules('nik', 'NIK', 'required|is_natural|is_unique[identitas.nik]|exact_length[3]');
		$this->form_validation->set_message('required', '{field} tidak boleh kosong');
		$this->form_validation->set_message('is_natural', '{field} hanya boleh berupa angka');
		$this->form_validation->set_message('is_unique', '{field} sudah tersimpan di dalam database, harap masukkan {field} lainnya');
		$this->form_validation->set_message('exact_length', '{field} harus memiliki panjang {param} digit');

    if ($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('upload_form');
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
			if (!empty($this->input->post('jenisprogram'))) {
				$array = $this->input->post('jenisprogram[]');
	    	$data['jenisprogram'] = implode(', ',$array);
			} else {
				$data['jenisprogram'] = $this->input->post('jenisprogram[]');
			}
			

			$config['upload_path']          = APPPATH. '../assets/uploads/wajah/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000;
			$config['file_ext_tolower']			= true;

			$this->load->library('upload', $config);
				
			if ($this->upload->do_upload('fotowajah')) {
				$upload_data = $this->upload->data();
				$data['fotowajah'] = $upload_data['file_name'];
			}

			$config2['upload_path']          = APPPATH. '../assets/uploads/rumah/';
			$config2['allowed_types']        = 'gif|jpg|png';
			$config2['max_size']             = 1000;
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
	}

	public function detail( $id = NULL )	{
		$this->db->where('id', $id);
		$data['picture_list'] = $this->db->get('identitas')->result();

		$this->load->view('header');
		$this->load->view('detail', $data);
		$this->load->view('footer');
	}

	public function daerah() {
		$filter_kecamatan = $this->input->post('filter_kecamatan');
		$filter_kelurahan = $this->input->post('filter_kelurahan');

		if (empty($filter_kecamatan) && empty($filter_kelurahan)) {
		$this->load->model('pic_model');

		$data['picture_list'] = $this->pic_model->get_all_pics();
		$data['filter_kecamatan'] = "";
		$data['filter_kelurahan'] = "";

		$this->load->view('header');
		$this->load->view('picture_list', $data);
		$this->load->view('footer');
		
		} else if (empty($filter_kelurahan)) {

			$this->db->where('kecamatan', $filter_kecamatan);
			$data['picture_list'] = $this->db->get('identitas')->result();

			$data['filter_kecamatan'] = $filter_kecamatan;
			$data['filter_kelurahan'] = $filter_kelurahan;

			$this->load->view('header');
			$this->load->view('picture_list', $data);
			$this->load->view('footer');
		
		} else {		
			$this->db->where('kecamatan', $filter_kecamatan);
			$this->db->where('kelurahan', $filter_kelurahan);
			$data['picture_list'] = $this->db->get('identitas')->result();

			$data['filter_kecamatan'] = $filter_kecamatan;
			$data['filter_kelurahan'] = $filter_kelurahan;

			$this->load->view('header');
			$this->load->view('picture_list', $data);
			$this->load->view('footer');
		}
	}

	public function delete( $id = NULL ) {
		$this->db->where('id', $id);
		$this->db->delete('identitas');
		redirect('/');
	}

	public function update( $id = NULL ) {
		$this->db->where('id', $id);
		$data['picture_list'] = $this->db->get('identitas')->result();
		$this->load->view('header');
		$this->load->view('update', $data);
		$this->load->view('footer');
	}

	public function action_update($id = NULL) {
		// $data['nik'] = $this->input->post('nik');
		$data['nama'] = $this->input->post('nama');
		$data['jeniskelamin'] = $this->input->post('jeniskelamin');
		$data['tempatlahir'] = $this->input->post('tempatlahir');
		$data['tanggallahir'] = $this->input->post('tanggallahir');
		$data['kecamatan'] = $this->input->post('kecamatan');
		$data['kelurahan'] = $this->input->post('kelurahan');
		$data['alamat'] = $this->input->post('alamat');
		$array = $this->input->post('jenisprogram[]');
  	$data['jenisprogram'] = implode(', ',$array);

		$config['upload_path']          = APPPATH. '../assets/uploads/wajah/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;

		$this->load->library('upload', $config);
			
		if ($this->upload->do_upload('fotowajah')) {
			$upload_data = $this->upload->data();
			$data['fotowajah'] = $upload_data['file_name'];
		}

		$config2['upload_path']          = APPPATH. '../assets/uploads/rumah/';
		$config2['allowed_types']        = 'gif|jpg|png';
		$config2['max_size']             = 1000;

		$this->upload->initialize($config2);
		$this->load->library('upload', $config2);
		if ($this->upload->do_upload('fotorumah')) {
			$upload_data_rumah = $this->upload->data();
			$data['fotorumah'] = $upload_data_rumah['file_name'];
		}

		$this->pic_model->model_update($data, $id);

		redirect('/');
	}

	public function kecamatan()	{
		$this->load->view('header');
		$this->load->view('kecamatan');
		$this->load->view('footer');
	}
}
