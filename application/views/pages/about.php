<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('message') ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Youtube Video Edit -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#address" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="address">
            <h6 class="m-0 font-weight-bold text-primary">Address school</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="address">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg">
                        <?= form_open_multipart('pages/editAddress') ?>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" name="address" value="<?= $address['title'] ?>">
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Youtube Video Edit -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#phone" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="phone">
            <h6 class="m-0 font-weight-bold text-primary">Phone School</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="phone">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg">
                        <?= form_open_multipart('pages/editPhone') ?>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" name="phone" value="<?= $phone['title'] ?>">
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#news" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="news">
            <h6 class="m-0 font-weight-bold text-primary">Saran</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="news">
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
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($saran as $s) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $s['name'] ?></td>
                                            <td><?= $s['email'] ?></td>
                                            <td><?= $s['phone'] ?></td>
                                            <td><?= $s['message'] ?></td>
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