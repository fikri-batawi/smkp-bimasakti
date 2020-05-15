<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors() ?>
        </div>
    <?php endif ?>

    <?= $this->session->flashdata('message'); ?>

    <!-- Slider & About -->
    <div class="row">
        <!-- Area Slider -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Slider</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!-- Table slider -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($slider as $s) : ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $s['title'] ?></td>
                                                <td><?= $s['sub_title'] ?></td>
                                                <td><?= $s['image'] ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editSlider<?= $i ?>">
                                                        Edit
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

        <!-- Area about -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">About</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" data-toggle="modal" data-target="#editAbout">Edit</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <h3><?= $about['title'] ?></h3>
                    <p><?= $about['sub_title'] ?></p>
                    <img class="img-thumbnail" src="<?= base_url('assets/image/about/' . $about['image']) ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Course -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#course" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="course">
            <h6 class="m-0 font-weight-bold text-primary">Our Excellence Course</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="course">
            <div class="card-body">
                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addCourse">
                    Add New Course
                </a>
                <div class="row">
                    <?php foreach ($course as $c) : ?>
                        <div class="col-lg-4">
                            <div class="card my-3">
                                <img src="<?= base_url('assets/image/course/' . $c['image']) ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $c['title'] ?></h5>
                                    <p class="card-text">Teacher : <?= $c['teacher'] ?></p>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#editCourse<?= $c['id'] ?>">
                                        Edit
                                    </button>
                                    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteCourse<?= $c['id'] ?>">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Galery -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#galery" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="galery">
            <h6 class="m-0 font-weight-bold text-primary">My Galery</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="galery">
            <div class="card-body">
                <div class="row">
                    <?php foreach ($galery as $c) : ?>
                        <div class="col-lg-4">
                            <div class="card my-3">
                                <img src="<?= base_url('assets/image/galery/' . $c['image']) ?>" class="card-img-top" alt="...">

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#editGalery<?= $c['id'] ?>">
                                        Edit
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>

    <!-- News -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#news" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="news">
            <h6 class="m-0 font-weight-bold text-primary">News</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="news">
            <div class="card-body">
                <a href="<?= base_url('pages/news') ?>" class="btn btn-primary mb-3">
                    Add New News
                </a>
                <!-- Table slider -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($news as $n) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $n['title'] ?></td>
                                            <td><?= date('Y-m-d', $n['date']) ?></td>
                                            <td>
                                                <a href="<?= base_url('pages/news?id=' . $n['id']) ?>" class="btn btn-success">Edit</a>
                                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteNews<?= $n['id'] ?>">
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






<!-- Modal Slider -->
<?php for ($i = 1; $i <= 3; $i++) : ?>
    <div class="modal fade" id="editSlider<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="editSlider<?= $i ?>Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSlider<?= $i ?>Label">Edit Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('pages/editSlider') ?>
                <div class="modal-body">
                    <input type="text" class="form-control" id="menu" name="id" value="<?= $slider[$i - 1]['id'] ?>" hidden>
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="title" value="<?= $slider[$i - 1]['title'] ?>">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="validationTextarea" name="sub_title"><?= $slider[$i - 1]['sub_title'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endfor; ?>

<!-- Modal add Course -->
<div class="modal fade" id="addCourse" tabindex="-1" role="dialog" aria-labelledby="addCourseLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCourseLabel">Add Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('pages/addCourse') ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="menu" name="title" value="<?= set_value('title') ?>" placeholder="Title">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="menu" name="teacher" value="<?= set_value('teacher') ?>" placeholder="Teacher">
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal edit Course -->
<?php foreach ($course as $c) : ?>
    <div class="modal fade" id="editCourse<?= $c['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editCourse<?= $c['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCourse<?= $c['id'] ?>Label">Edit Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('pages/editCourse') ?>
                <div class="modal-body">
                    <input type="text" class="form-control" id="menu" name="id" value="<?= $c['id'] ?>" hidden>
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="title" value="<?= $c['title'] ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="teacher" value="<?= $c['teacher'] ?>">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Modal delete Course -->
<?php foreach ($course as $c) : ?>
    <div class="modal fade" id="deleteCourse<?= $c['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteCourse<?= $c['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteCourse<?= $c['id'] ?>Label">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('pages/deleteCourse') ?>
                <div class="modal-footer">
                    <input type="text" class="form-control" id="menu" name="id" value="<?= $c['id'] ?>" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Nope!</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal delete News -->
<?php foreach ($news as $n) : ?>
    <div class="modal fade" id="deleteNews<?= $n['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteNews<?= $n['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteNews<?= $n['id'] ?>Label">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('pages/deleteNews') ?>
                <div class="modal-footer">
                    <input type="text" class="form-control" id="menu" name="id" value="<?= $n['id'] ?>" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Nope!</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal edit Galery -->
<?php foreach ($galery as $c) : ?>
    <div class="modal fade" id="editGalery<?= $c['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editGalery<?= $c['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editGalery<?= $c['id'] ?>Label">Edit Galery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('pages/editGalery') ?>
                <div class="modal-body">
                    <input type="text" class="form-control" id="menu" name="id" value="<?= $c['id'] ?>" hidden>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal About -->
<div class="modal fade" id="editAbout" tabindex="-1" role="dialog" aria-labelledby="editAboutLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAboutLabel">Edit About</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('pages/editAbout') ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="menu" name="title" value="<?= $about['title'] ?>">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="validationTextarea" name="sub_title"><?= $about['sub_title'] ?></textarea>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            </form>
        </div>
    </div>
</div>