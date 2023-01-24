
    <table class="table bg-white" id="myTable">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <th scope="row">1</th>
                <td><?= $row['name'] ?></td>
                <td>
                    <a href="javascript:void(0)" onclick="if(confirm('Are You sure to delete this record?')){document.querySelector('#delete-category-<?php echo $row['id'] ?>').submit();} else {return false}"
                        class="text-danger" id="delete-btn">
                            <i class="fa-solid fa-trash"></i>
                    </a>  
                    <form action="categories.php" method="post" class="d-none" id="delete-category-<?php echo $row['id'] ?>" >
                        <input type="hidden" name="deleteCategory" value="<?php echo $row['id'] ?>" >
                    </form>
                    <a href="#">Update</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>