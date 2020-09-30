<?php 
  include 'config/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta property="og:title" content="รับปรึกษาปัญหาด้านกฎหมายแพ่งและพาณิชย์ กฎหมายอาญา กฎหมายแรงงาน ทำนิติกรรมสัญญา รับทำบัญชี" />
  <title>Home | Lawyer House</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="keywords" content="ทนายความ, บริษัท ลอว์เยอร์ เฮ้าส์ จำกัด">
  <meta name="description" content="บริษัท ลอว์เยอร์ เฮ้าส์ จำกัด เป็นบริษัทให้บริการด้านกฎหมายครบวงจร
                ก่อตั้งขึ้นจากการรวมตัวกันของนักกฎหมายที่มีความเชี่ยวชาญระดับมืออาชีพ
                ที่มีประสบการณ์ทางด้านกฎหมายยาวนาน ประกอบด้วยผู้เชี่ยวชาญ ด้านกฎหมายหลายๆด้าน 
                ไม่ว่าจะเป็น กฎหมายแพ่งและพาณิชย์ กฎหมายอาญา กฎหมายทรัพย์สินทางปัญญา กฎหมายปกครอง 
                กฎหมายครอบครัว และกฎหมายภาษีอากร กฎหมายแรงงาน เป็นต้น" >

  <!-- Favicons -->
  <link href="img/logo-fav.png" rel="icon">
  <link href="img/logo-fav.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="fonts/fontawesome/css/all.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
  <?php 
    $current_page = basename(__FILE__,'.php');
    include "header.php";
    $bannerList = bannerList();
  ?>

          <div class="header-law">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <?php 
                        $i = 0;
                        foreach ($bannerList as $banner_detail) : 
                      ?>
                        <?php if ($i == 0) : ?>
                          <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
                        <?php else : ?>
                          <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
                        <?php endif ?>
                      <?php
                        $i++; 
                        endforeach 
                      ?>
                      </ol>

                  <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <?php 
                          $img = 0;
                          foreach ($bannerList as $banner_detail) : 
                        ?>
                          <?php if ($img == 0) : ?>
                            <div class="item active">
                              <img src="img/banner/<?php echo $banner_detail->id; ?>/<?php echo $banner_detail->img_cover; ?>" alt="<?php echo $banner_detail->banner_name; ?>" style="width:100%;">
                            </div>
                          <?php else : ?>
                            <div class="item">
                              <img src="img/banner/<?php echo $banner_detail->id; ?>/<?php echo $banner_detail->img_cover; ?>" alt="<?php echo $banner_detail->banner_name; ?>" style="width:100%;">
                            </div>
                          <?php endif ?>
                        <?php 
                          $img++;
                          endforeach 
                        ?>
                      </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
          </div>
        </div>



  <!--/ Property Star /-->
  <section class="section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 z-index-1 padding-bottom-30-m">
          <div class="about-us margin-right-20rem">
              <h2>บริษัท ลอว์เยอร์ เฮ้าส์ จำกัด </h2>
              <p>เป็นบริษัทให้บริการด้านกฎหมายครบวงจร<br class="hide-480"> ก่อตั้งขึ้นจากการรวมตัวกันของนักกฎหมายที่มีความเชี่ยวชาญระดับมืออาชีพ<br class="hide-480">ที่มีประสบการณ์ทางด้านกฎหมายยาวนาน ประกอบด้วยผู้เชี่ยวชาญ
