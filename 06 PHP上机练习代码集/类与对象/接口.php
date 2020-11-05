<?php
  interface myI
  {
  	function DisplayName($name);
  	function GetName($name);
  }
  class I1 implements myI 
  {
  	function DisplayName($name)
  	{
  		print $name."<br />";
  	}
  	function GetName($name)
  	{
  		return $name;
  	}
  }
  class I2 implements myI 
  {
  	function DisplayName($name)
  	{
  		print $name."<br />";
  	}
  	function GetName($name)
  	{
  		return $name;
  	}
  }
  $i1=new I1();
  $i2=new I2();
  $i1->DisplayName("xu");  
?>