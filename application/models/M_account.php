<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_account extends CI_Model{
	function daftar($data){
			$this->db->insert('users', $data);
	}
	function list_user(){	
		$q = $this->db->get('users');
		return $data = $q->result_array();
	}
	function list_barang(){			
		$this->db->select('*')->from('produk')->join('kategori', 'produk.kategori = kategori.id_kategori');
		$q = $this->db->get();
		return $data = $q->result_array();
	}
	function list_kategori(){	
		$q = $this->db->get('kategori');
		return $data = $q->result_array();
	}
	function tambahkategori($data){
		$this->db->insert('kategori', $data);
	}
	function tambahproduk($data){
		$this->db->insert('produk', $data);
	}
}
?>