<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php website</title>
</head>
<body>
    <div class="container">
        My first php website
        <br>
        <?php
            // echo"This is php <br>";

            // for ($i=0; $i < 10; $i++) { 
                
            //     for ($j=0; $j < $i; $j++) { 
            //         echo "* ";
            //     }
            //   echo "<br>";
            // }
            
            echo "<br>";
            
            $rohit = " I want a job with minimum salary 50000";
            
            echo strlen($rohit);
            echo "<br>";
            echo strrev($rohit);
            echo "<br>";
            echo strpos($rohit,"job");
            echo "<br>";
            echo str_replace("I want", "I can get", $rohit);            

        ?>
        
    </div>
</body>
</html>