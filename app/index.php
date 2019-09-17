<!doctype html>
<html lang="en">
  <head>
    <?php include 'include/header.php';?>
    <link rel="stylesheet" href="css/landing_page.css">
    <title>Apex Association</title>
  </head>
  <body>
    <div class="main-wrapper">
      <section id="landing-page">
        <div class="container-fluid d-flex flex-row">
          <div class="row align-items-middle">
            <div class="col-sm-6">
            <div class="content px-5 py-5">
                <div class="mb-4">
                     <p class="mb-0">The</p><span class="h1 text-uppercase">Apex Association</span> <p class="mb-0">of</p> 
                     <span class="h1 text-uppercase">Lavasa Property Owners</span>
                </div>
                
                <div class="stripes">
                    <img src="images/stripes.png" alt="">
                </div>

                <p class="lead text-muted mt-4">The primary objective of the association is to look after all Lavasians. </p>
                
                <div class="row">
                    <div class="col-sm-8">
                        <form id="login" class="form-horizontal" action="">

                            <div class="form-group">
                                <input type="text" class="form-control" name="member_id" id="member_id" placeholder="Member ID">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>

                          </form>
                      </div>
                  </div><!-- row ends -->
                  
                  </div> <!--content ends -->

               
            </div><!-- col ends-->
          </div> <!-- row ends -->
        </div><!-- container ends -->
      </section>
    </div><!-- main wrapper ends -->
    
    <!-- preloader included here -->
    <?php include 'include/preloader.php';  ?>    
   
    <!-- build:js -->
    <!-- jquery -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery -->
    <script src="js/preloader.js"></script>    
    <!-- popper.js -->
    <script src="https://unpkg.com/popper.js@1.15.0/dist/umd/popper.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- bootstrap multiselect script -->
    <script src="js/bootstrap-multiselect.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <!-- page custom js -->
    <script type="text/javascript">
      $(document).ready(function() {
          $('#recipient').multiselect({
            numberDisplayed: 2
          });
      });
    </script>
    <!--endbuild-->
    
  </body>
</html>