<?php $title = "Log In" ; $fade = true ?>
<?php 
    include '../classes/User.php';
    $user = new User();
    $user->login("adminf" , "admin");
?>
<?php include'../layouts/header.php'; ?>
    <div class="data-form-box bg-white mx-auto mt-5 col-md-6 col-12">
        <h1>Log In</h1><hr>
        <form action="POST" method="login.php">
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Add Your User Name" minlength="4" maxlength="50">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="********" minlength="8" maxlength="20">
            </div>
            <div class="form-text mb-3">You Need an Account ? <a href="register.php">Register</a> Now</div>
            <div class="btn-box">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
<?php include'../layouts/footer.php'; ?>