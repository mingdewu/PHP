<?php 
 /*
   使用mysql_select_db(库名,连接标识)来连接数据库,返回bool型
 */
?>
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
  $db=mysql_select_db('mysql',$link) or die('数据库不可用'.mysql_error());
  if($db)
  {
  	echo '连接数据库成功';
  }
  //$db1=mysql_select_db('mysq',$link) or die('数据库不可用'.mysql_error());
?>