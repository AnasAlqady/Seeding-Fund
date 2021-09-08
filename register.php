<?php
if (!empty($_SESSION['user']))
    header("location: profile.php");
?>
<html>
<head>
    <title>register</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body class="container">
<?php 
include_once ('navbar.php');
?>
<section class="register-body row">
<div class="col-lg-1"></div>
            <div class="col-lg-5">
                <img src="img/large_seedingfund-01.png" alt="">
            </div>
                <div class="form-card text-center p-4 col-lg-5">
                    <form action="handle/register.php" method="post">
                        <div class="form-group">
                            <h3 class="slogan">
New Account , welcome        </h3>
                        </div>
                        
                        <div class="form-group">
                            <input name="email" type="email" class="form-control custom-input"   placeholder=" Email" required>
                            <?php if(!empty($_SESSION['message']))
                        echo "<h6>".$_SESSION['message']."</h6>" ;
                        session_destroy();
?> 
                        </div>
                        
                        <div class="form-group">
                            <input name="username" type="text" class="form-control custom-input"   placeholder="username" required>
                        </div>

                        <div class="form-group">
                            <input name="password" type="password" class="form-control custom-input"   placeholder="password" required>
                        </div>
                        <div class="form-group">
                            <input name="phone" type="number" class="form-control custom-input"   placeholder="phone number" required>
                        </div>
                       
                        <div class="form-group">
                            <button class="custom-button btn" type="submit" style="background:#85c606">sign up </button> 
                            
                            <a class="custom-button btn mt-2" href="login.php" style="background:#0a9bc3">Sign in</a>
                        </div>
                    </form>
                </div>
            
            <div class="col-lg-2 "></div>
    
</section>
</body>

<!--<script src="theme/js/bootstrap.js"></script>-->
<script src="theme/js/app.js"></script>
<script>
</script>
</html>