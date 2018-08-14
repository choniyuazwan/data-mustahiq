<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Program extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('pic_model');
		$this->load->library('form_validation');
		$this->load->helper('file');
		$this->load->helper('url');
	}

	public function kotabogor() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {

			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');
		} elseif($cek == 'user') {
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_user');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogortengah() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {
			$this->db->where('kecamatan', 'Bogor-Tengah');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');

		} elseif($cek == 'user') {

			$this->db->where('kecamatan', 'Bogor-Tengah');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_user');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogorutara() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {
			$this->db->where('kecamatan', 'Bogor-Utara');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');

		} elseif($cek == 'user') {

			$this->db->where('kecamatan', 'Bogor-Utara');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_user');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogortimur() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {
			$this->db->where('kecamatan', 'Bogor-Timur');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');

		} elseif($cek == 'user') {

			$this->db->where('kecamatan', 'Bogor-Timur');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_user');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogorselatan() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {
			$this->db->where('kecamatan', 'Bogor-Selatan');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');

		} elseif($cek == 'user') {

			$this->db->where('kecamatan', 'Bogor-Selatan');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_user');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogorbarat() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {
			$this->db->where('kecamatan', 'Bogor-Barat');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');

		} elseif($cek == 'user') {

			$this->db->where('kecamatan', 'Bogor-Barat');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_user');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function tanahsareal() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin') {
			$this->db->where('kecamatan', 'Tanah-Sareal');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');

		} elseif($cek == 'user') {

			$this->db->where('kecamatan', 'Tanah-Sareal');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_user');
			$this->load->view('program/kotabogor', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
	}

	public function kotabogor_print() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin' || $cek == 'user') {

			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_print');
			$this->load->view('program/kotabogor_print', $data);
			$this->load->view('footer_print');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogortengah_print() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin' || $cek == 'user') {
			$this->db->where('kecamatan', 'Bogor-Tengah');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_print');
			$this->load->view('program/kotabogor_print', $data);
			$this->load->view('footer_print');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogorutara_print() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin' || $cek == 'user') {
			$this->db->where('kecamatan', 'Bogor-Utara');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_print');
			$this->load->view('program/kotabogor_print', $data);
			$this->load->view('footer_print');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogortimur_print() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin' || $cek == 'user') {
			$this->db->where('kecamatan', 'Bogor-Timur');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_print');
			$this->load->view('program/kotabogor_print', $data);
			$this->load->view('footer_print');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogorselatan_print() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin' || $cek == 'user') {
			$this->db->where('kecamatan', 'Bogor-Selatan');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_print');
			$this->load->view('program/kotabogor_print', $data);
			$this->load->view('footer_print');
		} else {
			header("location:" .base_url());
		}
	}

	public function bogorbarat_print() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin' || $cek == 'user') {
			$this->db->where('kecamatan', 'Bogor-Barat');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_print');
			$this->load->view('program/kotabogor_print', $data);
			$this->load->view('footer_print');
		} else {
			header("location:" .base_url());
		}
	}

	public function tanahsareal_print() {
		$cek = $this->session->userdata('stts');
		if ($cek == 'admin' || $cek == 'user') {
			$this->db->where('kecamatan', 'Tanah-Sareal');
			$this->db->select('jenisprogram');
			$query = $this->db->get('identitas')->result();
			
			$data['bogor_cerdas'] = 0; $data['bogor_sehat'] = 0; $data['bogor_berdakwah'] = 0; $data['bogor_peduli'] = 0; $data['bogor_berkah'] = 0;
			foreach($query as $string) {
				if(preg_match("/bogor cerdas/i", $string->jenisprogram)) {
					$data['bogor_cerdas']++;
				}
				if(preg_match("/bogor sehat/i", $string->jenisprogram)) {
					$data['bogor_sehat']++;
				}
				if(preg_match("/bogor berdakwah/i", $string->jenisprogram)) {
					$data['bogor_berdakwah']++;
				}
				if(preg_match("/bogor peduli/i", $string->jenisprogram)) {
					$data['bogor_peduli']++;
				}
				if(preg_match("/bogor berkah/i", $string->jenisprogram)) {
					$data['bogor_berkah']++;
				}
			}

			$data['total'] = $data['bogor_cerdas']+$data['bogor_sehat']+$data['bogor_berdakwah']+$data['bogor_peduli']+$data['bogor_berkah'];
			if ($data['total'] == 0) {
				$data['total'] = 0.0000001;
			}

			$data['persen_bogor_cerdas'] = ($data['bogor_cerdas'] * 100) / $data['total'];
			$data['persen_bogor_cerdas'] = round($data['persen_bogor_cerdas'], 0);

			$data['persen_bogor_sehat'] = ($data['bogor_sehat'] * 100) / $data['total'];
			$data['persen_bogor_sehat'] = round($data['persen_bogor_sehat'], 0);

			$data['persen_bogor_berdakwah'] = ($data['bogor_berdakwah'] * 100) / $data['total'];
			$data['persen_bogor_berdakwah'] = round($data['persen_bogor_berdakwah'], 0);

			$data['persen_bogor_peduli'] = ($data['bogor_peduli'] * 100) / $data['total'];
			$data['persen_bogor_peduli'] = round($data['persen_bogor_peduli'], 0);

			$data['persen_bogor_berkah'] = ($data['bogor_berkah'] * 100) / $data['total'];
			$data['persen_bogor_berkah'] = round($data['persen_bogor_berkah'], 0);

			$this->load->view('header_print');
			$this->load->view('program/kotabogor_print', $data);
			$this->load->view('footer_print');
		} else {
			header("location:" .base_url());
		}
	}
}
