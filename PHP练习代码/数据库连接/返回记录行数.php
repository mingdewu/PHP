
<?php
  $link=mysql_connect("localhost","root","dvbbs");
  if(!$link)
  {
  	echo '连接服务器失败';
  }
  else 
  {
  	echo '连接服务器成功';
  }
  echo "<br />";
  $db=mysql_select_db('mytest',$link) or die('数据库不可用'.mysql_error());
  if($db)
  {
  	echo '连接数据库成功';
  }
  echo "<br />";
  $result=mysql_query("select count(*) from table1",$link) or die('表不可用'.mysql_error());
  $numrows=mysql_num_rows($result);
  echo "$numrows";
?>