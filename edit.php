<?php
$con = mysqli_connect("localhost", "laptopshop", "7090", "laptopshop");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$pid = $_GET['id'];
$query = "SELECT * FROM add_product WHERE id='".$pid."'";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/addproduct.css">
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
                <h3 class="text-center">Edit Product</h3>
                <div class="row mb-3">
                    <label for="name" class="col-sm-4 col-form-label" id="lname">Enter Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="enter name" id="name" name="pname" value="<?php echo $row['pname'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Category" class="col-sm-4 col-form-label" id="lname">Enter Category:</label>
                    <div class="col-sm-8">
                    <?php $options = $row['catagory']; ?>
                        <select class="form-select" aria-label="Select Category" name="category" value="<?php echo $row['catagory'] ?>">
                            <option value="select-any" disabled>Select any</option>
                            <option value="professional" <?php if ($options == "professional")
                                echo 'selected="selected"'; ?>>
                                Professional</option>
                            <option value="creator" <?php if ($options == "creator")
                                echo 'selected="selected"'; ?>>Creator</option>
                            <option value="gamming" <?php if ($options == "gamming")
                                echo 'selected="selected"'; ?>>Gamming</option>

                        </select>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="desc" class="col-sm-4 col-form-label" id="lname">Enter Description:</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" row mb-3s="3"  name="pdes"
                            placeholder="enter your Product Description"><?php echo $row['pdesc'] ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="prize" class="col-sm-4 col-form-label" id="lname">Enter Price:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="enter Price" id="price" name="price" value="<?php echo $row['price'] ?>" >
                    </div>
                </div>
                <div class="row mb-5">
                    <label for="img" class="col-sm-4 col-form-label" id="lname">Upload Project Image</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" name="img" value="<?php echo $row['IMAGES'] ?>"> 
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $pid; 
                        }?>" >
                <center>
                    <a href="productsm.php"  class="btn btn-block mb-4 " > CLOSE </a>
                    <button type="submit" class="btn btn-block mb-4 " name="edit">EDIT</button>
                </center>
            </form>
        </div>
    </section>
</body>

</html>