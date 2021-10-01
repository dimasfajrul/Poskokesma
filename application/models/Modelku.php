<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelku extends CI_Model {

	public function select($table){

		$this->db->get($table);
	}

	public function selectwhere($table,$data){

	 	$this->db->get_where($table, $data);
	}

	function delete($where,$table){

		$this->db->where($where);
		$this->db->delete($table);
	}

	public function update($table,$data,$where){

		$this->db->update($table,$data,$where);
	}

	public function insert($table,$data){

		$this->db->insert($table,$data);
	}

	public function get_angkatan(){
		$query = $this->db->query("SELECT * FROM tbl_angkatan ORDER BY id_angkatan ASC");
		return $query;
	}
	public function get_prodi(){
		$query = $this->db->query("SELECT * FROM tbl_prodi ORDER BY id_listprodi ASC");
		return $query;
	}
	public function get_jurusan(){
		$query = $this->db->query("SELECT * FROM tbl_jurusan ORDER BY id_listjurusan ASC");
		return $query;
	/*}
	public function get_layanan(){
		$query = $this->db->query("SELECT * FROM tbl_layanan ORDER BY id_listlayanan ASC");
		return $query;
	/*}
	public function get_kampus(){
		$query = $this->db->query("SELECT * FROM tbl_kampus ORDER BY id_kampus ASC");
		return $query;*/
	}
	public function get_info_kos(){
		$query = $this->db->query("SELECT * FROM tbl_infokos ORDER BY id_kos ASC");
		return $query;
	}
	public function get_mitra_kesma(){
		$query = $this->db->query("SELECT * FROM tbl_mitra ORDER BY id_mitra ASC");
		return $query;
	}
	public function get_partner_kesma(){
		$query = $this->db->query("SELECT * FROM tbl_partner ORDER BY id_partner ASC");
		return $query;
	}
	public function get_layanan_advokasi(){
		$query = $this->db->query("SELECT * FROM tbl_layanan_advokasi ORDER BY id_layanan ASC");
		return $query;
	}
	public function get_thumbnail_kesma(){
		$query = $this->db->query("SELECT * FROM tbl_struktur ORDER BY id_struktur ASC");
		return $query;
	}
	public function get_usulan_kos_kesma(){
		$query = $this->db->query("SELECT * FROM tbl_usulan_kos ORDER BY id_usulan ASC");
		return $query;
	}
	public function get_usulan_mitra_kesma(){
		$query = $this->db->query("SELECT * FROM tbl_usulan_mitra ORDER BY id_usulan ASC");
		return $query;
	}
	public function get_usulan_partner_kesma(){
		$query = $this->db->query("SELECT * FROM tbl_usulan_partner ORDER BY id_usulan ASC");
		return $query;
	}


}
