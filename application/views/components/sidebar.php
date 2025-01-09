<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="<?= base_url('dashboard'); ?>" class="brand-link">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo" class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">SiKartuKerja</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="menu"
                data-accordion="false">
                <?php $user_role = $this->session->userdata('user_role') ?>
                <?php if ($user_role == 'pemohon'): ?>
                    <li class="nav-header">Utama</li>
                    <li class="nav-item">
                        <a href="<?= base_url('loker/info'); ?>" class="nav-link <?= $title == 'Informasi Lowongan Kerja' ? 'active' : ''; ?>">
                            <i class="nav-icon bi bi-clipboard-fill"></i>
                            <p>Lowongan Kerja</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('pendaftaran'); ?>" class="nav-link <?= $title == 'Pendaftaran' ? 'active' : ''; ?>">
                            <i class="nav-icon bi bi-pencil-square"></i>
                            <p>Pendaftaran AK1</p>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($user_role == 'admin'): ?>
                    <li class="nav-item">
                        <a href="<?= base_url('dashboard'); ?>" class="nav-link <?= $title == 'Dashboard' ? 'active' : ''; ?>">
                            <i class="nav-icon bi bi-speedometer"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-header">Transaksi</li>
                    <li class="nav-item">
                        <a href="<?= base_url('user'); ?>" class="nav-link <?= $title == 'Informasi User' ? 'active' : ''; ?>">
                            <i class="nav-icon bi bi-people"></i>
                            <p>Informasi User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('pendaftaran/admin'); ?>" class="nav-link <?= $title == 'Pendaftaran' ? 'active' : ''; ?>">
                            <i class="nav-icon bi bi-pencil-square"></i>
                            <p>Pendaftaran AK1</p>
                        </a>
                    </li>
                    <li class="nav-header">Lowongan Kerja</li>
                    <li class="nav-item <?= strpos($title, 'Lowongan Kerja') ? 'menu-open' : '' ?>">
                        <a href="#" class="nav-link <?= strpos($title, 'Lowongan Kerja') ? 'active' : ''; ?>">
                            <i class="nav-icon bi bi-clipboard-fill"></i>
                            <p>
                                Lowongan Kerja
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('loker/info') ?>" class="nav-link <?= $title == 'Informasi Lowongan Kerja' ? 'active' : ''; ?>">
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Informasi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('loker/kelola') ?>" class="nav-link <?= $title == 'Kelola Lowongan Kerja' ? 'active' : ''; ?>">
                                    <i class="nav-icon bi bi-circle"></i>
                                    <p>Kelola</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <li class="nav-header">Akun</li>
                <li class="nav-item">
                    <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon bi bi-box-arrow-right"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>