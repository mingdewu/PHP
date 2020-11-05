<?php
/* 
  php使用__construct和__destruct来定义构造和析构函数
*/
?>
<?php
  class BaseClass
  {
  	 function __construct()
  	 {
  	 	print 'Base Construct';
  	 }
  }
  class SubClass extends BaseClass 
  {
  	function __construct()
  	{
  		$this->name='Sub Instance';
  		parent::__construct();
  		print '<br />SubClass Construct';
  	}
  	function __destruct()
  	{
  		print '<br />destory'.$this->name.'<br />';
  	}
  }
  $sub=new SubClass();
?>