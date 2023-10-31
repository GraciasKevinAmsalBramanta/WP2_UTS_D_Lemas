<?php

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page'] = 'input-siswa';
        $data['judul'] = 'Input Siswa';
        $this->load->view('v_header', $data);
        $this->load->view('v_input', $data);
        $this->load->view('v_footer', $data);
    }

    public function cetak()
    {
        $data['page'] = 'cetak-siswa';
        $data['judul'] = 'Cetak Data Siswa';

        // Validasi Form
        $this->form_validation->set_rules(
            'nama',
            'Nama Siswa',
            'required',
            [
                'required' => 'Nama Siswa Harus Diisi',
            ]
        );
        $this->form_validation->set_rules(
            'nis',
            'Nomor Induk Siswa',
            'required|numeric',
            [
                'required' => 'Nomor Induk Siswa Harus Diisi',
                'numeric' => 'Nomor Induk Siswa Harus Berupa Angka'
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'Kelas Siswa',
            'required|numeric',
            [
                'required' => 'Kelas Siswa Harus Diisi',
                'numeric' => 'Kelas Siswa Harus Berupa Angka'
            ]
        );
        $this->form_validation->set_rules(
            'tanggalLahir',
            'Tanggal Lahir Siswa',
            'required',
            [
                'required' => 'Tanggal Lahir Harus Diisi'
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat Siswa',
            'required',
            [
                'required' => 'Alamat Harus Diisi'
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->index();
        } else {

            // Load Model Siswa
            $data = $this->Model_Siswa->inputSiswa($this->input->post('nama'), $this->input->post('nis'), $this->input->post('kelas'), $this->input->post('tanggalLahir'), $this->input->post('alamat'), $this->input->post('jenisKelamin'), $this->input->post('agama'));

            $data['page'] = 'input-siswa';
            $data['judul'] = 'Cetak Data Siswa';
            $this->load->view('v_header', $data);
            $this->load->view('view_data_siswa', $data);
            $this->load->view('v_footer', $data);
        }
    }
}
