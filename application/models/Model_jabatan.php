<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jabatan extends CI_Model {

    public function get_jabatan() {
        return $query = $this->db->get('tbl_jabatan');
    }

	public function insert_jabatan($data) {
        $query = $this->db->insert('tbl_jabatan', $data);
        if ($query) {
            $query_status = array(
                'insert_jabatan' => 'sukses',		
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("jabatan"));
        } else {
            $query_status = array(
                'insert_jabatan' => 'gagal',										
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("jabatan"));
        }
	}

	public function hapus_jabatan($id) {
        $query = $this->db->delete('tbl_jabatan', array('id_jabatan' => $id));
        if ($query) {
            $query_status = array(
                'hapus_jabatan' => 'sukses',		
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("jabatan"));
        } else {
            $query_status = array(
                'hapus_jabatan' => 'gagal',										
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("jabatan"));
        }
	}

	public function edit_jabatan($id) {
		return $this->db->get_where('tbl_jabatan', array('id_jabatan' => $id));
	}


	public function update_jabatan($id, $data) {
		$this->db->where('id_jabatan', $id);
        $query = $this->db->update('tbl_jabatan', $data);
        if ($query) {
            $query_status = array(
                'update_jabatan' => 'sukses',		
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("jabatan"));
        } else {
            $query_status = array(
                'update_jabatan' => 'gagal',										
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("jabatan"));
        }
	}



}

