<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IMULGER.
 * Coder: Murat
 * Date: 2.08.2019
 * Time: 17:06
 */
class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }

    public function Control()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('KullaniciAdi', 'Kullanıcı Adı', 'trim|required');
        $this->form_validation->set_rules('Sifre', 'Şifre', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('login');
        } else {
            $data = array(
                'KullaniciAdi' => $this->input->post('KullaniciAdi'),
                'Sifre' => md5($this->input->post('Sifre'))
            );
            $result = $this->GModel->Login($data);

            if ($result == TRUE) {
                $admin_data = array(
                    "Id" => $result['Id'],
                    "KullaniciAdi" => $result['KullaniciAdi'],
                    "Mail" => $result['Mail'],
                    "Ad" => $result['Ad'],
                    "Soyad" => $result['Soyad'],
                    "Aktif" => $result['Aktif'],
                    "Tarih" => $result['Tarih'],
                    "Rutbe" => $result['Rutbe'],
                    'login' => TRUE
                );

                $this->session->set_userdata("oturum",$admin_data);

                msg('Hoşgeldiniz', 'Main', 'success', 'solid');
            } else {
                msg('Kullanıcı Adı veya Parola Hatalı', 'login', 'danger', 'solid');
            }


        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        msg('Çıkış Yapıldı', 'login', 'info', 'solid');
    }

}