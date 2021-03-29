  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-12 padding-bottom-30-m">
              <div class="footer-detail">
                <h4><?php echo $lawyer ?></h4>
                  <h5><?php echo $address ?></h5>
                  <div class="icon-social">
                    <a href="https://www.facebook.com/Lawyer-House-CoLtd-1931020770285843/" target="_blank"><img src="img/icon/fb.png"></a>
                    <!-- <a href=""><img src="img/icon/ig.png"></a> -->
                    <a href="https://line.me/ti/p/b28Cn9LIlH" target="_blank"><img src="img/icon/ln.png"></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 padding-bottom-30-480">
              <div class="footer-detail">
                  <h4><?php echo $services ?> :</h4>
                  <?php 
                    foreach ($service_list as $service_detail) :
                  ?>
                      <a href="services/<?php echo $service_detail->id; ?>/<?php echo $service_detail->url_name; ?>"><h5>- <?php echo $service_detail->service_name; ?></h5></a>
                      <!-- <a href="services-detail?id=<?php echo $service_detail->id; ?>"><h5>- <?php echo $service_detail->service_name; ?></h5></a> -->
                  <?php endforeach ?>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 padding-bottom-30-480">
              <div class="footer-detail padding-bottom-15">
                  <h4><?php echo $contact ?> :</h4>
                  <a href="tel:0632087858"><h5><i class="fa fa-phone-square" style="transform: scaleX(-1);" aria-hidden="true"></i> 063-208-7858</h5></a>
                  <a href="tel:021587458"><h5><i class="fa fa-phone-square" style="transform: scaleX(-1);" aria-hidden="true"></i> 02-158-7458</h5></a>
                  <a href="mailtp:lawyerhouse.th@gmail.com"><h5><i class="fa fa-envelope" aria-hidden="true"></i> lawyerhouse.th@gmail.com</h5></a>
                  <a href="https://www.facebook.com/Lawyer-House-CoLtd-1931020770285843/" target="_blank"><h5><i class="fab fa-facebook-square" aria-hidden="true"></i> Lawyer House Co.,Ltd</h5></a>
              </div>
          </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <p>Copyright ©2020 - All rights reserved. lawyerhouse.co.th | Powered By : <a href="https://www.facebook.com/Cyber.Winner/" target="_blank">Cyber Winner</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- <div id="preloader"></div> -->



  <?php $current_url =  "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

  <ul class="social-nav model-0">
    <li><a class="pinterest" id="hide"><i class="far fa-window-close"></i></a></li>
    <li><a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php echo $current_url; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a class="twitter" href="https://twitter.com/share?url=<?php echo $current_url; ?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a class="line" href="https://social-plugins.line.me/lineit/share?url=<?php echo $current_url; ?>" target="_blank"><i class="fab fa-line"></i></a></li>
    <!-- <li><a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $current_url; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li> -->
    <li><a class="google-plus" href="https://plus.google.com/share?url=<?php echo $current_url; ?>"><i class="fab fa-google-plus-g"></i></a></li>
    <li><a class="mail" href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php echo $current_url; ?>" target="_blank"><i class="fa fa-envelope"></i></a></li>
  </ul>
  <ul class="social-nav model-0 top-40" id="model-1">
    <li><a class="open" id="show"><i class="fas fa-play"></i></a></li>
  </ul>

  <script>
    $(document).ready(function(){
      $("#hide").click(function(){
        $(".model-0").hide();
        $("#model-1").show();
      });
      $("#show").click(function(){
        $(".model-0").show();
        $("#model-1").hide();
      });
    });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167481597-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-167481597-1');
</script>