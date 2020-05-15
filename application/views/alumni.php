<!-- Banner -->
<div class="breadcrumbs-custom">
  <div class="container breadcrumbs-custom-container">
    <div class="breadcrumbs-custom-inner context-dark">
      <div class="breadcrumbs-custom-item"></div>
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.html">Home</a></li>
        <li class="active">About</li>
      </ul>
    </div>
  </div>
</div>

<!-- My Approach-->
<section class="section section-lg bg-default">
  <div class="container">
    <div class="row row-50 justify-content-center justify-content-xl-between flex-lg-row-reverse">
      <div class="col-md-11 col-lg-6 col-xl-5">
        <div class="box-1">
          <h2>Beberapa Tentang Alumi Kami</h2>
          <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h5>
          <p>Nibh cras pulvinar mattis nunc sed blandit. Ornare suspendisse sed nisi lacus sed viverra tellus. Orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Aenean pharetra magna ac placerat vestibulum.</p>
        </div>
      </div>
      <div class="col-md-11 col-lg-6">
        <!-- Thumbnail Media-->
        <div class="thumbnail-media" style="background-image: url(<?= base_url('src/Pages/images/video-preview-1-570x416.jpg') ?>;"><a class="icon thumbnail-media-icon mdi mdi-play-circle-outline" href="//www.youtube.com/watch?v=I5FlP07kdvM" data-lightgallery="item"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- Pelaut-->
<section class="section section-lg bg-gray-100 text-center">
  <div class="container">
    <h2 class="wow fadeIn">Pelaut</h2>
    <div class="row row-30 row-xl-90 justify-content-center">

    <?php foreach($alumni_laut as $al) : ?>
      <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay=".2s">
        <!-- Box Classic-->
        <article class="box-classic">
          <a class="icon box-classic-icon " style="overflow: hidden;align-items:center;" href="#">
            <img style="background-position: center !important; background-size: cover !important;" src="<?= base_url('assets/image/alumni/'.$al['image'])?>"/>
          </a>
          <a class="box-classic-main" href="#">
            <h4 class="box-classic-title"><?= $al['name'] ?></h4>
            <div class="box-classic-inner">
              <p><?= $al['email'] ?></p>
              <p><?= $al['phone'] ?></p>
            </div>
          </a>
        </article>
      </div>
      <?php endforeach ?>
    </div>
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

    <?php foreach($alumni_laut as $al) : ?>
      <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay=".2s">
        <!-- Box Classic-->
        <article class="box-classic">
          <a class="icon box-classic-icon " style="overflow: hidden;align-items:center;" href="#">
            <img style="background-position: center !important; background-size: cover !important;" src="<?= base_url('assets/image/alumni/'.$al['image'])?>"/>
          </a>
          <a class="box-classic-main" href="#">
            <h4 class="box-classic-title"><?= $al['name'] ?></h4>
            <div class="box-classic-inner">
              <p><?= $al['email'] ?></p>
              <p><?= $al['phone'] ?></p>
            </div>
          </a>
        </article>
      </div>
      <?php endforeach ?>
    </div>
    <!-- <div class="owl-carousel offset-top-2 wow fadeIn" data-wow-delay=".2s" data-items="1" data-lg-items="2" data-xl-items="3" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30" data-mouse-drag="false">
      <blockquote class="quote-classic">
        <div class="quote-classic-avatar-outer"><img class="quote-classic-avatar" src=<?= base_url("src/images/testimonials-1-68x68.jpg") ?> alt="" width="68" height="68"/>
        </div>
        <div class="quote-classic-main">
          <p class="heading-5 quote-classic-cite">Patrick Mills</p>
          <p class="quote-classic-position">Student</p>
          <div class="quote-classic-text">
            <q>I can positively say Bradston College has made me a better person. It has helped me develop a positive attitude towards my studies and discover more about myself.</q>
          </div>
        </div>
      </blockquote>
      <blockquote class="quote-classic">
        <div class="quote-classic-avatar-outer"><img class="quote-classic-avatar" src=<?= base_url("src/images/testimonials-2-68x68.jpg") ?> alt="" width="68" height="68"/>
        </div>
        <div class="quote-classic-main">
          <p class="heading-5 quote-classic-cite">Paul Johnston</p>
          <p class="quote-classic-position">Student</p>
          <div class="quote-classic-text">
            <q>I have always felt that I was so lucky to be a student at this college, and not at any other private or public school. The thing I admire the most is the support I received here.</q>
          </div>
        </div>
      </blockquote>
      <blockquote class="quote-classic">
        <div class="quote-classic-avatar-outer"><img class="quote-classic-avatar" src=<?= base_url("src/images/testimonials-3-68x68.jpg") ?> alt="" width="68" height="68"/>
        </div>
        <div class="quote-classic-main">
          <p class="heading-5 quote-classic-cite">Michelle Stanley</p>
          <p class="quote-classic-position">Student</p>
          <div class="quote-classic-text">
            <q>I like the friendly atmosphere here and the fact the teachers are really close to the students. Some of the teachers are really kind and their way of teaching is interesting.</q>
          </div>
        </div>
      </blockquote>
    </div><a class="button button-lg button-primary-gradient wow fadeIn" href="#"><span>View all Testimonials</span></a> -->
  </div>
</section>
<!-- Pelaut-->
<section class="section section-lg bg-gray-100 text-center">
  <div class="container">
    <h2 class="wow fadeIn">Bagian Darat</h2>
    <div class="row row-30 row-xl-90 justify-content-center">

    <?php foreach($alumni_laut as $al) : ?>
      <div class="col-sm-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay=".2s">
        <!-- Box Classic-->
        <article class="box-classic">
          <a class="icon box-classic-icon " style="overflow: hidden;align-items:center;" href="#">
            <img style="background-position: center !important; background-size: cover !important;" src="<?= base_url('assets/image/alumni/'.$al['image'])?>"/>
          </a>
          <a class="box-classic-main" href="#">
            <h4 class="box-classic-title"><?= $al['name'] ?></h4>
            <div class="box-classic-inner">
              <p><?= $al['email'] ?></p>
              <p><?= $al['phone'] ?></p>
            </div>
          </a>
        </article>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
