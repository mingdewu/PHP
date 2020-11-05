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
  $exec="insert into table1 set name='added'";
  //update 
  //delete
  mysql_query($exec);
  echo "受影响行数:".mysql_affected_rows();
  echo "\n新添加行的id为:".mysql_insert_id();
?>