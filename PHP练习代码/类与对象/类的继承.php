<?php
  /*
    php中类只能继承自一个基类,继承使用关键字extends(C#中使用 :)
    基类中的方法使用了final关键字后,子类将不可重写或覆盖该方法
    可以用parent::来访问基类中的方法
  */
?>
<?php
  class SimpleClass
  {
  	public $var='我是基类的displayVar方法';
  	public function displayVar()
  	{
  		echo $this->var;
  	}
  	public final function displayVar2()
  	{
  		echo '我是基类的displayVar2方法,但是我有final,你不可以重写哦';
  	}
  }
  class ChildrenClass extends SimpleClass 
  {
  	 function displayVar()
  	 {  	 	
  	 	parent::displayVar();
  	 	echo "<br />";
  	 	echo '我是子类的displayVar();我重写了基类的displayVar方法<br />';
  	 	parent::displayVar2();
  	 }
  	 //此时重写基类的displayVar2方法将报错,因为它是final修饰的.
  	// function displayvar2()
  	 //{
  	 //	echo '我重写了基类的displayvar2方法';
  	// }
  }
  $children=new ChildrenClass();
  $children->displayVar();  
  ?>