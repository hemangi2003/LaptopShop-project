<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignIn</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
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
  <section>
    <div class="login">
      <div class="container border justify-content-center w-50 p-5 my-5" id="login">
        <h2 class="text">sign in</h2>
        <form action="connection.php" class="form" id="form" method="post">
          <div class="row mb-3 form_control">
            <label for="inputEmail" class="col-sm col-form-label">Email:</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" placeholder="enter email" id="inputEmail" name="semail">
              <small class="fa fa-exclamation-circle"></small>
            </div>
          </div>
          <div class="row mb-3 form_control">
            <label for="inputPassword" class="col-sm col-form-label">Password:</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" placeholder="enter password" id="inputPassword" name="spwd">
              <small class="fa fa-exclamation-circle"></small>
            </div>
          </div>

          <div class="row my-4">
            <div class="col-sm-10 offset-sm-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                  remember me
                </label>
              </div>
            </div>
          </div>

          <center>
            <input type="submit" class="btn btn-block my-4" id="signin" value="Sign in" name="signin"> <br>
            Don't have an account ? <a href="registration.php" class="ca">Create an Account</a>
          </center>

        </form>
      </div>
    </div>
  </section>
  <script src="js/si.js"></script>
</body>

</html>