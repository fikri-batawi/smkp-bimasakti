<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('message') ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php
    if ($id != 0) {
        $url = 'pages/editNews';
    } else {
        $url = 'pages/news';
    }
    ?>
    <?= form_open_multipart($url) ?>
    <input type="text" class="form-control" id="title" name="id" placeholder="Title here ..." value="<?= $id == 0 ? '' : $news['id'] ?>" hidden>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title here ..." value="<?= $id == 0 ? set_value('title') : $news['title'] ?>">
        <?= form_error('title', '<small class="text-danger pl-3">', '</small>') ?>
    </div>

    <div class="form-group">
        <label for="sub_title">Subtitle</label>
        <input type="text" class="form-control" id="sub_title" name="sub_title" placeholder="sub_title here ..." value="<?= $id == 0 ? set_value('sub_title') : $news['sub_title'] ?>">
        <?= form_error('sub_title', '<small class="text-danger pl-3">', '</small>') ?>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="content" id="content" rows="10"><?= $id == 0 ? set_value('content') : $news['content'] ?></textarea>
        <?= form_error('content', '<small class="text-danger pl-3">', '</small>') ?>
    </div>

    <div class="form-group">
        <label for="">Image</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="image">Choose file</label>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <?= $id != 0 ? 'Edit News' : 'Add News'; ?>
        </button>
    </div>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->