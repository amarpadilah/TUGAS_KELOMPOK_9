<?php

class Kategori extends CI_Controller
{
    public function fashion_pria()
    {
        $data['fashion_pria'] = $this->model_kategori->data_fashion_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('fashion_pria', $data);
        $this->load->view('templates/footer');
        
    }

    public function fashion_wanita()
    {
        $data['fashion_wanita'] = $this->model_kategori->data_fashion_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('fashion_wanita',$data);
        $this->load->view('templates/footer');
        
    }

    public function koleksi_dekorasi()
    {
        $data['koleksi_dekorasi'] = $this->model_kategori->data_koleksi_dekorasi()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('koleksi_dekorasi', $data);
        $this->load->view('templates/footer');
    }

}