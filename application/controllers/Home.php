<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        
    }
    


    public function index()
    {
        $data = array(
            'title' =>'Home',
            'produk' => $this->m_home->get_all_data(),
            'isi' =>'v_home',
        );
        $this->load->view('layout/v_wrapper_frontend',$data, FALSE);
        
    }

    
    public function kategori($id_kategori)
    {
        $kategori = $this->m_home->kategori($id_kategori);
        $data = array(
            'title' =>'Kategori Produk : ' . $kategori->nama_kategori,
            'produk' => $this->m_home->get_all_data_produk($id_kategori),   
            'isi' =>'v_kategori_produk',    
        );
        $this->load->view('v_kategori_produk',$data, FALSE);
        
    }

    public function detail_produk($id_produk)
    {
        
        $data = array(
            'title' => 'Detail Produk',
            'gambar' => $this->m_home->gambar_produk($id_produk),   
            'produk' => $this->m_home->detail_produk($id_produk),   
            'isi' =>'v_detail_produk',    
        );
        $this->load->view('v_detail_produk',$data, FALSE);
    }

}

/* End of file Home.php */
