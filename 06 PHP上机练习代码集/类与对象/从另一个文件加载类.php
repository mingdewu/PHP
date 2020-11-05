<?php
  /*
    从另一个文件加载类,可以有以下方法
    一:使用include/require<include出错是只是警告,而require则是致命错误>
    二:定义一个__autoLoad(className)函数
  */
?>
<?php
  function __autoLoad($classname)
  {
  	require_once($classname.'.php'); 
  }
  //定义了如上_autoLoad后,再new实例时,将会去找类名.php文件
  //如下将找Class1.php和Class2.php
  $c1=new Class1();
  $c2=new Class2();
?>