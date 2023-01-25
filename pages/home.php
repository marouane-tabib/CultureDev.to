<?php include '../layouts/header.php'; ?>
<?php 
    include '../classes/Article.php';
    include '../classes/User.php';
    // User Object
      $user = new User();
      $sumUsers = $user->sumUsers();
    // End
    $article = new Article();
    $articles = $article->show();
    $categoryResult = $article->showCategories();
    if(isset($_POST['add'])){
      for ($i=0; $i < count($_POST['title']); $i++) { 
        $article->add($_POST["title"][$i] , $_POST["category"][$i] , $_POST['description'][$i]);
      }
      header('location:home.php');
    }
    if(isset($_POST['deleteArticle'])){
      $result = $article->destroy($_POST['deleteArticle']);
      header('location:home.php');
     }
    if(!isset($_SESSION['user_info'])){
      header('location:login.php');
    }
?>
<section class="container">
    <h1>Index Page</h1>
    <div class="row mx-auto">
      <div class="col-11 col-md main-style px-3 py-2 mx-1">
        Articles
        <h1 class="float-end"><?= $articles->num_rows ?></h1>
      </div>
      <div class="col-11 col-md main-style px-3 py-2 mx-1">
        Categories
        <h1 class="float-end"><?= $categoryResult->num_rows ?></h1>
      </div>
      <div class="col-11 col-md main-style px-3 py-2 mx-1">
        Users
        <h1 class="float-end"><?= $sumUsers['sum_users'] ?></h1>
      </div>
    </div>
    <?php 
        include '../components/home/modal.php';
        include '../components/home/table.php';
    ?>
</section>
<?php include '../layouts/footer.php'; ?>