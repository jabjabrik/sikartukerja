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
                            <h3 class="mb-0">Kelola Lowongan Kerja</h3>
                            <button type="button" class="pb-1 px-2 btn btn-sm btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modal_form" onclick="setForm('insert')">
                                <i class="bi bi-plus-lg"></i> Tambah
                            </button>
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
                                <th>Kriteria</th>
                                <th>Lulusan</th>
                                <th>Keterangan</th>
                                <th>foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($data_result as $item) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $item->kriteria ?></td>
                                    <td><?= $item->lulusan ?></td>
                                    <td style="white-space: wrap"><?= $item->keterangan, 0, 60; ?></td>
                                    <td>
                                        <img width="120" src="<?= base_url("file/$item->foto"); ?>" alt="">
                                    </td>
                                    <td>
                                        <?php $params = "[`$item->id_lowongan_kerja`, `$item->kriteria`, `$item->lulusan`, `$item->keterangan`]" ?>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <button type="button" class="pb-0 px-2 btn btn-outline-success me-1" data-bs-toggle="modal" data-bs-target="#modal_form" onclick="setForm('edit', <?= $params ?>)">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </button>
                                            <a href="<?= base_url("loker/delete/$item->id_lowongan_kerja"); ?>" class="pb-0 px-2 btn btn-outline-danger" onclick="return confirm('Anda yakin ingin menghapus data?')">
                                                <i class="bi bi-trash"></i> Hapus
                                            </a>
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
    <div class="modal fade" id="modal_form" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-capitalize" id="title_form">Form Lowongan Kerja</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="modal-form" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-3">
                            <input type="text" name="id_lowongan_kerja" id="id_lowongan_kerja" hidden>
                            <div class="form-group col-md-6 col-12">
                                <label for="kriteria" class="form-label">Kriteria</label>
                                <select name="kriteria" id="kriteria" class="form-control" required>
                                    <option value="" selected>-</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-laki / Perempuan">Laki-laki / Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="lulusan" class="form-label">Lulusan</label>
                                <input type="text" name="lulusan" id="lulusan" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" name="foto" id="foto" class="form-control" required accept="image/*">
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
            modal_form.querySelector('form').setAttribute('action', `<?= base_url('loker/') ?>${title}`)
            const fields = ['id_lowongan_kerja', 'kriteria', 'lulusan', 'keterangan'];
            fields.forEach((e, i) => {
                const element = modal_form.querySelector(`#${e}`);
                element.value = title == 'insert' ? '' : data[i];
            })

            $foto = modal_form.querySelector('#foto')

            if (title == 'insert') {
                foto.setAttribute('required', '')
            } else {
                foto.removeAttribute('required');
            }
        }
    </script>
    <!-- End Script Modal Form -->

    <!-- Script -->
    <?php $this->view('components/script'); ?>
    <!-- End Script -->
</body>

</html>