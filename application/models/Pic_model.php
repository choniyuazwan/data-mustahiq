<?php 

class Pic_model extends CI_Model{
	
	// fetch all identitas from db
	function get_all_pics() {
		$all_pics = $this->db->get('identitas');
		return $all_pics->result();
	}

	//save picture data to db
	function store_pic_data($data){
		$insert_data['nik'] = $data['nik'];
		$insert_data['nama'] = $data['nama'];
		$insert_data['jeniskelamin'] = $data['jeniskelamin'];
		$insert_data['tempatlahir'] = $data['tempatlahir'];
		$insert_data['tanggallahir'] = $data['tanggallahir'];
		$insert_data['kecamatan'] = $data['kecamatan'];
		$insert_data['kelurahan'] = $data['kelurahan'];
		$insert_data['alamat'] = $data['alamat'];
		$insert_data['jenisprogram'] = $data['jenisprogram'];
		$insert_data['keterangan'] = $data['keterangan'];

		if (!empty($data['fotowajah'])) {
			$insert_data['fotowajah'] = $data['fotowajah'];
		}
		if(!empty($data['fotorumah'])){
			$insert_data['fotorumah'] = $data['fotorumah'];
		}

		$query = $this->db->insert('identitas', $insert_data);
	}

	function model_update($data, $id){
		// $this->db->set('nik', $data['nik']);
		$this->db->set('nama', $data['nama']);
		$this->db->set('jeniskelamin', $data['jeniskelamin']);
		$this->db->set('tempatlahir', $data['tempatlahir']);
		$this->db->set('tanggallahir', $data['tanggallahir']);
		$this->db->set('kecamatan', $data['kecamatan']);
		$this->db->set('kelurahan', $data['kelurahan']);
		$this->db->set('alamat', $data['alamat']);
		$this->db->set('jenisprogram', $data['jenisprogram']);
		$this->db->set('keterangan', $data['keterangan']);

		if (!empty($data['fotowajah'])) {
			$this->db->set('fotowajah', $data['fotowajah']);
		}
		if(!empty($data['fotorumah'])){
			$this->db->set('fotorumah', $data['fotorumah']);
		}

		$this->db->where('id', $id);
		$this->db->update('identitas');
	}
}