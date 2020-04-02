<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_karyawan extends CI_Model {

    public function show_karyawan() {
        $sql = "SELECT tbl_karyawan.*, tbl_jabatan.jabatan AS nama_jabatan FROM tbl_karyawan LEFT JOIN tbl_jabatan ON tbl_karyawan.jabatan = tbl_jabatan.id_jabatan";
        return $this->db->query($sql);
    }


	public function insert_karyawan($data) {
        $query = $this->db->insert('tbl_karyawan', $data);
        if ($query) {
            $query_status = array(
                'insert_karyawan' => 'sukses',		
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("karyawan"));
        } else {
            $query_status = array(
                'insert_karyawan' => 'gagal',										
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("karyawan"));
        }
	}


	public function hapus_karyawan($id) {
        $query = $this->db->delete('tbl_karyawan', array('id_karyawan' => $id));
        if ($query) {
            $query_status = array(
                'hapus_karyawan' => 'sukses',		
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("karyawan"));
        } else {
            $query_status = array(
                'hapus_karyawan' => 'gagal',										
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("karyawan"));
        }
	}

    public function detail_karyawan($id) {
        $sql = "SELECT tbl_karyawan.*, tbl_jabatan.jabatan AS nama_jabatan FROM tbl_karyawan LEFT JOIN tbl_jabatan ON tbl_karyawan.jabatan = tbl_jabatan.id_jabatan WHERE id_karyawan = ?";
        return $this->db->query($sql, array($id));
    }

    public function get_data_karyawan() {
        return $this->db->get('tbl_karyawan');
    }


	public function edit_karyawan($id) {
		return $this->db->get_where('tbl_karyawan', array('id_karyawan' => $id));
	}


	public function update_karyawan($id, $data) {
		$this->db->where('id_karyawan', $id);
        $query = $this->db->update('tbl_karyawan', $data);
        if ($query) {
            $query_status = array(
                'update_karyawan' => 'sukses',		
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("karyawan"));
        } else {
            $query_status = array(
                'update_karyawan' => 'gagal',										
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("karyawan"));
        }
	}



}

