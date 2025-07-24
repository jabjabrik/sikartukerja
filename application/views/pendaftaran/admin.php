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
                            <h3 class="mb-0">Penerimaan Data Pendaftaran Kartu AK1</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <table id="datatables" class="table table-striped table-bordered text-capitalize" style="white-space: nowrap; font-size: 1em;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tgl Daftar</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>JK</th>
                                <th>Agama</th>
                                <th>No Hp</th>
                                <th>Validasi</th>
                                <th>Tgl.Upload</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($data_result as $item) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= date('d/m/Y', strtotime($item->tanggal_pendaftaran)) ?></td>
                                    <td><?= $item->nik ?></td>
                                    <td><?= $item->nama ?></td>
                                    <td><?= $item->jenis_kelamin ?></td>
                                    <td><?= $item->agama ?></td>
                                    <td><?= $item->no_telepon ?></td>
                                    <td>
                                        <?php if ($item->status == 'proses'): ?>
                                            <span class="badge text-bg-warning">Proses</span>
                                        <?php elseif ($item->status == 'divalidasi'): ?>
                                            <span class="badge text-bg-success">Divalidasi</span>
                                        <?php else: ?>
                                            <span class="badge text-bg-danger">Ditolak</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $item->tanggal_upload ? date('d/m/Y', strtotime($item->tanggal_upload)) : '-' ?></td>
                                    <td>
                                        <?php $params = "[`$item->nik`, `$item->nama`, `$item->tempat_lahir`, `$item->tanggal_lahir`, `$item->jenis_kelamin`, `$item->status_perkawinan`, `$item->agama`, `$item->no_telepon`,`$item->alamat`, `$item->pendidikan_terakhir`, `$item->pengalaman_kerja`, `$item->pas_foto`, `$item->foto_ktp`]" ?>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <button type="button" class="pt-1 pb-0 px-2 btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#modal_form" onclick="setForm(<?= $params ?>)">
                                                <i class="bi bi-eye"></i> Detail
                                            </button>
                                            <?php if ($item->status == 'proses'): ?>
                                                <a href="<?= base_url("pendaftaran/validasi/divalidasi/$item->id_pendaftaran"); ?>" class="pt-1 pb-0 px-2 btn btn-primary">
                                                    <i class="bi bi-check2-circle"></i>
                                                </a>
                                                <a href="<?= base_url("pendaftaran/validasi/ditolak/$item->id_pendaftaran"); ?>" class="pt-1 pb-0 px-2 btn btn-danger">
                                                    <i class="bi bi-x-octagon"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($item->status == 'divalidasi'): ?>
                                                <?php if ($item->kartu_ak1): ?>
                                                    <a href="<?= base_url("file/$item->kartu_ak1"); ?>" download class="pt-1 pb-0 px-2 btn btn-secondary">
                                                        <i class="bi bi-download"></i>
                                                    </a>
                                                <?php else: ?>
                                                    <button type="button" class="pt-1 pb-0 px-2 btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_upload" onclick="setUpload('<?= $item->id_pendaftaran ?>')">
                                                        <i class="bi bi-upload"></i> Upload AK1
                                                    </button>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if ($item->status == 'ditolak'): ?>
                                                <a href="<?= base_url("pendaftaran/validasi/divalidasi/$item->id_pendaftaran"); ?>" class="pt-1 pb-0 px-2 btn btn-primary">
                                                    <i class="bi bi-check2-circle"></i>
                                                </a>
                                            <?php endif; ?>


                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal Form -->
    <div class="modal fade" id="modal_upload" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-capitalize" id="title_form">Form Upload</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="modal-form" action="<?= base_url('pendaftaran/upload'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-3">
                            <input name="id_pendaftaran" id="id_pendaftaran" hidden />
                            <div class="mb-3 col-12">
                                <label for="kartu_ak1" class="form-label">Upload Kartu AK1</label>
                                <input type="file" name="kartu_ak1" class="form-control" id="kartu_ak1" required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Upload</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Form -->

    <!-- Modal Form -->
    <div class="modal fade" id="modal_form" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-capitalize" id="title_form">Detail Data Pendaftaran Kartu AK1</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="modal-form">
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="mb-3 col-md-4 col-12">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="number" name="nik" class="form-control" id="nik" disabled />
                            </div>
                            <div class="mb-3 col-md-4 col-12">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" disabled />
                            </div>
                            <div class="mb-3 col-md-4 col-12">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" disabled />
                            </div>
                            <div class="mb-3 col-md-4 col-12">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" disabled />
                            </div>
                            <div class="mb-3 col-md-4 col-12">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" disabled>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-4 col-12">
                                <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                                <select name="status_perkawinan" id="status_perkawinan" class="form-control" disabled>
                                    <option value="belum kawin">Belum kawin</option>
                                    <option value="kawin">Kawin</option>
                                    <option value="cerai hidup">Cerai hidup</option>
                                    <option value="cerai mati">Cerai mati</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-3 col-12">
                                <label for="agama" class="form-label">Agama</label>
                                <select name="agama" id="agama" class="form-control" disabled>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Iristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="khonghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-3 col-12">
                                <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                                <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control" disabled>
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
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" disabled />
                            </div>
                            <div class="mb-3 col-md-3 col-12">
                                <label for="no_telepon" class="form-label">No Telepon</label>
                                <input type="text" name="no_telepon" class="form-control" id="no_telepon" disabled />
                            </div>
                            <div class="mb-3 col-md-3 col-12">
                                <label for="pengalaman_kerja" class="form-label">Pengalaman Kerja</label>
                                <input type="text" name="pengalaman_kerja" class="form-control" id="pengalaman_kerja" disabled />
                            </div>
                            <div class="mb-3 col-md-3 col-12">
                                <img class="img-fluid" id="pas_foto" width="200" alt="">
                            </div>
                            <div class="mb-3 col-md-3 col-12">
                                <img class="img-fluid" id="foto_ktp" width="200" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Form -->

    <!-- Script Modal Form -->
    <script>
        const modal_form = document.querySelector('#modal_form');
        const setForm = (data) => {
            const fields = ['nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'status_perkawinan', 'agama', 'no_telepon', 'alamat', 'pendidikan_terakhir', 'pengalaman_kerja', 'pas_foto', 'foto_ktp'];
            fields.forEach((e, i) => {
                const element = modal_form.querySelector(`#${e}`);
                element.value = data[i];
                if (e == 'pas_foto' || e == 'foto_ktp') {
                    element.setAttribute('src', `<?= base_url() ?>/file/${data[i]}`);
                }
            })
        }

        const setUpload = (id_pendaftaran) => {
            document.querySelector('#id_pendaftaran').value = id_pendaftaran;
        }
    </script>
    <!-- End Script Modal Form -->

    <!-- Script -->
    <?php $this->view('components/script'); ?>
    <!-- End Script -->
</body>

</html>