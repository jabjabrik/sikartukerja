<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sikartukerja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Sikartukerja" />
    <meta name="author" content="ridwan" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-touch-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png'); ?>">
    <link rel="manifest" href="<?= base_url('assets/favicon/site.webmanifest'); ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css" integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css'); ?>" />
</head>

<body class="login-page bg-body-secondary">
    <div class="register-box">
        <div class="register-logo">
            <a href="<?= base_url('auth/register'); ?>"><b>SiKartuKerja</b></a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg">Pendaftaran Akun Baru</p>
                <form action="<?= base_url('auth/register') ?>" method="post">
                    <div class="input-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>" />
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                    </div>
                    <?= form_error('nama', '<small class="text-danger pl-5 mt-1 d-block" style="text-align: left;">', '</small>'); ?>
                    <div class="input-group mt-3">
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email" value="<?= set_value('email'); ?>" />
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <?= form_error('email', '<small class="text-danger pl-5 mt-1 d-block" style="text-align: left;">', '</small>'); ?>
                    <div class="input-group mt-3">
                        <input type="password" name="password" class="form-control" placeholder="Masukan Password" value="<?= set_value('password'); ?>" />
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    </div>
                    <?= form_error('password', '<small class="text-danger pl-5 mt-1 d-block" style="text-align: left;">', '</small>'); ?>
                    <div class="row mt-3">
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="my-3">
                    <a href="<?= base_url('auth'); ?>" class="text-center">Sudah punya akun? Masuk di sini</a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/adminlte.js') ?>"></script>
</body>

</html>