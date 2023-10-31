<div class="px-4 py-5 my-2">
    <h1 class="display-6 fw-bold text-center"><?= $judul ?></h1>
    <div class="col-lg-6 mx-auto mt-5">
        <form action="<?= base_url('siswa/cetak'); ?>" method="POST">
            <div class="mb-3">
                <label for="namaSiswa" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="namaSiswa" placeholder="Masukkan Nama Siswa" name="nama">
                <?= form_error('nama', '<div class="text-danger text-sm">', '</div>'); ?>
            </div>
            <div class="mb-3">
                <label for="nisSiswa" class="form-label">Nomor Induk Siswa</label>
                <input type="text" class="form-control" id="nisSiswa" placeholder="Masukkan NIS Siswa" name="nis">
                <?= form_error('nis', '<div class="text-danger text-sm">', '</div>'); ?>
            </div>
            <div class="mb-3">
                <label for="kelasSiswa" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelasSiswa" placeholder="Masukkan Kelas Siswa" name="kelas">
                <?= form_error('kelas', '<div class="text-danger text-sm">', '</div>'); ?>
            </div>
            <div class="mb-3">
                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control" id="tanggalLahir" placeholder="Masukkan Tanggal Lahir Siswa" name="tanggalLahir">
                <?= form_error('tanggalLahir', '<div class="text-danger text-sm">', '</div>'); ?>
            </div>
            <div class="mb-3">
                <label for="alamatSiswa" class="form-label">Alamat Siswa</label>
                <textarea class="form-control" id="alamatSiswa" rows="3" name="alamat"></textarea>
                <?= form_error('alamat', '<div class="text-danger text-sm">', '</div>'); ?>
            </div>
            <div class="mb-3">
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin1" checked value="laki-laki">
                    <label class="form-check-label" for="jenisKelamin1">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenisKelamin" id="jenisKelamin2" value="perempuan">
                    <label class="form-check-label" for="jenisKelamin2">
                        Perempuan
                    </label>
                </div>
                <?= form_error('jenisKelamin', '<div class="text-danger text-sm">', '</div>'); ?>
            </div>
            <div class="mb-3">
                <label for="agamaSiswa" class="form-label">Agama Siswa</label>
                <select class="form-select" aria-label="Agama" name="agama">
                    <option selected value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
                <?= form_error('agama', '<div class="text-danger text-sm">', '</div>'); ?>
            </div>
            <div class="d-grid gap-2">
                <input class="btn btn-primary" type="submit" value="Simpan">
            </div>
        </form>
    </div>
</div>