ด้านกฎหมายหลายๆด้าน ไม่ว่าจะเป็น กฎหมายแพ่งและพาณิชย์ กฎหมายอาญา กฎหมายทรัพย์สินทางปัญญา กฎหมายปกครอง กฎหมายครอบครัว และกฎหมายภาษีอากร กฎหมายแรงงาน เป็นต้น</p>
          </div>
        </div>
        <div class="col-lg-7 z-index-0">
            <img src="img/about.jpg" class="img-responsive">
        </div>
      </div>
    </div>
  </section>
  <!--/ Property End /-->

  <!--/ Agents Star /-->
  <section class="section-service" id="green-color">
    <div class="container">
      <div class="row padding-bottom-30">
          <div class="col-lg-12 text-center">
              <h1><i class="fas fa-legal" style="transform: scaleX(-1);" aria-hidden="true"></i> Services</h1>
          </div>
      </div>
      <div class="row">
      <?php 
        $service_list = service_list();
      ?>
          <div class="col-lg-6 col-md-6">
          <?php if (!empty($service_list[0])) : ?>
            <a href="services/<?php echo $service_list[0]->id; ?>/<?php echo $service_list[0]->url_name; ?>"><h4><?php echo '-' . ' ' . $service_list[0]->service_name; ?></h4></a>
          <?php endif ?>
          <?php if (!empty($service_list[1])) : ?>
            <a href="services/<?php echo $service_list[1]->id; ?>/<?php echo $service_list[1]->url_name; ?>"><h4><?php echo '-' . ' ' . $service_list[1]->service_name; ?></h4></a>
          <?php endif ?>
          <?php if (!empty($service_list[2])) : ?>
            <a href="services/<?php echo $service_list[2]->id; ?>/<?php echo $service_list[2]->url_name; ?>"><h4><?php echo '-' . ' ' . $service_list[2]->service_name; ?></h4></a>
          <?php endif ?>
          <?php if (!empty($service_list[3])) : ?>
            <a href="services/<?php echo $service_list[3]->id; ?>/<?php echo $service_list[3]->url_name; ?>"><h4><?php echo '-' . ' ' . $service_list[3]->service_name; ?></h4></a>
          <?php endif ?>
          </div>
          <div class="col-lg-6 col-md-6">
          <?php if (!empty($service_list[4])) : ?>
            <a href="services/<?php echo $service_list[4]->id; ?>/<?php echo $service_list[4]->url_name; ?>"><h4><?php echo '-' . ' ' . $service_list[4]->service_name; ?></h4></a>
          <?php endif ?>
          <?php if (!empty($service_list[5])) : ?>
            <a href="services/<?php echo $service_list[5]->id; ?>/<?php echo $service_list[5]->url_name; ?>"><h4><?php echo '-' . ' ' . $service_list[5]->service_name; ?></h4></a>
          <?php endif ?>
          <?php if (!empty($service_list[6])) : ?>
            <a href="services/<?php echo $service_list[6]->id; ?>/<?php echo $service_list[6]->url_name; ?>"><h4><?php echo '-' . ' ' . $service_list[6]->service_name; ?></h4></a>
          <?php endif ?>
          <?php if (!empty($service_list[7])) : ?>
            <a href="services/<?php echo $service_list[7]->id; ?>/<?php echo $service_list[7]->url_name; ?>"><h4><?php echo '-' . ' ' . $service_list[7]->service_name; ?></h4></a>
          <?php endif ?>
          </div>
      </div>
    </div>
  </section>
  <!--/ Agents End /-->


  <section class="blog">
      <div class="container">
            <div class="row padding-bottom-30">
                <div class="col-lg-12 text-center">
                    <h1><i class="fas fa-legal" style="transform: scaleX(-1);" aria-hidden="true"></i> News & Blog</h1>
                </div>
            </div>
            <div class="row">
                <?php 
                  $new_blog = new_blog();
                  foreach ($new_blog as $blog_detail) :
                ?>
                  <div class="col-lg-4 col-md-6 padding-bottom-30">
                    <a href="blogs/<?php echo $blog_detail->id; ?>/<?php echo $blog_detail->url_name; ?>">
                      <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                          <div class="images-box-img">
                            <img src="img/blog/<?php echo $blog_detail->id; ?>/<?php echo $blog_detail->img_cover; ?>" alt="<?php echo $blog_detail->blog_name; ?>" class="img-a img-fluid">
                          </div>
                        </div>
                        <div class="card-overlay">
                          <div class="card-overlay-a-content">
                            <div class="card-header-a">
                              <h2 class="card-title-a"><?php echo $blog_detail->blog_name; ?></h2>
                              <hr>
                              <p>Read >></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach ?>
            </div>
            <div class="row">
              <div class="col-lg-12 text-center">
                <button type="button" onclick="location.href='blog'" class="buttonsend">View All</button>
              </div>
            </div>
      </div>
  </section>

  <section class="couter">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <div class="text-center">
                <div id="histats_counter"></div>
                <script type="text/javascript">var _Hasync= _Hasync|| [];
                _Hasync.push(['Histats.start', '1,4407568,4,428,112,75,00011101']);
                _Hasync.push(['Histats.fasi', '1']);
                _Hasync.push(['Histats.track_hits', '']);
                (function() {
                var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
                hs.src = ('//s10.histats.com/js15_as.js');
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                })();</script>
                <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4407568&101" alt="" border="0"></a></noscript>
            </div>
            <!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-65ebc505-a437-4368-a926-c52c5b139fd2"></div>         -->
          </div>
      </div>
    </div>
  </section>


  <?php 
    include 'partner.php';
    include 'footer.php';
  ?>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script  src="js/script.js"></script>

</body>
</html>
