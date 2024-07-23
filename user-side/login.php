<?php include "config.php";

if(isset($_POST['submit'])) {
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = "select * from user where email = '$email' and password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_data'] = $row;
        redirect('index');
    } else {
        $_SESSION['error'] = "Error! Invalid Email and Password";
    }
}                              
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Mobile Store Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
   

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Login</h1>
            
          </div>
        </div>
      </div>
    </div>

   

    <div class="callback-form contact-us" style="border-style:double;border-color:blue;width:380px;margin-left:420px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-form" align="center">
            <p><h3>Don't have an account yet? <a href="signup.php">Sign up here</a></h3>
              <form action="#" method="POST" id="contact">
              
                 <div class="row">
                      
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group" style="width:280px;margin-top:90px">
                                <input type="text" class="form-control" name="email" placeholder="Email:">
                           </div>
                      </div>
                 </div>
                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           <div class="form-group" style="width:280px"> 
                          <input type="password" class="form-control border-end-0" name="password" placeholder="Password:">
                           </div>
                      </div>
                      
                 </div>

                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                           
                      </div>
                     
                 </div>

                 <div class="row">
                      <div class="col-sm-6 col-xs-12">
                          
                      </div>

                      <div class="col-sm-6 col-xs-12">
                           
                      </div>
                 </div>

                 <div class="row">
                   <div class="col-lg-12">
                   <input type="submit" class="btn btn-primary" name="submit" />
                  </div>
                 </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Starts Here -->
   
    
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>