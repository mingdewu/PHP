<?php
/*
php有integer float boolean string4种基本数据类型
有array object两种复杂类型
有resource NULL两种特殊类型
还有mixed number callback等伪类型
*/
//如下是变量的定义
  $bool=true;
  $int=12;
  $float=10.1;
  $str='xu--test';
  //var_dump用于获取表达式的类型和值
  //结果形式  type(value) 
  //字符串是  string(length) value;
  echo var_dump($bool);
  echo var_dump($int);
  echo var_dump($float);
  echo var_dump($str);
//用gettype获取某个变量 的类型
  echo gettype($bool);
  echo gettype($int);
  echo gettype($float);
  echo gettype($str);
  echo "<br />";
 //用is_type()判断某个变量是不是type类型
  if(is_int($int))
  {
  	echo '$int is the type of integer';
  }
  if(!is_int($bool))
  {
  	echo '$bool is not the type of integer';
  }
  echo "<br />";
/*
  强制转换,特别注意的是
  负数在转换成bool型时,会转换成true,而不是false
  而true--->int 时是 1
*/
  $boolToint=(int)$bool;
  echo var_dump($boolToint);
  echo "<br />";
//如下是常量的定义 
//最后一个bool型参数是可选的,目的是定义的常量是否区分大小写
//注:var_dump()只对表达式起作用,这里如果用var_dump(my_const)将没有输出
  define("my_const",10,true);
  echo "my_const".my_const;
  echo "<br />";
  echo $_SERVER['HTTP_USER_AGENT']; //只有在IE中使用才有效
  //print_r($_SERVER);
?>