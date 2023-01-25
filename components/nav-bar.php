
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CultureDev.to™</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="home.php">Articles</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="categories.php">Categories</a>
                </li>
            </ul>
                        <a href="javascript:void(0)" onclick="if(confirm('Are You sure to Log out?')){document.querySelector('#log-out').submit();} else {return false}"
                            class="nav-link float-end" id="delete-btn" style="text-decoration: none;">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </a>  
                        <form action="home.php" method="post" class="d-none" id="log-out" >
                            <input type="hidden" name="logout">
                        </form>
            </div>
        </div>
    </nav>