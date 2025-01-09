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
                            <form action="<?= base_url('pendaftaran/insert'); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row">
                                        <input name="id_user" hidden value="<?= $id_user ?>" />
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="number" name="nik" class="form-control" id="nik" required value="<?= $data_result->nik ?? '' ?>" <?= $data_result ? 'disabled' : '' ?> />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" id="nama" required value="<?= $data_result->nama ?? '' ?>" <?= $data_result ? 'disabled' : '' ?> />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" required value="<?= $data_result->tempat_lahir ?? '' ?>" <?= $data_result ? 'disabled' : '' ?> />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required value="<?= $data_result->tanggal_lahir ?? '' ?>" <?= $data_result ? 'disabled' : '' ?> />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required <?= $data_result ? 'disabled' : '' ?>>
                                                <option value="" selected>-</option>
                                                <option <?= $data_result->jenis_kelamin == 'Laki-laki' ? 'selected' : '' ?> value="Laki-laki">Laki-laki</option>
                                                <option <?= $data_result->jenis_kelamin == 'Perempuan' ? 'selected' : '' ?> value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                                            <select name="status_perkawinan" id="status_perkawinan" class="form-control" required <?= $data_result ? 'disabled' : '' ?>>
                                                <option value="" selected>-</option>
                                                <option <?= $data_result->status_perkawinan == 'belum kawin' ? 'selected' : '' ?> value="belum kawin">Belum kawin</option>
                                                <option <?= $data_result->status_perkawinan == 'kawin' ? 'selected' : '' ?> value="kawin">Kawin</option>
                                                <option <?= $data_result->status_perkawinan == 'cerai hidup' ? 'selected' : '' ?> value="cerai hidup">Cerai hidup</option>
                                                <option <?= $data_result->status_perkawinan == 'cerai mati' ? 'selected' : '' ?> value="cerai mati">Cerai mati</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="agama" class="form-label">Agama</label>
                                            <select name="agama" id="agama" class="form-control" required <?= $data_result ? 'disabled' : '' ?>>
                                                <option value="" selected>-</option>
                                                <option <?= $data_result->agama == 'islam' ? 'selected' : '' ?> value="islam">Islam</option>
                                                <option <?= $data_result->agama == 'kristen' ? 'selected' : '' ?> value="kristen">Iristen</option>
                                                <option <?= $data_result->agama == 'katolik' ? 'selected' : '' ?> value="katolik">Katolik</option>
                                                <option <?= $data_result->agama == 'hindu' ? 'selected' : '' ?> value="hindu">Hindu</option>
                                                <option <?= $data_result->agama == 'buddha' ? 'selected' : '' ?> value="buddha">Buddha</option>
                                                <option <?= $data_result->agama == 'khonghucu' ? 'selected' : '' ?> value="khonghucu">Khonghucu</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                                            <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control" required <?= $data_result ? 'disabled' : '' ?>>
                                                <option value="" selected>-</option>
                                                <option <?= $data_result->pendidikan_terakhir = 'SD / Sederajat' ? 'selected' : '' ?> value="SD / Sederajat">SD / Sederajat</option>
                                                <option <?= $data_result->pendidikan_terakhir = 'SMP / Sederajat' ? 'selected' : '' ?> value="SMP / Sederajat">SMP / Sederajat</option>
                                                <option <?= $data_result->pendidikan_terakhir = 'SMA / Sederajat' ? 'selected' : '' ?> value="SMA / Sederajat">SMA / Sederajat</option>
                                                <option <?= $data_result->pendidikan_terakhir = 'Diploma I/II/III' ? 'selected' : '' ?> value="Diploma I/II/III">Diploma I/II/III</option>
                                                <option <?= $data_result->pendidikan_terakhir = 'Diploma IV / Strata I' ? 'selected' : '' ?> value="Diploma IV / Strata I">Diploma IV / Strata I</option>
                                                <option <?= $data_result->pendidikan_terakhir = 'Strata II' ? 'selected' : '' ?> value="Strata II">Strata II</option>
                                                <option <?= $data_result->pendidikan_terakhir = 'Strata III' ? 'selected' : '' ?> value="Strata III">Strata III</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="no_telepon" class="form-label">No Telepon</label>
                                            <input type="number" name="no_telepon" class="form-control" id="no_telepon" required value="<?= $data_result->no_telepon ?? '' ?>" <?= $data_result ? 'disabled' : '' ?> />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="pengalaman_kerja" class="form-label">Pengalaman Kerja</label>
                                            <input type="text" name="pengalaman_kerja" class="form-control" id="pengalaman_kerja" required value="<?= $data_result->pengalaman_kerja ?? '' ?>" <?= $data_result ? 'disabled' : '' ?> />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="pas_foto" class="form-label">Pas Foto (3x4)</label>
                                            <input type="file" name="pas_foto" class="form-control" id="pas_foto" required accept="image/*" <?= $data_result ? 'disabled' : '' ?> />
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label for="foto_ktp" class="form-label">Foto KTP</label>
                                            <input type="file" name="foto_ktp" class="form-control" id="foto_ktp" required accept="image/*" <?= $data_result ? 'disabled' : '' ?> />
                                        </div>
                                        <?php if ($data_result): ?>
                                            <div class="mb-3 col-md-6 col-12">
                                                <img class="img-fluid" width="200" src="<?= base_url("file/" . isset($data_result->pas_foto)) ?>" alt="">
                                            </div>
                                            <div class="mb-3 col-md-6 col-12">
                                                <img class="img-fluid" width="200" src="<?= base_url("file/" . isset($data_result->foto_ktp)) ?>" alt="">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Script -->
    <?php $this->view('components/script'); ?>
    <!-- End Script -->
</body>

</html>