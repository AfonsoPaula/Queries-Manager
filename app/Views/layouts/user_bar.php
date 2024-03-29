<div class="container-fluid bg-black p-3">
    <div class="row">
        <div class="col">
            <a href="<?= site_url('/home') ?>" style="text-decoration: none">
                <h3><strong>Queries Manager</strong></h3>
            </a>
        </div>
        <div class="col d-flex justify-content-end align-items-center">
            <i class="fa-regular fa-user me-3"></i><?= session()->username ?>
            <span class="mx-3">|</span>
            <a href="<?= site_url('logout') ?>" class="btn btn-sm btn-secondary"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</a>
        </div>
    </div>
</div>