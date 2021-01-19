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
    <title>e-com</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

        <div class="container">
            <div class="pt-3"></div>
            <div class="row">
                <div class="col-sm-4"> <a href="orders.php" class="btn btn-primary"> My Orders </a> </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-2"> <?php echo "Customer name: ".$customer_name; ?> </div>
                <div class="col-sm-2"> <a href="logout.php" class="btn btn-warning"> Log-out </a> </div>
            </div>
            <br><br><br><br><br>
            
                    <?php
                        $products = array();
                        chdir("../img/queue/");
                        $l = scandir(getcwd());
                        $index = 2;

                        $row_count = 0;
                    

                    while(True){
                            $count = 3;
                        

                        ?>   <br>
                            <div class='row'>

                        <?php
                        $row_count = $row_count + 1;
                        if($row_count!=1){
                            $index = $index + 1;
                        }
                        while($count > 0){
                            if(isset($l[$index])!=1){
                                break;
                            }
                            else{

                                chdir($l[$index]);
                                $content = scandir(getcwd());
                                $inner_content_index = 2;
                                
                                
                            
                            
                                ?>
    
                                <div class="col-sm-4">
                                    <div class="card img-fluid">
                                        <img class="card-img-top" src="../img/queue/<?php echo $l[$index]; ?>/<?php echo $content[$inner_content_index]; ?>" alt="Card image" style="width:100%; height: 300px">
                                        <span class="text-center"> <b><?php echo $l[$index]; ?></b> </span>
                                        <br>
                                        <button id = "<?php echo $l[$index]; ?>" onclick="reply(this.id)" class="btn btn-primary text-center"> Show details </button> 
                                    </div> <br>
                                </div> 


                                <?php
                                chdir("../");
                                
                                
                                $count = $count - 1;
                                if($count!=0){
                                    $index = $index + 1;
                                    
                                }
                                else{
                                    break;
                                }
                                

                            }
                        } 
                        ?>
                        </div> 
                        <?php
                        if($index == sizeof($l)){
                            
                            break;
                        }
                        else{
                            
                            continue;
                        }
                    }
                    ?>

        </div>

        
    <script type="text/javascript">
        function reply(clicked_id)
        {
            // alert(clicked_id); 
        
            // localStorage.setItem("product_id",clicked_id);
            var loc = "details.php?product="+clicked_id
            window.location.assign(loc);
        }
      </script>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>