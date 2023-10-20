<?= $this->extend('layouts/main_layout')  ?>
<?= $this->section('content') ?>

<nav class="container-fluid p-4">
    <?= form_open('main/search_submit') ?>

        <div class="row">
            <div class="col-md-9 col-12">
                <div class="d-flex align-items-center">
                    <label for="search" class="me-3 text-light"><strong>Search:</strong></label>
                    <input type="text" name="search" id="search" class="form-control form-control-sm w-50 me-3" placeholder="Search">
                    <button type="submit" class="btn btn-primary d-flex align-items-center"><i class="fa-solid fa-magnifying-glass me-3"></i>Submit</button>
                    <span class="mx-3"></span>
                    <label for="select_project" class="me-3 text-light"><strong>Project:</strong></label>
                    <select name="select_project" id="select_project" class="form-select form-select-sm w-50">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-12 text-end">
                <a href="<?= site_url('new_query') ?>" class="btn btn-primary"><i class="fa-solid fa-plus me-3"></i>New Query</a>
            </div>
        </div>
        
    <?= form_close() ?>
</nav>

<!-- results table -->
<div class="container-fluid">

    <div class="row justify-content-center mt-5">
        <div class="col-sm-10">
            <table class="table" id="table-results">
                <thead class="table-light ">
                    <tr>
                        <th width="25%" class="text-dark">Project</th>
                        <th width="75%" class="text-dark">Query</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-secondary">
                    <!-- loop for obtain queries -->
                    <?php for($i=1; $i<100; $i++): ?>
                        <tr>
                            <td>Projeto 1</td>
                            <td>Query 1</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-primary"><i class="fa-solid fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>

    <p class="mt-5 text-center text-light">No results found.</p>

</div>

<?= $this->endSection() ?>