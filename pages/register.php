<?php $title = "Register" ; $fade = true?>
<?php 
    include '../classes/User.php';
    $user = new User();
    if(isset($_POST['btn'])){
        $user->register($_POST['first_name'] , $_POST['last_name'] , $_POST['user_name'] , $_POST['password'] , $_POST['confirm_password']);
    }
    if(isset($_SESSION['user_info'])){
      header('location:home.php');
    }
?>
<?php include'../layouts/header.php'; ?>
    <div class="data-form-box bg-white mx-auto mt-5 col-md-6 col-11">
        <h1>Register</h1><hr>
        <form action="register.php" method="POST" data-parsley-validate>
            <div class="row">
                <div class="mb-3 col">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" data-parsley-required data-parsley-minlength="3"  id="firstName" name="first_name" placeholder="First Name">
                </div>
                <div class="mb-3 col">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" data-parsley-required data-parsley-minlength="3" id="lastName" name="last_name" placeholder="Add Your Last Name">
                </div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" data-parsley-required data-parsley-minlength="5"  id="username" name="user_name" placeholder="Add Your User Name">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" data-parsley-required data-parsley-minlength="5"  id="password" name="password" placeholder="*******">
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirm_password" placeholder="*******">
            </div>
            <div class="form-text mb-3">You Ready Create an Account ? <a href="login.php">Log In </a>Now</div>
            <div class="btn-box">
                <button type="submit" class="btn btn-primary" name="btn">Submit</button>
            </div>
        </form>
    </div>
<?php include'../layouts/footer.php'; ?>