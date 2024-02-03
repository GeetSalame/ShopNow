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
  <link rel="stylesheet" href="index.css?v=1">
</head>

<!-- DB -->
<?php
include("./includes/connectDB.php");
include("./functions/functions.php");
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
            <input class="form-control me-2" type="search" name="searchedTerm" placeholder="Search product"
              aria-label="Search" value="<?php if (isset($_GET['searchedTerm'])) echo $_GET["searchedTerm"] ?>">
            <button class="btn btn-outline-success" type="submit" onclick="searchQuery()">Search</button>
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
          <?php
          getProducts();
          ?>
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
          getBrands();
          ?>
        </ul>

        <!-- categories -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-primary"><a href="#" class="nav-link text-light">
              <h5>Categories</h5>
            </a></li>
          <!-- fetching all the categories listed in DB -->
          <?php
          getCatgs();
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