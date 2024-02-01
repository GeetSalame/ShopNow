<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Insert Product</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- fonts awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css files -->
    <link rel="stylesheet" href="../index.css?v=1">
</head>

<!-- DB -->
<?php
include("../includes/connectDB.php");

$productName = $_POST["product_title"];
$productDesc = $_POST["product_description"];
$productKeywords = $_POST["product_keywords"];
$productCatg = $_POST["product_category"];
$productBrand = $_POST["product_brands"];
$productPrice = $_POST["product_price"];
$productStatus = 'true';

//accessing img name
$productImg1 = $_FILES["product_img1"]['name'];
$productImg2 = $_FILES["product_img2"]['name'];
$productImg3 = $_FILES["product_img3"]['name'];
//accesing img tmp name
$tmpImg1 = $_FILES["product_img1"]['tmp_name'];
$tmpImg2 = $_FILES["product_img2"]['tmp_name'];
$tmpImg3 = $_FILES["product_img3"]['tmp_name'];

if ($productName == '' or $productDesc == '' or $productCatg == '' or $productBrand == '' or $productPrice == '' or $productImg1 == '') {
    echo '<script>alert("Please add all the mandatory fields!!");</script>';
} else {
    // moving the uploaded images into images folder
    move_uploaded_file($tmpImg1, "./product_images/$productImg1");
    if ($productImg2 != '') {
        move_uploaded_file($tmpImg2, "./product_images/$productImg2");
    }
    if ($productImg3 != '') {
        move_uploaded_file($tmpImg3, "./product_images/$productImg3");
    }

    $insert_query = "insert into `products` (product_name, description, keywords, catg_id, brand_id, img1, img2, img3, status, price) values ('$productName', '$productDesc', '$productKeywords', $productCatg, $productBrand, '$productImg1', '$productImg2', '$productImg3', '$productStatus', $productPrice)";

    $result = mysqli_query($conn, $insert_query);
    if ($result) {
        echo "<script>alert('\'$productName\' has been added successfully!')</script>";
    } else {
        // echo "<script>alert(\"Error: " + mysqli_error($conn) +"\")</script>";
        echo "<script>alert(\"Error: Something went wrong while posting the product\")</script>";
    }
}
?>

<body class="bg-light">
    <div class="container p-3">
        <h1 class="text-center">List new Product</h1>

        <!-- enctype for accepting data other than text, like img -->
        <form action="" method="post" class="form-control my-4 py-4 px-5 my-form" enctype="multipart/form-data">

            <!-- Product title -->
            <div class="form-outline mb-4">
                <label for="product_title" class="form-label required">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Enter Product Title..." autocomplete="off" autofocus required="required">
            </div>

            <!-- Product description -->
            <div class="form-outline mb-4">
                <label for="product_description" class="form-label required">Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control"
                    placeholder="Enter Product description..." autocomplete="off" required="required">
            </div>

            <!-- Product keywords -->
            <div class="form-outline mb-4">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control"
                    placeholder="Enter Product keywords..." autocomplete="off">
            </div>

            <!-- Product Category -->
            <div class="form-outline mb-4">
                <label for="product_category" class="form-label required">Product Category</label>
                <select name="product_category" id="product_category" class="form-select" required="required">
                    <option value="">Select Category</option>
                    <!-- fetching dynamic categories data from DB -->
                    <?php
                    $select_query = "select * from `categories`";
                    $result = mysqli_query($conn, $select_query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $catgTitle = $row['catg_name'];
                        $catgId = $row['catg_id'];
                        echo "<option value=\"$catgId\">$catgTitle</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Product Brands -->
            <div class="form-outline mb-4">
                <label for="product_brands" class="form-label required">Product Brands</label>
                <select name="product_brands" id="product_brands" class="form-select" required="required">
                    <option value="">Select Brands</option>
                    <!-- fetching dynamic brands data from DB -->
                    <?php
                    $select_query = "select * from `brands`";
                    $result = mysqli_query($conn, $select_query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $brandTitle = $row["brand_name"];
                        $brandId = $row["brand_id"];
                        echo "<option value=\"$brandId\">$brandTitle</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Product Img1 -->
            <div class="form-outline mb-4">
                <label for="product_img1" class="form-label required">Image 1</label>
                <input type="file" name="product_img1" id="product_img1" class="form-control" required="required">
            </div>
            <!-- Product Img2 -->
            <div class="form-outline mb-4">
                <label for="product_img2" class="form-label">Image 2</label>
                <input type="file" name="product_img2" id="product_img2" class="form-control">
            </div>
            <!-- Product Img3 -->
            <div class="form-outline mb-4">
                <label for="product_img3" class="form-label">Image 3</label>
                <input type="file" name="product_img3" id="product_img3" class="form-control">
            </div>

            <!-- Product Price -->
            <div class="form-outline mb-4">
                <label for="product_price" class="form-label required">Price</label>
                <input type="number" name="product_price" id="product_price" class="form-control"
                    placeholder="Enter Price" autocomplete="off" required="required">
            </div>

            <!-- Submit -->
            <div class="form-outline mb-4">
                <input type="submit" id="submit-btm" class="form-control btn-primary my-5 mx-auto" value="Add Product">
            </div>
        </form>
    </div>
</body>

</html>