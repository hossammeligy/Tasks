<?php
$name=$_POST['name'];
$grade=$_POST['grade'];
$i=0;
while($i < count($name)){
    if($grade[$i] > 50){
       
    print_r($name[$i]);
    echo " --> ";
    print_r($grade[$i]);
    echo '<br/>';
}
    $i++;
}

