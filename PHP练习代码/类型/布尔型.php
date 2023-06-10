<?php
  //指定一个布尔值用true/false,不区分大小写
  $bool=true; 
  echo var_dump($bool);
  echo "<br />";
  echo gettype($bool);
  echo "<br />";
  if(is_bool($bool))
  {
  	echo '$bool is the type of boolean';
  }
  //以下是强制转换测试,非0number都为true
  echo "<br />";
  $int = -2;
  $bool=(bool)$int;
  echo var_dump($bool);
  echo "<br />";
  echo gettype($bool);
  echo "<br />";
  if(is_bool($bool))
  {
  	echo '$bool is the type of boolean';
  }
?>

<?php
echo "<br />";
  //使用一些表达式返回布尔值
  $action="xuu";
  if($action=="xuu") //true
  {
  	echo 'this is the return of boolean';
  }
?>
<?php
var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)
?>