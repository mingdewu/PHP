<?php
  /*
    php类的访问控制有Public Private Protected三种
  */
?>
<?php
  class Simple
  {
  	public $public='Public';
  	protected $protected='Protected';
  	private $private='Private';
  	function printHello()  //默认为public
  	{
  		echo $this->public;
  		echo $this->protected;
  		echo $this->private;
  	}
  }
  $obj=new Simple();
  echo $obj->public;
  //echo $obj->private; //将无法访问私有变量
  echo $obj->printHello();
  
  class Simple2
  {
  	 protected $protected='Protected2';
  	 function printHello()
     {
       echo $this->public;
       echo $this->protected;
       echo $this->private;
     }
  }
$obj2 = new Simple2();
echo $obj2->public; 
//echo $obj2->private; 
//echo $obj2->protected; 
$obj2->printHello(); 
?>