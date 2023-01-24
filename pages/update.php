<?php include '../layouts/header.php'; ?>
<?php 
    include '../classes/Article.php';
    if($_GET['article_id']){

        $id = $_GET['article_id'];
        $article = new Article();
        $item = $article->edit($id);

        if(isset($_POST['btn'])){
          $article = $article->updateArticle($id , $_POST['title'] , $_POST['category'] , $_POST['description']);
        }
    }else { header('location:home.php'); }
?>
<section class="container">
    <h1>Update Article</h1>
    <div class="col-md-10 col-12 mx-auto bg-white p-2 shadow shadow-sm randed">
        
    <form action="update.php?article_id=<?= $_GET['article_id'] ?>" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 mb-1" id="exampleModalLabel">Add Your Article</h1>
        </div>
        <div class="modal-body">
                <div class="mb-3">
                <label for="title" class="col-form-label">Title:</label>
                <input type="text" class="form-control" id="title" value="<?= $item['title'] ?>" name="title" placeholder="Add Articl Title ... ">
                </div>
                <div class="mb-3">
                <label for="category" class="col-form-label">Category:</label>
                <select class="form-control" name="category" id="category">
                    <option disabled selected>Select Your Category</option>
                    <option value="1" selected>Sports</option>
                </select>
                </div>
                <div class="mb-3">
                <label for="description" class="col-form-label">Description:</label>
                <textarea id="summernote" name="description"><?= $item['description'] ?></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="btn">Update</button>
        </div>
      </div>
    </form>
    </div>
</section>
<?php include '../layouts/footer.php'; ?>