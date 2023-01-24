
    <table class="table bg-white" id="myTable">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($article = mysqli_fetch_assoc($articles)) { ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $article['title'] ?></td>
                    <td><?= $article['category'] ?></td>
                    <td><?= $article['description'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>