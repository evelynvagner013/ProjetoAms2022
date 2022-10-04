<?php
    $N1 = $_POST['n1'];
    $N2 = $_POST['n2'];
    
    $resultado = $N1 + $N2;
    if( $resultado >20){
      
        echo "A Soma é : " . $resultado + 8;
    }
    else{
        echo "A Soma é : " . $resultado - 5;
    }
    
?>