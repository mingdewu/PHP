<?php
 /*
   php的string型是没在固定长度,因为没有长字符串的问题.
   它可以通过 单引号,双引号,定界符三种方式来定义
   字符串的连接通过 "." 号完成.
 */
 /*
   技巧：判断某个字符串的长度时，可以用isset，比strlen()速度快
   比如，判断$str长度小于5
   if(strlen($str)<5){do something...};
   if(isset($str{5})){do something..};
 */
?>
<?php 
 //单引号定义,单引号中出现的变量或转义序列不会被变量的值取代或被转义
 //不过如果需要出现 \号,仍然可以通过\\实现
 $test='1234';
 echo $test."<br />";
 $test1='this is the define of string :$test'."<br />";
 echo $test1; //$test没有被1234取代
 $test1='this is the define of string \n:$test'."<br />";
 echo $test1; //\n没有被转义成换行符 
 $test1='this is the define of string \n:$test'."c:\\*.*";
 echo $test1."<br />";
?>
<?php 
 //双引号定义
 $test1="this is the define of string :$test"."<br />";
 echo $test1; //$test将被1234取代
 $test1="this is the define of string \n:$test"."<br />";
 echo $test1; //\n被转义成换行符 
?>
<?php
 //变量的解析,遇到 $号时会被解析,因此可以用{}指定变量名范围
 $beer='McJeremy';
 echo "$beer ' test";
 echo "$bears"; //将不被执行
 echo "${beer}s"; //输出McJeremys
 echo "{$beer}s"; //输出McJeremys
 //以下是对数组的解析
 $fruits=array('strawberry' => 'red', 'banana' => 'yellow');
 //echo "$fruits['banana']"; //错误,在字符串内$后的将被作为变量解析,因此,需要用{}括起来
 echo "{$fruits['banana']}";
 echo $fruits['banana']; //正确
?>
<?php
  echo "<br />";
  //访问和修改字符串
  $str="my string test";
  echo $str[0]; //已过时
  echo $str{0};
  //strlen()获取长度
  echo $str{strlen($str)-1}; //获取最后一个字符
  //修改最后一个字符
  $str{strlen($str)-1}='x';
  echo $str; // t--->x;
?>