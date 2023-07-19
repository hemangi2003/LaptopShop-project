<?php
$con = mysqli_connect("localhost", "laptopshop", "7090", "laptopshop");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/productd.css">
    <link rel="stylesheet" href="FA5PRO-master/css/all.css">
    <link rel="stylesheet" href="FA5PRO-master/css/duotone.css">
</head>

<body>
    <header class="header">
        <div class="p-0">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid d-flex align-items-center">
                    <div><a class="d-flex align-items-center" href="homepage.html" role="button"
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
    <table class="table table-borderless px-5">
        <tr>
            <td>
                <section class="justify-content-center">
                    <div id="items" class="my-4 ">
                        <table class="table ms-5" style="float: left;">
                            <tbody id="tableBody border border-2 text-center">
                                <tr class="trc">
                                    <td class="text-center">
                                        <h4>Filter</h4>
                                    </td>
                                </tr>
                                <tr class="trc">
                                    <td class="col-sm-4"><b><i class="fas fa-arrow-square-right" style="color: #d61b3c;"></i> Brand</b>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Lenovo</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Hp</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Asus</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Dell</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Samsung</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">acer</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Apple</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="trc">
                                    <td scope="row"><b><i class="fas fa-arrow-square-right" style="color: #d61b3c;"></i>
                                            Price</b>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">₹20,000-₹30,000</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">₹30,000-₹50,000</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">₹50,000-₹60,000</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">₹60,000-₹80,000</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">₹80,000-more</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="trc">
                                    <td scope="row"><b><i class="fas fa-arrow-square-right" style="color: #d61b3c;"></i>
                                            Processor</b>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Core i5</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Core i3</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Core i7</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2"> Ryzen 7 Quad Core</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2"> Ryzen 5 Quad Core</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="trc">
                                    <td scope="row"><b><i class="fas fa-arrow-square-right" style="color: #d61b3c;"></i>
                                            Screen size</b>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Below 12 inch</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">12 inch - 12.9 inch</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">13 inch - 13.9 inch</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">14 inch - 14.9 inch</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">16 inch - 17.9 inch</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Above 18 inch</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="trc">
                                    <td scope="row"><b><i class="fas fa-arrow-square-right" style="color: #d61b3c;"></i>
                                            SSD Capacity</b>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">512 GB</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">128 GB</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="trc">
                                    <td scope="row"><b><i class="fas fa-arrow-square-right" style="color: #d61b3c;"></i>
                                            RAM</b>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">4 GB</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">16 GB</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </td>
            <td>
                <section class="justify-content-center">
                    <div id="items" class="my-4">
                        <table class="table table-borderless mx-4" style="float: right;">
                            <tbody id="tableBody">
                            <?php
                                $sql = "SELECT * FROM add_product";
                                $result = mysqli_query($con, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <th scope="row"class="d-flex justify-content-center">
                                        <img src="upload/<?php echo $row['IMAGES']; ?>" alt="" width="250px" height="230px"/>
                                    </th>
                                    <td class="w-50">
                                        <h6>
                                            <a class="info" href="product.php?id=<?php echo $row['id'] ?>">
                                                <?php echo $row['pname']; ?></a>
                                        </h6>
                                        <?php echo $row['pdesc']; ?> <br> <br>
                                        <h5> ₹<?php echo $row['price']; ?></h5>
                                        (Incl. all Taxes)
                                    </td>
                                    <td class="text-center"><button class="btn btn-sm btn-block mb-3">Buy</button><br>
                                        <button class="btn btn-sm btn-block mb-3">Add to Cart</button>
                                    </td>
                                </tr>
                                <?php }
          } ?>                           
                            </tbody>
                        </table>
                    </div>
                </section>
            </td>
        </tr>
    </table>
    <hr>
    <div class="text-center ">
        © Copyright laptop shop
    </div>
</body>

</html>
<!-- 
<tr>
    <th scope="row"class="d-flex justify-content-center"><img src="image/ii3 acer aspire 3.png" alt="laptop" width="250px" height="230px">
    </th>
    <td>
        <h6>
            Acer Aspire 3 A315-24P Ryzen 3 (15.6 inch, 8GB, 512GB, Windows 11 Home, MS
            Office 2021, AMD Radeon Graphics, Full HD LED-Backlit TFT LCD Display,
            Silver, NX.KDESI.003)
        </h6>
        <ul>
            <li>Display: 39.62 cms (15.6 inches), FHD IPS</li>
            <li> Memory: 8GB DDR4 RAM, 512GB SSD ROM</li>
            <li>Processor: AMD Ryzen 3 7320U Quad-Core</li>
            <li> OS: Windows 11 Home</li>
            <li> Graphics: AMD Radeon Graphics</li>
        </ul>
        <h4>₹47,990.00</h4>
        (Incl. all Taxes)
    </td>
    <td class="text-center"><button class="btn btn-sm btn-block mb-3">Buy</button><br>
        <button class="btn btn-sm btn-block mb-3">Add to Cart</button>
    </td>
</tr>
<tr>
    <th scope="row"class="d-flex justify-content-center"><img src="image/iii9 xiomi .png" alt="laptop" width="250px" height="230px">
    </th>
    <td>
        <h6>
            Xiaomi NoteBook Pro XMA2006-FN Intel Core i5 11th Gen (14 inch, 8GB, 512GB,
            Windows 11, MS Office 2021, Intel Iris Xe Graphics, QHD+ IPS Display, Grey,
            JYU4454IN)
        </h6>
        <ul>
            <li>Display: 35.56 cms (14 inches), QHD+ IPS</li>
            <li> Memory: 8GB DDR4 RAM, 512GB SSD ROM</li>
            <li>Processor: Intel Core i5 11th Generation</li>
            <li>OS: Windows 11 Home</li>
            <li> Graphics: Intel Iris Xe</li>
        </ul>
        <h4> ₹56,990.00</h4>
        (Incl. all Taxes)
    </td>
    <td class="text-center"><button class="btn btn-sm btn-block mb-3">Buy</button><br>
        <button class="btn btn-sm btn-block mb-3">Add to Cart</button>
    </td>
</tr> -->