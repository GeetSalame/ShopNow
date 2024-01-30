<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShopNow</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- fonts awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css files -->
  <link rel="stylesheet" href="index.css">
</head>

<!-- DB -->
<?php
include("./includes/connectDB.php");
?>

<body>
  <!-- contaier-fluid class takes width 100% -->
  <div class="container-fluid p-0">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" id="logoname"><span>Shop</span><span>Now</span></a>
        <!-- below is the menu button for smaller screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Product</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>15</sup></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Total Price : <span>100</span></a></li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>


    <!-- welcome section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a href="#" class="nav-link text-light">Welcome Guest</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-light">Login</a></li>
      </ul>
    </nav>

    <!-- main container -->
    <div class="row">
      <!-- main body -->
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-4 mb-5">
            <div class="card">
              <img
                src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-vector-illustration-of-fresh-red-apple-with-single-leaf-png-image_3714100.jpg"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card">
              <img
                src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-vector-illustration-of-fresh-red-apple-with-single-leaf-png-image_3714100.jpg"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card">
              <img
                src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-vector-illustration-of-fresh-red-apple-with-single-leaf-png-image_3714100.jpg"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card">
              <img
                src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-vector-illustration-of-fresh-red-apple-with-single-leaf-png-image_3714100.jpg"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card">
              <img
                src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-vector-illustration-of-fresh-red-apple-with-single-leaf-png-image_3714100.jpg"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card">
              <img
                src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-vector-illustration-of-fresh-red-apple-with-single-leaf-png-image_3714100.jpg"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="card">
              <img
                src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-vector-illustration-of-fresh-red-apple-with-single-leaf-png-image_3714100.jpg"
                class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- right nav -->
      <div class="col-md-2 bg-light p-0">
        <!-- brands -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-primary"><a href="#" class="nav-link text-light">
              <h5>Delivery Brands</h5>
            </a></li>
          <!-- fetching all brands listed in DB -->
          <?php
          $select_brand_query = "select * from `brands`";
          $result_select_brand = mysqli_query($conn, $select_brand_query);

          // iterating through fetched brands
          while ($row_select_brand = mysqli_fetch_assoc($result_select_brand)) {
            $select_brand_id = $row_select_brand["brand_id"];
            $select_brand_name = $row_select_brand["brand_name"];
            echo "<li class=\"nav-item\"><a href=\"index.php?brand_id=$select_brand_id\" class=\"nav-link text-dark\">$select_brand_name</a></li>";
          }
          ?>
        </ul>

        <!-- categories -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-primary"><a href="#" class="nav-link text-light">
              <h5>Categories</h5>
            </a></li>
          <?php
          // fetching all the categories listed in DB
          $select_catg_query = "select * from `categories`";
          $result_select_catg = mysqli_query($conn, $select_catg_query);

          // iterating through all the fetched categories
          while ($row_select_catg = mysqli_fetch_assoc($result_select_catg)) {
            $select_catg_id = $row_select_catg["catg_id"];
            $select_catg_name = $row_select_catg["catg_name"];
            echo "<li class=\"nav-item\"><a href=\"index.php?catg_id=$select_catg_id\" class=\"nav-link text-dark\">$select_catg_name</a></li>";
          }
          ?>
        </ul>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light p-3 text-center">
      <p>All rights are reserved &copy;2024 ShopNow</p>
    </footer>
  </div>

  <!-- Bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>