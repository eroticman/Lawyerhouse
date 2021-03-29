<?php 
  include 'config/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta property="og:title" content="รับปรึกษาปัญหาด้านกฎหมายแพ่งและพาณิชย์ กฎหมายอาญา กฎหมายแรงงาน ทำนิติกรรมสัญญา รับทำบัญชี" />
  <title>Contact Us | Lawyer House</title>
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
          <h1><?php echo $contact ?></h1>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 padding-bottom-30-m">
          <div class="address-detail">
            <div class="contact-inline">
                <i class="fa fa-home"></i>
                <h5><strong><?php echo $lawyer ?></strong><br>
                <?php echo $address ?></h5>
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-9">
                <div class="contact-inline">
                    <i class="fa fa-phone-square" style="transform: scaleX(-1);"></i>
                    <h5><a href="tel:0632087858">063-208-7858</a></h5>
                </div>
                <div class="contact-inline">
                    <i class="fa fa-phone-square" style="transform: scaleX(-1);"></i>
                    <h5><a href="tel:021587458">02-158-7458</a></h5>
                </div>

                <div class="contact-inline">
                    <i class="fab fa-facebook-square"></i>
                    <h5><a href="https://www.facebook.com/Lawyer-House-CoLtd-1931020770285843/" target="_blank">Lawyer House Co.,Ltd</a></h5>
                </div>
                <div class="contact-inline">
                    <i class="fa fa-envelope"></i>
                    <h5><a href="mailto:lawyerhouse.th@gmail.com">lawyerhouse.th@gmail.com</a></h5>
                </div>
              </div>
              <div class="col-lg-4 col-md-3">
                  <h4><?php echo $scan ?></h4>
                  <a href="https://line.me/ti/p/b28Cn9LIlH" target="_blank"><img src="img/qr.png" class="img-responsive max-480"></a>
                </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="h3-contact"><?php echo $contactform ?> :</h3>
          <form id="contact-form">
            <div class="row">
              <div class="form-group col-lg-6 col-md-6">
                <input type="email" class="form-control" id="fname"  placeholder="<?php echo $firstname ?>">
              </div>
              <div class="form-group col-lg-6 col-md-6">
                <input type="email" class="form-control" id="lname"  placeholder="<?php echo $lastname ?>">
              </div>
              <div class="form-group col-lg-6 col-md-6">
                <input type="email" class="form-control" id="tel"  placeholder="<?php echo $tel ?>">
              </div>
              <div class="form-group col-lg-6 col-md-6">
                <input type="email" class="form-control" id="email"  placeholder="<?php echo $email ?>">
              </div>
              <div class="form-group col-lg-12">
                <textarea class="form-control" rows="5" id="comment" placeholder="<?php echo $message ?>"></textarea>
              </div>
            </div>
              <button type="button" onclick="sendEmail()" class="buttonsend"><?php echo $submit ?></button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3872.9103287103417!2d100.68557601483218!3d13.904307790248899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d7d985a390d85%3A0xe6d9bd01cb1b54a8!2z4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LiB4LiO4Lir4Lih4Liy4Lii4Liq4Li44LiC4Lit4LiZ4Lix4LiZ4LiV4LmM!5e0!3m2!1sth!2sth!4v1590199587559!5m2!1sth!2sth" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


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
    

  <script type="text/javascript">
              function sendEmail() {
                  var data = {
                      fname: $("#fname").val(),
                      lname: $("#lname").val(),
                      email: $("#email").val(),
                      tel: $("#tel").val(),
                      message: $("#comment").val()
                  };
                  $.ajax({
                      type: "POST",
                      url: "mail.php",
                      data: data,
                      success: function(result){
                          // $('.success').fadeIn(1000);
                          alert('ส่งข้อความเรียบร้อย');
                          $('#contact-form')[0].reset();
                      }
                  });
              }
    </script>

</body>
</html>
