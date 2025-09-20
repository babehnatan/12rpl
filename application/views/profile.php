<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ronaldi, S.H</title>
  <meta name="description" content="Ronaldi, S.H - ">

  <!-- SEO Open Graph -->
  <meta property="og:title" content="Ronaldi, S.H ">
  <meta property="og:description" content="Ronaldi, S.H - ">
  <meta property="og:image" content="https://domainanda.com/images/profil.png">
  <meta property="og:url" content="https://domainanda.com">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Font Awesome, Bootstrap, Lightbox -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

  <style>
    .profile-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
      border: 4px solid #fff;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .social-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 45px;
      height: 45px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      font-size: 20px;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .social-icon:hover {
      transform: scale(1.2);
      color: #fff;
    }

    .social-icon.facebook:hover { background: #3b5998; }
    .social-icon.instagram:hover { background: #e1306c; }
    .social-icon.whatsapp:hover { background: #25d366; }
    .social-icon.email:hover { background: #dd4b39; }

    h2 {
      font-size: clamp(1.3rem, 2vw, 2rem);
      font-weight: bold;
    }
    p, li {
      font-size: clamp(0.9rem, 1.2vw, 1rem);
      line-height: 1.6;
    }

    .card img {
      height: 200px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    .card:hover img { transform: scale(1.05); }

    .custom-caption {
      bottom: 15px;
      background: rgba(0, 0, 0, 0.5);
      padding: 8px 15px;
      border-radius: 8px;
      display: inline-block;
    }

    .custom-caption h5 {
      color: #fff;
      font-weight: bold;
      font-size: clamp(1rem, 2.5vw, 1.2rem);
      margin: 0;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="bg-primary text-white text-center py-5">
    <div class="container">
      <img src="<?=base_url()?>images/profil.png" alt="Ronaldi, S.H" class="profile-img">
      <h1 class="fw-bold">H. Ronaldi, S.H</h1>
      <p class="lead">Ketua Yayasan Al Bahri Prima Nusantara</p>
      <div class="mt-3 d-flex justify-content-center gap-3">
        <a href="https://facebook.com/username" target="_blank" class="social-icon facebook">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="https://instagram.com/username" target="_blank" class="social-icon instagram">
          <i class="fa fa-instagram"></i>
        </a>
        <a href="https://wa.me/6281234567890" target="_blank" class="social-icon whatsapp">
          <i class="fa fa-whatsapp"></i>
        </a>
        <a href="mailto:emailkamu@gmail.com" class="social-icon email">
          <i class="fa fa-envelope"></i>
        </a>
      </div>
    </div>
  </header>

  <!-- Tentang Saya -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-primary mb-4 fs-4 fs-md-3 fs-lg-2"><i class="fa fa-info-circle"></i> TENTANG SAYA</h2>
      <p class="lead" style="text-align: justify;">
          Perkenalkan, nama saya <strong>H. Ronaldi, S.H</strong>. 
          Saya adalah seorang pendidik sekaligus penggiat sosial yang aktif 
          mengembangkan <strong>Yayasan Al Bahri Prima Nusantara</strong>. 
          Fokus saya adalah pada bidang pendidikan, pengembangan sumber daya manusia, 
          dan pemberdayaan masyarakat agar lebih mandiri dan berdaya saing.
        </p>
        
        <p class="lead" style="text-align: justify;">
          Dengan pengalaman lebih dari <strong>15 Tahun</strong> di dunia pendidikan 
          dan sosial, saya berkomitmen untuk terus berkontribusi melalui program-program 
          pelatihan, bimbingan belajar, serta kegiatan kemasyarakatan yang bermanfaat 
          bagi generasi muda.
        </p>
        
        <p class="lead" style="text-align: justify;">
          Visi saya adalah <em><strong>"Mewujudkan masyarakat cerdas, mandiri, dan berakhlak mulia 
          melalui pendidikan yang berkualitas."</strong></em>
        </p>
    </div>
  </section>

  <!-- Usaha Desktop -->
  <section class="py-5 bg-light d-none d-md-block">
    <div class="container">
      <h2 class="text-primary mb-4 fs-4 fs-md-3 fs-lg-2"><i class="fa fa-building"></i> YAYASAN AL BAHRI NUSANTARA</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <a data-fancybox="gallery" data-caption="Kampus A" href="<?=base_url()?>images/a.jpeg">
              <img src="<?=base_url()?>images/a.jpeg" class="card-img-top" alt="Ronaldi, S.H - Kampus A">
            </a>
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">KAMPUS A</h5>
              <p class="fw-bold">Jl. Yon Armed 7 No.143, RT.003/RW.006, Cikiwul, Kec. Bantar Gebang, Kota Bks</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <a data-fancybox="gallery" data-caption="Kampus C" href="<?=base_url()?>images/c.jpeg">
              <img src="<?=base_url()?>images/c.jpeg" class="card-img-top" alt="Ronaldi, S.H - Kampus C">
            </a>
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">KAMPUS C</h5>
              <p class="fw-bold">Jl. Yon Armed 7 No.143, RT.003/RW.006, Cikiwul, Kec. Bantar Gebang, Kota Bks</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <a data-fancybox="gallery" data-caption="Kampus B" href="<?=base_url()?>images/b.jpeg">
              <img src="<?=base_url()?>images/b.jpeg" class="card-img-top" alt="Ronaldi, S.H - Kampus B">
            </a>
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">KAMPUS B</h5>
              <p class="fw-bold">Jl. Pangkalan II Perum PU, RT.001/005, Sumur Batu, Kec. Bantar Gebang, Kota Bks</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Usaha Mobile -->
  <section class="py-5 bg-light d-block d-md-none">
    <div class="container">
      <h2 class="text-primary mb-4 fs-4 fs-md-3 fs-lg-2"><i class="fa fa-building"></i> YAYASAN AL BAHRI NUSANTARA</h2>

      <div id="usahaCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <a data-fancybox="gallery-yayasan" data-caption="Kampus A" href="<?=base_url()?>images/a.jpeg">
              <img src="<?=base_url()?>images/a.jpeg" class="d-block w-100" alt="Ronaldi, S.H - Kampus A">
            </a>
            <div class="carousel-caption custom-caption">
              <h5>KAMPUS A</h5>
            </div>
          </div>

          <div class="carousel-item">
            <a data-fancybox="gallery-yayasan" data-caption="Kampus V" href="<?=base_url()?>images/c.jpeg">
              <img src="<?=base_url()?>images/c.jpeg" class="d-block w-100" alt="Ronaldi, S.H - Kampus C">
            </a>
            <div class="carousel-caption custom-caption">
              <h5>KAMPUS C</h5>
            </div>
          </div>

          <div class="carousel-item">
            <a data-fancybox="gallery-yayasan" data-caption="Kampus B" href="<?=base_url()?>images/b.jpeg">
              <img src="<?=base_url()?>images/b.jpeg" class="d-block w-100" alt="Ronaldi, S.H - Kampus B">
            </a>
            <div class="carousel-caption custom-caption">
              <h5>KAMPUS B</h5>
            </div>
          </div>

        </div>

        <!-- Control -->
        <button class="carousel-control-prev" type="button" data-bs-target="#usahaCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#usahaCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- Kontak -->
  <!-- Kontak / Maps -->
<section class="py-5">
  <div class="container">
    <h2 class="text-primary mb-4 fs-4 fs-md-3 fs-lg-2"><i class="fa fa-map-marker" aria-hidden="true"></i> LOKASI</h2>
    <div class="ratio ratio-16x9 shadow-sm rounded">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4044361575457!2d106.9823179!3d-6.3416346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993cbffffffff%3A0xd3d6e437a0c7408c!2sSMK%20ALBAHRI%20A%20KOTA%20BEKASI!5e0!3m2!1sid!2sid!4v1758031659034!5m2!1sid!2sid" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>


  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2025 YAPN</p>
  </footer>

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

  <script>
  lightbox.option({
    resizeDuration: 200,
    fadeDuration: 200,
    imageFadeDuration: 200,
    wrapAround: true,        // bisa looping gambar
    alwaysShowNavOnTouchDevices: true
  })
  </script>
</body>
</html>
