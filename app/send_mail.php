<!-- send email page -->
<!doctype html>
<html lang="en">
  <head>
    <?php include 'include/header.php';?>
    <!-- bootstrap multiselect stylesheet -->
    <link rel="stylesheet" href="css/bootstrap-multiselect.css">
    <!-- send_mail.css -->
    <link rel="stylesheet" href="css/email.css">
    <title>Send Mail | Apex</title>
  </head>
  <body>

  <?php include 'include/nav.php' ?>

    <div class="main-wrapper">
      <section id="email">
        <div class="page-header">
          <h1 class="font-weight-bold text-uppercase text-light header-underline">Send Email</h1>
          <img src="images/dots.png" alt="dots" class="img-fluid">
        </div>
        <div class="container-fluid">
          <div class="row flex-column align-items-center">
            <div class="col-sm-10">
              <div class="card mt-5 mb-5">
                <div class="card-body">
                  <form id="send-mail" class="" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="recipient">To</label>
                        <select id="recipient" name="recipient" class="form-control" multiple="multiple">
                            <option value="all_members">All Members</option>
                            <option value="all_member_type">All Member Type</option>
                            <option value="all_member_category">All Property Type</option>
                            <option value="all_property_category">All Property Category</option>
                            <option value="asf_cleared">ASF Cheque Cleared</option>
                            <option value="asf_not_cleared">ASF Cheque Not Cleared</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter your subject">
                    </div>

                    <div class="form-group">
                      <label for="message-body">Message</label>
                      <textarea name="message-body" id="message-body" cols="30" rows="10" class="form-control" placeholder="Enter your message"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="attachment">Attachment</label>
                      <input type="file" name="attachment" id="attachment" class="form-control" multiple>
                    </div>

                    <div class="form-group mt-4 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Send <i class="fas fa-paper-plane"></i></button>
                    </div>

                  </form>

                  <div class="alert alert-success" role="alert">
                    This is a success alert—check it out!
                  </div>
                  <div class="alert alert-danger" role="alert">
                    This is a danger alert—check it out!
                  </div>

                </div>
              </div>
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