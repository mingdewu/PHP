<?php
  /*
    以下示例通过__get __set 来为私有属性赋值
    通过__isset来跟踪isset __unset来跟踪unset
  */
?>
<?php
  class User
  {
  	private $name=""; //私有属性，外部将不能访问，因此也不能赋值了。
  	private $sex="";
  	function display()
  	{
  		print "name-".$this->name.":sex-".$this->sex;
  	}  	
  	//但通过__set后，可以为私有属性赋值。
  	private function __get($n)
  	{
  		echo "Your are trying to get {$n}<br />";
  		if(isset($this->$n) || empty($this->$n))
  		{
  			return $this->$n;
  		}
  		else 
  		{
  			echo "and {$n} is not existed<br />";
  		}
  	}
  	private function __set($n,$s)
  	{
  		echo "Your are trying to set {$n} to {$s}<br />";
  		if(isset($this->$n))
  		{
  			$this->$n=$s;
  		}
  		else 
  		{
  			echo "but {$n} is not existed<br />";
  		}
  	}
  	private function __isset($n)
  	{
  		echo "Trying to check isset of {$n} ";
  	}
  	private function __unset($n)
  	{
  		echo "Trying to unset {$n}";
  	}
  }
  $user=new User();
  $user->name="xu"; //不用__set的话，将不能为name赋值
  $user->sex="f";
  $user->name="xu1";
  $user->xxx="adf";
  echo $user->name."<br />";
  $user->display();
?>