<?php
/*
  static关键字用于表示静态变量／静态调用等。
  对静态成员的访问通过用 ::
*/
?>
<?php
  //对静态成员的访问
  class Foo
  {
  	public static $my_static="mystatic";
  	function staticValue()
  	{
  		return self::$my_static;
  	}
  	static function Display()
  	{
  		print "This is a Static-Method";
  	}
  }
  class Bars extends Foo 
  {
  	function staticValue()
  	{
  		return "in child bars:".parent::$my_static;
  	}
  }
  print Foo::$my_static."<br />";
  $foo=new Foo();
  //$foo->$my_static; //将报错，因为静态变量不能实例调用
  print $foo->staticValue()."<br />";
  $bar=new Bars();
  print $bar->staticValue();
?>
<?php
 //静态方法调用
 Foo::Display();
?>