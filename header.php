  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- <img src="img/logo-white.png" class="logo"> -->
      <a class="navbar-brand text-brand" href="index"><h1 class="logo-text">LAWYER HOUSE</h1></a>
      <!-- <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> -->
      <div class="navbar-collapse collapse justify-content-right" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'index') ? 'active' : ''; ?>" href="index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'about-us') ? 'active' : ''; ?>" href="about-us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'team') ? 'active' : ''; ?>" href="team">Team</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo ($current_page == 'services') ? 'active' : ''; ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
                $service_list = service_list();
                foreach ($service_list as $service_detail) :
            ?>
              <a class="dropdown-item" href="services/<?php echo $service_detail->id; ?>/<?php echo $service_detail->url_name; ?>">- <?php echo $service_detail->service_name; ?></a>
            <?php endforeach ?>
            </div>
          </li>
          <li class="nav-item <?php echo ($current_page == 'blog' or $current_page == 'blog-detail') ? 'active' : ''; ?>">
            <a class="nav-link" href="blog">News & Blog</a>
          </li>

          <li class="nav-item <?php echo ($current_page == 'contact-us') ? 'active' : ''; ?>">
            <a class="nav-link" href="contact-us">Contact Us</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <!--/ Nav End /-->

