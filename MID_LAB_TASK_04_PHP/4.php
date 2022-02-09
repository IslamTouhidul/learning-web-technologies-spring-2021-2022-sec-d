<?php

echo "Odd number from 10 to 100 are : <br>";

for($i=10;$i<100;$i++){
    if($i%2!=0){
        echo $i."<br>";
    }
    else {
        continue;
    }
}

?>