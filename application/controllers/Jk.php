<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jk_model');
		$this->load->helper('url');
    }

    public function index()
    {
        $data['jk'] = $this->Jk_model->getJk();
        $this->load->view('jk/index', $data);
    }

    public function tambah()
    {
        $this->load->view('jk/tambah');
    }

    public function simpan()
    {
        $data = array(
            'ket' => $this->input->post('ket')
        );
        $this->Jk_model->tambahJk($data);
        redirect('jk/index');
    }

    public function edit($id)
    {
        $query= $this->db->get_where('jenis_kelamin', array('id' => $id))->result();
		foreach($query as $a){
			
			$data['id'] = $a->id;
			$data['ket'] = $a->ket;
		}
        $this->load->view('jk/edit', $data);
    }

    public function update($id)
    {
        $data = array(
            'ket' => $this->input->post('ket')
        );
        $this->Jk_model->editJk($id, $data);
        redirect('jk/index');
    }

    public function hapus($id)
    {
        $this->Jk_model->hapusJk($id);
        redirect('jk/index');
    }

}