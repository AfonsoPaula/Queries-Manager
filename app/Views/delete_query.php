<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<section class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-10">

            <h3>Delete Query</h3>

            <div class="my-4 container-fluid">
                <div class="row">
                    <div class="col">
                        <p class="text-info">Query name:</p>
                        <p><strong><?= $query->query_name ?></strong></p>
                    </div>
                    <div class="col">
                        <p class="text-info">Project name:</p>
                        <p><strong><?= $query->project ?></strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-info">Query:</p>
                        <p><strong><?= $query->query ?></strong></p>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="<?= site_url('/') ?>" class="btn btn-dark px-5 me-3">Cancel</a>
                <a href="<?= site_url('/delete_query_confirm/' . encrypt($query->id)) ?>" class="btn btn-light px-5">Delete</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>