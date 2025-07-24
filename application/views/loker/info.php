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
                            <h3 class="mb-0">Informasi Lowongan Kerja</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row g-5">
                        <?php foreach ($data_result as $item): ?>
                            <?php if ($item->tanggal_berlaku < date('Y-m-d')) continue; ?>
                            <div class="col-4">
                                <div class="card">
                                    <img src="<?= base_url("file/$item->foto"); ?>" class="card-img-top" alt="foto">
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold">Kriteria : <?= $item->kriteria ?></h4>
                                        <br>
                                        <p class="card-text"><?= $item->keterangan ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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