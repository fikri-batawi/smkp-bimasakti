<!-- Banner -->
<div class="breadcrumbs-custom" style="background: url(<?= base_url('assets/banner/' . $banner['image']) ?>) center;">
  <div class="container breadcrumbs-custom-container">
    <div class="breadcrumbs-custom-inner context-dark">
      <div class="breadcrumbs-custom-item"></div>
      <ul class="breadcrumbs-custom-path">
        <li><a href="<?= site_url() ?>">Home</a></li>
        <li class="active">Alumni</li>
      </ul>
    </div>
  </div>
</div>

<!-- About -->
<section class="section section-lg bg-default">
  <div class="container">
    <div class="row row-50 justify-content-center justify-content-xl-between flex-lg-row-reverse">
      <div class="col-md-11 col-lg-6 col-xl-5">
        <div class="box-1">
          <h2>Beberapa Tentang Alumi Kami</h2>
          <h5><?= $about['sub_title'] ?></h5>
        </div>
      </div>
      <div class="col-md-11 col-lg-6">
        <!-- Thumbnail Media-->
        <div class="thumbnail-media" style="background-image: url(<?= base_url('assets/image/about/' . $about['image']) ?>);"><a class="icon thumbnail-media-icon mdi mdi-play-circle-outline" href="<?= $about['url'] ?>" data-lightgallery="item"></a></div>
      </div>
    </div>
  </div>
</section>

<!-- Pelaut-->
<section class="section section-lg bg-gray-100 text-center">
  <div class="container">
    <h2 class="wow fadeIn">Pelaut</h2>
    <div class="row row-30 row-xl-90 justify-content-center">

    <?php if (count($alumni_laut) >= 6 || (count($alumni_laut) <= 6 && count($alumni_laut) > 0)) : ?>
        <?php $loop = count($alumni_laut) > 6 ? 6 : count($alumni_laut) ?>
        <?php for ($i = 0; $i < $loop; $i++) : ?>
          <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeIn" data-wow-delay=".2s">
            <!-- Box Classic-->
            <article class="box-classic">
              <a class="icon box-classic-icon " style="overflow: hidden;align-items:center;" href="#">
                <img style="background-position: center !important; background-size: cover !important;" src="<?= base_url('assets/image/alumni/' . $alumni_laut[$i]['image']) ?>" />
              </a>
              <a class="box-classic-main" href="#">
                <h4 class="box-classic-title"><?= $alumni_laut[$i]['name'] ?></h4>
                <div class="box-classic-inner">
                  <p><?= $alumni_laut[$i]['email'] ?></p>
                  <p><?= $alumni_laut[$i]['phone'] ?></p>
                </div>
              </a>
            </article>
          </div>
        <?php endfor ?>
      <?php else : ?>
        <h3>Tidak ada alumni</h3>
      <?php endif ?>

    </div>
    <a class="button button-lg button-primary-gradient wow fadeIn" href="<?= site_url('alumni/pelaut') ?>" data-wow-delay=".2s">
      <span>Lihat semua</span>
    </a>
  </div>
</section>

<!-- My Education & Experience-->
<!-- <section class="section section-lg text-center">
  <div class="container">
    <h2 class="wow fadeIn">Our History</h2>
   
    <div class="owl-carousel owl-timeline-classic wow fadeIn" data-wow-delay=".2s" data-items="1" data-sm-items="2" data-lg-items="3" data-xxl-items="4" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-autoplay="false" data-margin="0" data-mouse-drag="true">
      <article class="timeline-classic-item">
        <p class="timeline-classic-time heading-4">2016-2019</p>
        <div class="timeline-classic-divider"></div>
        <h4 class="timeline-classic-title">We celebrate 28 years with our first graduates</h4>
        <p>Our 28th anniversary was marked by the campus renovation, where a meeting with our graduates took place this year.</p>
      </article>
      <article class="timeline-classic-item">
        <p class="timeline-classic-time heading-4">2010–2015</p>
        <div class="timeline-classic-divider"></div>
        <h4 class="timeline-classic-title">Start of online education with paid certificates</h4>
        <p>In 2010 we introduced distance education that included various courses with paid certificates.</p>
      </article>
      <article class="timeline-classic-item">
        <p class="timeline-classic-time heading-4">1996-2010</p>
        <div class="timeline-classic-divider"></div>
        <h4 class="timeline-classic-title">Introducing first courses for foreign students</h4>
        <p>After we became a part of International College Association in 1995, we developed and introduced new courses for foreign students.</p>
      </article>
      <article class="timeline-classic-item">
        <p class="timeline-classic-time heading-4">1993-1995</p>
        <div class="timeline-classic-divider"></div>
        <h4 class="timeline-classic-title">New professional programs</h4>
        <p>In 1993, we began to offer new professional courses and programs to our students that became the basis of what we provide today.</p>
      </article>
      <article class="timeline-classic-item">
        <p class="timeline-classic-time heading-4">1990-1995</p>
        <div class="timeline-classic-divider"></div>
        <h4 class="timeline-classic-title">Establishment of Our College</h4>
        <p>Bradston College was founded by Sam Peterson, PhD more than 20 years ago with the goal of offering better education to everyone.</p>
      </article>
    </div>
  </div>
