<?php
/*
   php practice of McJ
*/
/*
  基本数据类型串行化后的存储格式为：
  数据类型 : [数据长度:] 数据值; 
  integer--->i:value  eg--->i:123;
  float--->d:value  eg---->d:1.2288888888888888;
  boolean-->b:0|1   eg---->b:1;
  string-->s:strlen:value  eg---->s:8:我是变量;
  其中数据长度是可选的，实际上只有string类型才会有长度属性
  最后是用;表示结束
*/
?>
<?php
//int
//format --  i:int_value
$int=123;
echo serialize($int); // i:123;
?>
<br />
<?php
//float
//format -- d:float_value
$float=1.23;
echo serialize($float); //d:1.229999999999999982236431605997495353221893310546875;
?>
<br />
<?php 
// boolean
//format -- b:true-1 false-0
$bool=true;
echo serialize($bool); //b:0|b:1;
?>
<br />
<?php
 // string 
 //format -- s:strlen:str_value
 $str="my name is xu";
 echo serialize($str); //s:13:"my name is xu";
?>
<br />
<?php
// serialize array object
//格式：
/*
   a:数组长度:
   {
     数据类型:[数据长度]:数据值;
   }
*/
$arr=array("abc","def",7=>8,"jkdgl");
/*
 根据格式，可以推出上面串行化后的结果是
 a:4:
 {
    i:0;s:3:"abc";
    i:1;s:3:"def";
    i:7;i:8;
    i:8;s:5:"jkdgl";
 }
 因为数组长度是4,所以a:4: 
 因为数组前两个没有指明索引，因此，索引从整型0开始，因此是i:0--i:1
 而第三个是整型索引7,因此是i:7,接下来的没有指明，因此是i:8;
 因为第三个元素值是整型的，值是8,因此是i:8;
 而其它的是字符串，因此是s:长度:值
*/
echo serialize($arr);  
/*值是
 a:4:
 {
    i:0;s:3:"abc";
    i:1;s:3:"def";
    i:7;i:8;
    i:8;s:5:"jkdgl";
 }
 */
?>