<div class="sidebar">

    <h3 class="sidebar-title">Search</h3>
    <div class="sidebar-item search-form">
      <form action="">
        <input type="text">
        <button type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End sidebar search formn-->

    <h3 class="sidebar-title">Recent Posts</h3>
    <div class="sidebar-item recent-posts">

      @forelse ($allposts as $item)
        <div class="post-item clearfix">
          <img src="{{ asset('/img/kegiatan/' . $item->image) }}" alt="">
          <h4><a href="/activity/{{ $item->id }}">{{ $item->title }}</a></h4>
          <time datetime="2020-01-01">{{ $item->date }}</time>
        </div>
      @empty
          
      @endforelse

    </div><!-- End sidebar recent posts-->

  </div><!-- End sidebar -->