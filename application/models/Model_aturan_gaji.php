<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_aturan_gaji extends CI_Model {

    public function get_jabatan() {
        return $query = $this->db->get('tbl_jabatan');
    }

	public function show_aturan_gaji() {
        $sql = "SELECT tbl_aturan_gaji.*, tbl_jabatan.jabatan AS nama_jabatan FROM tbl_aturan_gaji LEFT JOIN tbl_jabatan ON tbl_aturan_gaji.jabatan = tbl_jabatan.id_jabatan";
        return $this->db->query($sql);
	}


	public function insert_aturan_gaji($data) {
        $query = $this->db->insert('tbl_aturan_gaji', $data);
        if ($query) {
            $query_status = array(
                'insert_aturan_gaji' => 'sukses',		
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("AturanGaji"));
        } else {
            $query_status = array(
                'insert_aturan_gaji' => 'gagal',										
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("AturanGaji"));
        }
	}


	public function hapus_aturan_gaji($id) {
        $query = $this->db->delete('tbl_aturan_gaji', array('id_aturan_gaji' => $id));
        if ($query) {
            $query_status = array(
                'hapus_aturan_gaji' => 'sukses',		
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("AturanGaji"));
        } else {
            $query_status = array(
                'hapus_aturan_gaji' => 'gagal',										
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("AturanGaji"));
        }
	}

	public function edit_aturan_gaji($id) {
		return $this->db->get_where('tbl_aturan_gaji', array('id_aturan_gaji' => $id));
	}


	public function update_aturan_gaji($id, $data) {
		$this->db->where('id_aturan_gaji', $id);
        $query = $this->db->update('tbl_aturan_gaji', $data);
        if ($query) {
            $query_status = array(
                'update_aturan_gaji' => 'sukses',		
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("AturanGaji"));
        } else {
            $query_status = array(
                'update_aturan_gaji' => 'gagal',										
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("AturanGaji"));
        }
	}



}

