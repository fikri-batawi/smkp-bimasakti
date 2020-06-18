<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('message') ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Alumni Pelaut -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#alumniLaut" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="alumniLaut">
            <h6 class="m-0 font-weight-bold text-primary">Alumni Pelaut</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="alumniLaut">
            <div class="card-body">
                <!-- Table slider -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($alumniPelaut as $ap) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $ap['name'] ?></td>
                                            <td><?= $ap['phone'] ?></td>
                                            <td><?= $ap['email'] ?></td>
                                            <td>
                                                <a href="<?= base_url('pages/alumni?id=' . $ap['id']) ?>" class="btn btn-success">Edit</a>
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteAlumniLaut<?= $ap['id'] ?>">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alumni Militer -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#alumniMiliter" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="alumniMiliter">
            <h6 class="m-0 font-weight-bold text-primary">Alumni Militer</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="alumniMiliter">
            <div class="card-body">
                <!-- Table slider -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($alumniMiliter as $am) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $am['name'] ?></td>
                                            <td><?= $am['phone'] ?></td>
                                            <td><?= $am['email'] ?></td>
                                            <td>
                                                <a href="<?= base_url('pages/alumni?id=' . $am['id']) ?>" class="btn btn-success">Edit</a>
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteAlumniMiliter<?= $am['id'] ?>">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alumni Darat -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#alumniDarat" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="alumniDarat">
            <h6 class="m-0 font-weight-bold text-primary">Alumni Darat</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="alumniDarat">
            <div class="card-body">
                <!-- Table slider -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($alumniDarat as $ad) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $ad['name'] ?></td>
                                            <td><?= $ad['phone'] ?></td>
                                            <td><?= $ad['email'] ?></td>
                                            <td>
                                                <a href="<?= base_url('pages/alumni?id=' . $ad['id']) ?>" class="btn btn-success">Edit</a>
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteAlumniDarat<?= $ad['id'] ?>">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal delete alumni pelaut -->
<?php foreach ($alumniPelaut as $ap) : ?>
    <div class="modal fade" id="deleteAlumniLaut<?= $ap['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteAlumniLaut<?= $ap['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteAlumniLaut<?= $ap['id'] ?>Label">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('pages/deleteAlumni') ?>
                <div class="modal-footer">
                    <input type="text" class="form-control" id="menu" name="id" value="<?= $ap['id'] ?>" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Nope!</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal delete alumni militer -->
<?php foreach ($alumniMiliter as $am) : ?>
    <div class="modal fade" id="deleteAlumniMiliter<?= $am['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteAlumniMiliter<?= $am['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteAlumniMiliter<?= $am['id'] ?>Label">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('pages/deleteAlumni') ?>
                <div class="modal-footer">
                    <input type="text" class="form-control" id="menu" name="id" value="<?= $am['id'] ?>" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Nope!</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal delete alumni militer -->
<?php foreach ($alumniDarat as $ad) : ?>
    <div class="modal fade" id="deleteAlumniDarat<?= $ad['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteAlumniDarat<?= $ad['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteAlumniDarat<?= $ad['id'] ?>Label">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('pages/deleteAlumni') ?>
                <div class="modal-footer">
                    <input type="text" class="form-control" id="menu" name="id" value="<?= $ad['id'] ?>" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Nope!</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>