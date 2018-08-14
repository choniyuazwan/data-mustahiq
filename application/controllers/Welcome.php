<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {
			$this->load->model('pic_model');
			$data['picture_list'] = $this->pic_model->get_all_pics();
			
			// $data['picture_list'] = $this->db->get('identitas')->result();
			
			$data['filter_kecamatan'] = "";
			$data['filter_kelurahan'] = "";
			$this->load->view('header');
			$this->load->view('picture_list', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}
}
