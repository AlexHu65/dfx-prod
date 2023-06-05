<div class="espacio">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-6 pad2" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="1000">
      <img src="assets/img/copp_logo_twt.jpg"  class="logo_name" width="70px;"> <span class="screenname"> @<?php print_r($img['img']['user']['screen_name'])?> <i class="fa fa-check-circle cirblue" aria-hidden="true"></i></span> <span class="fechatweet">
        <?php  echo $date;?>
      </span><br><br>
      <p class="fulltexttweet2" id="fulltexttwitter">
        <?php
        print_r(substr($img['img']['full_text'], ' 0', 150).'...');
        ?><br>
      </p><br><br>
      <p>
        <span class="datoslikes">
          <i class="fa fa-retweet retweeticon" aria-hidden="true"></i><?php print_r($img['img']['retweet_count'])?>
          <i class="fa fa-heart-o hearticon" aria-hidden="true"></i><?php print_r($img['img']['favorite_count'])?>
        </span>
      </p>
    </div>
    <div class="col-md-12 col-sm-12 col-lg-6 pad1" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">
      <?php
      print_r('<p class="center"><img src="'.$imagen.'"  class="'.($isLogo ? "" : "img_tweet").'" width="100%"></img></p>');
      ?>
    </div>
  </div>
</div>
