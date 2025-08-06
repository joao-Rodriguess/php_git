<?php
    echo ("Do.. While <br>");

    $c = 0;

for($num = 1;$num <= 10;$num++){
    
    if($num <= 10){
    echo"<span style = 'display: inline-flex; padding: 10px; justify-content:center;'>";
    do{
        echo"nUmERO: ".++$c." + ".$num." = ".$c+$num." <br> ";
    }
    while($c<10);

    $c = 0;
    echo "</span>";
}
   
}

?>