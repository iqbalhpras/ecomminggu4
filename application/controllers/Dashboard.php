<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
 function __construct(){
 parent::__construct();
 $this->simple_login->cek_login();
 $this->load->library(array('form_validation'));
 $this->load->helper(array('url','form'));
 $this->load->model('m_account'); //call model
 }
 //Load Halaman dashboard
 public function index() {
    $barang = $this->m_account->list_barang();
    $kategori = $this->m_account->list_kategori();
    $data = array('barang' => $barang,
                  'kategori' => $kategori
   );
  // print_r($barang);
    $this->load->view('account/v_dashboard',$data);
 }
 public function users(){
    $users = $this->m_account->list_user();
    $data = array('users' => $users);
    $this->load->view('account/v_user',$data);
 }
 public function tambahproduk(){
   $kategori = $this->m_account->list_kategori();
   $data = array('kategori' => $kategori);
   $this->load->view('account/tambahproduk',$data); 
 }
 public function addproduk(){
   
   $config['upload_path'] = './gambar/';
   $config['allowed_types'] = 'gif|jpg|png';
   $config['max_size'] = 1000;
   $config['max_width'] = 1024;
   $config['max_height'] = 1024;
   $this->load->library('upload', $config);

   if ( ! $this->upload->do_upload('gambar')){
      $error = array('error' => $this->upload->display_errors());
      print_r($error);
      $this->load->view('account/tambahproduk', $error);
   }else{

      $uploadgambar = $this->upload->data();     

      $this->form_validation->set_rules('nama','NAME','required');  
      $this->form_validation->set_rules('harga','INTEGER','required');        
      if($this->form_validation->run() == FALSE) {
         $this->load->view('account/tambahproduk');
      }
      else{
         $data['nama_produk'] = $this->input->post('nama');
         $data['deskripsi'] = $this->input->post('deskripsi');
         $data['harga'] = $this->input->post('harga');
         $data['kategori'] = $this->input->post('kategori');         
         $data['gambar'] = 'gambar/'.$uploadgambar['file_name'];   

         $this->m_account->tambahproduk($data);
         
         $pesan['message'] = "tambah produk berhasil";
         redirect('Dashboard');
      }
   }  
}

 public function kategori(){
   $kategori = $this->m_account->list_kategori();
   $data = array('kategori' => $kategori);
   $this->load->view('account/v_kategori',$data);
   
 }
 public function tambahkategori(){
   $this->form_validation->set_rules('name','NAME','required');
   if($this->form_validation->run() == FALSE) {
      $this->load->view('account/v_kategori');
      }else{
      $data['nama_kategori'] = $this->input->post('name');      
      $this->m_account->tambahkategori($data);
      $pesan['message'] = "input berhasil";
      redirect('Dashboard/kategori');
   }
 }
}