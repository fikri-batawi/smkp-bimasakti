<?php
$pages_menu = [
  [
    'title' => 'Beranda',
    'url'   => 'home'
  ],
  [
    'title' => 'Alumni',
    'url'   => 'alumni'
  ],
  [
    'title' => 'Berita Terbaru',
    'url'   => 'blogs'
  ],
  [
    'title' => 'Tentang',
    'url'   => 'about'
  ],
  [
    'title' => 'Masuk',
    'url'   => 'auth'
  ],
  [
    'title' => 'Keluar',
    'url'   => 'auth/logout'
  ]
]
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title><?= $title ?></title>
  <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href=<?= base_url('src/Pages/images/favicon.ico') ?> type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700%7CZilla+Slab:300,400,500,700,700i%7CGloria+Hallelujah">
  <link rel="stylesheet" href=<?= base_url('src/Pages/css/bootstrap.css') ?>>
  <link rel="stylesheet" href=<?= base_url('src/Pages/css/fonts.css') ?>>
  <link rel="stylesheet" href=<?= base_url('src/Pages/css/style.css') ?>>
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>
  <div class="preloader">
    <div class="preloader-logo"><a class="brand" href="index.html"><img class="brand-logo-dark" src=<?= base_url('assets/logo/logo-bimasakti.png') ?> alt="" width="245" height="50" /><img class="brand-logo-light" src=<?= base_url('assets/logo/logo-bimasakti.png') ?> alt="" width="245" height="50" /></a>
    </div>
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
    </div>
  </div>
  <div class="page">
    <!-- Page Header-->
    <header class="page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="<?= base_url('home') ?>"><img class="brand-logo-dark" src=<?= base_url("assets/logo/logo-bimasakti.png") ?> alt="" width="245" height="50" /><img class="brand-logo-light" src=<?= base_url("assets/logo/logo-bimasakti.png") ?> alt="" width="245" height="50" /></a>
                </div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav		-->

                <?php if (!$user) : ?>
                  <!-- Tidak Login -->
                  <ul class="rd-navbar-nav">
                    <?php foreach ($pages_menu as $page) : ?>
                      <?php if ($page['title'] != 'Alumni' && $page['title'] != 'Keluar') : ?>
                        <?php if ($title == $page['title']) : ?>
                          <li class="rd-nav-item active"><a class="rd-nav-link" href=<?= site_url($page['url']) ?>><?= $page['title'] ?></a>
                          </li>
                        <?php else : ?>
                          <li class="rd-nav-item"><a class="rd-nav-link" href=<?= site_url($page['url']) ?>><?= $page['title'] ?></a>
                          </li>
                        <?php endif ?>
                      <?php endif ?>
                    <?php endforeach ?>
                  </ul>

                  
                <?php else : ?>
                  <!-- Login -->
                  <ul class="rd-navbar-nav">
                    <?php foreach ($pages_menu as $page) : ?>
                      <?php if ($page['title'] != 'Masuk') : ?>
                        <?php if ($title == $page['title']) : ?>
                          <li class="rd-nav-item active"><a class="rd-nav-link" href=<?= site_url($page['url']) ?>><?= $page['title'] ?></a>
                          </li>
                        <?php else : ?>
                          <li class="rd-nav-item"><a class="rd-nav-link" href=<?= site_url($page['url']) ?>><?= $page['title'] ?></a>
                          </li>
                        <?php endif ?>
                      <?php endif ?>
                    <?php endforeach ?>
                  </ul>
                <?php endif ?>

              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>