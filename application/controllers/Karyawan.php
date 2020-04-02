<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    public function __construct(){
        parent::__construct();      
        $this->load->model('Model_karyawan');
        $this->load->model('Model_jabatan');
    }

    public function index()
    {
        $data['result_karyawan'] = $this->Model_karyawan->show_karyawan();
		$data['title'] = "Karyawan - CRUD Penggajian Karyawan";        
        $this->template->load('backend_template', 'karyawan/karyawan', $data);
    }

    public function add()
    {
        $data['jabatan'] = $this->Model_jabatan->get_jabatan();
		$data['title'] = "Tambah Karyawan - CRUD Penggajian Karyawan";        
        $this->template->load('backend_template', 'karyawan/add_karyawan', $data);
    }

    public function save()
    {
        $data = array(
                            'nip_karyawan' => $this->input->post('nipKaryawan'), 
                            'nama_karyawan' => $this->input->post('namaKaryawan'), 
                            'jenis_kelamin' => $this->input->post('jenisKelamin'), 
                            'tanggal_lahir' => $this->input->post('tanggalLahir'), 
                            'no_telepon' => $this->input->post('nomorHandphone'), 
                            'email' => $this->input->post('email'), 
                            'alamat' => $this->input->post('email'), 
                            'jabatan' => $this->input->post('jabatan'), 
                            'tanggal_masuk' => $this->input->post('tanggalMasuk'), 
                        );

        $this->Model_karyawan->insert_karyawan($data);
    }

    public function detail() {
        $id = $this->uri->segment(3);
        $data['result_karyawan'] = $this->Model_karyawan->detail_karyawan($id);
        $data['title'] = "Detail Data Karyawan - CRUD Penggajian Karyawan";        
        $this->template->load('backend_template', 'karyawan/detail_karyawan', $data);
    }

    public function edit() {
        $id = $this->uri->segment(3);
        $data['jabatan'] = $this->Model_jabatan->get_jabatan();
        $data['result_karyawan'] = $this->Model_karyawan->edit_karyawan($id);
        $data['title'] = "Edit Data Karyawan - CRUD Penggajian Karyawan";        
        $this->template->load('backend_template', 'karyawan/edit_karyawan', $data);
    }

    public function update()
    {   
        $data = array(
                            'nip_karyawan' => $this->input->post('nipKaryawan'), 
                            'nama_karyawan' => $this->input->post('namaKaryawan'), 
                            'jenis_kelamin' => $this->input->post('jenisKelamin'), 
                            'tanggal_lahir' => $this->input->post('tanggalLahir'), 
                            'no_telepon' => $this->input->post('nomorHandphone'), 
                            'email' => $this->input->post('email'), 
                            'alamat' => $this->input->post('email'), 
                            'jabatan' => $this->input->post('jabatan'), 
                            'tanggal_masuk' => $this->input->post('tanggalMasuk'), 
                        );
        $id = $this->input->post('idKaryawan');
        $this->Model_karyawan->update_karyawan($id, $data);
    }

    public function json(){
        $this->Model_karyawan->karyawan_json();
    }

    public function delete() {
        $id = $this->uri->segment(3);
        $this->Model_karyawan->hapus_karyawan($id);
    }
}