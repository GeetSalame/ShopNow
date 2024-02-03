<?php
include("./includes/connectDB.php");

function getProducts()
{
    global $conn;
    $select_query = "select * from `products`";
    $select_result = mysqli_query($conn, $select_query);
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