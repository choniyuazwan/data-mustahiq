<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()	{
		$cek = $this->session->userdata('stts');
		if ($cek == 'user') {
			$this->load->model('pic_model');

			$data['picture_list'] = $this->pic_model->get_all_pics();
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
			$this->load->view('picture_list', $data);
			$this->load->view('footer');
			
			} else if (empty($filter_kelurahan)) {

				$this->db->where('kecamatan', $filter_kecamatan);
				$data['picture_list'] = $this->db->get('identitas')->result();

				$data['filter_kecamatan'] = $filter_kecamatan;
				$data['filter_kelurahan'] = $filter_kelurahan;

				$this->load->view('header_user');
				$this->load->view('picture_list', $data);
				$this->load->view('footer');
			
			} else {		
				$this->db->where('kecamatan', $filter_kecamatan);
				$this->db->where('kelurahan', $filter_kelurahan);
				$data['picture_list'] = $this->db->get('identitas')->result();

				$data['filter_kecamatan'] = $filter_kecamatan;
				$data['filter_kelurahan'] = $filter_kelurahan;

				$this->load->view('header_user');
				$this->load->view('picture_list', $data);
				$this->load->view('footer');
			}
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

			$this->load->view('header_user');
			$this->load->view('kecamatan', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}
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

			$this->load->view('header_user');
			$this->load->view('bogortengah', $data);
			$this->load->view('footer');
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

			$this->load->view('header_user');
			$this->load->view('bogorutara', $data);
			$this->load->view('footer');
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

			$this->load->view('header_user');
			$this->load->view('bogortimur', $data);
			$this->load->view('footer');
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

			$this->load->view('header_user');
			$this->load->view('bogorselatan', $data);
			$this->load->view('footer');
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

			$this->load->view('header_user');
			$this->load->view('bogorbarat', $data);
			$this->load->view('footer');
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
			$data['kebon_Pedes'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kedung Badak');
			$data['kedung_Badak'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kedung Jaya');
			$data['kedung_Jaya'] = $this->db->get('identitas')->num_rows();

			$this->db->where('kelurahan', 'Kedug Waringin');
			$data['kedug_Waringin'] = $this->db->get('identitas')->num_rows();

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

			$this->load->view('header_user');
			$this->load->view('tanahsareal', $data);
			$this->load->view('footer');
		} else {
			header("location:" .base_url());
		}

	}	
}
