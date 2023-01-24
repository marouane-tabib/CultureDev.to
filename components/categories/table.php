
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
                    <a href="<?= $row['id'] ?>">Delete</a>
                    <a href="#">Update</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>