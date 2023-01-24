<?php include '../layouts/header.php'; ?>
<?php 
    include '../classes/Category.php';
    $category = new Category();
    $result = $category->show();
?>
<section class="container">
    <h1>Category Index</h1>
    <?php include '../components/categories/table.php' ?>
</section>
<?php include '../layouts/footer.php'; ?>