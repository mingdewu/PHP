<?php
 /*
   php中的正则表达式符合PCRE规范，因此，每一对正则都要定界符/
   /^&/表示匹配整个表达式。
   preg_match() //匹配返回1否则0
   preg_replace() 
   preg_split()
 */
?>
<?php
  $string="football";
  if(preg_match("/foo/",$string))
  {
  	echo "匹配成功<br />";
  }
  else 
  {
  	echo "匹配失败<br />";
  }
  if(preg_match("/^foo$/",$string))
  {
  	echo "匹配成功";
  }
  else 
  {
  	echo "匹配失败";
  }
?>
<br />
<?php
  echo "替换前是$string"."<br />";
  echo "替换后是:";
  echo preg_replace("/o/","e",$string);
?>
<br />
<?php
  $string="my name is xuzhize name";
  echo "分割前是：$string"."<br />";
  echo "分割后是:";
  $arr=preg_split("/\s/",$string);
  //var_dump($arr);
  print_r($arr);
  $arr2=array_count_values($arr); //计算值出现的次数
  print_r($arr2);
?>