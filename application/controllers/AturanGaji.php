<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AturanGaji extends CI_Controller {

    public function __construct(){
        parent::__construct();      
        $this->load->model('Model_aturan_gaji');
        $this->load->model('Model_jabatan');
    }

    public function index()
    {
        $data['result_aturan_gaji'] = $this->Model_aturan_gaji->show_aturan_gaji();
		$data['title'] = "Aturan Gaji - CRUD Penggajian Karyawan";        
        $this->template->load('backend_template', 'aturan_gaji/aturan_gaji', $data);
    }

    public function add()
    {
		$data['title'] = "Tambah Aturan Gaji - CRUD Penggajian Karyawan"; 
        $data['jabatan'] = $this->Model_jabatan->get_jabatan();      
        $this->template->load('backend_template', 'aturan_gaji/add_aturan_gaji', $data);
    }

    public function save()
    {
        $data = array(
                            'jabatan' => $this->input->post('jabatan'), 
                            'masa_kerja' => $this->input->post('masaKerja'), 
                            'insentif' => $this->input->post('insentif'), 
                            'bonus' => $this->input->post('bonus')
                        );
        $this->Model_aturan_gaji->insert_aturan_gaji($data);
    }

    public function edit() {
        $id = $this->uri->segment(3);
        $data['jabatan'] = $this->Model_jabatan->get_jabatan();
        $data['result_aturan_gaji'] = $this->Model_aturan_gaji->edit_aturan_gaji($id);
        $data['title'] = "Edit Aturan Gaji - CRUD Penggajian Karyawan";        
        $this->template->load('backend_template', 'aturan_gaji/edit_aturan_gaji', $data);
    }

    public function update()
    {   
        $data = array(
                            'jabatan' => $this->input->post('jabatan'), 
                            'masa_kerja' => $this->input->post('masaKerja'), 
                            'insentif' => $this->input->post('insentif'), 
                            'bonus' => $this->input->post('bonus')
                        );
        $id = $this->input->post('idAturanGaji');
        $this->Model_aturan_gaji->update_aturan_gaji($id, $data);
    }

    public function json(){
        $this->Model_jabatan->jabatan_json();
    }

    public function delete() {
        $id = $this->uri->segment(3);
        $this->Model_aturan_gaji->hapus_aturan_gaji($id);
    }
}