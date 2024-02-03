<?php
include("./includes/connectDB.php");

function getProducts()
{
    global $conn;

    if (!isset($_GET["catg_id"]) and !isset($_GET["brand_id"])) {
        $select_query = "select * from `products`";
    } else if (isset($_GET["catg_id"])) {
        $catgId = $_GET["catg_id"];
        $select_query = "select * from `products` where catg_id=$catgId";
    } else if (isset($_GET["brand_id"])) {
        $brandId = $_GET["brand_id"];
        $select_query = "select * from `products` where brand_id=$brandId";
    }

    $select_result = mysqli_query($conn, $select_query);
    $result_size = mysqli_num_rows($select_result);
    if ($result_size > 0) {
        while ($row = mysqli_fetch_array($select_result)) {
            $productName = $row['product_name'];
            $productDesc = $row['description'];
            $productImg1 = $row['img1'];
            echo "<div class=\"col-md-4 mb-5\">
        <div class=\"card\">
        <img
        src=\"./admin/product_images/$productImg1\" alt=\"$productName\">
        <div class=\"card-body\">
        <h5 class=\"card-title\">$productName</h5>
        <p class=\"card-text\">$productDesc</p>
        <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
        <a href=\"#\" class=\"btn btn-secondary\">View More</a>
        </div>
        </div>
        </div>";
        }
    } else {
        echo "<h4 style=\"color:red;text-align:center;margin-top:10px\">No Stocks found!!</h4>";
    }
}

function getBrands()
{
    global $conn;
    $select_brand_query = "select * from `brands`";
    $result_select_brand = mysqli_query($conn, $select_brand_query);

    // iterating through fetched brands
    while ($row_select_brand = mysqli_fetch_assoc($result_select_brand)) {
        $select_brand_id = $row_select_brand["brand_id"];
        $select_brand_name = $row_select_brand["brand_name"];
        echo "<li class=\"nav-item\"><a href=\"index.php?brand_id=$select_brand_id\" class=\"nav-link text-dark\">$select_brand_name</a></li>";
    }
}

function getCatgs()
{
    global $conn;
    $select_catg_query = "select * from `categories`";
    $result_select_catg = mysqli_query($conn, $select_catg_query);

    // iterating through all the fetched categories
    while ($row_select_catg = mysqli_fetch_assoc($result_select_catg)) {
        $select_catg_id = $row_select_catg["catg_id"];
        $select_catg_name = $row_select_catg["catg_name"];
        echo "<li class=\"nav-item\"><a href=\"index.php?catg_id=$select_catg_id\" class=\"nav-link text-dark\">$select_catg_name</a></li>";
    }
}

?>