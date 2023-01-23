<?php include '../layouts/header.php'; ?>
<?php 
    include '../classes/Article.php';
    // session_start();
    $article = new Article();
    if(isset($_POST['btn'])){
      $article->add($_POST["title"] , $_POST["category"] , $_POST['description']);
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
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
        ]
      });
    </script>
<script>
  let articleForm = $('.accordion').html(),
      i = 0;
  $('#title').on('keyup' , function(){
    let titleVal = $(this).val();
    $('#articleTitle').text(titleVal);
  });
  $('#add-article-form').on('click' , function(){
    i++;
    // $('#article-form').each(function(){
    //   $(this).after(articleForm);
    //   $(this).find('#articleTitle').attr('data-bs-target', '#' + i);
    //   $(this).find('.accordion-collapse').attr('id', i);
    // })
    $('#article-form').each(function(){
      $(this).after(articleForm);
      $(this).find('#articleTitle').attr('data-bs-target', '#' + i);
      $(this).find('.accordion-collapse').attr('id', i);
    });
    // $('#articleTitle').attr('data-bs-target', '#' + i);
    // $('.accordion-collapse').attr('id', i);
  });
</script>
<?php include'../layouts/footer.php'; ?>