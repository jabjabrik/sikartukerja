<!doctype html>
<html lang="en">

<head>
    <?php $this->view('components/head'); ?>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <!-- Topbar -->
        <?php $this->view('components/topbar'); ?>
        <!-- End Topbar -->

        <!-- Sidebar -->
        <?php $this->view('components/sidebar'); ?>
        <!-- End Sidebar -->

        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Pendaftaran Kartu AK1</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <div class="col-12">
                        <div class="card card-primary card-outline mb-4">
                            <div class="card-header">
                                <div class="card-title">Form Pendaftaran Kartu AK1</div>
                            </div>
                            <form action="<?= base_url('pendaftaran/' . (is_null($pendaftaran) ? 'insert' : 'update')); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row">
                                        <input name="id_user" hidden value="<?= $id_user ?>" />
                                        <input name="id_pendaftaran" id="id_pendaftaran" hidden value="<?= $id_user ?>" />
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="number" name="nik" class="form-control" id="nik" required />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" id="nama" required />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" required />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                                <option value="" selected>-</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                                            <select name="status_perkawinan" id="status_perkawinan" class="form-control" required>
                                                <option value="" selected>-</option>
                                                <option value="belum kawin">Belum kawin</option>
                                                <option value="kawin">Kawin</option>
                                                <option value="cerai hidup">Cerai hidup</option>
                                                <option value="cerai mati">Cerai mati</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="agama" class="form-label">Agama</label>
                                            <select name="agama" id="agama" class="form-control" required>
                                                <option value="" selected>-</option>
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Iristen</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                                <option value="khonghucu">Khonghucu</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                                            <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control" required>
                                                <option value="" selected>-</option>
                                                <option value="SD / Sederajat">SD / Sederajat</option>
                                                <option value="SMP / Sederajat">SMP / Sederajat</option>
                                                <option value="SMA / Sederajat">SMA / Sederajat</option>
                                                <option value="Diploma I/II/III">Diploma I/II/III</option>
                                                <option value="Diploma IV / Strata I">Diploma IV / Strata I</option>
                                                <option value="Strata II">Strata II</option>
                                                <option value="Strata III">Strata III</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="no_telepon" class="form-label">No Telepon</label>
                                            <input type="number" name="no_telepon" class="form-control" id="no_telepon" required />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="pengalaman_kerja" class="form-label">Pengalaman Kerja</label>
                                            <input type="text" name="pengalaman_kerja" class="form-control" id="pengalaman_kerja" />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="alamat" required />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="pas_foto" class="form-label">Pas Foto (3x4)</label>
                                            <input type="file" name="pas_foto" class="form-control" id="pas_foto" required accept="image/*" />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="foto_ktp" class="form-label">Foto KTP</label>
                                            <input type="file" name="foto_ktp" class="form-control" id="foto_ktp" required accept="image/*" />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <img class="img-fluid" id="img-pas_foto" width="200" alt="">
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <img class="img-fluid" id="img-foto_ktp" width="200" alt="">
                                        </div>
                                        <hr>
                                        <div class="mb-3 col-md-6 col-12" hidden id="section-status">
                                            <h6 class="mt-3 fw-bold">Status Pengajuan : <span class="" id="text-status"></span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" id="btn-simpan" class="btn btn-primary">Simpan</button>
                                    <button type="submit" id="btn-update" hidden class="btn btn-success">Perbarui Data</button>
                                    <a id="btn-download" download hidden class="btn btn-primary">Download Kartu AK1</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <script>
        const pendaftaran = <?= json_encode($pendaftaran); ?>;
        const fields = ['id_pendaftaran', 'nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'status_perkawinan', 'agama', 'alamat', 'pendidikan_terakhir', 'no_telepon', 'pengalaman_kerja', 'pas_foto', 'foto_ktp'];

        const btn_simpan = document.querySelector('#btn-simpan');
        const btn_update = document.querySelector('#btn-update');
        const btn_download = document.querySelector('#btn-download');
        const section_status = document.querySelector('#section-status');
        const text_status = document.querySelector('#text-status');
        const pas_foto = document.querySelector('#pas_foto');
        const foto_ktp = document.querySelector('#foto_ktp');

        fields.forEach(e => {
            if (pendaftaran) {
                if (e == 'pas_foto' || e == 'foto_ktp') {
                    document.querySelector(`#img-${e}`).setAttribute('src', `<?= base_url(); ?>/file/${pendaftaran[e]}`);
                } else {
                    document.querySelector(`#${e}`).value = pendaftaran[e]
                }

                if (pendaftaran.status == 'proses') {
                    section_status.removeAttribute('hidden');
                    text_status.innerHTML = 'Proses Validasi'
                    text_status.setAttribute('class', 'badge text-bg-warning');
                    btn_simpan.setAttribute('hidden', '');
                    btn_update.removeAttribute('hidden');
                    pas_foto.removeAttribute('required');
                    foto_ktp.removeAttribute('required');
                }

                if (pendaftaran.status == 'divalidasi') {
                    document.querySelector(`#${e}`).setAttribute('disabled', '');
                    btn_simpan.setAttribute('hidden', '');
                    if (pendaftaran.kartu_ak1) {
                        btn_download.removeAttribute('hidden');
                        btn_download.setAttribute('href', `<?= base_url(); ?>/file/${pendaftaran.kartu_ak1}`);
                    }
                    section_status.removeAttribute('hidden');
                    text_status.innerHTML = 'Pengajuan Berhasil'
                    text_status.setAttribute('class', 'badge text-bg-success');
                }

                if (pendaftaran.status == 'ditolak') {
                    section_status.removeAttribute('hidden');
                    text_status.innerHTML = 'Ditolak'
                    text_status.setAttribute('class', 'badge text-bg-danger');
                    btn_simpan.setAttribute('hidden', '');
                    btn_update.removeAttribute('hidden');
                    pas_foto.removeAttribute('required');
                    foto_ktp.removeAttribute('required');
                }


            }
        });

        console.log(pendaftaran);
    </script>

    <!-- Script -->
    <?php $this->view('components/script'); ?>
    <!-- End Script -->
</body>

</html>