<?php 
 $about = $this->db->get_where('content',['type' => 'about'])->row_array();
 $sosmed = $this->db->get_where('content',['type' => 'social media'])->result_array();
?>

<!-- Page Footer-->
<footer class="section footer-classic bg-gray-950">
  <div class="footer-classic-main">
    <div class="container">
      <div class="row row-30">
        <!-- <div class="col-lg-3">
          <div class="row row-30 row-xl-40">
            <div class="col-6 col-md-3 col-lg-12">
              <article class="counter-minimal">
                <div class="counter-minimal-counter">
                  <div class="counter">97</div><span class="counter-postfix">%</span>
                </div>
                <p class="counter-minimal-title">Graduates</p>
              </article>
            </div>
            <div class="col-6 col-md-3 col-lg-12">
              <article class="counter-minimal">
                <div class="counter-minimal-counter">
                  <div class="counter">30</div><span class="counter-postfix">+</span>
                </div>
                <p class="counter-minimal-title">Certified Teachers</p>
              </article>
            </div>
            <div class="col-6 col-md-3 col-lg-12">
              <article class="counter-minimal">
                <div class="counter-minimal-counter counter">8</div>
                <p class="counter-minimal-title">Student Campuses</p>
              </article>
            </div>
            <div class="col-6 col-md-3 col-lg-12">
              <article class="counter-minimal">
                <div class="counter-minimal-counter counter">650</div>
                <p class="counter-minimal-title">Students</p>
              </article>
            </div>
          </div>
        </div> -->
        <div class="col-sm-6 col-lg-4 col-xl-6">
          <h3>Sosial Media</h3>
          <?php foreach($sosmed as $s) : ?>
          <!-- Social media-->
          <div>
            <a href="<?= $s['url'] ?>">
              <span>
                <i class="<?= $s['image'] ?> mr-3">
                  <?= $s['title'] ?>
                </i>
              </span>
            </a>
          </div>
          <?php endforeach ?>
          
        </div>
        <div class="col-sm-6 col-lg-5 col-xl-6">
          <div class="row row-50 row-xl-70">
            <div class="col-12">
              <h3>Tentang Kami</h3>
              <p><?= $about['sub_title'] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-classic-aside">
    <div class="container">
      <!-- Rights-->
      <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><br class="d-sm-none" /><a href="#">Terms of Use</a><span> and</span><span>&nbsp;</span><a href="#">Privacy Policy</a>. Design&nbsp;by&nbsp;SMKP Bimasakti</p>
    </div>
  </div>
</footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="<?= base_url('src/Pages/js/core.min.js') ?>"></script>
<script src="<?= base_url('src/Pages/js/script.js') ?>"></script>
<!-- coded by Drel-->
</body>

</html>