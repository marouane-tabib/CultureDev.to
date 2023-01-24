<?php include '../layouts/header.php'; ?>
<?php 
    include '../classes/Category.php';
    $category = new Category();
    $result = $category->show();
    if(isset($_POST['name'])){
        $category->add($_POST['name']);
        header('location:categories.php');
    }
    if(isset($_POST['deleteCategory'])){
        $result = $category->destroy($_POST['deleteCategory']);
        header('location:categories.php');
    }
?>
<section class="container">
    <h1>Category Index</h1>
    <form action="categories.php" method="post">
        <div class="mb-3 col-11 col-md-3 float-end">
            <input type="text" class="form-control" id="name" name="name" placeholder="Add Articl Name ... ">
        </div>
    </form>
    <?php include '../components/categories/table.php' ?>
</section>
<?php include '../layouts/footer.php'; ?>