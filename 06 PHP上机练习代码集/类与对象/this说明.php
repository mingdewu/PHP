<?php
  /*
    $this是一个伪变量 ,它可以在一个方法在对象内部调用时使用.
    它的引用有两种可能:
    一:它指向调用对象,也就是它的方法所属于的对象
    二:另一个对象内部静态调用
  */
?>
<?php
  class A
  {
  	function foo()
  	{
  		if(isset($this))
  		{
  			echo "\$this is defined;(";
  			echo get_class($this);
  			echo ")\n";
  		}
  		else 
  		{
  			//echo '$this is not defined';
  			echo "\$this is not defined\n";
  		}
  	}
  }
  class B
  {
  	function bar()
  	{
  		A::foo();
  	}
  }
  $a=new A();
  $a->foo(); //$a是A的实例,因此$this指向一个调用.此时$this指向A实例
  A::foo(); //静态调用,此时A没有实例,因此$this没有指向.
  $b=new B();
  $b->bar(); //此时,是在B对象实例内部静态调用A对象,因此$this指向B
  B::bar(); //静态调用,没有指向
?>