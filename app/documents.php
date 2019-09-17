<!-- association documents page -->
<!doctype html>
<html lang="en">
  <head>
    <?php include 'include/header.php';?>
    <link rel="stylesheet" href="css/documents.css">
    <title>Association Documents | Apex</title>
  </head>
  <body>

  <?php include 'include/nav.php' ?>

    <div class="main-wrapper">
      <section id="documents">
        <div class="page-header">
          <h1 class="font-weight-bold text-uppercase text-light header-underline">Association Documents</h1>
          <img src="images/dots.png" alt="dots" class="img-fluid">
        </div>
        <div class="container-fluid">
          <div class="row mt-5">

            <div class="col-md-12 col-lg-4 mt-3">
              <div class="card">
                <a href="pdfjs/web/viewer.html?file=Registration-Document.pdf" class="card-body d-flex flex-row align-items-center">
                    <i class="fas fa-file-pdf"></i>
                    <span>Registration Certificate</span>
                    <i class="fas fa-chevron-right ml-auto"></i>
                </a>
              </div><!-- card ends -->
            </div><!-- col ends-->

            <div class="col-md-12 col-lg-4 mt-3">
              <div class="card">
                <a href="pdfjs/web/viewer.html?file=Schedule-B-MOA.pdf" class="card-body d-flex flex-row align-items-center">
                    <i class="fas fa-file-pdf"></i>
                    <span>Schedule-B-MOA</span>
                    <i class="fas fa-chevron-right ml-auto"></i>
                </a>
              </div><!-- card ends -->
            </div><!-- col ends-->

            <div class="col-md-12 col-lg-4 mt-3">
              <div class="card">
                <a href="pdfjs/web/viewer.html?file=Schedule-C-Rules-and-Regulations.pdf" class="card-body d-flex flex-row align-items-center">
                    <i class="fas fa-file-pdf"></i>
                    <span>Schedule-C-Rules &amp; Registration</span>
                    <i class="fas fa-chevron-right ml-auto"></i>
                </a>
              </div><!-- card ends -->
            </div><!-- col ends-->

          </div> <!-- row ends -->
        </div><!-- container ends -->
      </section>
    </div><!-- main wrapper ends -->
    
    <!-- preloader included here -->
    <?php include 'include/preloader.php';  ?>    

    <!-- footer included here -->
    <?php include 'include/footer.php';  ?>    

    <!-- popper.js -->
    <script src="js/popper.min.js"></script>
   
    <!-- all supporting js files -->
    <?php include 'include/script_files.php'; ?>

    <!-- bootstrap multiselect script -->
    <script src="js/bootstrap-multiselect.js"></script>
    <!-- page custom js -->
    <script type="text/javascript">
      $(document).ready(function() {

        // initializing multiselect dropdown
          $('#recipient').multiselect({
            numberDisplayed: 2 //show max 2 names on selecting
          });
      });
    </script>
  
    
  </body>
</html>