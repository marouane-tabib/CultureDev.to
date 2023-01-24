<?php include '../layouts/header.php'; ?>
<?php 
    include '../classes/Category.php';
    $category = new Category();
    $result = $category->show();
    if(isset($_POST['deleteCategory'])){
        $result = $category->destroy($_POST['deleteCategory']);
        header('location:categories.php');
    }
?>
<section class="container">
    <h1>Category Index</h1>
    <?php include '../components/categories/table.php' ?>
</section>
<?php include '../layouts/footer.php'; ?>