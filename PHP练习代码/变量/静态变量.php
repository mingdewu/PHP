<?php
 /*
  静态变量是变量范围的一个特性,只要函数局部区域存在
  但是,如果是静态变量的话,离开函数后,变量 值 不会改变.
  否则,离开函数后会变量将不存在 
 */
?>
<?php 
//不使用静态变量 的例子
 function Test1()
 {
 	$a=1; //不是静态变量,因此每次调用都会归于1
 	echo $a;
 	$a++;
 }
 Test1();
 echo "<br />";
 function Test2()
 {
 	static $a1=1;
 	echo $a1;
 	$a1++;
 }
 Test2();
?>

<?php
 print "<br />";
  function Test()
  {
  	static $Count=0;
  	$Count++;
  	echo $Count;
  	if($Count<10)
  	{
  		Test();
  	}
  	$Count--;
  }
  Test();
?>