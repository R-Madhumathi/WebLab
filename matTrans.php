<?php
  $a1=array(
     array(1,2,3),
     array(4,5,6),
     array(7,8,9)
);	 
	
$result=array();

for($i=0;$i<=2;$i++){
         for($j=0;$j<=2;$j++){
                    $result[$i][$j]=$a1[$j][$i];
             }
             


}
echo"<pre/> ";
print_r($result);



?>
			 
 