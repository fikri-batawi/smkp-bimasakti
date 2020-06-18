<!-- Banner -->
<div class="breadcrumbs-custom" style="background: url(<?= base_url('assets/banner/' . $banner['image']) ?>) center;">
  <div class="container breadcrumbs-custom-container">
    <div class="breadcrumbs-custom-inner context-dark">
      <div class="breadcrumbs-custom-item"></div>
      <ul class="breadcrumbs-custom-path">
        <li><a href="<?= site_url() ?>">Home</a></li>
        <li class="active">Daftar Alumni</li>
      </ul>
    </div>
  </div>
</div>

<!-- Daftar Alumni-->
<section class="section section-lg bg-gray-100 text-center">
  <div class="container">
    <h2 class="wow fadeIn"><?= $title ?></h2>
    <div class="row row-30 row-xl-90 justify-content-center">

      <?php foreach($daftarAlumni as $da) : ?>
        <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeIn" data-wow-delay=".2s">
          <!-- Box Classic-->
          <article class="box-classic">
            <a class="icon box-classic-icon " style="overflow: hidden;align-items:center;" href="#">
              <img style="background-position: center !important; background-size: cover !important;" src="<?= base_url('assets/image/alumni/' . $da['image']) ?>" />
            </a>
            <a class="box-classic-main" href="#">
              <h4 class="box-classic-title"><?= $da['name'] ?></h4>
              <div class="box-classic-inner">
                <p><?= $da['email'] ?></p>
                <p><?= $da['phone'] ?></p>
              </div>
            </a>
          </article>
        </div>
      <?php endforeach ?>

    </div>
  </div>
</section>