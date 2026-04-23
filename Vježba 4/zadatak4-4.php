<?php 
function prost($broj){
    if ($broj < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($broj); $i++) {
        if ($broj % $i == 0) {
            return false;
        }
    }
    return true;
}
for($i = 1; $i < 100; $i++){
    if(prost($i)){
        echo $i . " - ";
    }
}
?>
