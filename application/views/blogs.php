<?php
if($tampil_berita){
  $new_news = $tampil_berita;
}else{
  $new_news = $news[count($news) - 1];
}

?>

<!-- New News & List News -->
<section class="section section-lg bg-default">
  <div class="container">
    <div class="row row-50 flex-lg-row-reverse">
      <!-- List News -->
      <div class="col-xl-4">
        <ul class="list-lg">
          <?php foreach ($news as $n) : ?>
            <li>
              <h4><a href="<?= base_url('blogs?id='). $n['id'] ?>"><?= $n['title'] ?></a></h4>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
      <!-- New News -->
      <div class="col-xl-8">
        <ul class="list-xl">
          <h2><?= $new_news['title'] ?></h2>
          <h4><?= $new_news['sub_title'] ?></h4>
          <figure class="figure-light"><img class="img-centered rounded" src="<?= base_url('assets/image/news/' . $new_news['image']) ?>" alt="" width="770" height="430" />
          </figure>
          <p><?= $new_news['content'] ?></p>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- List News-->
<section class="section section-lg bg-default">
  <div class="container">
    <h3>Daftar Berita</h3>
    <div class="row row-30">
      <?php for($i = count($news) - 1; $i >= count($news) - 3; $i--) : ?>
        <div class="col-sm-6 col-lg-4">
          <a class="post-light context-dark" href="<?= base_url('blogs?id='). $news[$i]['id'] ?>" style="background-image: url( <?= base_url('assets/image/news/' . $news[$i]['image']) ?> );">
            <div class="post-light-inner">
              <div class="badge">News</div>
              <div class="post-light-main">
                <time class="post-light-time" datetime="2019"><?= date('Y/d/m', $news[$i]['date']) ?></time>
                <h4 class="post-light-title"><?= $news[$i]['title'] ?></h4>
              </div>
            </div>
          </a>
        </div>
      <?php endfor ?>
    </div>
  </div>
</section>