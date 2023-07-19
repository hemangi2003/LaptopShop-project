<?php
$con = mysqli_connect("localhost", "laptopshop", "7090", "laptopshop");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Category</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js.map"></script> -->
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.3.0-alpha2-dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="category.css">
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
        <div class="header-1 p-4 d-flex">
        <div class="dropdown mx-3">
            <button class="btn btn-block dropdown-toggle p-2" type="button" data-bs-toggle="dropdown" aria-expanded="true">
            Products
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">See Products</a></li>
                <li><a class="dropdown-item" href="#">Add Product</a></li>
                <li><a class="dropdown-item" href="#">Product Management</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-block dropdown-toggle p-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catagories
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Professional</a></li>
                <li><a class="dropdown-item" href="#">Creator</a></li>
                <li><a class="dropdown-item" href="#">Gamming</a></li>
            </ul>
        </div>
        </div>
    </header>
    <section class="px-5">
        <h2 class="py-4 text">Category</h2>
            <h2 class="py-3">
                <li>Professional</li>
            </h2>
            <div class="card-wrapper container-fluid d-flex justify-content-around">
            <?php
                $sql = "SELECT * FROM add_product WHERE catagory='professional'";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card" style="width: 18rem;">
                 <img src="upload/<?php echo $row['IMAGES']; ?>" alt="" />
                    <div class="card-body">
                        <p class="card-title">
                            <?php echo $row['pname']; ?>    
                        </p>
                        <h6>₹<?php echo $row['price']; ?></h6>
                        (Incl. all Taxes)
                    </div>
                </div>
           
                <?php }
                } ?>
             </div>
            <div class="text-end p-2">
                <a class="btn btn-lg btn-block align-left" href="" role="button" id="n1"
                    data-mdb-ripple-color="dark">View More</a>
            </div>

            <h2 class="py-3">
                <li>Creators</li>
            </h2>
            <div class="card-wrapper container-fluid d-flex justify-content-around">
            <?php
                $sql = "SELECT * FROM add_product WHERE catagory='creator'";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card" style="width: 18rem;">
                 <img src="upload/<?php echo $row['IMAGES']; ?>" alt="" />
                    <div class="card-body">
                        <p class="card-title">
                            <?php echo $row['pname']; ?>    
                        </p>
                        <h6>₹<?php echo $row['price']; ?></h6>
                        (Incl. all Taxes)
                    </div>
                </div>
            
                <?php }
                } ?>
                </div>
            <div class="text-end p-2">
                <a class="btn btn-lg btn-block align-left" href="" role="button" id="n1"
                    data-mdb-ripple-color="dark">View
                    More</a>
            </div>

            <h2 class="py-3">
                <li>Gaming</li>
            </h2>
            <div class="card-wrapper container-fluid d-flex justify-content-around">
            <?php
                $sql = "SELECT * FROM add_product WHERE catagory='gaming'";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="card" style="width: 18rem;">
                            <img src="upload/<?php echo $row['IMAGES']; ?>" alt="" />
                                <div class="card-body">
                                    <p class="card-title">
                                        <?php echo $row['pname']; ?>    
                                    </p>
                                    <h6>₹<?php echo $row['price']; ?></h6>
                                    (Incl. all Taxes)
                                </div>
                        </div>
                    <?php }
                    } ?>
                </div>

            <div class="text-end p-2">
                <a class="btn btn-lg btn-block align-left" href="" role="button" id="n1"
                    data-mdb-ripple-color="dark">View
                    More</a>
            </div>
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