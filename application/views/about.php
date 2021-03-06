<!-- Mailform-->
<section class="section section-lg bg-default">
  <div class="container">
    <div class="row row-50 justify-content-xl-between flex-lg-row-reverse">
      <div class="col-lg-4 col-xl-3">
        <div class="row row-30 row-xl-60">
          <!-- Phone & Address -->
          <div class="col-sm-4 col-lg-12">
            <h4>Alamat</h4>
            <p class="offset-top-1"><a class="link-default" href="#"><?= $alamat['title'] ?></a></p>
          </div>
          <div class="col-sm-4 col-lg-12">
            <h4>Telephone</h4>
            <ul class="list-0 offset-top-1">
              <li><a class="link-default" href=""><?= $telp['title'] ?></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <h2>Bersama Kami</h2>
        <!-- RD Mailform-->
        <form class="rd-form" action="<?= base_url('about') ?>" method="POST">
          <div class="row row-30">
            <div class="col-md-6">
              <div class="form-wrap">
                <input class="form-input" id="contact-first-name" type="text" name="first-name" data-constraints="@Required" required>
                <label class="form-label" for="contact-first-name">Nama Depan</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-wrap">
                <input class="form-input" id="contact-last-name" type="text" name="last-name" data-constraints="@Required" required>
                <label class="form-label" for="contact-last-name">Nama Belakang</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-wrap">
                <label class="form-label" for="contact-email">E-mail</label>
                <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-wrap">
                <label class="form-label" for="contact-phone">Telephone</label>
                <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-wrap">
                <label class="form-label" for="contact-message">Pesan</label>
                <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required" required></textarea>
              </div>
            </div>
            <div class="col-12">
              <button class="button button-lg button-primary button-raven" type="submit">Send</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Google Map-->
<!-- <section class="section">
  <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]">
    <div class="google-map"></div>
    <ul class="google-map-markers">
      <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
    </ul>
  </div>
</section> -->