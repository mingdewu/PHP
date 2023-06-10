<?php
  class SimpleClass
  {
  	public $var='xuuuu';
  	public function displayVar()
  	{
  		echo $this->var;
  		//global $var;
  		//echo $var;
  	}
  }
  //使用new创建实例
  $instance=new SimpleClass();
  $instance->displayVar();
  
  $assigned=$instance;  //赋值,此时相当于新创建了一个实例 
  $reference=&$instance; //引用
  $instance=null;
  //因此$reference是$instance的引用 ,而 $instance=null,所以$reference也为null
  //而$assigned相当于是克隆,因此,此后$instance的更改将不会影响到$assigned
  echo "<br />";
  var_dump($instance);
  echo "<br />";
  var_dump($reference);
  echo "<br />";
  var_dump($assigned);
?>