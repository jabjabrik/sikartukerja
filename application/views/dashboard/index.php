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
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-primary shadow-sm">
                                    <i class="bi bi-person-badge"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Data Pemohon</span>
                                    <span class="info-box-number"><?= $total_pemohon; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-danger shadow-sm">
                                    <i class="bi bi-clipboard-check"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Pengajuan Disetujui</span>
                                    <span class="info-box-number"><?= $total_pengajuan; ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-success shadow-sm">
                                    <i class="bi bi-person-badge"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Lowongan Kerja</span>
                                    <span class="info-box-number"><?= $total_loker; ?></span>
                                </div>
                            </div>
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