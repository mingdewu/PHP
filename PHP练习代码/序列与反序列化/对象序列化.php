<?php
  /*
    对象序列化在不添加__sleep函数的情况下会序列化对象所有属性，包括private
    而__sleep函数返回需要序列化的属性数组
    __wakeup 函数在反序列 化时调用
  */
?>
<?php
  class User
  {
  	private $id;
  	private $name;
  	private $sex="Female";
  	function __construct()
  	{
  		$this->id=uniqid();
  	}
  	//function __destruct()
  	//{
  	//	echo "I'm Destoried";
  	//}
  	function __sleep()
  	{
  		return(array('name','sex')); //只串行name和sex属性
  	}
  	function __wakeup()
  	{
  		$this->id=uniqid();
  	}
  	function display()
  	{
  		echo "My Name Is:".$this->name." and my sex is:".$this->sex;
  	}
  	function setName($name1)
  	{
  		$this->name=$name1;
  	}
  }
?>
<?php
//serialize
  $u=new User();
  $u->setName("xuzhize");
  echo "after Serialized of User:<br />";
  $s=serialize($u);
  print_r($s);
?>
<br />
<?php
  echo "after unserialized of User:<br />";
  $u2=unserialize($s);
  //$u2->display();
  print_r($u2);
?>