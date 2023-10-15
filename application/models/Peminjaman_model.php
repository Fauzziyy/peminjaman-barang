<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Peminjaman_model extends CI_Model 
{
    private $table = 'peminjaman';
    public function select()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }

    public function save()
    {
        $data = array(
            "nama_peminjam" => $this->input->post('nama_peminjam'),
            "nama_barang" => $this->input->post('nama_barang'),
            "masa_peminjaman" => $this->input->post('masa_peminjaman'),
            "waktu_peminjaman" => $this->input->post('waktu_peminjaman'),
            "waktu_pengembalian" => $this->input->post('waktu_pengembalian'),
        );

        return $this->db->insert($this->table, $data);
    }

    public function show_data()
    {
        $id = $this->input->get('id');
        $this->db->from($this->table)->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function update()
    {
        $data = array(
            "nama_peminjam" => $this->input->post('nama_peminjam'),
            "nama_barang" => $this->input->post('nama_barang'),
            "masa_peminjaman" => $this->input->post('masa_peminjaman'),
            "waktu_peminjaman" => $this->input->post('waktu_peminjaman'),
            "waktu_pengembalian" => $this->input->post('waktu_pengembalian'),
        );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update($this->table,$data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}


/* End of file Pemesanan_model.php and path \application\models\Pemesanan_model.php */



/* End of file Peminjaman_model.php and path \application\models\Peminjaman_model.php */
