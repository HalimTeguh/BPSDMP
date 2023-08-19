@extends('main')

@section('content')
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Badan Penelitian dan Pengembangan Sumber Daya Manusia</h1>
            <h2 data-aos="fade-up" data-aos-delay="400">Kementerian Komunikasi dan Informatika Republik Indonesia</h2>
            
          </div>
          <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('img/hero-img.png') }}" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row gx-0">
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h3>Who We Are</h3>
                <h2>Balai Pengembangan Sumber Daya Manusia dan Penelitian Komunikasi dan Informatika</h2>
                <p>
                  BPSDMP Kominfo merupakan unit pelaksana teknis di lingkungan Badan Penelitian dan Pengembangan Sumber Daya Manusia yang berada di bawah dan bertanggung jawab kepada Kepala Badan Penelitian dan Pengembangan Sumber Daya
                  Manusia.
                </p>
                <div class="text-center text-lg-start">
                  <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Read More</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{ asset('/img/about.jpg') }}" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Values Section ======= -->
      <section id="values" class="values">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Our activity</h2>
            <p>BPSDMP's Main Activities</p>
          </header>

          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="box">
                <img src="{{ asset('/img/values-1.png') }}" class="img-fluid" alt="" />
                <h3>Pelatihan</h3>
                <p>Kami menyediakan pelatihan berkualitas tinggi untuk meningkatkan kapasitas dan keterampilan individu serta organisasi.</p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
              <div class="box">
                <img src="{{ asset('/img/values-2.png') }}" class="img-fluid" alt="" />
                <h3>Kelas Online</h3>
                <p>Kelas online kami yang dirancang untuk memberikan akses yang mudah, fleksibilitas, dan kualitas pembelajaran yang tinggi.</p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
              <div class="box">
                <img src="{{ asset('/img/values-3.png') }}" class="img-fluid" alt="" />
                <h3>Sertifikasi</h3>
                <p>sertifikasi akan membantu peserta meraih standar tinggi dalam pengetahuan dan keterampilan, membuka pintu bagi peluang karir yang lebih baik.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Values Section -->

      <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
          </header>

          <div class="row">
            <div class="col-lg-6">
              <!-- F.A.Q List 1-->
              <div class="accordion accordion-flush" id="faqlist1">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">Apa peran dan fungsi Unit Pelaksana Teknis (UPT) di BPSDMP?</button>
                  </h2>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      UPT di BPSDMP memiliki peran utama dalam pelaksanaan program-program pelatihan, pengembangan, dan peningkatan kapasitas sumber daya manusia di berbagai sektor. Kami merancang dan melaksanakan pelatihan yang mendukung
                      pengembangan potensi individu dan organisasi.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">Apa jenis pelatihan yang diselenggarakan oleh UPT BPSDMP?</button>
                  </h2>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      Kami menyelenggarakan beragam pelatihan, termasuk pelatihan manajemen, kepemimpinan, teknis, keahlian khusus, dan pengembangan pribadi. Program kami dirancang untuk memenuhi kebutuhan beragam sektor dan tingkatan.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">Bagaimana cara mendaftar dan mengikuti pelatihan yang diselenggarakan oleh UPT?</button>
                  </h2>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      Anda dapat mengakses daftar pelatihan yang tersedia di situs kami. Setiap pelatihan akan memiliki informasi pendaftaran yang terinci, termasuk persyaratan, jadwal, dan prosedur pendaftaran.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <!-- F.A.Q List 2-->
              <div class="accordion accordion-flush" id="faqlist2">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">Apa manfaat mengikuti pelatihan di UPT BPSDMP?</button>
                  </h2>
                  <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                      Mengikuti pelatihan di UPT BPSDMP dapat meningkatkan pengetahuan, keterampilan, dan kompetensi Anda dalam bidang tertentu. Ini dapat membantu Anda dalam mengembangkan karir dan berkontribusi lebih baik di tempat kerja.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">Bagaimana tenaga pengajar dipilih untuk program pelatihan?</button>
                  </h2>
                  <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                      Tenaga pengajar kami merupakan ahli di bidang masing-masing, memiliki pengalaman praktis dan akademis yang kuat. Mereka dipilih berdasarkan kompetensi dan rekam jejak mereka dalam memberikan pelatihan yang bermutu.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">Apakah sertifikat diberikan setelah menyelesaikan pelatihan?</button>
                  </h2>
                  <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">Ya, peserta yang berhasil menyelesaikan program pelatihan akan menerima sertifikat resmi yang menunjukkan keberhasilan mereka dalam mengikuti dan menyelesaikan program pelatihan.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End F.A.Q Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Gallery</h2>
            <p>Check our latest activity</p>
          </header>

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @forelse ($posts as $key => $value)
                @if ($value->image == 'default.png')
                  @continue
                @endif
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <img src="{{ asset('/img/kegiatan/' . $value->image) }}" class="img-fluid" alt="" />
                    <div class="portfolio-info">
                      <h4>Kegiatan {{ $key + 1 }}</h4>
                      <p>{{ $value->title }}</p>
                      <div class="portfolio-links">
                        <a href="{{ asset('/img/kegiatan/' . $value->image) }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                        <a href="/activity/{{ $value->id }}" title="More Details"><i class="bi bi-link"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
            @empty
                
            @endforelse

          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Testimonials</h2>
            <p>What they are saying about us</p>
          </header>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                  <p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</p>
                  <div class="profile mt-auto">
                    <img src="{{ asset('/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="" />
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                  <p>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</p>
                  <div class="profile mt-auto">
                    <img src="{{ asset('/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="" />
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                  <p>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</p>
                  <div class="profile mt-auto">
                    <img src="{{ asset('/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="" />
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                  <p>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</p>
                  <div class="profile mt-auto">
                    <img src="{{ asset('/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="" />
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                  <p>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</p>
                  <div class="profile mt-auto">
                    <img src="{{ asset('/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="" />
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Activity</h2>
            <p>Recent posts form our activity</p>
          </header>

          <div class="row">
            <?php $i = 0; ?>
            @forelse ($posts as $value)
              <?php $i++; ?>

              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img text-center">
                    <img src="{{ asset('/img/kegiatan/' . $value->image) }}" class="img-fluid" alt="">
                  </div>
                  <span class="post-date">{{ $value->date }}</span>
                  <h3 class="post-title">{{ $value->title }}</h3>
                  <p></p>
                  <a href="/activity/{{ $value->id }}" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
              @if ($i == 3)
                  @break
              @endif
            @empty
              <div class="col-lg-4">
                <div class="post-box">
                  <h3 class="post-title">No Post</h3>
                </div>
              </div>
            @endforelse
            
          </div>
        </div>
      </section>
      <!-- End Recent Blog Posts Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Contact</h2>
            <p>Contact Us</p>
          </header>

          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>Jl. Raya Ketajen No.36, Ketajen, Kec. Gedangan<br />Kab. Sidoarjo, Jawa Timur 61254</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>(031) 8011944<br />031-8011944</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>BPSDMP_info@google.com<br />BPSDMP_contact@google.com</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-clock"></i>
                    <h3>Open Hours</h3>
                    <p>Monday - Friday<br />9:00AM - 05:00PM</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required />
                  </div>

                  <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required />
                  </div>

                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required />
                  </div>

                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
@endsection