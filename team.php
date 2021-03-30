<?php 
  include 'config/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Team | Lawyer House</title>
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
    $teamList = teamList();
  ?>

  <!--/ Intro Single star /-->
  <section class="header-title">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1><?php echo $team ?></h1>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Star /-->
  <section class="section-about-us-page">
    <div class="container">
      <div class="row">
      <?php foreach ($teamList as $teamDetail) : ?>
        <div class="col-lg-12 padding-bottom-30">
          <div class="row">
            <div class="col-lg-3 text-center">
              <img src="img/team/<?php echo $teamDetail->id; ?>/<?php echo $teamDetail->img_cover; ?>" alt="<?php echo $teamDetail->name; ?>" class="img-responsive">
            </div>
            <div class="col-lg-9">
              <div class="team-law">
                <h4><?php echo ($_SESSION['lang'] === 'th') ? $teamDetail->name : $teamDetail->name_en; ?></h4>
                <h5><?php echo ($_SESSION['lang'] === 'th') ? $teamDetail->position : $teamDetail->position_en; ?></h5>
                <div class="detail-team">
                  <?php echo ($_SESSION['lang'] === 'th') ? $teamDetail->description : $teamDetail->description_en; ?>
                </div>
                <!-- <div class="detail-team">
                  <i class="fa fa-check" aria-hidden="true"></i>  
                  <p>
                  นิติศาสตร์บัณฑิต มหาวิทยาลัยรามคำแหง รุ่น 28
                  </p>
                </div>
                <div class="detail-team">
                  <i class="fa fa-check" aria-hidden="true"></i>  
                  <p>
                  หลักสูตรวิชาว่าความของสำนักฝึกอบรมวิชาว่าความแห่งสภาทนายความ รุ่นที่ 20
                  </p>
                </div>
                <div class="detail-team">
                  <i class="fa fa-check" aria-hidden="true"></i>  
                  <p>
                  เนติบัณฑิตไทย เนติบัณฑิตยสภา สมัยที่ 56
                  </p>
                </div>
                <div class="detail-team">
                  <i class="fa fa-check" aria-hidden="true"></i>  
                  <p>
                  ทนายความสิ่งแวดล้อมรุ่น 10
                  </p>
                </div>
                <div class="detail-team">
                  <i class="fa fa-check" aria-hidden="true"></i>  
                  <p>
                  ผู้ทรงคุณวุฒิจัดทำสัญญาจ้างบริหารก่อสร้าง
                  </p>
                </div>
                <div class="detail-team">
                  <i class="fa fa-check" aria-hidden="true"></i>  
                  <p>
                  เจ้าหน้าที่ความปลอดภัยระดับบริหาร
                  </p>
                </div> -->
              </div>
            </div>
          </div>
          <hr class="green-hr">
        </div>
        <?php endforeach ?>

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
