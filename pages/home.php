<?php include '../layouts/header.php'; ?>
<?php 
    include '../classes/Article.php';
    // session_start();
    $article = new Article();
    $articles = $article->show();
    if(isset($_POST['btn'])){
      for ($i=0; $i < count($_POST['title']); $i++) { 
        $article->add($_POST["title"][$i] , $_POST["category"][$i] , $_POST['description'][$i]);
      }
      die(var_dump($_POST));
    }
    if(!isset($_SESSION['user_info'])){
      header('location:login.php');
    }
?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<section class="container">
    <h1>Index Page</h1>
    <?php 
        include '../components/home/modal.php';
        include '../components/home/table.php';
    ?>
</section>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<?php include '../layouts/footer.php'; ?>