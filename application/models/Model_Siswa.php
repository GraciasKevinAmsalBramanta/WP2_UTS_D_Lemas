<?php
class Model_Siswa extends CI_Model
{
    // Method untuk input Data
    public function inputSiswa($nama = null, $nis = null, $kelas = null, $tanggalLahir = null, $alamat = null, $jenisKelamin = null, $agama = null)
    {
        $data = [
            'nama' => $nama,
            'nis' => $nis,
            'kelas' => $kelas,
            'tanggalLahir' => $tanggalLahir,
            'alamat' => $alamat,
            'jenisKelamin' => $jenisKelamin,
            'agama' => $agama,
        ];
        return $data;
    }
}
