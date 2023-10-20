<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>

<section class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-10">

            <!-- for apply this function: BaseController.php > add $helpers = ['form']; -->
            <?= form_open('new_query_submit') ?>

                <h3 class="mb-3"><strong>New Query</strong></h3>
                
                <div class="mb-3">
                    <label class="form-label text-light">Query Name</label>
                    <input type="text" name="text_query_name" class="form-control form-control-sm" placeholder="Query Name" autofocus required>                
                </div>

                <div class="row mb-3">
                    <div class="col-7">
                        <label class="form-label text-light">Search Tags</label>
                        <input type="text" name="text_query_name" class="form-control form-control-sm" placeholder="Search Tags">  
                    </div>
                    <div class="col-5">
                        <label class="form-label text-light">Project</label>
                        <input list="list_projetos" class="form-control form-control-sm">
                        <datalist id="list_projetos">
                            <option value="01">
                            <option value="02">
                            <option value="03">
                        </datalist>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label text-light">Query</label>
                    <textarea name="text_query" id="text_query" class="form-control" rows="10">SELECT * FROM table</textarea>
                </div>

                <div class="mb-3 text-center">
                    <a href="<?= site_url('/') ?>" class="btn btn-dark me-3 px-5">Cancel</a>
                    <button type="submit" class="btn btn-light px-5">Save</button>
                </div>

            <?= form_close() ?>

        </div>
    </div>
</section>

<?= $this->endSection() ?>