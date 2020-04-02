<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

    public function __construct(){
        parent::__construct();      
        $this->load->model('Model_jabatan');
    }

    public function index()
    {
        $data['result_jabatan'] = $this->Model_jabatan->get_jabatan();
		$data['title'] = "Jabatan - CRUD Penggajian Karyawan";        
        $this->template->load('backend_template', 'jabatan/jabatan', $data);
    }

    public function add()
    {
		$data['title'] = "Tambah Jabatan - CRUD Penggajian Karyawan";        
        $this->template->load('backend_template', 'jabatan/add_jabatan', $data);
    }

    public function save()
    {
        $data = array(
                            'kode_jabatan' => $this->input->post('kodeJabatan'), 
                            'jabatan' => $this->input->post('namaJabatan'), 
                            'standar_gaji' => $this->input->post('standarGaji'), 
                            'keterangan' => $this->input->post('keteranganJabatan')
                        );
        $this->Model_jabatan->insert_jabatan($data);
    }

    public function edit() {
        $id = $this->uri->segment(3);
        $data['result_jabatan'] = $this->Model_jabatan->edit_jabatan($id);
        $data['title'] = "Edit Data Jabatan - CRUD Penggajian Karyawan";        
        $this->template->load('backend_template', 'jabatan/edit_jabatan', $data);
    }

    public function update()
    {   
        $data = array(
                            'kode_jabatan' => $this->input->post('kodeJabatan'), 
                            'jabatan' => $this->input->post('namaJabatan'), 
                            'standar_gaji' => $this->input->post('standarGaji'), 
                            'keterangan' => $this->input->post('keteranganJabatan')
                        );
        $id = $this->input->post('idJabatan');
        $this->Model_jabatan->update_jabatan($id, $data);
    }

    public function json(){
        $this->Model_jabatan->jabatan_json();
    }

    public function delete() {
        $id = $this->uri->segment(3);
        $this->Model_jabatan->hapus_jabatan($id);
    }
}