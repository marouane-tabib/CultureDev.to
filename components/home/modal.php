 <!-- Button trigger modal -->
 <button type="button" class="btn btn-primary float-end mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="home.php" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
              <label for="title" class="col-form-label">Title:</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Add Articl Title ... ">
            </div>
            <div class="mb-3">
              <label for="category" class="col-form-label">Category:</label>
              <select class="form-control" name="category" id="category">
                  <option disabled selected>Select Your Category</option>
                  <option value="1">Sports</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="description" class="col-form-label">Description:</label>
              <div id="summernote"></div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="btn">Send</button>
        </div>
      </div>
    </form>
  </div>
</div>