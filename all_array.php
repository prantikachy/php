<?php


echo " hi this is a PHP code....<br>";


$arr = array('Dola', 'Soummo', 'Farjana', 'Ovi');
echo $arr[0];
echo "<br>";
echo $arr[1];
echo "<br>";
echo $arr[2];
echo "<br>";
echo $arr[3];
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


//multidimentional Array.........................

$multidim = array(array(2,3,7,4,8,9),
                     array(5,7,3,9,0),
                     array(3,7,4,1,9));
        
  // echo $multidim[1][0];
  // echo var_dump($multidim);


//for ($i=0; $i < count($multidim) ; $i++) {
//    echo var_dump($multidim[$i]);
//    echo "<br>" ;
//}




for ($i=0; $i < count($multidim) ; $i++) {
    for ($j=0; $j < count($multidim[$i]) ; $j++) { 
      echo $multidim[$i][$j];
      echo "   "; 
    } 
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";






$multidim = array (array (array (2,3,7,4,), array(5,6,8,3), array (3,5,8,2)),
array(array(array (2,3,7,4,), array(5,6,8,3), array (3,5,8,2))),
array(array(array (2,3,7,4,), array(5,6,8,3), array (3,5,8,2))));





for ($i=0; $i < count($multidim) ; $i++) {
    for ($j=0; $j < count($multidim[$i]) ; $j++) { 
        for ($k=0; $k < count($multidim[$i][$j]); $k++) { 
            echo $multidim[$j][$k];
         echo "  ";
        }
     
      echo "   "; 
    } 
    echo "<br>";
}











?>