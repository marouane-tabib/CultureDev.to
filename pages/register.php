<?php $title = "Register" ; $fade = true?>
<?php include'../layouts/header.php'; ?>
    <div class="data-form-box bg-white mx-auto mt-5 col-md-6 col-11">
        <h3>Log Out</h3><hr>
        <form>
            <div class="row">
                <div class="mb-3 col">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName">
                </div>
                <div class="mb-3 col">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" >
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="form-text mb-3">You Ready Create an Account ? <a href="login.php">Log In </a>Now</div>
            <div class="btn-box">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
<?php include'../layouts/footer.php'; ?>