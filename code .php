
<?php/*
    $query = "SELECT * FROM science";
    $query_post=mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($query_post)) {
    $s_title   = $row['s_title'];
    $s_date  = $row['s_date'];
    $s_imagepost    = $row['s_imagepost'];
    $s_contentpost   = $row['s_contentpost'];
  */?>
            <div class="col-lg-4 col-md-6 mb-4">
              <figure class="imghvr-hinge-up" >
                <img class="img-responsive" src="images/<?php //echo $s_imagepost;?>" width="600px" height="400px">
                  <figcaption>
                    <?php //echo $s_contentpost; ?> <br>
                       <small><?php// echo $s_date; ?></small> <br> <br>
                       <button class="btn btn-light pull-right" type="button" >زیاتر بخوێنەوە</button>
                  </figcaption>
                  <!-- <a href=""> </a> -->
              </figure>
            </div>

        <?php // }  ?>

        <!-- Footer -->
        <div class="row">
            <div class="col-md-12">
                <footer>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 footer-navigation">
                            <h3><a href="#"><i class="fa fa-flask"></i> Bale bo Zanest </a></h3>
                            <p class="links"> </p>
                            <p class="company-name">Bale Bo Sanest © 2018 </p>
                        </div>
                        <div class="col-md-4 col-sm-6 footer-contacts">
                            <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                                <p><span class="new-line-span">Slemani .Ibrahim Ahmad</span> Kurdstan Iraq</p>
                            </div>
                            <div><i class="fa fa-phone footer-contacts-icon"></i>
                                <p class="footer-center-info email text-left">0770 275 75 04--0750 188 16 00</p>
                            </div>
                            <div><i class="fa fa-envelope footer-contacts-icon"></i>
                                <p>RezhwanSidiq@gmail.com </p>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-4 footer-about">
                            <h4>About the company</h4>
                            <p>Taxi Company Service delevary Taxi to your homes by calling any time best service nigger you will not complan mother fucker </p>
                            <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
