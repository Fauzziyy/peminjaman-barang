<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peminjaman_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('admin/form_peminjaman');
    }
}

/* End of file Admin.php and path \application\controllers\Admin.php */
