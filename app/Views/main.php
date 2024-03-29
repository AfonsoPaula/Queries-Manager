<?= $this->extend('layouts/main_layout')  ?>
<?= $this->section('content') ?>

<nav class="container-fluid p-4">
    <?= form_open('search_submit') ?>

        <div class="row">
            <div class="col-md-9 col-12">
                <div class="d-flex align-items-center">
                    <label for="search" class="me-3 text-light"><strong>Search:</strong></label>
                    <input type="text" name="search" id="search" class="form-control form-control-sm w-50 me-3" placeholder="Search" value="<?= !empty($search) ? $search : '' ?>">
                    <button type="submit" class="btn btn-secondary d-flex align-items-center"><i class="fa-solid fa-magnifying-glass me-3"></i>Submit</button>
                    
                    <span class="mx-3"></span>
                    
                    <label for="select_project" class="me-3 text-light"><strong>Project:</strong></label>
                    <select name="select_project" id="select_project" class="form-select form-select-sm w-50">
                        <option value="<?= encrypt('[all_queries]') ?>">All queries</option>
                        <?php foreach ($projects as $project) : ?>
                            <option value="<?= encrypt($project->project) ?>" <?= !empty($project_filter) ? set_project_filter($project_filter, $project->project) : '' ?> > <?= $project->project ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-12 text-end">
                <a href="<?= site_url('new_query') ?>" class="btn btn-secondary"><i class="fa-solid fa-plus me-3"></i>New Query</a>
            </div>
        </div>

    <?= form_close() ?>
</nav>

<!-- results table -->
<div class="container-fluid">

    <?php if(count($queries) == 0): ?>
        <p class="mt-5 text-center text-light">No results found.</p>
    <?php else: ?>
        <div class="row justify-content-center mt-5">
            <div class="col-sm-10">
                <table class="table" id="table-results">
                    <thead class="table-light ">
                        <tr>
                            <th width="15%" class="text-dark">Project</th>
                            <th width="70%" class="text-dark">Query Name</th>
                            <th width="15%"></th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                        <?php foreach($queries as $query): ?>
                            <tr>
                                <td><?= $query->project ?></td>
                                <td>
                                    <a href="<?= site_url('view_query/' . encrypt($query->id)) ?>" class="no-link text-white">
                                        <?= $query->query_name ?>
                                    </a>
                                </td>
                                <td class="text-end">
                                    <a href="<?= site_url("edit_query/" . encrypt($query->id)) ?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-edit"></i></a>
                                    <a href="<?= site_url("delete_query/" . encrypt($query->id)) ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
</div>

<script>
    document.querySelector("#select_project").addEventListener("change", function() {
        window.location.href = "<?= site_url('/set_filter/') ?>" + this.value;
    });
</script>

<?= $this->endSection() ?>