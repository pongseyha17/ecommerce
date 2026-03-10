<?php 
include('../midleware/adminMidleware.php');
include('includes/header.php');
include('../config/dbcon.php');

// counts
$category = mysqli_query($con,"SELECT * FROM categories");
$category_count = mysqli_num_rows($category);

$product = mysqli_query($con,"SELECT * FROM products");
$product_count = mysqli_num_rows($product);

$orders = mysqli_query($con,"SELECT * FROM orders");
$order_count = mysqli_num_rows($orders);

$users = mysqli_query($con,"SELECT * FROM users");
$user_count = mysqli_num_rows($users);
?>

<div class="container-fluid py-4">

<div class="row">

<!-- Categories -->
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">

<div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">category</i>
</div>

<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Total Categories</p>
<h4 class="mb-0"><?= $category_count ?></h4>
</div>

</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0">Manage product categories</p>
</div>
</div>
</div>

<!-- Products -->
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">

<div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">inventory</i>
</div>

<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Total Products</p>
<h4 class="mb-0"><?= $product_count ?></h4>
</div>

</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0">Products in store</p>
</div>
</div>
</div>

<!-- Orders -->
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">

<div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">shopping_cart</i>
</div>

<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Total Orders</p>
<h4 class="mb-0"><?= $order_count ?></h4>
</div>

</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0">Customer orders</p>
</div>
</div>
</div>

<!-- Users -->
<div class="col-xl-3 col-sm-6">
<div class="card">
<div class="card-header p-3 pt-2">

<div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">group</i>
</div>

<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Total Users</p>
<h4 class="mb-0"><?= $user_count ?></h4>
</div>

</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0">Registered users</p>
</div>
</div>
</div>

</div>

</div>

<?php include('includes/footer.php'); ?>