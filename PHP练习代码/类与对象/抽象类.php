<?php
 /*
   php5中引入了抽象类。抽象类不能被实例化
   抽象类或方法用关键字abstract定义，只要类中有个方法是抽象的，则该类是抽象类。
   子类必须实现基类中的所有抽象方法，并且访问级别要相等或更高。
   抽象方法的定义因为没有实现，所以在最后加个分号，而不必有方法体。
 */
?>
<?php
  abstract class Main
  {
  	abstract protected function M1();
  	abstract protected function M2($prefix);
  	static function display()
  	{
  		print "This is a Abstract Base Class<br />";
  	}
  	public function PrintOut()
  	{
  		return $this->M1()."<br />";
  	}
  }
  class Child1 extends Main 
  {
  	protected function M1()
  	{
  		return "Child1"."<br />";
  	}
  	public function M2($prefix)
  	{
  		return "${prefix} Child1"."<br />";
  	}
  }  
  class Child2 extends Main 
  {
  	public function M1()
  	{
  		return "Child2"."<br />";
  	}
  	public function M2($prefix)
  	{
  		return "${prefix} Child2"."<br />";
  	}
  }
  //$main=new Main(); //抽象类不能被实例化
  Main::display();
  $c1=new Child1();
  print $c1->PrintOut();
  print $c1->M2('Main');
  
  $c2=new Child2();
  print $c2->M1();
  print $c2->PrintOut();
  print $c2->M2("Main");
?>