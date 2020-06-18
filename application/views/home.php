<!-- Swiper -->
<section>
  <!-- Swiper-->
  <div class="swiper-container swiper-slider swiper-slider-1" data-loop="false" data-autoplay="5000" data-simulate-touch="false">
    <div class="swiper-wrapper">
      <?php foreach ($slider as $s) : ?>
        <div class="swiper-slide" data-slide-bg=<?= base_url("assets/image/slider/" . $s['image']) ?>>
          <div class="swiper-slide-caption context-dark">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-lg-7">
                  <div class="box-animation">
                    <h6 data-caption-animate="slideInLeft" data-caption-delay="150"><?= $s['sub_title'] ?></h6>
                    <h2 data-caption-animate="slideInLeft" data-caption-delay="300"><?= $s['title'] ?>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
<!-- A Few Words About Me-->
<section class="section section-lg bg-gray-100">
  <div class="container">
    <div class="row row-50 justify-content-center justify-content-lg-between">
      <div class="col-12">
        <h3 class="h-custom-1 f1"><?= $about['title'] ?></h3>
      </div>
      <div class="col-md-6 col-lg-5 col-xl-7 wow fadeIn">
        <p><?= $about['sub_title'] ?></p><a class="button button-primary-gradient" href="<?= base_url('about') ?>"><span>selengkapnya</span></a>
      </div>

      <div class="col-xl-5 wow fadeIn" data-wow-delay=".4s"><img class="img-rounded" src=<?= base_url("assets/image/about/" . $about['image']) ?> alt=""></div>
    </div>
  </div>
</section>
<!-- Course 
- Link untuk selengkapnya per course
-->
<section class="section section-lg bg-default text-center">
  <div class="container">
    <h2 class="wow fadeIn">Kursus Ternama Kami</h2>
    <div class="row row-30 row-md-50 row-xl-70">
      <?php foreach ($course as $c) : ?>
        <div class="col-sm-6 col-lg-4 wow fadeIn">
          <!-- Post Minimal-->
          <div class="post-minimal">
            <figure class="post-minimal-media"><a href="#"><img class="post-minimal-image" src=<?= base_url("assets/image/course/" . $c['image']) ?> alt="" width="370" height="260" /></a></figure>
            <div class="post-minimal-meta">
              <ul class="list-inline">
                <li class="list-inline-item">Teacher: </li>
                <li class="list-inline-itema"><a href="#"><?= $c['teacher'] ?></a></li>
              </ul>
            </div>
            <h4 class="post-minimal-title"><a href="#"><?= $c['title'] ?></a></h4>
          </div>
        </div>
      <?php endforeach ?>
      <!-- </div><a class="button button-lg button-primary-gradient wow fadeIn" data-wow-delay=".2s" href="#"><span>Lihat Semua Kursus</span></a>
  </div> -->
</section>
<!-- News-->
<section class="section section-lg bg-default text-center">
  <div class="container">
    <h2 class="wow fadeIn">Berita Terbaru</h2>
    <div class="row row-30 justify-content-center">
      <?php for ($i = count($news); $i > count($news)-4; $i--) : ?>
        <div class="col-sm-10 col-md-6 wow fadeIn">
          <!-- Post Light-->
          <a class="post-light context-dark" href="<?= site_url('blogs?id=') . $news[$i-1]['id'] ?>" style="background-image: url( <?= base_url('assets/image/news/' . $news[$i-1]['image']) ?> );">
            <div class="post-light-inner">
              <div class="badge">News</div>
              <div class="post-light-main">
                <time class="post-light-time" datetime="2019"><?= date('Y/d/m', $news[$i-1]['date']) ?></time>
                <h4 class="post-light-title"><?= $news[$i-1]['title'] ?></h4>
              </div>
            </div>
          </a>
        </div>
      <?php endfor; ?>
    </div><a class="button button-lg button-primary-gradient wow fadeIn" href="<?= site_url("blogs") ?>" data-wow-delay=".2s"><span>View all blog posts</span></a>
  </div>
</section>
<!-- Gallery-->
<section class="section oh text-center">
  <div class="owl-carousel owl-carousel-dots-space wow fadeIn" data-items="2" data-sm-items="3" data-md-items="4" data-lg-items="5" data-xl-items="6" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false" data-lightgallery="group">
    <?php foreach ($galery as $g) : ?>
      <!-- Thumbnail Thin-->
      <a class="thumbnail-thin" href=<?= base_url("assets/image/galery/" . $g['image']) ?> data-lightgallery="item">
        <div class="thumbnail-thin-inner"><img class="thumbnail-thin-image" src=<?= base_url("assets/image/galery/" . $g['image']) ?> alt="" width="320" height="320" />
        </div>
      </a>
    <?php endforeach ?>
  </div>
</section>