<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undian extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Gacha";
        $data['namaundian'] = $this->db->get('undian_tbl')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('undian');
        $this->load->view('templates/footer');
    }

    public function tambahNama()
    {
        $data['title'] = "Tambah nama";

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('sesi', 'Sesi', 'required');
        $this->form_validation->set_rules('nomorUndian', 'Nomor Undian', 'required|is_unique[undian_tbl.nomor_undian]', ['is_unique' => 'Nomor undian sudah dipakai. Silakan pilih yang lain']);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('newNama');
            $this->load->view('templates/footer');
        } else {
            $nomor_undian = $this->input->post('nomorUndian');

            $data = [
                'nama' => $this->input->post('nama'),
                'nomor_undian' => $nomor_undian,
                'sesi' => $this->input->post('sesi')
            ];
            $this->db->insert('undian_tbl', $data);
            redirect('undian');
        }
    }

    public function undi()
    {
        $data['title'] = 'Undi Nama';
        $data['sesi'] = $this->db->query('SELECT sesi FROM undian_tbl GROUP BY sesi')->result_array();

        $this->form_validation->set_rules('sesi', 'Sesi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('undi', $data);
            $this->load->view('templates/footer');
        } else {
            $sesi = $this->input->post('sesi');
            $min = $this->db->query("SELECT MIN(nomor_undian) AS min FROM undian_tbl WHERE sesi = " . $sesi)->row_array();
            $max = $this->db->query("SELECT MAX(nomor_undian) AS max FROM undian_tbl WHERE sesi = " . $sesi)->row_array();

            $acak = rand($min['min'], $max['max']);

            $this->hasil($acak);
        }
    }

    public function hasil($acak)
    {
        $data['title'] = 'Undi Nama';
        $data['hasil'] = $acak;
        $data['pemenang'] = $this->db->get_where('undian_tbl', ['nomor_undian' => $acak])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('hasil', $data);
        $this->load->view('templates/footer');
    }
}
