<?php
  class A
  {
  	private static $a=null;
  	private function __construct() 
  	{}
  	public static function Instance()
  	{
  		if(null==self::$a)
  		{
  			self::$a==new A();
  		}
  		return self::$a;
  	}
  	public function disp()
  	{
  		echo "dafd";
  	}
  }
  $b=A::Instance();
  echo get_class($b);
?>