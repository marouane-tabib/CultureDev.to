<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <!-- End Links -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <title><?php if(isset($title)){ echo $title; }else{ echo "Home";} ?></title>
</head>
<body>
    <?php 
      if(!isset($fade)){ include'../components/nav-bar.php'; }
      include '../components/errors_form.php';
    ?>