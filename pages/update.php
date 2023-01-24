<?php include '../layouts/header.php'; ?>
<?php 
    include '../classes/Article.php';
?>
<section class="container">
    <h1>Update Article</h1>
    <div class="col-md-10 col-12 mx-auto bg-white p-2 shadow shadow-sm randed">
        
    <form action="home.php" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 mb-1" id="exampleModalLabel">Add Your Article</h1>
          <!-- <i class="fa-solid fa-plus shadow" id="add-article-form"></i> -->
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- <div class="accordion" id="accordionExample">
          <div class="accordion-item" id="article-form"> -->
            <!-- <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" id="articleTitle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Article
              </button>
            </h2> -->
            <!-- <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample"> -->
              <!-- <div class="accordion-body p-0"> -->
                <div class="modal-body">
                      <div class="mb-3">
                        <label for="title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title[]" placeholder="Add Articl Title ... ">
                      </div>
                      <div class="mb-3">
                        <label for="category" class="col-form-label">Category:</label>
                        <select class="form-control" name="category[]" id="category">
                            <option disabled selected>Select Your Category</option>
                            <option value="1">Sports</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="description" class="col-form-label">Description:</label>
                        <textarea id="summernote" name="description[]"></textarea>
                      </div>
                  </div>
                </div>
            <!-- </div>
          </div> -->
        <!-- </div> -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="btn">Send</button>
        </div>
      </div>
    </form>
    </div>
</section>
<?php include '../layouts/footer.php'; ?>