<?php include '../layouts/header.php';include '../classes/Article.php';include '../classes/User.php'; 
    // User Object
      $user = new User();
      $sumUsers = $user->sumUsers();
    // End
    // Articles Object
      $article = new Article();
      $articles = $article->show();
      $categoryResult = $article->showCategories();
      // Add Article
      if(isset($_POST['add'])){
        for ($i=0; $i < count($_POST['title']); $i++) { 
          $article->add($_POST["title"][$i] , $_POST["category"][$i] , $_POST['description'][$i]);
        }
        header('location:home.php');
      }
      // Delete Article
      if(isset($_POST['deleteArticle'])){
        $result = $article->destroy($_POST['deleteArticle']);
        header('location:home.php');
      }
    // End
    // Log Out
      if(isset($_POST['logout'])){ session_destroy();header('location:login.php'); }
    // End
      if(!isset($_SESSION['user_info'])){
        header('location:login.php');
      }
?>
<section class="container">
    <h1 class="container py-3 ">Home Page</h1>
    <?php 
        include '../components/home/statistic_cards.php';
        include '../components/home/modal.php';
        include '../components/home/table.php';
    ?>
</section>
<?php include '../layouts/footer.php'; ?>