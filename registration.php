<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RegistrationPage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" href="FA5PRO-master/css/all.css">
  <link rel="stylesheet" href="FA5PRO-master/css/duotone.css">
</head>

<body>
  <header class="header">
    <div class="p-0">
      <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid d-flex align-items-center">
          <div><a class="btn btn-sm d-flex align-items-center" href=" #!" role="button"
              data-mdb-ripple-color="dark"><img src="image/logo (1).png" alt="laptopshop"
                style="width: 60%; height: 50%;"></a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <section class="registration">
    <div class="container border justify-content-center w-50 p-5 my-5" id="signup">
      <h2 class="text">Create an Account</h2>
      <form name="registerForm" class="form" id="form" action="connection.php" method="POST">
        <div class="row my-4 form_control">
          <label for="fname" class="col-sm col-form-label">first name:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="enter first name" id="fname" name="fname">
            <div class="col-sm">
              <small class="fa fa-exclamation-circle"></small>
            </div>
          </div>
        </div>
        <div class="row my-4 form_control">
          <label for="lname" class="col-sm col-form-label">last name:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="enter last name" id="lname" name="lname">
            <small class="fa fa-exclamation-circle"></small>
          </div>
        </div>
        <div class="row my-4 form_control">
          <label for="inputEmail" class="col-sm col-form-label">Email:</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" placeholder="enter email" id="inputEmail" name="email">
            <small class="fa fa-exclamation-circle"></small>
          </div>
        </div>
        <div class="row my-4 form_control">
          <label for="inputPassword" class="col-sm col-form-label">Password:</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" placeholder="enter password" id="inputPassword" name="pwd">
            <small class="fa fa-exclamation-circle"></small>
          </div>
        </div>
        <div class="row my-4 form_control">
          <label for="inputcPassword" class="col-sm col-form-label">confirm Password:</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" placeholder="enterc confirm password" id="inputcPassword"
              name="cpassword">
            <small class="fa fa-exclamation-circle"></small>
          </div>
        </div>
        <center>
          <button type="submit" class="btn btn-block my-4 " id="signup sbtn" name="register">Sign Up</button>
        </center>
      </form>
    </div>
  </section>
  <script src="js/su.js"></script>
</body>


</html>