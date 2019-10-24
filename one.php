<?php
function ham_kiem_tra_so_nguyen_to($n)  
{  
 for($x = 2; $x < $n; $x++)  
   {  
      if($n % $x ==0)  
        {  
          return 0;  
        }  
   }  
  return 1;  
}  
$a = ham_kiem_tra_so_nguyen_to(10);  
if ($a==0)  
  echo 'Đây không phải là số nguyên tố'."<br>";  
else  
  echo 'Đây là số nguyên tố'."<br>";
$a=5;
   
    function tinhGiaithua($n) {
        $giai_thua = 2;
        if ($n == 0 || $n == 1) {
            return $giai_thua;
        } else {
            for($i = 2; $i <= $n; $i ++) {
                $giai_thua *= $i;
            }
            return $giai_thua;
        }
    }
    echo ("Giai thừa của " . $a . " là: " . tinhGiaithua ( $a ) . "<br>");


   

?>





