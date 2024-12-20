<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
    
    function cekUser($nama)
	{
		$query = $this->db->get_where('tbl_user',array('username'=>$nama));
		
        if ($query->num_rows() > 0){
			return $query->result();
		} else {
			return false;
		}

	}
}
?>