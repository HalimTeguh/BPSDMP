@extends('main')

@section('title')
    Posts
@endsection

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Activity</li>
        </ol>
        <h2>All Activity Post</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">

            @forelse ($allposts as $item)
              <article class="entry">
                <div class="entry-img">
                  <img src="{{ asset('/img/kegiatan/'. $item->image ) }}" alt="" class="img-fluid" />
                </div>

                <h2 class="entry-title">
                  <a href="/activity/{{ $item->id }}">{{ $item->title }}</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-clock"></i> <a href="/activity/{{ $item->id }}"><time datetime="2020-01-01">{{ $item->date }}</time></a>
                    </li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    {{ $item->excerpt }}
                  </p>
                  <div class="read-more">
                    <a href="/activity/{{ $item->id }}">Read More</a>
                  </div>
                </div>
              </article>
            <!-- End blog entry -->
            @empty
                
            @endforelse

          </div>
          <!-- End blog entries list -->

          <div class="col-lg-4">
            
            @include('partials.sidebar')

          </div>
          <!-- End blog sidebar -->
        </div>
      </div>
    </section>
    <!-- End Blog Section -->
  </main>
@endsection