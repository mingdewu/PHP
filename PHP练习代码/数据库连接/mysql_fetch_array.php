<?php
  /*
    mysql_fetch_array有两个参数
    一:查询结果集
    二:第二个参数指示结果读取是通过关联索引还是数字索引,
       它是一个常量,值有MYSQL_NUM  MYSQL_ASSOC MYSQL_BOTH三种
       MYSQL_NUM  只能通过数字偏移来访问
       MYSQL_ASSOC 只能通过关联来访问
  */
?>
<?php
  $link=mysql_connect("localhost","root","dvbbs");
  if(!$link)
  {
  	echo "连接服务器失败\n";
  }
  mysql_select_db("mytest") or die("数据库不可用".mysql_error());
  $result=mysql_query("select * from table1 order by id desc") or die("表不可用".mysql_error());
  echo "返回结果集:".mysql_num_rows($result);
  echo "<br />受影响行数:".mysql_affected_rows();
?>
<?php
  //使用MYSQL_NUM
  echo "<br />以下是使用MYSQL_NUM
    <br /> -------------<br />
  ";
  while($row=mysql_fetch_array($result,MYSQL_NUM))
  {
  	echo "\nID:".$row[0];
  	echo "&nbsp;&nbsp;Name:".$row[1];
  }
?>
<?php
  //使用MYSQL_ASSOC
  echo "<br />以下是使用MYSQL_ASSOC
    <br /> -------------<br />
  ";
  $result=mysql_query("select * from table1 order by id desc") or die("表不可用".mysql_error());
  while($row=mysql_fetch_array($result,MYSQL_ASSOC))
  {
  	echo "\nID:".$row['id'];
  	echo "&nbsp;&nbsp;Name:".$row['name'];
  }
?>
<?php
  //使用MYSQL_BOTH
  echo "<br />以下是使用MYSQL_BOTH
    <br /> -------------<br />
  ";
  $result=mysql_query("select * from table1 order by id desc") or die("表不可用".mysql_error());
  while($row=mysql_fetch_array($result,MYSQL_ASSOC))
  {
  	echo "\nID:".$row[0];
  	echo "&nbsp;&nbsp;Name:".$row['name'];
  }
?>
<?php
 mysql_close($link);
?>