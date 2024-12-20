<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	public function getMdata()
	{
		$query = $this->db->get('tbl_produk');
        return $query->result();
	}

    public function insert_data($data) 
	{
		return $this->db->insert('tbl_produk',$data);
	}

	public function hapusData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_produk');
	}

	public function getTotalByKategori($kategori)
	{
		$this->db->select('COUNT(id) as total_data');
		$this->db->from('tbl_produk');
		$this->db->where('produk', $kategori);
		$query = $this->db->get();
		return $query->row_array();
	}

	// public function getChart($kategori)
	// {
	// 	$this->db->select('COUNT(*) as jumlahs');
	// 	$this->db->from('tbl_produk');
	// 	$this->db->where('produk', $kategori);
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

	public function getchartIphone()
	{
		$this->db->group_by('produk');
        $this->db->select('produk');
        $this->db->select("count(*) as jumlah");
        return $this->db->from('tbl_produk')
        ->get()
        ->result();
	}



}

?>