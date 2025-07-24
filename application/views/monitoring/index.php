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
                            <h3 class="mb-0"><?= $user_role == 'admin' ? 'Monitoring' : 'Status Pekerjaan' ?></h3>
                            <?php if ($user_role == 'pemohon'): ?>
                                <button type="button" class="pb-1 px-2 btn btn-sm btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modal_form" onclick="setForm('insert')">
                                    <i class="bi bi-plus-lg"></i> Tambah
                                </button>
                            <?php else: ?>
                                <div class="btn-group btn-group-sm" role="group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        Cetak Laporan
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" class="dropdown-item" href="monitoring/report/bekerja">Bekerja</a></li>
                                        <li><a target="_blank" class="dropdown-item" href="monitoring/report/belum bekerja">Belum Bekerja</a></li>
                                    </ul>
                                </div>
                            <?php endif; ?>
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
                                <th>Nama</th>
                                <th>No Pencaker</th>
                                <th>Tanggal</th>
                                <th>Status Bekerja</th>
                                <th>Tempat Bekerja</th>
                                <?php if ($user_role == 'pemohon'): ?>
                                    <th>Aksi</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($data_result as $item) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $item->nama ?></td>
                                    <td><?= $item->nopencaker ?></td>
                                    <td><?= $item->tanggal ?></td>
                                    <td><?= $item->status_bekerja ?></td>
                                    <td><?= $item->tempat_bekerja ?? '-' ?></td>
                                    <?php if ($user_role == 'pemohon'): ?>
                                        <td>
                                            <?php $params = "[`$item->id_monitoring`,`$item->nopencaker`,`$item->tanggal`,`$item->status_bekerja`,`$item->tempat_bekerja`]" ?>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="pb-0 px-2 btn btn-outline-success me-1" data-bs-toggle="modal" data-bs-target="#modal_form" onclick="setForm('edit', <?= $params ?>)">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </button>
                                                <a href="<?= base_url("monitoring/delete/$item->id_monitoring"); ?>" class="pb-0 px-2 btn btn-outline-danger" onclick="return confirm('Anda yakin ingin menghapus data?')">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </a>
                                            </div>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal Form -->
    <div class="modal fade" id="modal_form" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-capitalize" id="title_form">Form </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="modal-form" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-3">
                            <input type="text" name="id_monitoring" id="id_monitoring" hidden>
                            <div class="form-group col-md-6 col-12">
                                <label for="nopencaker" class="form-label">nopencaker</label>
                                <input type="text" name="nopencaker" id="nopencaker" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="status_bekerja" class="form-label">Status Bekerja</label>
                                <select name="status_bekerja" id="status_bekerja" class="form-control" required>
                                    <option value="" selected>-</option>
                                    <option value="bekerja">Bekerja</option>
                                    <option value="belum bekerja">Belum Bekerja</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="tempat_bekerja" class="form-label">Tempat Bekerja</label>
                                <input type="text" name="tempat_bekerja" id="tempat_bekerja" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Form -->

    <!-- Script Modal Form -->
    <script>
        const modal_form = document.querySelector('#modal_form');
        const setForm = (title, data) => {
            modal_form.querySelector('form').setAttribute('action', `<?= base_url('monitoring/') ?>${title}`)
            const fields = ['id_monitoring', 'nopencaker', 'tanggal', 'status_bekerja', 'tempat_bekerja'];
            fields.forEach((e, i) => {
                const element = modal_form.querySelector(`#${e}`);
                element.value = title == 'insert' ? '' : data[i];
            })
        }
    </script>
    <!-- End Script Modal Form -->

    <!-- Script -->
    <?php $this->view('components/script'); ?>
    <!-- End Script -->
</body>

</html>