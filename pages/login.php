<?php $title = "Log In" ; $fade = true ?>
<?php include'../layouts/header.php'; ?>
    <div class="data-form-box bg-white mx-auto mt-5 col-md-6 col-12">
        <h1>Log In</h1><hr>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-text mb-3">You Need an Account ? <a href="logout.php">Log Out </a>Now</div>
            <div class="btn-box">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
<?php include'../layouts/footer.php'; ?>