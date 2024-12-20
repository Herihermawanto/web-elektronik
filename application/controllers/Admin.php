<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	}

    public function index()
    {
        $data['mData'] = $this->M_data->getMdata();
        $this->load->view('templates/header');
        $this->load->view('admin/v_dataElektronik', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }

    public function dashboard()
	{	
		// Ambil total produk berdasarkan kategori
        $data['iphone'] = $this->M_data->getTotalByKategori('iphone');
        $data['samsung'] = $this->M_data->getTotalByKategori('samsung');
        $data['xiaomi'] = $this->M_data->getTotalByKategori('xiaomi');

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/v_dashboard',$data);
		$this->load->view('templates/footer');
	}

    public function simpan()
{
    // $this->form_validation->set_rules('thumbnail', 'Thumbnail Anda', 'required', array('required' => 'Masukan Thumbnail Produk Anda'));
    $this->form_validation->set_rules('kategori', 'Kategori Produk Anda', 'required', array('required' => 'Masukan Kategori Produk Anda'));
    $this->form_validation->set_rules('produk', 'Produk Anda', 'required', array('required' => 'Masukan Nama Produk Anda'));
    $this->form_validation->set_rules('harga', 'Harga Produk Anda', 'required', array('required' => 'Masukan Harga Produk Anda'));

    if ($this->form_validation->run() == TRUE) {
        $thumbnail   = $this->input->post('thumbnail');
        $kategori    = $this->input->post('kategori');
        $produk      = $this->input->post('produk');
        $harga       = $this->input->post('harga');
        
        // Konfigurasi upload
        $config['upload_path']      = './assets/upload'; // Folder untuk menyimpan dokumen
        $config['allowed_types']    = 'jpg|png|jpeg'; // Jenis file yang diperbolehkan untuk diupload
        $config['max_size']         = 1024; // Ukuran maksimum file dalam kilobita

            if ($thumbnail = ''){}else{
				$config['upload_path'] = './assets/upload';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size']     = '1024';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('thumbnail')){
				$this->session->set_flashdata('gagal_upload','File gagal diupload ! File hanya mendukung tipe jpg, png, jpeg');
        		redirect('admin');
				} else {
					$thumbnail = $this->upload->data('file_name');
				}
			}
            $data = array(
                'thumbnail' => $thumbnail,
                'kategori'  => $kategori,
                'produk'    => $produk,
                'harga'     => $harga
            );
            
            $this->M_data->insert_data($data);
            $this->session->set_flashdata('success_insert', 'Data berhasil ditambahkan');
            redirect('admin');
    
    } else {
        $this->session->set_flashdata('error', validation_errors());
        redirect('admin');
    }
}

public function updateData()
	{
		 // $this->form_validation->set_rules('thumbnail', 'Thumbnail Anda', 'required', array('required' => 'Masukan Thumbnail Produk Anda'));
        $this->form_validation->set_rules('kategori', 'Kategori Produk Anda', 'required', array('required' => 'Masukan Kategori Produk Anda'));
        $this->form_validation->set_rules('produk', 'Produk Anda', 'required', array('required' => 'Masukan Nama Produk Anda'));
        $this->form_validation->set_rules('harga', 'Harga Produk Anda', 'required', array('required' => 'Masukan Harga Produk Anda'));

		if($this->form_validation->run() == TRUE) {
			$id 			= $this->input->post('id');

			$thumbnail   = $this->input->post('thumbnail');
            $kategori    = $this->input->post('kategori');
            $produk      = $this->input->post('produk');
            $harga       = $this->input->post('harga');
        
            // Konfigurasi upload
            $config['upload_path']      = './assets/upload'; // Folder untuk menyimpan dokumen
            $config['allowed_types']    = 'jpg|png|jpeg'; // Jenis file yang diperbolehkan untuk diupload
            $config['max_size']         = 1024; // Ukuran maksimum file dalam kilobita

            if ($thumbnail = ''){}else{
				$config['upload_path'] = './assets/upload';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size']     = '1024';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('thumbnail')){
                $data = array(
                    //'thumbnail' => $thumbnail,
                    'kategori'  => $kategori,
                    'produk'    => $produk,
                    'harga'     => $harga
                );

				$this->db->where('id', $id);
				$this->db->update('tbl_produk',$data);
				$this->session->set_flashdata('success_update','Data berhasil diubah');
        		redirect('admin');		
				} else {
					$thumbnail = $this->upload->data('file_name');
				}
			}

			 $data = array(
                'thumbnail' => $thumbnail,
                'kategori'  => $kategori,
                'produk'    => $produk,
                'harga'     => $harga
            );

			$this->db->where('id', $id);
			$this->db->update('tbl_produk',$data);
			$this->session->set_flashdata('success_update','Data berhasil diubah');
			redirect('admin');
			} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('admin');
		}
	}

        public function hapusData()
    {
		$this->form_validation->set_rules('id', 'ID User', 'required', array('required' => 'ID user anda tidak terbaca'));
			if($this->form_validation->run() == TRUE) {
			$id         = $this->input->post('id');
			$thumbnail  = $this->input->post('thumbnail');
			
			$path='./assets/upload/'.$thumbnail;
			unlink($path);
			$this->M_data->hapusData($id);
			$this->session->set_flashdata('success_delete','Data berhasil dihapus');
			redirect('admin');
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('admin');
		}
	}
    
    // public function chartdata()
	// {
    //     // Ambil total produk berdasarkan kategori
    //     $data['Jml_iphone']     = $this->M_data->getChart('iphone');
    //     $data['Jml_samsung']    = $this->M_data->getChart('samsung');
    //     $data['Jml_xiaomi']     = $this->M_data->getChart('xiaomi');

	// 	echo json_encode($data);
	// }

    public function chartdata()
	{
		$data = $this->M_data->getchartIphone();
		echo json_encode($data);
	}

    // public function chartdataSamsung()
	// {
	// 	$data = $this->m_data->getchartSamsung();
	// 	echo json_encode($data);
	// }

    // public function chartdataXiaomi()
	// {
	// 	$data = $this->m_data->getchartXiaomi();
	// 	echo json_encode($data);
	// }

}
