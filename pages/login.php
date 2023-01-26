<?php $title = "Log In" ; $fade = true ?>
<?php 
    include '../classes/User.php';
    $user = new User();
    if(isset($_POST['btn'])){
        $user->login($_POST['username'] , $_POST['password']);
    }
    if(isset($_SESSION['user_info'])){
      header('location:home.php');
    }
?>
<?php include'../layouts/header.php'; ?>
    <div class="data-form-box bg-white mx-auto mt-5 col-md-6 col-12">
        <h1>Log In</h1><hr>
        <form action="login.php" method="POST" data-parsley-validate>
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" data-parsley-required data-parsley-minlength="5" class="form-control" id="username" name="username" placeholder="Add Your User Name" minlength="4" maxlength="50">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" data-parsley-required data-parsley-minlength="5" class="form-control" id="password" name="password" placeholder="********" minlength="3" maxlength="20">
            </div>
            <div class="form-text mb-3">You Need an Account ? <a href="register.php">Register</a> Now</div>
            <div class="btn-box">
                <button type="submit" class="btn btn-primary" name="btn">Submit</button>
            </div>
        </form>
    </div>
<?php include'../layouts/footer.php'; ?>