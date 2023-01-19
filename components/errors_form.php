
    <?php if (isset($_SESSION['action'])): ?>
    <div class="col-md-7 col-11 mx-auto <?php echo $_SESSION['action']['class'] ?>" role="alert">
        <strong><?php echo $_SESSION['action']['status'] ?></strong>
        <?php 
            echo $_SESSION['action']['message']; 
            unset($_SESSION['action']);
        ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
        </div>
    <?php endif ?>