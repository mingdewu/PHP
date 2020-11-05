<?php
 /*
   整型包括  {....-2,-1,0,1,2...}中的任意元素.
 */
 //定义一个整型
$a = 1234; 
$a = -123; 
$a = 0123;  //8进制
$a = 0x1A;  //16进制
?>
<?php
 /*
   如果一个数超出integer范围,将转换成float,同样,运算结果一样处理   
 */
 $large_number =  2147483647;
var_dump($large_number);  //int(***)

$large_number =  2147483648; //此时已经超过整型范围了
var_dump($large_number);   //float(**)

var_dump( 0x80000000 ); 

$million = 1000000;
$large_number =  50000 * $million; //运算结果超出integer的范围
var_dump($large_number); //float(500000****)
?>