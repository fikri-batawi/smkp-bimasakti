<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('message') ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Banner -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#banner" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="banner">
            <h6 class="m-0 font-weight-bold text-primary">Banner Alumni</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="banner">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg">
                        <img class="img-thumbnail" src="<?= base_url('assets/banner/' . $banner['image']) ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <?= form_open_multipart('pages/editBannerAlumni') ?>
                        <input type="text" class="form-control" id="id" name="id" value="<?= $banner['id'] ?>" hidden>
                        <div class="my-3 custom-file">

                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button>
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
        <a href="#videoYoutube" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="videoYoutube">
            <h6 class="m-0 font-weight-bold text-primary">Youtube Video</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="videoYoutube">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg">
                        <?= form_open_multipart('pages/editVideoURL') ?>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">URL Youtube</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="url" name="url" value="<?= $about['url'] ?>">
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

    <!-- Tambah data alumni -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#addData" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="addData">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Alumni</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="addData">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg">
                        <?php
                        if ($id != 0) {
                            $url = 'pages/editAlumni';
                        } else {
                            $url = 'pages/addDataAlumni';
                        }
                        ?>
                        <?= form_open_multipart($url) ?>
                        <input type="text" class="form-control" id="title" name="id" placeholder="Title here ..." value="<?= $id == 0 ? '' : $alumni['id'] ?>" hidden>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" value="<?= $id == 0 ? set_value('name') : $alumni['name'] ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="angkatan" name="angkatan" value="<?= $id == 0 ? set_value('angkatan') : $alumni['angkatan'] ?>">
                                <?= form_error('angkatan', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="ijazah" class="col-sm-2 col-form-label">Ijazah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ijazah" name="ijazah" value="<?= $id == 0 ? set_value('ijazah') : $alumni['ijazah'] ?>">
                                <?= form_error('ijazah', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">Status pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="status" name="status" value="<?= $id == 0 ? set_value('status') : $alumni['status'] ?>">
                                <?= form_error('status', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" value="<?= $id == 0 ? set_value('email') : $alumni['email'] ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">Handphone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" name="phone" value="<?= $id == 0 ? set_value('phone') : $alumni['phone'] ?>">
                                <?= form_error('phone', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Profesi</label>
                            <div class="col-sm-10">
                                <select name="profesi" id="profesi" class="form-control">
                                    <option value="<?= $id == 0 ? set_value('profesi') : $alumni['profesi'] ?>">Select Profesi</option>
                                    <option value="pelaut">Pelaut</option>
                                    <option value="militer">Militer</option>
                                    <option value="darat">Darat</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary"><?= $id != 0 ? 'Edit alumni' : 'Add alumni'; ?></button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->