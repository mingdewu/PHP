<?php
//从$filename读取计数  
 function get_hitcount($filename)
 {
 	$count=0;
 	if(file_exists($filename))
 	{
 		$fo=fopen($filename,'r');
 		$count=fgets($fo,20); //取一行出来，最大长度为20
 		fclose($fo);
 	}
 	else 
 	{
 		echo "计数器文件".$filename."不存在。";
 	}
 	$count++;
 	if(file_exists($filename))
 	{
 		$fo=fopen($filename,'w');
 		fwrite($fo,$count); //fputs是该函数的别名
 		fclose($fo);
 	}
 	else 
 	{
 		echo "计数器文件".$filename."不存在。";
 	}
 	return $count;
 }
 echo get_hitcount('counter.inc');
?>