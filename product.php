<?php
$con = mysqli_connect("localhost", "laptopshop", "7090", "laptopshop");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$pid = $_GET['id'];
$query = "SELECT * FROM add_product WHERE id=" . $pid;
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Category</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/product.css">
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
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse align-items-center" id="navbarCollapse">
                        <div class="navbar-nav ms-auto d-flex align-items-center">
                            <div class="d-flex align-items-center" id="search">
                                <div class="input-group">
                                    <input class="form-control border" type="search" placeholder="Search here....."
                                        id="search_box">
                                </div>
                                <a class="btn btn-link btn-lg " " href=" #search_box" role="button" id="n1"
                                    data-mdb-ripple-color="dark"><i id="search_i" class="nav_1 fas fa-search"></i></a>
                                <div class="nav-items nav-link" ">
                                    <a class=" btn btn-link btn-lg m-1" href="#!" role="button" id="n1"
                                    data-mdb-ripple-color="dark"><i class="nav_1 fas fa-shopping-cart"></i></a>
                                </div>
                                <div class="nav-items nav-link" ">
                                    <a class=" btn btn-link btn-lg m-1" href="logIn.html" role="button" id="n1"
                                    data-mdb-ripple-color="dark"><i class="nav_1 fas fa-user"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="head_2 text-start w-25">
        <h2>Product</h2>
        <select name="laptop" class="form-select" aria-label="Select Category">
            <option selected="selected"> Select Category </option>
            <option value="Professional">Professional</option>
            <option value="Gaming">Gaming</option>
            <option value="Creator">Creator</option>
        </select>
    </div>
    <section id="product" class="">
        <div class="row mb-4">
            <div class="col-md-4">
            <img src="upload/<?php echo $row['IMAGES']; ?>" alt="" srcset="" width="400px" />
            </div>
            <div class="desc col-md-8">
                <div class="row">
                    <div class=" head_1 col-sm-8">
                        <div class="row">
                            <div class="col-md ">
                                <h5><?php echo $row['pname']; ?></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md ">
                                <h4>₹ <?php echo $row['price']; ?>
                                    (Incl. all Taxes)
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="bttn col-sm">
                        <div class="bttn_x row">
                            <button class=" btn btn-sm btn-block col-md-5 p-2">Buy</button><br>
                        </div>
                        <div class="bttn_x row">
                            <button class="btn btn-sm btn-block col-md-5 p-2">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div ps-5>
            <h2>Specification</h2>
            <table class="table table-borderless w-50">
                <tr>
                <?php echo $row['pdesc'];} ?>
                </tr>  
            </table>
        </div>
    </section>
    <footer class="p-2">
        <h3 class="heading" id="title"> <span>follow us</span></h3>
            <div class="container-fluid" id="footer">
                <section class="row">
                    <a class="btn btn-link btn-lg m-1 col-md" href="#!" role="button" data-mdb-ripple-color="dark"><i
                            class="fa-brands fa-facebook fticon" style="color: hsl(221, 44%, 41%);"></i></a>

                    <a class="btn btn-link btn-lg m-1 col-md" href="#!" role="button" data-mdb-ripple-color="dark"><i
                            id="insta" class="fab fa-instagram fticon"></i></a>

                    <a class="btn btn-link btn-lg m-1 col-md" href="#!" role="button" data-mdb-ripple-color="dark"><i
                            class="fa-brands fa-twitter fticon" style="color: #1da1f2;"></i></a>

                    <a class="btn btn-link btn-lg m-1 col-md" href="#!" role="button" data-mdb-ripple-color="dark"><i
                            class="fa-brands fa-youtube fticon" style="color: #ff0000;"></i></a>

                    <a class="btn btn-link btn-lg m-1 col-md" href="#!" role="button" data-mdb-ripple-color="dark"><i
                            class="fa-brands fa-whatsapp fticon" style="color: rgb(7, 95, 85);"></i></a>

                    <a class="btn btn-link btn-lg m-1 col-md" href="#!" role="button" data-mdb-ripple-color="dark"><i
                            class="fa-brands fa-linkedin fticon" style="color: #0072b1;"></i></a>
                </section>
            </div>
            <hr>
            <div class="text-center ">
                © Copyright laptop shop
            </div>
    </footer>
</body>

</html>