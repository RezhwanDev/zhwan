<?php include "includes/header.php" ?>


    <!-- Navigation and the side bar-->
<?php include "includes/nav.php" ?>
        <div class="col-lg-9">


          <!-- Slider -->
          <div id="carouselExampleIndicators" class="carousel slide my-4 shadow" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid " src="images/4.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/3.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/4.jpg" alt="fourth slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <?php
                $query = "SELECT * FROM science WHERE s_state ='publish'";
                $query_post=mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($query_post)) {
                $s_title   = $row['s_title'];
                $s_date  = $row['s_date'];
                $s_imagepost    = $row['s_imagepost'];
                $s_contentpost   = $row['s_contentpost'];
              ?>

                        <div  class="col-lg-4 col-md-6 mb-4">
                          <figure class="imghvr-hinge-up shadow" >
                            <img class="img-responsive" src="images/<?php echo $s_imagepost;?>" width="450px" height="250px">
                              <figcaption>
                                <h2><?php echo $s_title ?></h2>
                                <?php echo $s_contentpost; ?>
                                <small class="text-right">
                                <br>
                                <?php echo $s_date; ?></small>
                                <br><br>
                                   <button class="btn btn-light pull-right" type="button">Read More</button>
                                    <br>
                              </figcaption>
                              <!-- <a href=""> </a> -->
                          </figure>
                        </div>

                    <?php } ?>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include "includes/footer.php" ?>
