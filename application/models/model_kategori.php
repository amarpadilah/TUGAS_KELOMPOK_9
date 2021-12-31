<?php

class Model_kategori extends CI_Model
{
    public function data_fashion_pria(){
        return $this->db->get_where("tb_barang",array('kategori ' => 'fashion pria'));
    }

    public function data_fashion_wanita(){
        return $this->db->get_where("tb_barang",array('kategori ' => 'fashion wanita'));
    }

    public function data_koleksi_dekorasi(){
        return $this->db->get_where("tb_barang",array('kategori ' => 'koleksi & dekorasi'));
    }
}