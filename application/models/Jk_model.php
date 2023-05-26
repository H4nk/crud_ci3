<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Jk_model extends CI_Model {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    public function getJk()
    {
        $query = $this->db->get('jenis_kelamin');
        return $query->result();
    }
 
    public function tambahJk($data)
    {
        $this->db->insert('jenis_kelamin', $data);
        return $this->db->insert_id();
    }
 
    public function editJk($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('jenis_kelamin', $data);
    }
 
    public function hapusJk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jenis_kelamin');
    }
}