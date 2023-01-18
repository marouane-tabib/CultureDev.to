<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- End Links -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <title><?php if(isset($title)){ echo $title; }else{ echo "Home";} ?></title>
</head>
<body>
    <?php if(!isset($fade)){ ?>
    <?php include'../components/nav-bar.php'; ?>
    <?php } ?>
            <?php if (isset($_SESSION['action'])): ?>
            <div class="container <?php echo $_SESSION['action']['class'] ?>" role="alert">
              <strong><?php echo $_SESSION['action']['status'] ?></strong>
                <?php 
                  echo $_SESSION['action']['message']; 
                  unset($_SESSION['action']);
                ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
              </div>
            <?php endif ?>