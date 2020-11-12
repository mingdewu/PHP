<?php
   $a=12; //全局
   function Test()
   {
   	 echo $a;  //引用的是局部变量 
   }
   Test(); //将不会产生输出
?>
<?php
   function Test1()
   {
   	global $a;  //实际上global 是对$GLOBALS数组的引用 ,也就是
   	//global $a===&$GLOBALS['a'];
   	 $a=13; //此处的更改将影响到全局
   	 echo $a;  //引用的是局部变量 
   }
   Test1(); //将不会产生输出
?>
<?php
  /*
    上述两个示例说明:PHP中的全局变量在函数中引用时必须申明为全局
    申明为全局使用关键字 global进行申明
    函数内访问全局变量的第二个方法,是使用$GLOBALS数组
  */
?>
<?php
//使用GLOBALS数组访问
function Test3()
{
	echo $GLOBALS["a"];
}
Test3();
?>
<?php
  function Test4()
  { 
  	/*$HTTP_GET_VARS是全局变量(array类型)
  	但是,它不是超全局变量 ,因此,要在函数中引用,需要先申明为全局的
  	而$_GET***是超全局变量 ,可以直接引用.
  	*/
  	global $HTTP_GET_VARS;
  	echo $HTTP_GET_VARS['name'];
  	echo $_GET['name'];
  }
?>