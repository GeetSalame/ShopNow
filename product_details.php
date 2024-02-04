<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
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

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" id="logoname"><span>Shop</span><span>Now</span></a>
            <!-- below is the menu button for smaller screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i
                                class="fa-solid fa-cart-shopping"></i><sup>15</sup></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Total Price : <span>100</span></a></li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" name="searchedTerm" placeholder="Search product"
                        aria-label="Search" value="<?php if (isset($_GET['searchedTerm']))
                            echo $_GET["searchedTerm"] ?>">
                        <button class="btn btn-outline-success" type="submit" onclick="searchQuery()">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div style="display:flex; justify-content:center; align-items:center; flex-direction:column">
        <?php include("./functions/functions.php");
                        getProduct(); ?>
        <a href="index.php" class="btn btn-primary">Go back to product</a>
    </div>
    </div>
    </div>
</body>

</html>