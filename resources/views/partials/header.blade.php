<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('/img/logo.png') }}" alt="" />
        <span>BPSDMP</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?= ($title == 'Home') ? "Active" : " "  ?>" href="/">Home</a></li>
          <li><a class="nav-link scrollto <?= ($title == 'Posts') ? "Active" : " "  ?>" href="/activity">Activity</a></li>
          <li><a class="nav-link scrollto <?= ($title == 'About') ? "Active" : " "  ?>" href="/about">About</a></li>
          <li><a class="nav-link scrollto <?= ($title == 'Home') ? "Active" : " "  ?>" href="/#contact">Contact</a></li>
          <li><a class="getstarted" href="dashboard/login.html">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      
    </div> 
  </header>