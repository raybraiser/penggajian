<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {

    public function __construct(){
        parent::__construct();      
        $this->load->model('Model_aturan_gaji');
        $this->load->model('Model_gaji');
        $this->load->model('Model_karyawan');
        $this->load->model('Model_jabatan');
    }

    public function index()
    {
        $data['result_gaji'] = $this->Model_gaji->get_gaji();
		$data['title'] = "Gaji - CRUD Penggajian Karyawan";        
        $this->template->load('backend_template', 'gaji/gaji', $data);
    }

    public function add()
    {
		$data['title'] = "Tambah Gaji - CRUD Penggajian Karyawan"; 
        $data['karyawan'] = $this->Model_karyawan->get_data_karyawan();      
        $this->template->load('backend_template', 'gaji/add_gaji', $data);
    }

    public function save()
    {
        $kode_penggajian = $this->input->post('kodePenggajian');
        $id_karyawan = $this->input->post('karyawan');

        $karyawan = $this->db->get_where('tbl_karyawan', array('id_karyawan' => $id_karyawan));

        foreach ($karyawan->result() as $data_karyawan) {
            $today = new DateTime(date('Y-m-d'));
            $tanggal_masuk = new DateTime($data_karyawan->tanggal_masuk);
            $diff = $tanggal_masuk->diff($today);
            $masa_kerja = $diff->y;

            $aturan_gaji = $this->db->get_where('tbl_aturan_gaji', array('jabatan' => $data_karyawan->jabatan));
            $jabatan = $this->db->get_where('tbl_jabatan', array('id_jabatan' => $data_karyawan->jabatan));

            $data_jabatan = $jabatan->row();
            $data_aturan_gaji = $aturan_gaji->row();

            if ($masa_kerja >= $data_aturan_gaji->masa_kerja) {
                $nominal = $data_jabatan->standar_gaji + $data_aturan_gaji->insentif + $data_aturan_gaji->bonus;
                $data_gaji = array(
                                    'kode_penggajian' => $kode_penggajian,
                                    'nip' => $data_karyawan->nip_karyawan,
                                    'nama_karyawan' => $data_karyawan->nama_karyawan,
                                    'tanggal_penerimaan' => date('Y-m-d'),
                                    'nominal' => $nominal,
                                );
            } else {
                $nominal = $data_jabatan->standar_gaji;
                $data_gaji = array(
                                    'kode_penggajian' => $kode_penggajian,
                                    'nip' => $data_karyawan->nip_karyawan,
                                    'nama_karyawan' => $data_karyawan->nama_karyawan,
                                    'tanggal_penerimaan' => date('Y-m-d'),
                                    'nominal' => $nominal,
                                );
            }
            $this->Model_gaji->insert_gaji($data_gaji);
        }
      
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

    public function delete() {
        $id = $this->uri->segment(3);
        $this->Model_aturan_gaji->hapus_aturan_gaji($id);
    }
}