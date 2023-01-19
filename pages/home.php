<?php include'../layouts/header.php'; ?>
<section class="container">
    <h1>Index Page</h1>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
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
            <div id="example"></div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <table class="table bg-white">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>
</section>
<link href="../node_modules/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>

    <script> 
			var editor = new FroalaEditor('#example', {
  emoticonsUseImage: false
});
		</script>
<?php include'../layouts/footer.php'; ?>