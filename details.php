<?php

session_start();
if(!isset($_SESSION['name']) && !isset($_SESSION['password'])){
    header("location: index.php");
 }
 else{
     $customer_name = $_SESSION['name'];
 }

?>



<!doctype html>
<html lang="en">
  <head>
    <title>Details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
$x = $_GET['product'];
// echo "Product is ".$x;
chdir("../img/queue/");
chdir($x);
$p = scandir(getcwd()); 
$len = count($p);
// echo getcwd();


?>
      <div class="container">
            <span class="text-center mt-3">
               <h2><?php echo $x?></h2> 
            </span>
            <div>
            <?php
            for ($i=2; $i < $len; $i++) { ?>
                <img src="../img/queue/<?php echo $x."/".$p[$i];?>" class="img-responsive img-rounded" height="300px" width="300px" style="padding: 5px;" alt="">
            <?php }

            ?>
            </div> <br> <br>
            <div class="text-center">
                <a href="#" class="btn btn-primary"> Order Now </a>
            </div>

            <br><br>
      </div>
  




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




















