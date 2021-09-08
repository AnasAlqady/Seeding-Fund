<?php
include_once ('../include/config.php');
include_once ('../include/functions.php');
$id = $_SESSION['user'];
    if(!empty($_SESSION['user'])){
        $query = "SELECT * FROM posts where user_id=$id";
        $execute = $mysql->query($query);
        $results = $execute->fetch_all();
        header('Content-Type: text/html; charset=utf-8');
      
}
    else
        header("location:../login.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    
   
    </style>
<body class="container" style="font-size:2rem">

<?php 
include_once ('../include/navbar.php');

?>

<section class="row" style="align-items: center"> 


     
<?php
$count = 1;
            foreach ($results as $result){ ?>
            <div class="col-lg-6" style="text-align: center;">
 <div class="card text-center p-5 m-5" >
  <div class="card-header">
  Order status <?php echo $count++ ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['1'] ?></h5>
    <p class="card-text"><?php echo $result['2'] ?></p>
    <a href="#" class="btn btn-primary" style="background:#0a9bc3;"><?php echo $result['5'] ?></a>
    </div>
    <div class="card-footer text-muted">
    <?php echo $result['7'] ; ?>
 
  </div>
  
</div>
</div>
<?php } ?>

</section>
</body>
</html>