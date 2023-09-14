<?php
$tab = ["A","Z","E","R","T","Y","U","I","O","P","M","L","K","J","H","G","F","D","S","Q","W","X","C","V","B","N","1","2","3","6","5","4","7","8","9","0"];

if(isset($_POST['save'])){
    if(isset($_POST['key'])){
    $nb=$_POST['key'] ;
    if(isset($nb)){
        for($i=1;$i<=$nb;$i++){
            for($j=1;$j<=4;$j++){
                for($k=1;$k<=4;$k++){
                    $key = rand() % 36;
                    if(isset($key)){
                        $ok = $tab[$key];
                        echo $ok;
                    }
                }
                if($j<4){
                    echo "-";
                }
            }
            echo '<br>';
        }
    }
}
}

?>