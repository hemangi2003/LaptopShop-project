<!DOCTYPE html>
<html lang="en">

<head>
    <title>HomePage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />

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
        <hr style="margin: 0%;">
        <nav class="navbar navbar-expand-sm d-flex justify-content-center" id="nav_bar">
            <ul class="navbar-nav h5">
                <li class="nav-item">
                    <a class="nav-link" href="product.html" id="n2">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.html" id="n2">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.html" id="n2">Contact Us</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>

        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner p-5 ">
            <div class="carousel-item active">
                <img src="image/i1.jpg" alt="" class="d-block">
            </div>
            <div class="carousel-item">
                <img src="image/i2.jpg" alt="" class="d-block">
            </div>
            <div class="carousel-item">
                <img src="image/i3.jpg" alt="" class="d-block">
            </div>
            <div class="carousel-item">
                <img src="image/i4.jpg" alt="" class="d-block">
            </div>
        </div>
        <button class="carousel-control-prev sbtn" type="button" data-bs-target="#demo" data-bs-slide="prev"
            style="width: 6%;">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next sbtn" type="button" data-bs-target="#demo" data-bs-slide="next"
            style="width: 6%;">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <br>
    <section class="section">
        <h3 class="heading" id="title"> <span>we provide</span></h3>
        <div class="icons-container d-flex justify-content-around">

            <div class="icons">
                <i class="fas fa-truck"></i>
                <div class="content ">
                    <h4><b>free shipping</b></h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="icons">
                <i class="fas fa-lock"></i>
                <div class="content ">
                    <h4><b>secure payment</b></h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="icons">
                <i class="fas fa-badge-percent"></i>
                <div class="content ">
                    <h4><b>exclusive offer</b></h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="icons">
                <i class="fas fa-tools"></i>
                <div class="content ">
                    <h4><b>free installation</b></h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>

        </div>
    </section>
    <br>
    <section>
        <h3 class="heading" id="title"> <span>best selling Laptops</span></h3>
        <div id="carouselExampleControls" class="carousel carousel-dark slide p-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-wrapper container-sm d-flex  justify-content-around">
                        <div class="card  " style="width: 24rem;">
                            <img src="image/ii1 lenovo ideapad 1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lenovo IdeaPad 1 AMD Ryzen 5 (15.6 inch, 8GB, 512GB, Windows
                                    11
                                    Home, AMD Radeon
                                    Vega 8, Full HD TN LCD Display, Cloud Grey, 82R1004AIN)
                                </h5>
                            </div>
                        </div>
                        <div class="card" style="width: 24rem;">
                            <img src="image/ii2 samsung galaxy book3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Samsung Galaxy Book3 Intel Core i5 13th Gen (15.6 inch, 16GB,
                                    512GB, Windows 11
                                    Home, Intel Iris Xe, Full HD LED Display, Silver, NP750XFG-KB2IN)</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 24rem;">
                            <img src="image/ii3 acer aspire 3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Acer Aspire 3 A315-24P Ryzen 3 (15.6 inch, 8GB, 512GB,
                                    Windows 11
                                    Home, MS Office
                                    2021, AMD Radeon Graphics, Full HD LED-Backlit TFT LCD Display, Silver,
                                    NX.KDESI.003)</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card-wrapper container-sm d-flex   justify-content-around">
                        <div class="card  " style="width: 24rem;">
                            <img src="image/ii4 lenovo ideapad.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lenovo IdeaPad Gaming 3 15IHU6 Intel Core i5 11th Gen (15.6
                                    inch,
                                    8GB, 512GB,
                                    Windows 11 Home, MS Office 2021, NVIDIA GeForce GTX 1650, Full HD IPS Display,
                                    Shadow Black, 82K101GRIN)
                                </h5>
                            </div>
                        </div>
                        <div class="card" style="width: 24rem;">
                            <img src="image/ii5 asus tuf.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">ASUS TUF A17 FA706ICB-HX061W AMD Ryzen 7 (17.3 inch, 8GB,
                                    512GB,
                                    Windows 11 Home,
                                    NVIDIA GeForce RTX 3050, IPS Display, Graphite Black, 90NR0675-M005A0)
                                </h5>
                            </div>
                        </div>
                        <div class="card " style="width: 24rem;">
                            <img src="image/ii6 samsung galaxy book3 360.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Samsung Galaxy Book3 360 Intel Evo Core i7 13th Gen (13.3
                                    inch,
                                    16GB, 512GB,
                                    Windows 11 Home, MS Office 2021, Intel Iris Xe, FHD Super AMOLED Display,
                                    Graphite,
                                    NP730QFG-KA1IN)</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card-wrapper container-sm d-flex  justify-content-around">
                        <div class="card" style="width: 24rem;">
                            <img src="image/ii7 dell inspiron.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dell Inspiron 3520 Intel Core i3 12th Gen (15.6 inch, 8GB,
                                    512GB,
                                    Windows 11, MS
                                    Office 2021, Intel UMA, Full HD Display, Carbon Black, D560896WIN9B)</h5>
                            </div>
                        </div>

                        <div class="card" style="width: 24rem;">
                            <img src="image/ii8redmibook.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Redmi Book 15 Pro Intel Core i5 11th Gen (15.6 inch, 8GB,
                                    512GB,
                                    Windows 10, MS
                                    Office 2019, Intel Iris Xe Graphics, FHD IPS Display, Charcoal Grey, JYU4431IN)
                                </h5>
                            </div>
                        </div>
                        <div class="card" style="width: 24rem;">
                            <img src="image/iii9 xiomi .png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lenovo IdeaPad Slim 3 Intel Core i3 11th Gen (15.6 inch, 8GB,
                                    256GB, Windows 11, MS
                                    Office 2021, Intel UHD Graphics, FHD Display, Arctic Grey, 82H801L3IN)</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev"="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev" style="width: 6%;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next" style="width: 6%;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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