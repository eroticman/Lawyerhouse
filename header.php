  <?php include 'lang.php' ?>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- <img src="img/logo-white.png" class="logo"> -->
      <a class="navbar-brand text-brand" href="index">
        <h1 class="logo-text">LAWYER HOUSE</h1>
      </a>
      <!-- <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button> -->
      <div class="navbar-collapse collapse justify-content-right" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'index') ? 'active' : ''; ?>" href="index"><?php echo $home ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'about-us') ? 'active' : ''; ?>" href="about-us"><?php echo $about ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'team') ? 'active' : ''; ?>" href="team"><?php echo $team ?></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo ($current_page == 'services') ? 'active' : ''; ?>" href="#"
              id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $services ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php 
                $service_list = service_list();
                foreach ($service_list as $service_detail) :
            ?>
              <a class="dropdown-item"
                href="services/<?php echo $service_detail->id; ?>/<?php echo $service_detail->url_name; ?>">-
                <?php echo ($_SESSION['lang'] === 'th') ? $service_detail->service_name : $service_detail->service_name_en; ?></a>
              <?php endforeach ?>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php echo ($current_page == 'realestate') ? 'active' : ''; ?>" href="#"
              id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $realestate ?>
            </a>
              <?php 
                  $realList = realList();
                  foreach ($realList as $realDetail) :
              ?>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="realestate/<?php echo $realDetail->id; ?>/<?php echo $realDetail->url_name; ?>">- 
                <?php echo ($_SESSION['lang'] === 'th') ? $realDetail->real_estate_name : $realDetail->real_estate_name_en; ?></a>
              <?php endforeach ?>
            </div>
          </li>
          <li
            class="nav-item <?php echo ($current_page == 'blog' or $current_page == 'blog-detail') ? 'active' : ''; ?>">
            <a class="nav-link" href="blog"><?php echo $news ?></a>
          </li>

          <li class="nav-item <?php echo ($current_page == 'contact-us') ? 'active' : ''; ?>">
            <a class="nav-link" href="contact-us"><?php echo $contact ?></a>
          </li>

          <li class="nav-item">
            <form method="POST">
              <input value="th" name="language" type="hidden">
              <button type="submit" class="nav-link btn-link btn"><img src="img/th.png" alt="ไทย" class="d-inline"><p class="pl-2 d-md-none d-inline">ไทย</p></button>
            </form>
          </li>

          <li class="nav-item">
            <form method="POST">
              <input value="en" name="language" type="hidden">
              <button type="submit" class="nav-link btn-link btn"><img src="img/en.png" alt="en" class="d-inline"><p class="pl-2 d-md-none d-inline">EN</p></button>
            </form>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <!--/ Nav End /-->