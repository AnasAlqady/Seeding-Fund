<?php
include_once('include/config.php');
include_once('include/functions.php');
if (!empty($_SESSION['user'])) {
    // header("location:pivot/index.php");
}

?>
<html>
<head>
    <title>
login page     </title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>


<body class="container">

<?php 
include_once ('navbar.php');
?>

<section class="login m-5 p-5" >
        <div class="card pt-1 p-1 d-flex flex-row justify-content-center col-lg-12">
            <div class="col-lg-6">
                <img src="img/large_seedingfund-01.png" alt="" class="col-lg-8 col-sm-8">
            </div>
            <form method="post" action="handle/login.php" class="col-lg-6 card-header card-footer d-flex flex-column card-header-tabs text-center justify-content-center mr-5">
            <div class="form-group">
                            <h5 class="slogan">
Login account , welcome                             </h5>
                        </div>
            <div class="form-group row ">
                    <div class="col-lg-12 ">
                        <input type="email" name="email" class="form-control" id="staticEmail" placeholder="email" required>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-lg-12 ">
                        <input type="password" name="password" style="margin-top: 1rem" class="form-control" id="inputPassword" placeholder="Password" required>
                    </div>
                </div>

<div class="d-grid gap-2 d-md-block mt-3">
  <input type="submit" value="login" class="btn" style="background:#0a9bc3" >
             
             
    <a class="" href="register.php" ><button class="btn" type="button" style="background:#85c606">
            sign up
          </button>  </a>
</div>
                
            </form>
       
    </div>
</section>
</body>
</html>

