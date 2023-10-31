<div class="px-4 py-5 my-2">
    <h1 class="display-6 fw-bold text-center">Cetak Data Siswa</h1>
    <div class="col-lg-6 mx-auto mt-5">
        <a class="btn btn-primary mb-3" href="<?= base_url() ?>siswa">
            < Kembali</a>
                <div class="mb-3">
                    <label for="namaSiswa" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" id="namaSiswa" placeholder="Masukkan Nama Siswa" name="nama" value="<?= $nama ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="nisSiswa" class="form-label">Nomor Induk Siswa</label>
                    <input type="text" class="form-control" id="nisSiswa" placeholder="Masukkan NIS Siswa" name="nis" value="<?= $nis ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="kelasSiswa" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="kelasSiswa" placeholder="Masukkan Kelas Siswa" name="kelas" value="<?= $kelas ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tanggalLahir" placeholder="Masukkan Tanggal Lahir Siswa" name="tanggalLahir" value="<?= $tanggalLahir ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="alamatSiswa" class="form-label">Alamat Siswa</label>
                    <textarea class="form-control" id="alamatSiswa" rows="3" name="alamat" disabled><?= $alamat ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenisKelamin" placeholder="Masukkan Jenis Kelamin Siswa" name="jenisKelamin" value="<?= ($jenisKelamin == 'laki-laki') ? 'Laki - laki' : 'Perempuan' ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="agama" placeholder="Masukkan Agama Siswa" name="agama" value="<?= $agama ?>" disabled>
                </div>
    </div>
</div>