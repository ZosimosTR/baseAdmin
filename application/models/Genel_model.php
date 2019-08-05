<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IMULGER.
 * Coder: Murat
 * Date: 2.08.2019
 * Time: 12:45
 */
class Genel_model extends CI_Model
{
    public function Ekle($data=array(),$tablo)
    {
        return $this->db->insert($tablo, $data);
    }

    public function Getir($id,$tablo)
    {
        $sonuc = $this->db
            ->where("Id", $id)
            ->get($tablo)
            ->row();

        return $sonuc;
    }

    public function Guncelle($id,$data=array(),$tablo)
    {
        $sonuc = $this->db
            ->where("Id",$id)
            ->update("$tablo", $data);
        return $sonuc;
    }

    public function HepsiniGetir($tablo)
    {
        return $this->db->get($tablo)->result();
    }
    
    public function Sil($id,$tablo)
    {
        return $this->db->delete("$tablo", array("Id"=>$id));
    }

    public function Login($data=array())
    {
        $query = $this->db->get_where('users', array('KullaniciAdi' => $data['KullaniciAdi']));
        if ($query->num_rows() == 0){
            return false;
        }
        else{
            $result = $query->row_array();
            if($data['Sifre'] == $result['Sifre']){
                return $result = $query->row_array();
            }

        }
        
    }


}