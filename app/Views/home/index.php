
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title text-center">
      <h2>Our Services</h2>
      <hr>
      <p>Kami mencoba mencari mitra dan menjadi mitra bagi konsumen.</p>
    </div>
    <div class="row">

<?php foreach ($services as $services) : ?> 
      <div class="col-md-3 text-center">
        <div class="service-media"> <img src="/images/home/gambarServices/<?= $services['gambar']; ?>" alt=" "> </div>
        <div class="service-desc">
          <h3><?= $services['nama_services']; ?></h3>
          <p><?= $services['keterangan']; ?>.</p>
        </div>
      </div>
    <?php endforeach ?>
    </div>
  </div>
</div>




<!-- Gallery Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Product Gallery</h2>
      <hr>
      <p>Ini beberapa proyek yang kami kerjakan serta produk yang kami tawarkan.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".kaos">Kaos Polos</a></li>
            <li><a href="#" data-filter=".sablon-manual">Sablon Manual</a></li>
            <li><a href="#" data-filter=".heat-press">Sablon Heat Press</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">

        <?php foreach ($gambar as $gambar): ?>
        <div class="col-sm-6 col-md-3 <?= $gambar['filter'];  ?>">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="/images/home/produkGalery/<?= $gambar['file_besar'];  ?>" title="<?= $gambar['nama_gambar'];  ?>" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4><?= $gambar['nama_gambar'];  ?></h4>
              </div>
              <img src="/images/home/gambarGalery/<?= $gambar['file_kecil'];  ?>" class="img-responsive" alt="<?= $gambar['file_kecil'];  ?>"> </a> </div>
          </div>
        </div> 
        <?php endforeach ?>

        
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section -->


<div id="testimonials" class="text-center">
  <div class="overlay">
    <div class="container">

      <div class="section-title">
        <h2>Q & A</h2>
        <hr>
      </div>

      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div id="testimonial" class="owl-carousel owl-theme">

            <?php foreach ($artikel as $artikel): ?> 
            <div class="item">
              <p><?= $artikel['pertanyaan']; ?></p>
              <p><?= $artikel['jawaban']; ?></p>
              <p><?= $artikel['tgl_upload']; ?></p>
            </div>
            <?php endforeach ?>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Contact Section -->
<!-- <div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h2>Contact Us</h2>
      <hr>
      <p>Untuk info lebih lanjut anda dapat datang berkunjung ke workshop kami ataupun menghubungi kami melalui emai/nomor telpon di bawah, serta anda bisa meninggalkan pertanyaan dan alamat email pada kolom di bawah, agar kami dapat menghubungi anda untuk memberikan jawaban serta penawaran yang anda butuhkan.</p>
    </div>
    <div class="col-md-10 col-md-offset-1 contact-info">
      <div class="col-md-4">
        <h3>Address</h3>
        <hr>
        <div class="contact-item">
          <p>Desa. Kubang Putih, Kec. Banuhampu</p>
          <p>Kab. Agam, Provinsi Sumatra Barat, Indonesia</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Working Hours</h3>
        <hr>
        <div class="contact-item">
          <p>Monday-Saturday: 07:00 - 18:00</p>
          <p>Sunday: CLOSED</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Contact Info</h3>
        <hr>
        <div class="contact-item">
          <p>Phone: 082386363300</p>
          <p>Email: syahronibagus@yahoo.co.id</p>
        </div>
      </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <h3>Leave us a message</h3>
      <form method="post" action="/home/mail" name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
      </form>
    </div>
  </div>
</div> -->
<!-- Footer Section -->

