<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css files -->
    <link rel="stylesheet" href="../index.css?v=1">
    <style>
        #adminimg {
            height: 100px;
            object-fit: contain;
        }
    </style>

    <!-- fonts awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <h3 class="text-light">Admin Panel</h3>
            </div>
        </nav>

        <div class="bg-light">
            <h4 class="text-center">Operations</h4>
        </div>
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-5">
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/6261/6261554.png" alt="admin"
                            id="adminimg"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center p-5">
                    <button class="m-1"><a href="" class="nav-link text-light bg-primary">View Products</a></button>
                    <button class="m-1"><a href="insert_product.php" class="nav-link text-light bg-primary">Insert Products</a></button>
                    <button class="m-1"><a href="" class="nav-link text-light bg-primary">View Categories</a></button>
                    <button class="m-1"><a href="index.php?insert_catg" class="nav-link text-light bg-primary">Insert Categories</a></button>
                    <button class="m-1"><a href="" class="nav-link text-light bg-primary">View Brands</a></button>
                    <button class="m-1"><a href="index.php?insert_brands" class="nav-link text-light bg-primary">Insert Brands</a></button>
                    <button class="m-1"><a href="" class="nav-link text-light bg-primary">View All Orders</a></button>
                    <button class="m-1"><a href="" class="nav-link text-light bg-primary">View All Payments</a></button>
                    <button class="m-1"><a href="" class="nav-link text-light bg-primary">List All Users</a></button>
                    <button class="m-1"><a href="" class="nav-link text-light bg-primary">Log Out</a></button>
                </div>
            </div>
        </div>

        <!-- inserting respective admin action tool pages onClick of buttons  using get variables -->
        <div class="container my-5">
            <?php
            if(isset($_GET['insert_catg'])){
                include('insert_catg.php');
            }
            else if(isset($_GET['insert_brands'])){
                include('insert_brands.php');
            }
            ?>
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