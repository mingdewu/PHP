<?php
  /*
   数组是一个有序图.
   用array()来创建一个数组,它的参数为 key=>value;
  */
?>
<?php
 //定义一个数组
 // key可以为integer或string,因此下标也一样
 $myarr=array('name'=>'xuzhize','age'=>12,12=>true);
 echo $myarr["name"];
 echo $myarr[12];
 echo "<br />";
 //二维数组
 $myarr=array('array'=>$myarr);
 echo $myarr['array']['name'];
?>
<?php
//如果没有给出键名时,php会自动找出当前数组键中最大的整数然后在它的基础上加1赋给没有键名的元素.
  $myarrt=array(5=>5,9,12,'tt'=>45);
  //the same as array(5=>5,6=>9,7=>12,'tt'=>45);
  echo $myarrt[7]; 
 //因为键名只接收integer和string类型,因此true/false作为键名时会转换成1/0
 $myarrt=array(true=>5);
 echo $myarrt[true]; // 5
 echo $myarrt[1]; //5
?>
<?php
  echo "<br />";
  //修改数组值,和字符串一样
  $myarr=array('a1'=>5,'a2'=>6);
  echo $myarr['a1'];
  $myarr['a1']=8; //'a1'=>8
  echo $myarr['a1'];
  $myarr[]=13; //array('a1'=>5,'a2'=>6,0=>13) 因为所有键中没有整数,所以从0开始
  echo $myarr[0];
  $myarr['x']='abc'; 
  echo $myarr['x'];
  //可以用unset()来删除
  echo $myarr['a1']; //没有删除前,输出8
  unset($myarr['a1']); //删除键a1
  //echo $myarr['a1']; //已经删除,所以不会有输出
  unset($myarr);  //将会删除整个数组
?>
<?php
  echo "<br />";
  $myarr=array(1,2,3,4,5);
  print_r($myarr);
  //这里的as $i=>$value,时$vlaue将被指定为数组键
  foreach($myarr as $i=>$value)
  {
  	//unset($i);
     unset($myarr[$i]);
  }
  print_r($myarr);
  $myarr[]=6;  //$myarr已有最大键为4,因此自动加上键5
  print_r($myarr);
  $myarr=array_values($myarr); //array_values将复制参数中的值到新数组.而键自动从0开始设定
  $myarr[]=7;
  print_r($myarr);
?>
<?php
//数组集合
 echo "<br />";
 $myarr=array(1,2,3,4,5);
 foreach($myarr as $i)
 {
 	echo 'num is :'.$i;
 }
?>
