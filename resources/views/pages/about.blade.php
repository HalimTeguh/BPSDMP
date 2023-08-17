@extends('main')

@section('title')
    About
@endsection

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol>
        <h2>About</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="blog" class="blog">
      <div class="container " data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 entries">
            <article class="entry entry-single">
              <div class="aboutImg">
                <img src="{{ asset('/img/logo.png') }}" alt="" />
              </div>

              <h2 class="entry-title">
                  Tentang Kami
              </h2>

              <div class="entry-content">
                <p>
                  Balai Pengembangan Sumber Daya Manusia dan Penelitian Komunikasi dan Informatika yang disebut BPSDMP Kominfo merupakan unit pelaksana teknis di lingkungan Badan Penelitian dan Pengembangan Sumber Daya Manusia yang berada di bawah dan bertanggung jawab kepada Kepala Badan Penelitian dan Pengembangan Sumber Daya Manusia.
                </p>

                <p>BPSDMP Kominfo mempunyai tugas melaksanakan pengembangan sumber daya manusia, penelitian dan pengembangan bidang komunikasi dan informatika di wilayah kerja. BPSDMP Kominfo menyelenggarakan fungsi:</p>

                <ol>
                  <li>pelaksanaan penyusunan rencana dan evaluasi program dan anggaran</li>
                  <li>penyiapan pelaksanaan dan fasilitasi pengembangan sumber daya manusia bidang komunikasi dan informatika</li>
                  <li>penyiapan pelaksanaan penelitian dan pengembangan bidang komunikasi dan informatika</li>
                  <li>penyiapan pelaksanaan publikasi hasil penelitian dan pengembangan bidang komunikasi dan informatika</li>
                  <li>penyiapan pelaksanaan penjaminan mutu dan pendayagunaan hasil penelitian dan pengembangan bidang komunikasi dan informatika</li>
                  <li>pelaksanaan urusan penyusunan rencana, program, evaluasi, laporan, dan kerja sama, serta urusan tata usaha, keuangan, kepegawaian, perlengkapan, dan rumah tangga, serta hubungan masyarakat</li>
                </ol>
              </div>

            </article>
            <!-- End blog entry -->

          </div>
          <!-- End blog entries list -->
        </div>
      </div>
    </section>
    <!-- End Blog Single Section -->
  </main>
@endsection