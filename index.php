<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a=rand(1,100);
        $b=rand(1,100);
        $c=rand(1,100); 
        echo "les valeurs generer sont :";
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "$b";
        echo "<br>";
        echo "$c";
        echo "<br>";
        if($a>$b && $b>$c){
            echo "dans l ordre croissant:";
            echo "<br>";
            echo $c."<".$b."<".$a;
            echo "<br>";
            echo "dans l ordre decroissant:";
            echo "<br>";
            echo $a.">".$b.">".$c;
        
        }
        elseif($a>$c&& $c>$b){
            echo "dans l ordre croissant:";
            echo "<br>";
            echo $b."<".$c."<".$a;
            echo "<br>";
            echo "dans l ordre decroissant:";
            echo "<br>";
            echo $a.">".$c.">".$b;
        }
        

    ?>
    
</body>
</html>