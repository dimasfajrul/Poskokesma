<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Modelku');
        $this->load->model('Core');
    }

	public function index()
	{
		$this->load->view('v_admin/v_home_admin');
	}


	// CONTROLLER INFO KOS
	public function v_info_kos()
	{
		$data['infokos']=$this->Modelku->get_info_kos();
		$this->load->view('v_admin/v_info_kos',$data);
	}

	public function v_usulan_info_kos()
	{
		$data['usulan']=$this->Modelku->get_usulan_kos_kesma();
		$this->load->view('v_admin/v_usulan_kos',$data);
	}

	public function e_info_kos(){
			$id = $this->input->post('id_kos');
			$where['id_kos']=$id;
			$link_jbr = $this->input->post('kos_jbr');
			$link_bws = $this->input->post('kos_bws');
			$link_tgp = $this->input->post('tanggapan');
			$nama = $this->input->post('nama');
			$nomor = $this->input->post('nomor');
		$data = array(
				'link_kos_jbr' => $link_jbr,
				'link_kos_bws' => $link_bws,
				'link_tanggapan' => $link_tgp,
				'nama_cp' => $nama,
				'link_cp' => $nomor
			);
			$insert_data = $this->db->update('tbl_infokos',$data,$where);	
		if ($insert_data >= 0) {
			$this->session->set_flashdata("Pesan", $this->Core->alert_succes("Data Berhasil di simpan"));
	        redirect(base_url().'AdminPosko/Home/v_info_kos');
	    }else{
	        $this->session->set_flashdata("Pesan", $this->Core->alert_time("Data Gagal di simpan"));
	        redirect(base_url().'AdminPosko/Home/v_info_kos');
	    }
	}

	public function hapusUsulanKos($id){
		$where = array('id_usulan'=>$id);
		$this -> Modelku -> delete($where,'tbl_usulan_kos');
		header('location:'.base_url('AdminPosko/Home/v_usulan_info_kos'));
	}

	// CONTROLLER MITRA KESMA
	public function v_mitra_kesma()
	{
		$data['mitra']=$this->Modelku->get_mitra_kesma();
		$this->load->view('v_admin/v_mitra_kesma',$data);
	}

	public function v_usulan_info_mitra()
	{
		$data['usulan']=$this->Modelku->get_usulan_mitra_kesma();
		$this->load->view('v_admin/v_usulan_mitra',$data);
	}

	public function e_mitrakes(){
			$id = $this->input->post('id_mitra');
			$where['id_mitra']=$id;
			$link_mitra = $this->input->post('link_mitra');
			$nama = $this->input->post('nama');
			$nomor = $this->input->post('nomor');
		$data = array(
				'link_mitra' => $link_mitra,
				'nama_cp' => $nama,
				'link_cp' => $nomor
			);
			$insert_data = $this->db->update('tbl_mitra',$data,$where);	
		if ($insert_data >= 0) {
			$this->session->set_flashdata("Pesan", $this->Core->alert_succes("Data Berhasil di simpan"));
	        redirect(base_url().'AdminPosko/Home/v_mitra_kesma');
	    }else{
	        $this->session->set_flashdata("Pesan", $this->Core->alert_time("Data Gagal di simpan"));
	        redirect(base_url().'AdminPosko/Home/v_mitra_kesma');
	    }
	}
	public function hapusUsulanMitra($id){
		$where = array('id_usulan'=>$id);
		$this -> Modelku -> delete($where,'tbl_usulan_mitra');
		header('location:'.base_url('AdminPosko/Home/v_usulan_info_mitra'));
	}

	//CONTROLLER PARTNER KESMA
	public function v_partner_kesma()
	{
		$data['partner']=$this->Modelku->get_partner_kesma();
		$this->load->view('v_admin/v_partner_kesma',$data);
	}

	public function v_usulan_info_partner()
	{
		$data['usulan']=$this->Modelku->get_usulan_partner_kesma();
		$this->load->view('v_admin/v_usulan_partner',$data);
	}

	public function e_partnerkes(){
			$id = $this->input->post('id_part');
			$where['id_partner']=$id;
			$link_partner = $this->input->post('link_part');
			$nama = $this->input->post('nama');
			$nomor = $this->input->post('nomor');
		$data = array(
				'link_partner' => $link_partner,
				'nama_cp' => $nama,
				'link_cp' => $nomor
			);
			$insert_data = $this->db->update('tbl_partner',$data,$where);	
		if ($insert_data >= 0) {
			$this->session->set_flashdata("Pesan", $this->Core->alert_succes("Data Berhasil di simpan"));
	        redirect(base_url().'AdminPosko/Home/v_partner_kesma');
	    }else{
	        $this->session->set_flashdata("Pesan", $this->Core->alert_time("Data Gagal di simpan"));
	        redirect(base_url().'AdminPosko/Home/v_partner_kesma');
	    }
	}
	public function hapusUsulanPartner($id){
		$where = array('id_usulan'=>$id);
		$this -> Modelku -> delete($where,'tbl_usulan_partner');
		header('location:'.base_url('AdminPosko/Home/v_usulan_info_partner'));
	}

	//CONTROLLER LAYANAN ADVOKASI
	public function v_layanan_advokasi()
	{
		$data['layadvokasi']=$this->Modelku->get_layanan_advokasi();
		$this->load->view('v_admin/v_layanan_advokasi_kesma',$data);
	}

	//CONTROLLER THUMBNAIL KESMA
	public function v_thumbnail_kesma(){
		$data['thumbnail'] = $this->Modelku->get_thumbnail_kesma();
		$this->load->view('v_admin/v_thumbnail_kesma',$data);
	}

	public function t_biodata_kesma(){
		$config['upload_path']          = './gallery/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500000;
		$config['max_width']            = 500000;
		$config['max_height']           = 300000;
 
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto_biodata')) 
		{
			$upload_data = $this->upload->data();
			$nama = $this->input->post('nama');
			$jabatan = $this->input->post('jabatan');
			$motto = $this->input->post('motto');
			$foto = "gallery/".$upload_data['file_name'];
		$data = array(
				'nama' => $nama,
				'jabatan' => $jabatan,
				'motto' => $motto,
				'foto' => $foto
			);
			$insert_data = $this->db->insert('tbl_struktur',$data);	
		}
		if ($insert_data >= 0) {
			$this->session->set_flashdata("Pesan", $this->Core->alert_succes("Data Berhasil di simpan"));
	        redirect(base_url().'AdminPosko/Home/v_thumbnail_kesma');
	    }else{
	        $this->session->set_flashdata("Pesan", $this->Core->alert_time("Data Gagal di simpan"));
	        redirect(base_url().'AdminPosko/Home/v_thumbnail_kesma');
	    }
	}

	public function e_biodata_kesma(){
		$config['upload_path']          = './gallery/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500000;
		$config['max_width']            = 500000;
		$config['max_height']           = 300000;
 
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto_biodata')) 
		{
			$upload_data = $this->upload->data();
			$id = $this->input->post('id');
			$where['id_struktur']=$id;
			$nama = $this->input->post('nama');
			$jabatan = $this->input->post('jabatan');
			$motto = $this->input->post('motto');
			$foto = "gallery/".$upload_data['file_name'];
		$data = array(
				'nama' => $nama,
				'jabatan' => $jabatan,
				'motto' => $motto,
				'foto' => $foto
			);
			$insert_data = $this->db->update('tbl_struktur',$data,$where);	
		}
		if ($insert_data >= 0) {
			$this->session->set_flashdata("Pesan", $this->Core->alert_succes("Data Berhasil di simpan"));
	        redirect(base_url().'AdminPosko/Home/v_thumbnail_kesma');
	    }else{
	        $this->session->set_flashdata("Pesan", $this->Core->alert_time("Data Gagal di simpan"));
	        redirect(base_url().'AdminPosko/Home/v_thumbnail_kesma');
	    }
	}

//Hapus Biodata
  public function hapus($id){
		$where = array('id_struktur'=>$id);
		$hapus = $this ->Modelku->delete($where,'tbl_struktur');
		if ($hapus >= 0) {
			$this->session->set_flashdata("Pesan", $this->Core->alert_succes("Data Berhasil di hapus"));
	        redirect(base_url().'AdminPosko/Home/v_thumbnail_kesma');
	    }else{
	        $this->session->set_flashdata("Pesan", $this->Core->alert_time("Data Gagal di hapus"));
	        redirect(base_url().'AdminPosko/Home/v_thumbnail_kesma');
	    }
	}

}
