<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
		$data['title'] = "Dashboard - CRUD Penggajian Karyawan";        
        $this->template->load('backend_template', 'dashboard', $data);
    }
}