
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
                        <a href="javascript:void(0)" onclick="if(confirm('Are You sure to delete this record?')){document.querySelector('#delete-article-<?php echo $article['article_id'] ?>').submit();} else {return false}"
                            class="text-danger" id="delete-btn">
                                <i class="fa-solid fa-trash"></i>
                        </a>  
                        <form action="home.php" method="post" class="d-none" id="delete-article-<?php echo $article['article_id'] ?>" >
                            <input type="hidden" name="deleteArticle" value="<?php echo $article['article_id'] ?>" >
                        </form>
                        <a href="update.php?article_id<?= $article['article_id']?>" class="col-3 mx-1 btn btn-success"><i class="fa-solid fa-pen fa-xs"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>