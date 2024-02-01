<?php
include('../includes/connectDB.php');

// posting the entered category name into DB
if (isset($_POST['insert_catg'])) {
    $catg_name1 = $_POST['catg_name'];
    $select_catg_query = "select * from `categories` where catg_name='$catg_name1'";
    $result_select = mysqli_query($conn, $select_catg_query);
    $number_of_rows = mysqli_num_rows($result_select);

    // checking if the entered category already exists in DB, posting it only if it doesnt exists
    if ($number_of_rows > 0) {
        echo "<script>alert('The category name \'$catg_name1\' already exists!')</script>";
    } else {
        $insert_query = "insert into `categories` (catg_name) values ('$catg_name1')";
        $result = mysqli_query($conn, $insert_query);
        if ($result) {
            echo "<script>alert('Category $catg_name1 has been added!')</script>";
        } else {
            echo "something went wrong";
        }
    }
}
?>


<!-- form to post new category into DB -->
<form action="" method="post" class="mb-2">
    <h2 class="text-center">Add new Category</h2>
    <div class="input-group m-3 w-90">
        <span class="input-group-text bg-primary" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="catg_name" placeholder="Add Category"
            aria-describedby="basic-addon1" autofocus>
    </div>

    <div class="input-group w-90">
        <input type="submit" class="btn-primary my-2 px-3 py-1 mx-auto" name="insert_catg" value="Insert Categories"
            aria-describedby="basic-addon1">
    </div>
</form>