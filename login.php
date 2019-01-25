
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link rel="icon" href="../../../../favicon.ico">-->

    <title>To-Do-List</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/styles/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <!--font-->
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/styles/style.css" rel="stylesheet">
  </head>
  <body id="grad">
    <?php
      if (isset($_GET['error'])) {
        ?>
          <h3>Invalid Credentials</h3>
        <?php
      }
    ?>
<form action="index.php" method="post">
    <div class="container"> 
      <div class="row justify-content-center">
          <div class="card login-wrapper">
            <div class="card-title">
              <div class="row justify-content-center">
              <h4>Login</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Username</label>
                  <input type="text" class="form-control login-form" name="email" placeholder="Enter your Email" required>
                </div>
                <div class="form-group">
                  <label for="name">Password</label>
                  <input type="password" class="form-control login-form" name="password" placeholder="Enter your password" required>
                  <input type="submit" name="submit" class="btn" value="Submit" id="submit-button">
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</form>
  <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="assets/js/vendors/bootstrap/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/vendors/bootstrap/holder.min.js"></script>
  </body>
</html>