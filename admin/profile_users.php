<?php
use http\Env\Request;
include_once ('../include/config.php');
include_once ('../include/functions.php');

$id = $_GET['id'];
    if(!empty($_SESSION['user'])){
        $query = "SELECT * FROM posts where id=$id";
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link href="../css/style.css" rel="stylesheet" >

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<style>
    
    .card {
    border:1px solid; 
    background:#ffffff; 
    box-shadow: 2px 5px 8px 8px grey;
    text-align: center;
    font-size:1.3rem;
    color: #85c606;
    font-size:1.9rem;   
}
    </style>
<body class="container">

<?php 
include_once ('../include/navbar.php');

?>
<section class="row" >
<?php
$count = 1;

            foreach ($results as $result){  ?>
 <div class="col-lg-4"></div>
  <div class="col-lg-5" > 
 <div class="card text-center p-5 m-5" >
  <div class="card-header">
  Order status <?php echo $count ?>
  </div>
  <div class="card-body" styly="font-size:2rem">
    <h5 class="card-title"><?php echo $result['1'] ?></h5>
    
    <p class="card-text"><?php echo $result['2'] ?></p>
    <a href="#" class="btn m-2 p-2" style="background:#0a9bc3;"><?php echo $result['5'] ?></a>
    <a  class="btn editstatus m-3" style="background:#0a9bc3;" id='edit<?php echo $count ?>'> edit stute </a>
   
    <form action="../handle/ajaxorder.php?id=<?php echo $result['0'] ?>" style="display:none" class="form edit<?php echo $count++ ?>" >
    <div class="form-group mt-3"  >
    <select  multiple class="form-control  m-1" name="stute" id="exampleFormControlSelect2" style="color:#0a9bc3">
    <option selected><?php echo $result['5'] ?></option>
      <option value="approved">approved</option>
      <option value="pending">pending</option>
      <option value="rejected">rejected</option>
    </select>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-6 col-form-label">number of order</label>
    <div class="col-sm-6">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $result['0'] ?>" name="id">
    </div>
  </div>  <button class="btn m-1"  type="submit" style="background:#0a9bc3;" id="edit">edit stute </button>
</form>

</div>

  <div class="card-footer text-muted ">
      <div> 
<?php      echo $result['4']."k JD" ; ?>
      </div>
      <div> 
      <?php echo $result['7'] ; ?>
      </div>
  </div>
  
</div>

</div>
<?php } ?>
</section>

<script>
    $('.editstatus').click(function(){
    var formClass=$(this)[0].id
     document.querySelectorAll('.'+formClass)[0].style.display='inline'
})
</script> 

