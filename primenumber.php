<?php

    if(isset($_POST['sub'])){
        if($_POST['num']==""){
            echo "ENTER THE NUMBER";
        }else{
            $n = $_POST['num'];
            $a = 0;
            for($i=1;$i<=$n;$i++){
                if($n%$i==0){
                    $a++;
                }
            }
            if($a<3){
                echo "$n is prime number";
            }
            else{
                echo "$n is not a prime number";
            }
        }
    }
    /*$num = 17;
    $a = 0;
    for($i=1;$i<=$num;$i++){
   
        if($num%$i==0){
            $a++;}
        }
        if($a<3){
            echo "$num is prime number";
        
        }
        else{
            echo "$num is not prime number";
        }*/
    
  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>Prime Number</title>
  </head>
  <body>
    <div class="container">
        <h2>Checking Prime Number</h2>
        <form action="#" method="POST">
            <input type="number" name="num" value="" placeholder="Enter The Number"></br></br>
            <input type="submit" name="sub" value="SUBMIT">
        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    -->
  </body>
</html>