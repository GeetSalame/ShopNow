<?php
include("../includes/connectDB.php");

// posting the entered category name into DB
if (isset($_POST['insert_brands'])) {
    $brand_name = $_POST['brand_name'];
    $select_brand_query = "select * from `brands` where brand_name='$brand_name'";
    $brand_result = mysqli_query($conn, $select_brand_query);
    $number_of_rows = mysqli_num_rows($brand_result);

    // checking if the entered category already exists in DB, posting it only if it doesnt exists
    if ($number_of_rows > 0) {
        echo "<script>alert('Brand name \'$brand_name\' already exists');</script>";
    } else {
        $insert_query = "insert into `brands` (brand_name) values ('$brand_name')";
        $result = mysqli_query($conn, $insert_query);
        if ($result) {
            echo "<script>alert('brand name \'$brand_name\' has been added to DB!');</script>";
        } else {
            echo "<script>alert('something went wrong while adding \'$brand_name\' to DB!');</script>";
        }
    }
}

?>

<form action="" method="post" class="mb-2">
    <h2 class="text-center">Add new Brand</h2>
    <div class="input-group m-3 w-90">
        <span class="input-group-text bg-primary" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_name" placeholder="Add Brand"
            aria-describedby="basic-addon1" autofocus>
    </div>

    <div class="input-group mb-3 w-90">
        <input type="submit" class="btn-primary px-3 py-1 mx-auto" name="insert_brands" value="Insert Brands"
            aria-describedby="basic-addon1">
    </div>
</form>