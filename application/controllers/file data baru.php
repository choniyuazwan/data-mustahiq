<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('pic_model');
		$this->load->library('form_validation');
			
			// $this->load->view('header');
	}
	
	public function form(){
		$this->load->view('header');
		$this->load->view('upload_form');
		$this->load->view('footer');
	}
	
	public function file_data(){
		//validate the form data 

		$this->form_validation->set_rules('nik', 'NIK', 'required');

    if ($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('upload_form');
			$this->load->view('footer');
		} else {
			
			//get the form values
			$data['nik'] = $this->input->post('nik');
			$data['nama'] = $this->input->post('nama');
			$data['jeniskelamin'] = $this->input->post('jeniskelamin');
			$data['tempatlahir'] = $this->input->post('tempatlahir');
			$data['tanggallahir'] = $this->input->post('tanggallahir');
			$data['kecamatan'] = $this->input->post('kecamatan');
			$data['kelurahan'] = $this->input->post('kelurahan');
			$data['alamat'] = $this->input->post('alamat');

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../assets/uploads/wajah/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('fotowajah')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('header');
				$this->load->view('upload_form', $error);
				$this->load->view('footer');
			}else{
				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['fotowajah'] = $upload_data['file_name'];

				//file upload code 
				//set file upload settings 
				$config2['upload_path']          = APPPATH. '../assets/uploads/rumah/';
				$config2['allowed_types']        = 'gif|jpg|png';
				$config2['max_size']             = 100;

				$this->upload->initialize($config2);

				$this->load->library('upload', $config2);

				if ( ! $this->upload->do_upload('fotorumah')){
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('header');
					$this->load->view('upload_form', $error);
					$this->load->view('footer');
				} else {
					//file is uploaded successfully
					//now get the file uploaded data 
					$upload_data_rumah = $this->upload->data();

					//get the uploaded file name
					$data['fotorumah'] = $upload_data_rumah['file_name'];

					//store pic data to the db
					$this->pic_model->store_pic_data($data);

					redirect('/');
				}
			}
		}	
	}

	public function detail( $nik = NULL )	{
		$this->db->where('nik', $nik);
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

	public function delete( $nik = NULL ) {
		$this->db->where('nik', $nik);
		$this->db->delete('identitas');
		redirect('/');
	}

	public function update( $nik = NULL ) {
		$this->db->where('nik', $nik);
		$data['picture_list'] = $this->db->get('identitas')->result();
		$this->load->view('header');
		$this->load->view('update', $data);
		$this->load->view('footer');
	}

	public function action_update($nik = NULL) {
		// $data = array(
		// 	'nik' => $this->input->post('nik'), 
		// 	'nama' => $this->input->post('nama'),
		// 	'jeniskelamin' => 	$this->input->post('jeniskelamin'),
		// 	'tempatlahir' => $this->input->post('tempatlahir'),
		// 	'tanggallahir' => $this->input->post('tanggallahir'),
		// 	'kecamatan' => $this->input->post('kecamatan'),
		// 	'kelurahan' => $this->input->post('kelurahan'),
		// 	'alamat' => $this->input->post('alamat')
		// );

		// $this->db->where('nik', $nik);
		// $this->db->update('identitas', $data);

		// redirect('/');





		$this->form_validation->set_rules('nik', 'NIK', 'required');

    if ($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('update');
			$this->load->view('footer');
		} else {
			
			//get the form values
			$data['nik'] = $this->input->post('nik');
			$data['nama'] = $this->input->post('nama');
			$data['jeniskelamin'] = $this->input->post('jeniskelamin');
			$data['tempatlahir'] = $this->input->post('tempatlahir');
			$data['tanggallahir'] = $this->input->post('tanggallahir');
			$data['kecamatan'] = $this->input->post('kecamatan');
			$data['kelurahan'] = $this->input->post('kelurahan');
			$data['alamat'] = $this->input->post('alamat');

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../assets/uploads/wajah/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('fotowajah')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('header');
				$this->load->view('upload_form', $error);
				$this->load->view('footer');
			}else{
				//file is uploaded successfully
				//now get the file uploaded data 
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['fotowajah'] = $upload_data['file_name'];

				//file upload code 
				//set file upload settings 
				$config2['upload_path']          = APPPATH. '../assets/uploads/rumah/';
				$config2['allowed_types']        = 'gif|jpg|png';
				$config2['max_size']             = 100;

				$this->upload->initialize($config2);

				$this->load->library('upload', $config2);

				if ( ! $this->upload->do_upload('fotorumah')){
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('header');
					$this->load->view('upload_form', $error);
					$this->load->view('footer');
				} else {
					//file is uploaded successfully
					//now get the file uploaded data 
					$upload_data_rumah = $this->upload->data();

					//get the uploaded file name
					$data['fotorumah'] = $upload_data_rumah['file_name'];

					//store pic data to the db
					$this->pic_model->action_update($data);

					redirect('/');
				}
			}
		}	
	}
}


	public function file_data(){
		//validate the form data 

		$this->form_validation->set_rules('nik', 'NIK', 'required');

    if ($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('upload_form');
			$this->load->view('footer');
		} else {
			
			//get the form values
			$data['nik'] = $this->input->post('nik');
			$data['nama'] = $this->input->post('nama');
			$data['jeniskelamin'] = $this->input->post('jeniskelamin');
			$data['tempatlahir'] = $this->input->post('tempatlahir');
			$data['tanggallahir'] = $this->input->post('tanggallahir');
			$data['kecamatan'] = $this->input->post('kecamatan');
			$data['kelurahan'] = $this->input->post('kelurahan');
			$data['alamat'] = $this->input->post('alamat');

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../assets/uploads/wajah/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000;

			$this->load->library('upload', $config);

			// if ( ! $this->upload->do_upload('fotowajah')){
			// 	$error = array('error' => $this->upload->display_errors());
			// 	$this->load->view('header');
			// 	$this->load->view('upload_form', $error);
			// 	$this->load->view('footer');
			// }else{
				//file is uploaded successfully
				//now get the file uploaded data 
				
				if ($this->upload->do_upload('fotowajah')) {
					$upload_data = $this->upload->data();

					//get the uploaded file name
					$data['fotowajah'] = $upload_data['file_name'];

					//file upload code 
					//set file upload settings 
					$config2['upload_path']          = APPPATH. '../assets/uploads/rumah/';
					$config2['allowed_types']        = 'gif|jpg|png';
					$config2['max_size']             = 100;

					$this->upload->initialize($config2);

					$this->load->library('upload', $config2);
					

				// if ( ! $this->upload->do_upload('fotorumah')){
				// 	$error = array('error' => $this->upload->display_errors());
				// 	$this->load->view('header');
				// 	$this->load->view('upload_form', $error);
				// 	$this->load->view('footer');
				// } else {
					//file is uploaded successfully
					//now get the file uploaded data 

					if ($this->upload->do_upload('fotowajah')) {
		
						$upload_data_rumah = $this->upload->data();

						//get the uploaded file name
						$data['fotorumah'] = $upload_data_rumah['file_name'];
					}
				}

						//store pic data to the db
						$this->pic_model->store_pic_data($data);

						redirect('/');
			}
		}