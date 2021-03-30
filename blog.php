<?php 
  include 'config/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta property="og:title" content="รับปรึกษาปัญหาด้านกฎหมายแพ่งและพาณิชย์ กฎหมายอาญา กฎหมายแรงงาน ทำนิติกรรมสัญญา รับทำบัญชี" />
  <title>News & Blog | Lawyer House</title>
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
  ?>

  <!--/ Intro Single star /-->
  <section class="header-title">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1><?php echo $news ?></h1>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Star /-->
  <section class="section-about-us-page">
    <div class="container">
      <div class="row">
      <?php 
          $blogList = blogList();
          foreach ($blogList as $blogDetail) :
      ?>
        <div class="col-lg-4 col-md-6 padding-bottom-30">
          <!-- <a href="blog-detail?id=<?php echo $blogDetail->id; ?>"> -->
          <a href="blogs/<?php echo $blogDetail->id; ?>/<?php echo $blogDetail->url_name; ?>">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <div class="images-box-img">
                  <img src="img/blog/<?php echo $blogDetail->id; ?>/<?php echo $blogDetail->img_cover; ?>" alt="<?php echo $blogDetail->blog_name; ?>" class="img-a img-fluid">
                </div>
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <?php if( $_SESSION['lang'] === 'th') {
                            echo $blogDetail->blog_name;
                        } else {
                            echo $blogDetail->blog_name_en;
                        }
                      ?>
                    </h2>
                    <hr>
                    <p><?php echo $read ?> >></p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach ?>
      </div>
      

      <?php 
          $total = blogCount();

          $pagination = pagination( $total->counter, 12);
      ?>  
      <div class="row">
        <div class="col-lg-12 text-right">
          <hr class="yellow-hr">
            <div class="pagination">
              <?php if ( $pagination['total'] > 0 ) : ?>
                  <?php if ( $pagination['prev'] ) : ?>
                      <a href="<?php echo $current_page; ?>?page=<?php echo $pagination['prev']; ?>"><</a>
                  <?php endif; ?>
                  <?php for ( $i = 1; $i <= $pagination['total']; $i++ ) : ?>
                      <?php 
                          $page1 = $pagination['page'] - 2;
                          $page2 = $pagination['page'] + 2;

                          if ( ( $i == 1 ) or ( $i == $pagination['total'] ) or ( $i >= $page1 and $i <= $page2 ) ) :
                      ?>
                          <a href="<?php echo $current_page; ?>?page=<?php echo $i; ?>" class="<?php echo ($i == $pagination['page']) ? 'active' : ''; ?>"><?php echo $i; ?></a>
                          <?php elseif ( ( ( $i > 1 ) and ( $i == ( $page1 - 1 ) ) ) or ( ( $i < $pagination['total'] ) and ( $i == ( $page2 + 1 ) ) ) ) : ?>
                              <a href="#" class="inactive">...</a>
                      <?php endif ?>
                  <?php endfor ?>

                  <?php if ( $pagination['total'] != $pagination['page'] ) : ?>
                      <a href="<?php echo $current_page; ?>?page=<?php echo $pagination['next']; ?>">></a>
                  <?php endif ?>
              <?php endif ?>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property End /-->

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

</body>
</html>
