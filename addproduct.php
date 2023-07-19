
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">



    <!-- <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js.map"></script> -->
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.3.0-alpha2-dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="addproduct.css">
    <link rel="stylesheet" href="FA5PRO-master/css/all.css">
    <link rel="stylesheet" href="FA5PRO-master/css/duotone.css">

</head>

<body>
    <header class="header">
        <div class="p-0">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid d-flex align-items-center">
                    <div><a class="d-flex align-items-center" href=" #!" role="button" data-mdb-ripple-color="dark"><img
                                src="image/logo (1).png" alt="laptopshop" style="width: 60%; height: 50%;"></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section>
        <div class="container border justify-content-center w-50 p-5 my-5" id="addproduct">
            <form action="connection.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="name" class="col-sm-4 col-form-label" id="lname">Enter Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="enter name" id="name" name="pname">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Category" class="col-sm-4 col-form-label" id="lname">Enter Category:</label>
                    <div class="col-sm-8">
                        <select class="form-select" aria-label="Select Category" name="category">
                            <option selected="selected"> Select Category </option>
                            <option value="Professional">Professional</option>
                            <option value="Gaming">Gaming</option>
                            <option value="Creator">Creator</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="desc" class="col-sm-4 col-form-label" id="lname">Enter Description:</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" row mb-3s="3" name="pdes"
                            placeholder="enter your Product Description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="prize" class="col-sm-4 col-form-label" id="lname">Enter Price:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="enter Price" id="price" name="price">
                    </div>
                </div>
                <div class="row mb-5">
                    <label for="img" class="col-sm-4 col-form-label" id="lname">Upload Project Image</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" name="img1">
                    </div>

                </div>
                <center>
                    <button type="submit" class="btn btn-block mb-4 " name="addproduct">ADD PRODUCT</button>
                </center>
            </form>
        </div>
    </section>
</body>

</html>