</section> -->

<!-- Militer-->
<section class="section section-lg bg-default text-center">
  <div class="container">
    <h2 class="wow fadeIn">Instansi Militer</h2>
    <div class="row row-30 row-xl-90 justify-content-center">
      <?php if (count($alumni_militer) >= 6 || (count($alumni_militer) <= 6 && count($alumni_militer) > 0)) : ?>
        <?php $loop = count($alumni_militer) > 6 ? 6 : count($alumni_militer) ?>
        <?php for ($i = 0; $i < $loop; $i++) : ?>
          <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeIn" data-wow-delay=".2s">
            <!-- Box Classic-->
            <article class="box-classic">
              <a class="icon box-classic-icon " style="overflow: hidden;align-items:center;" href="#">
                <img style="background-position: center !important; background-size: cover !important;" src="<?= base_url('assets/image/alumni/' . $alumni_militer[$i]['image']) ?>" />
              </a>
              <a class="box-classic-main" href="#">
                <h4 class="box-classic-title"><?= $alumni_militer[$i]['name'] ?></h4>
                <div class="box-classic-inner">
                  <p><?= $alumni_militer[$i]['email'] ?></p>
                  <p><?= $alumni_militer[$i]['phone'] ?></p>
                </div>
              </a>
            </article>
          </div>
        <?php endfor ?>
      <?php else : ?>
        <h3>Tidak ada alumni</h3>
      <?php endif ?>
    </div>
    <a class="button button-lg button-primary-gradient wow fadeIn" href="<?= site_url('alumni/militer') ?>" data-wow-delay=".2s">
      <span>Lihat semua</span>
    </a>
  </div>
</section>

<!-- Darat -->
<section class="section section-lg bg-gray-100 text-center">
  <div class="container">
    <h2 class="wow fadeIn">Bagian Darat</h2>
    <div class="row row-30 row-xl-90 justify-content-center">
      <?php if (count($alumni_darat) >= 6 || (count($alumni_darat) <= 6 && count($alumni_darat) > 0)) : ?>
        <?php $loop = count($alumni_darat) > 6 ? 6 : count($alumni_darat) ?>
        <?php for ($i = 0; $i < $loop; $i++) : ?>
          <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeIn" data-wow-delay=".2s">
            <!-- Box Classic-->
            <article class="box-classic">
              <a class="icon box-classic-icon " style="overflow: hidden;align-items:center;" href="#">
                <img style="background-position: center !important; background-size: cover !important;" src="<?= base_url('assets/image/alumni/' . $alumni_darat[$i]['image']) ?>" />
              </a>
              <a class="box-classic-main" href="#">
                <h4 class="box-classic-title"><?= $alumni_darat[$i]['name'] ?></h4>
                <div class="box-classic-inner">
                  <p><?= $alumni_darat[$i]['email'] ?></p>
                  <p><?= $alumni_darat[$i]['phone'] ?></p>
                </div>
              </a>
            </article>
          </div>
        <?php endfor ?>
      <?php else : ?>
        <h3>Tidak ada alumni</h3>
      <?php endif ?>
    </div>
    <a class="button button-lg button-primary-gradient wow fadeIn" href="<?= site_url('alumni/darat') ?>" data-wow-delay=".2s">
      <span>Lihat semua</span>
    </a>
  </div>
</section>