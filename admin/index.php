<?php
include_once ('../include/config.php');
include_once ('../include/functions.php');

    if(!empty($_SESSION['admin'])){
        $query = "SELECT * FROM posts";
        $execute = $mysql->query($query);
        $users = $execute->fetch_all();
        $queryT = "SELECT COUNT(id),state FROM posts GROUP BY state";
        $Datachart = $mysql->query($queryT)->fetch_all();
    //    echo  $Datachart[3][1];
    //     for($x=0 ; $x<2; $x++)
    //     {
    //     for($i=0 ; $i<COUNT($Datachart); $i++)
    //     {
    //         if($x=1){
    //             if(empty($Datachart[$i][$x])) {
    //                 $Datachart[$y][$x];
    //                 echo $Datachart[$y][$x];
    //                 echo "anas";
    //             }
    //         }
    //         else {
    //             if(empty($Datachart[$i][$x])) {
    //                 $Datachart[$y][$x]= 0;
    //             }
    //         }
           
    // }
// }
        header('Content-Type: text/html; charset=utf-8');
}
    else
        header("location:../login.php");
?>
<html meta="charset-utf8">
<head>
    <title>Admin controll </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link href="../css/style.css" rel="stylesheet" >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="container">
 
<?php 
include_once ('../include/navbar.php');
?>
<div class="row pb-5" style="margin-bottom :12rem"> 
<section class="col-lg-6 "> 
    <canvas id="myChart" width="65" height="45"></canvas>
    </section>
<section class=" col-lg-6">
    <h3> All Order  </h3>
    <table class="table table-sm table-white " style="text-align: center;">
        <thead>
        <tr>
            <th scope="col"># </th>
            <th scope="col">Project Name </th>
            <th scope="col">Sector</th>
            <th scope="col">stats</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $count =0;
            foreach ($users as $user){ ?>
        <tr><td scope="row"  id="count">
                <?php echo ++$count ?>
            </td>
            <td>
             <div class="user-name">
            <a href="profile_users.php?id=<?php echo $user['0'];  ?>"><?php echo $user[1] ?> </a>
            </td>
            <td><?php echo $user['3']; ?></td>
            <td> <?php echo $user['5']; ?> </td>
            <?php } ?>
        </tr>
        </tbody>
    </table>
</section>

<script type="text/javascript">
var users = <?php echo json_encode($Datachart); ?>;
console.log(users);
var dataL = [users[0][1], users[1][1], users[2][1] , users[3][1]];
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: { 
        labels: dataL,
        datasets: [{
            label: '# of Votes',
            data: [users[0][0], users[1][0], users[2][0] , users[3][0]],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
 
</script>
</body>
</html>
<script type="text/javascript">
var $ = jQuery.noConflict();

$(document).ready(function() {
    jQuery('ul.sf-menu').superfish({
        animation: {
            height: 'show'
        },  
        delay: 100 
    }); 
    $("#toggle-btn").click(function() {
        $(".sf-menu").slideToggle("slow"); 
    });

    $('.toggle-subarrow').click(
        function() {
            $(this).parent().toggleClass("mob-drop");
    });
		
		var header = $(".header-inner");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 100 && $(this).width() > 769) {
            header.addClass("navbar-fixed-top");
        } else {
            header.removeClass('navbar-fixed-top');
        }
    });	  
	  $(this).find(".h4 i").each(function(){
            $(this).addClass("green");
    }); 
});  
 
  </script>
   
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.4/superfish.min.js"></script>