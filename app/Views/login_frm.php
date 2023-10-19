<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>

<section class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 col-8 p-5 text-center bg-light rounded shadow">

            <!-- for apply this function: BaseController.php > add $helpers = ['form']; -->
            <?= form_open('login_submit') ?>

                <h3 class="text-center mb-3 text-black"><strong><?= APP_NAME ?></strong></h3>
                <div class="mb-3 text-start">
                    <label for="username" class="form-label text-black">Username</label>
                    <input type="text" name="username" id="username" class="form-control form-control-sm" placeholder="Username" autofocus required>
                </div>

                <div class="mb-3 text-start">
                    <label for="password" class="form-label text-black">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-sm" placeholder="Password" required>
                </div>

                <div class="mb-1 mt-4">
                    <button type="submit" class="btn btn-dark w-100">Login</button>
                </div>

            <?= form_close() ?>

        </div>
    </div>
</section>

<?= $this->endSection() ?>