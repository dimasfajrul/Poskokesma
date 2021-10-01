<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Modelku');
        $this->load->model('Core');
    }

	public function index()
	{
		$data['infokos']=$this->Modelku->get_info_kos();
		$data['mitrakes']=$this->Modelku->get_mitra_kesma();
		$data['partnerkes']=$this->Modelku->get_partner_kesma();
		$data['thumbnail']=$this->Modelku->get_thumbnail_kesma();
		$data['angkatan']=$this->Modelku->get_angkatan();
		$data['prodi']=$this->Modelku->get_prodi();
		$data['jurusan']=$this->Modelku->get_jurusan();
	    /*$data['kampus']=$this->Modelku->get_kampus();*/
		/*$data['layanan']=$this->Modelku->get_layanan();*/
		$this->load->view('v_home',$data);
	}

	public function kirim_aspirasi(){
		if(isset($_POST["btn_kirim"])){
			$nama = $this-> input -> post("nama");
			$email = $this-> input -> post("email");
			$no_hp = $this-> input -> post("no_hp");
			$nama_instagram = $this-> input -> post("nama_instagram");
			/*$kampus = $this-> input -> post("kampus");*/
			$angkatan = $this-> input -> post("angkatan"); 
			$prodi = $this-> input -> post("prodi");
			$jurusan = $this-> input -> post("jurusan");
			/*$layanan = $this-> input -> post("layanan");*/
			$kritik = $this-> input -> post("kritik_saran");
			$data = array(
				'nama' =>$nama,
				'email' =>$email,
				'nama_instagram' =>$nama_instagram,
				'no_hp' =>$no_hp,
				/*'kampus' =>$kampus,*/
				'angkatan' =>$angkatan,
				'prodi' =>$prodi,
				'jurusan' =>$jurusan,
				/*'layanan' => $layanan,*/
				'kritik_saran' => $kritik);
			$insert_data = $this->db->insert("tbl_layanan_advokasi",$data); 
		}
		 if ($insert_data >= 0) {
        $this->session->set_flashdata("Pesan",$this->Core->alert_succes("Terimakasih telah menyampaikan kritik saran dan aspirasi anda :)"));
        redirect(base_url().'./');
      	}else{
        $this->session->set_flashdata("Pesan",$this->Core->alert_time("Maaf, kritik saran dan aspirasi gagal terkirim :("));
        redirect(base_url().'./');
      	}	
	}
	public function kirim_usulan_kos(){
		$data = array(	'nama' => $this->input->post('nama'),
						'usulan'=>$this->input->post('usulan'));
						$insert_data = $this->Modelku->insert('tbl_usulan_kos',$data);
		 if ($insert_data >= 0) {
        $this->session->set_flashdata("Pesan",$this->Core->alert_succes("Terimakasih telah menyampaikan usulan anda :)"));
        redirect(base_url().'./');
      	}else{
        $this->session->set_flashdata("Pesan",$this->Core->alert_time("Maaf, usulan gagal terkirim :("));
        redirect(base_url().'./');
      	}	
	}
	public function kirim_usulan_partner(){
		$data = array(	'nama' => $this->input->post('nama'),
						'usulan'=>$this->input->post('usulan'));
						$insert_data = $this->Modelku->insert('tbl_usulan_partner',$data);
		if ($insert_data >= 0) {
        $this->session->set_flashdata("Pesan",$this->Core->alert_succes("Terimakasih telah menyampaikan usulan anda :)"));
        redirect(base_url().'./');
      	}else{
        $this->session->set_flashdata("Pesan",$this->Core->alert_time("Maaf, usulan gagal terkirim :("));
        redirect(base_url().'./');
      	}
	}
	public function kirim_usulan_mitra(){
		$data = array(	'nama' => $this->input->post('nama'),
						'usulan'=>$this->input->post('usulan'));
						$insert_data = $this->Modelku->insert('tbl_usulan_mitra',$data);
		if ($insert_data >= 0) {
        $this->session->set_flashdata("Pesan",$this->Core->alert_succes("Terimakasih telah menyampaikan usulan anda :)"));
        redirect(base_url().'./');
      	}else{
        $this->session->set_flashdata("Pesan",$this->Core->alert_time("Maaf, usulan gagal terkirim :("));
        redirect(base_url().'./');
      	}		
	}
}
