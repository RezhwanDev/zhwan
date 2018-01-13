<?php include_once "include/adminheader.php"; ?>

      <!-- Navigation -->
      <?php include "include/nav.php" ?>
          <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome  Admin
                            <small>Author</small>
                        </h1>

                        <div class="col-xs-6">

                          <?php addCat();  ?>

                          <!--Start Add Form -->
                        <form class="" action="catagoires.php" method="post">
                          <div class="form-group">
                        <label for="cat_title">Add Catories</label>
                          <input type="text" class="form-control" name="cat_titles">
                          </div>
                          <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="add_catagory">
                          </div>
                       </form><!--End Add Form -->
                     </div><!-- End of col-6 -->

                     <!-- Add Catagories-->
                     <div class="col-xs-6">
                       <table class="table table-hover">
                         <thead>
                           <tr>
                             <th>id</th>
                             <th>Catagories Title</th>
                             <th>Delete</th>
                           </tr>
                         </thead>
                         <tbody>
                         <?php showCat(); ?>
                         <?php  deleteCat();?>
                         </tbody>
                       </table>
                     </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php include "include/adminfooter.php "; ?>
