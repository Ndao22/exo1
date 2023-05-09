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
    elseif($b>$a && $a>$c){
        echo "dans l ordre croissant:";
        echo "<br>";
        echo $c."<".$a."<".$b;
        echo "<br>";
        echo "dans l ordre decroissant:";
        echo "<br>";
        echo $b.">".$a.">".$c;
    
    }
    elseif($b>$c && $c>$a){
        echo "dans l ordre croissant:";
        echo "<br>";
        echo $a."<".$c."<".$b;
        echo "<br>";
        echo "dans l ordre decroissant:";
        echo "<br>";
        echo $b.">".$c.">".$a;
        echo "<br>";
    
    }
    elseif($c>$a && $a>$b){
        echo "dans l ordre croissant:";
        echo "<br>";
        echo $b."<".$a."<".$c;
        echo "<br>";
        echo "dans l ordre decroissant:";
        echo "<br>";
        echo $c.">".$a.">".$b;
    
    }
    elseif($c>$b && $b>$a){
        echo "dans l ordre croissant:";
        echo "<br>";
        echo $a."<".$b."<".$c;
        echo "<br>";
        echo "dans l ordre decroissant:";
        echo "<br>";
        echo $c.">".$b.">".$a;
    
    }
    
?>
   
   
