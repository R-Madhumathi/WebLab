<?php
  $a1=array(
     array(1,2),
     array(1,2)
);


  $a2=array(
     array(3,2),
     array(6,8)
);	 
	
$result=array();
for($i=0;$i<=1;$i++){
         for($j=0;$j<=1;$j++){
                    $result[$i][$j]=$a1[$i][$j]+$a2[$i][$j];
             }
}
echo"<pre/> ";
print_r($result);



?>
			 