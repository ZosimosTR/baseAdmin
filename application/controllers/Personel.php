<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personel extends CI_Controller {

	public function index()
	{
	    $viewData=new stdClass();
        $viewData->personeller = $this->GModel->HepsiniGetir("users");
		$this->load->view('personel/index', $viewData);
	}

	public function YeniPersonel()
    {
        $this->load->view('personel/ekle');
	}

    public function Add()
    {
        //$this->input->post("KullaniciAdi");
        //$this->input->post("Mail");
        //$this->input->post("Ad");
        //$this->input->post("Soyad");
        //$this->input->post("Sifre");
        //$this->input->post("SifreTekrar");

        $this->load->library('form_validation');
        $this->form_validation->set_rules('Sifre', 'Şifre', 'matches[SifreTekrar]|trim|required|min_length[6]|max_length[12]');
        $this->form_validation->set_rules('SifreTekrar', 'Şifre Tekrar', 'trim|required|min_length[6]|max_length[12]');

        $this->form_validation->set_message('matches',"<div class='alert alert-error'>Şifreler Eşleşmiyor!</div>");
        $this->form_validation->set_message('min_length',"<div class='alert alert-error'>Şifre En Az 6 Karakter Olmalıdır!</div>");
        $this->form_validation->set_message('max_length',"<div class='alert alert-error'>Şifre En Çok 12 Karakter Olmalıdır!</div>");

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('personel/ekle');

        } else {

            $data = array(
                "KullaniciAdi"  =>$this->input->post("KullaniciAdi"),
                "Mail"          =>$this->input->post("Mail"),
                "Ad"            =>$this->input->post("Ad"),
                "Soyad"         =>$this->input->post("Soyad"),
                "Aktif"         =>1,
                "Tarih"         =>date("d.m.y"),
                "Rutbe"         =>1,
                "Sifre"         =>md5($this->input->post("Sifre"))
        );
            $this->GModel->Ekle($data,"users");

            redirect(base_url("Personel"));
        }

	}

    public function Duzelt($id)
    {
        $viewData=new stdClass();
        $viewData->personel = $this->GModel->Getir($id,"users");
        $this->load->view('personel/duzelt', $viewData);
	}

    public function Guncelle($id)
    {

        $aktif=$this->input->post("Aktif")==TRUE?1:0;
        if ($this->input->post("Sifre")==TRUE)
        {
            $data = array(
                "KullaniciAdi"  =>$this->input->post("KullaniciAdi"),
                "Mail"          =>$this->input->post("Mail"),
                "Ad"            =>$this->input->post("Ad"),
                "Soyad"         =>$this->input->post("Soyad"),
                "Aktif"         =>$aktif,
                "Rutbe"         =>$this->input->post("Rutbe"),
                "Sifre"         =>md5("Tc1923")
            );
        }
        else
        {
            $data = array(
                "KullaniciAdi"  =>$this->input->post("KullaniciAdi"),
                "Mail"          =>$this->input->post("Mail"),
                "Ad"            =>$this->input->post("Ad"),
                "Soyad"         =>$this->input->post("Soyad"),
                "Aktif"         =>$aktif,
                "Rutbe"         =>$this->input->post("Rutbe")
            );
        }

        $this->GModel->Guncelle($id,$data,"users");

        redirect(base_url("Personel"));

	}

    public function Sil($id)
    {
        $this->GModel->Sil($id,"users");
        redirect(base_url("Personel"));

	}
}
