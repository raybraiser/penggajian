<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_gaji extends CI_Model {

    public function get_gaji() {
        return $query = $this->db->get('tbl_gaji');
    }

	public function insert_gaji($data) {
        $query = $this->db->insert('tbl_gaji', $data);
        if ($query) {
            $query_status = array(
                'insert_gaji' => 'sukses',		
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("gaji"));
        } else {
            $query_status = array(
                'insert_gaji' => 'gagal',										
            );
            $this->session->set_flashdata($query_status);
            redirect(base_url("gaji"));
        }
	}
}

