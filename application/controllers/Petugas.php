<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Petugas extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('pic_model');
		$this->load->library('form_validation');
		$this->load->helper('file');
		$this->load->helper('url');
	}

	public function index()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {

			$all_pics = $this->db->get('user')->result();

			$data['picture_list'] = $all_pics;

			$this->load->view('header');
			$this->load->view('petugas/olah', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}
	
	public function add(){
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {
			$this->load->view('header');
			$this->load->view('petugas/add');
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function action_add(){
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {

			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]|min_length[3]|alpha_dash');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
			$this->form_validation->set_message('required', '{field} tidak boleh kosong');
			$this->form_validation->set_message('is_unique', '{field} sudah tersimpan di dalam database, harap masukkan {field} lainnya');
			$this->form_validation->set_message('min_length', '{field} harus memiliki panjang {param} digit');
			$this->form_validation->set_message('alpha_dash', '{field} hanya boleh mengandung huruf, angka, garis bawah dan tanda hubung');

	    if ($this->form_validation->run() == FALSE){
				$this->load->view('header');
				$this->load->view('petugas/add');
				$this->load->view('footer');
			} else {
				$data['username'] = $this->input->post('username');
				$data['password'] = $this->input->post('password');
				$data['status'] = $this->input->post('status');

				$insert_data['username'] = $data['username'];
				$insert_data['password'] = $data['password'];
				$insert_data['status'] = $data['status'];

				$query = $this->db->insert('user', $insert_data);

				redirect('/petugas');
			}
		} else {
			header("location:" .base_url());
		}
	}

	public function update( $id = NULL ) {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {
			$this->db->where('id', $id);
			$data['picture_list'] = $this->db->get('user')->result();
			$this->load->view('header');
			$this->load->view('petugas/update', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function action_update($id = NULL) {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
			$this->form_validation->set_message('required', '{field} tidak boleh kosong');
			$this->form_validation->set_message('min_length', '{field} harus memiliki panjang {param} digit');

	    if ($this->form_validation->run() == FALSE){
				$this->db->where('id', $id);
				$data['picture_list'] = $this->db->get('user')->result();

	    	$this->load->view('header');
				$this->load->view('petugas/update', $data);
				$this->load->view('footer');
			} else {
				$data['password'] = $this->input->post('password');
				$data['status'] = $this->input->post('status');

				$this->db->set('password', $data['password']);
				$this->db->set('status', $data['status']);

				$this->db->where('id', $id);
				$this->db->update('user');

				redirect('/petugas');				
			}
		} else {
			header("location:" .base_url());
		}
	}

	public function delete( $id = NULL ) {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {
			$this->db->where('id', $id);
			$this->db->delete('user');
			redirect('/petugas');
		} else {
			header("location:" .base_url());
		}
	}
}