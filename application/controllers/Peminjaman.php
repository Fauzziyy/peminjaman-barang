<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('peminjaman_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
    }
    public function pinjam_barang() 
    {
        $this->load->view('admin/template/header');  
        // $this->load->view('template/sidebar');
        $this->load->view('admin/form_peminjaman'); 
        $this->load->view('admin/template/footer');  
    }

    public function simpan_data()
    {
         $simpan_data = $this->peminjaman_model;
        $hasil = $simpan_data->save();

        if($hasil){
            $this->session->set_flashdata('message', 'success');
            redirect('peminjaman/data_pinjam');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('peminjaman/pinjam_barang');


        }
    }

    public function data_pinjam()
    {
        $data  = $this->peminjaman_model;
        $hasil['data'] = $data->select();
        $this->load->view('admin/template/header');  
        // $this->load->view('template/sidebar');
        $this->load->view('admin/form_data', $hasil); 
        $this->load->view('admin/template/footer'); 
    }

    public function update_pinjam()
    {    
        $data  = $this->peminjaman_model;
        $hasil['data'] = $data->show_data();
        $this->load->view('admin/template/header');  
        // $this->load->view('template/sidebar');
        $this->load->view('admin/form_update',$hasil); 
        $this->load->view('admin/template/footer'); 
    }

    public function update_data()
    {
        $data = $this->peminjaman_model;
        $update = $data->update();

        if($update){
            $this->session->set_flashdata('message', 'success update');
            redirect('peminjaman/data_pinjam');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('peminjaman/data_pinjam');
        }
    }

    public function delete_data()
    {
        $data = $this->peminjaman_model;
        $delete = $data->delete($this->input->get('id'));

        if($delete){
            $this->session->set_flashdata('message', 'success delete');
            redirect('peminjaman/data_pinjam');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('peminjaman/data_pinjam');


        }
    }
}

/* End of file Team.php and path \application\controllers\Team.php */
