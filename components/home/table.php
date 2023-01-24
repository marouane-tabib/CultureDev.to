
    <table class="table bg-white" id="myTable">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($article = mysqli_fetch_assoc($articles)) { ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $article['title'] ?></td>
                    <td><?= $article['category'] ?></td>
                    <td><?= $article['description'] ?></td>
                    <td class="row">
                        <a href="#" class="col-3 mx-1 btn btn-danger"><i class="fa-solid fa-trash fa-xs"></i></a>
                        <a href="#" class="col-3 mx-1 btn btn-success"><i class="fa-solid fa-pen fa-xs"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>