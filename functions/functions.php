<?php
include("./includes/connectDB.php");

function getProducts()
{
    global $conn;

    if (!isset($_GET["catg_id"]) and !isset($_GET["brand_id"]) and !isset($_GET["searchedTerm"])) {
        $select_query = "select * from `products` order by date desc";
    } else if (isset($_GET["catg_id"])) {
        $catgId = $_GET["catg_id"];
        $select_query = "select * from `products` where catg_id=$catgId order by date desc";
    } else if (isset($_GET["brand_id"])) {
        $brandId = $_GET["brand_id"];
        $select_query = "select * from `products` where brand_id=$brandId order by date desc";
    } else if (isset($_GET["searchedTerm"])) {
        $searchedTerm = $_GET["searchedTerm"];
        $select_query = "select * from `products` where product_name like '%$searchedTerm%' or description like '%$searchedTerm%' or keywords like '%$searchedTerm%' order by date desc";
    }

    $select_result = mysqli_query($conn, $select_query);
    $result_size = mysqli_num_rows($select_result);
    if ($result_size > 0) {
        while ($row = mysqli_fetch_array($select_result)) {
            $productID = $row['product_id'];
            $productName = $row['product_name'];
            $productDesc = $row['description'];
            $productImg1 = $row['img1'];
            $productPrice = $row['price'];
            echo "<div class=\"col-md-3 mb-5 card\" style=\"box-shadow:0px 0px 20px silver\">
        <img
        src=\"./admin/product_images/$productImg1\" alt=\"$productName\" style=\"height:100%; object-fit:cover\">
        <div class=\"card-body\">
        <h5 class=\"card-title\" style=\"color:var(--pri-clr)\">$productName</h5>
        <div style=\"display:flex; align-items:center; justify-content:space-between; padding:20px 10px 0; margin-top:auto\">
        <h5 class=\"card-text\">₹$productPrice</h5>
        <a href=\"product_details.php?product_id=$productID\" class=\"btn btn-primary\">View More</a>
        </div>
        </div>
        </div>";
        }
    } else {
        echo "<h4 style=\"color:red;text-align:center;margin-top:10px\">No related stocks found!!</h4>";
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

function searchQuery()
{
    global $conn;
    $searchQuery = $_POST["searchedTerm"];
    // echo $searchQuery;
}


function getProduct()
{
    global $conn;
    if (isset($_GET["product_id"])) {
        $productId = $_GET["product_id"];
        $select_query = "select * from `products` where product_id=$productId";
        $result = mysqli_query($conn, $select_query);
        $row = mysqli_fetch_assoc($result);
        $productImg1 = $row["img1"];
        $productName = $row["product_name"];
        $productDesc = $row["description"];
        $productPrice = $row["price"];
        $productBrandId = $row["brand_id"];
        $productCatgId = $row["catg_id"];

        $getBrandNameQuery = "select * from `brands` where brand_id=$productBrandId";
        $result = mysqli_query($conn, $getBrandNameQuery);
        $row = mysqli_fetch_assoc($result);
        $brandName = $row["brand_name"];
        $getCatgNameQuery = "select * from `categories` where catg_id=$productCatgId";
        $result = mysqli_query($conn, $getCatgNameQuery);
        $row = mysqli_fetch_assoc($result);
        $catgName = $row["catg_name"];

        echo "<div class=\"col-md-4 mb-5\">
        <div class=\"card\">
        <img
        src=\"./admin/product_images/$productImg1\" alt=\"$productName\" style=\"max-height:300px; width:300px; object-fit:contain; margin:auto\">
        <div class=\"card-body\">
        <h5 class=\"card-title\">$productName</h5>
        <p class=\"card-text\">$productDesc</p>
        <p class=\"card-text\">Brand : $brandName</br>Category : $catgName</p>
        <div style=\"display:flex; justify-content:space-between; padding:0 10px\">
        <h5 class=\"card-text\" style=\"color:var(--pri-clr)\">₹$productPrice</h5>
        <a href=\"product_details.php?product_id=$productId\" class=\"btn btn-primary\">Add to Cart</a>
        </div>
        </div>
        </div>
        </div>";
    }
}
?>