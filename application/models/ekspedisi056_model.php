<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekspedisi056_model extends CI_Model
{
    private $_table = "ekspedisi";

    public function get_all()
    {
        $query = $this->db->get($this->_table);
        return $query->result_array();
    }

    public function tambah($data)
    {
        $this->db->insert($this->_table, $data);
        # untuk check apakah berhasil atau tidak input data
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function get_by_id($id)
    {
        $this->db->where('id_ekspedisi_056', $id);
        $query = $this->db->get($this->_table);
        return $query->row_array();
    }

    public function hapus($id)
    {
        $this->db->delete($this->_table, array('id_ekspedisi_056' => $id));
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function ubah($data, $id)
    {
        $this->db->where('id_ekspedisi_056', $id);
        $this->db->update($this->_table, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}