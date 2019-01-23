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
  <body>
    <body class="register">
    <div class="container main">
      <div class="main-center">
      <div class="row justify-content-center">
        <h5>Register ToDo</h5>
      </div>
      <form action="server.php" method="post">
          <div class="row justify-content-center">
            <div class="form-group">
                <label for="name">Name</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input class="form-control" type="text" name="name" placeholder="Enter name" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="name">Email</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
                  <?php if (isset($email_error)) ?>
                  <span><?php echo $email_error; ?></span>
                </div>
              </div>
            </div>

            <div class="form-group">
                <label for="name">Password</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                </div>
              </div>
            </div>
          </div>
            <div class="form-group ">
              <input type="submit" name="submit" class="btn" value="Register" id="register-button">
            </div>
          </form>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script src="assets/js/vendors/bootstrap/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/vendors/bootstrap/holder.min.js"></script>
  </body>
</html>