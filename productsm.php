<?php
$con = mysqli_connect("localhost", "laptopshop", "7090", "laptopshop");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/productsm.css">    
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
    </header>
    <section class="justify-content-center px-5">
        <h2>Products</h2><br>
        <a class="btn btn-block my-3" href="addproduct.php">ADD PRODUCT</a> </br>
        <select name="laptop" class="form-select" aria-label="Select Category">
            <option value="selected" selected disabled> Select Category </option>
            <option value="Professional">Professional</option>
            <option value="Gaming">Gaming</option>
            <option value="Creator">Creator</option>
        </select>

        <div id="items" class="my-4">
            <table class="table">
                <thead class="border-2">
                    <tr>
                        <th scope="col" class="col">Image</th>
                        <th scope="col" class="col">Name</th>
                        <th scope="col" class="col">Category</th>
                        <th scope="col" class="col">Description</th>
                        <th scope="col" class="col">Price</th>
                        <th scope="col" class="col">Action</th>
                    </tr>
                </thead>
                <tbody id="tableBody" class="p-5">
                <?php
                    $sql = "SELECT * FROM add_product";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td class="d-flex justify-content-center col"  scope="row">
                            <img src="upload/<?php echo $row['IMAGES']; ?>" alt="" srcset="" width="200px" />
                        </td>
                        <td class="col w-25"><h6>
                            <?php echo $row['pname']; ?></h6>
                        </td>
                        <td class="col text-center">
                            <?php echo $row['catagory']; ?>
                        </td>
                        <td class="col w-25">
                            <?php echo $row['pdesc']; ?>
                        </td>
                        <td class="col text-center">₹
                            <?php echo $row['price']; ?>
                        </td>
                        <td class="action col text-center">

                        <a class="btn btn-sm btn-block" href="edit.php?id=<?php echo $row['id']; ?>">edit</a>
                        <a class="btn btn-sm btn-block" href="connection.php?id=<?php echo $row['id'];?>&delete=1">delete</a>
        
                        </td>
                    </tr>
                        <?php }
        } ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>