
<?php 
include_once ("../include/config.php");
include_once ("../include/functions.php");

if(!empty($_SESSION['user'])){
   $id = $_SESSION['user'];
   $query = "SELECT * FROM posts WHERE user_id =$id"; //11
   $execute = $mysql->query($query);
}
else
{
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>user</title>
</head>
<style>
    form {
    border:1px solid; 
    background:#ffffff; 
    box-shadow: 2px 5px 8px 8px grey;
    text-align: center;
    font-size:1.6rem;
    color: #85c606;
    margin-left:auto;
}
    </style>
    <body class="container">

<?php 
include_once ('../include/navbar.php');
?>



    <section class="row" style="align-items: center;" > 
        <div class="col-lg-5 " style="text-align: center;"> 
      <img src="../img/large_seedingfund-01.png" alt=""> 
      <hr>      
    </div>
    <div class="col-lg-1 "> 
    </div>
<form class="col-lg-4 p-5"  style="text-align: center;margin-left:2rem"  action="../handle/addproject.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">projcet Name</label>
    <input type="text" name="name" class="form-control m-1" id="exampleFormControlInput1" placeholder="project name" style="color:#0a9bc3">
  </div>
  
  
  <div class="form-group mt-3">
    <label for="exampleFormControlSelect2">sector project</label>
    <select  multiple class="form-control  m-1" name="sector" id="exampleFormControlSelect2" style="color:#0a9bc3">
      <option>agricultural</option>
      <option>technology</option>
      <option>nutritional</option>
      <option>structural </option>
      <option>watery </option>
    </select>
  </div>
  <fieldset class="form-group  mt-3" style="font-size:1.4rem">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0 " style="    color: #85c606;
">value </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input"  type="radio" name="value" id="gridRadios1" value="5" checked>
          <label class="form-check-label" for="gridRadios1">
            5k JD
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="value" id="gridRadios2" value="10">
          <label class="form-check-label" for="gridRadios2">
          10k JD
                  </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="value" id="gridRadios2" value="15">
          <label class="form-check-label" for="gridRadios2">
          15k JD
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="value" id="gridRadios2" value="20">
          <label class="form-check-label" for="gridRadios2">
           20k JD
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>
  <div class="form-group  mt-4">
    <label for="exampleFormControlTextarea1">Description Project</label>
    <textarea class="form-control  m-1" id="exampleFormControlTextarea1"  name="description" rows="3" style="color:#0a9bc3"></textarea>
  </div>

  <div class="col-auto mt-3">
      <button type="submit" class="btn " style="background:#0a9bc3">Submit</button>
    </div>
</form>
<div class="col-lg-2" style="text-align: center;">
</div>
    </section>
</body>
</html>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>