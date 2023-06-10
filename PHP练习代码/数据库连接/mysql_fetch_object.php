<?php
   /*
   mysql_fetch_object 返回的是对象,如果没有更多行则返回false
   只能用字段名来访问,而不是像数组一样使用偏移量
   */
?>
<?php
  $link=mysql_connect("localhost","root","dvbbs");
  mysql_select_db("mytest");
  $result=mysql_query("select id,name from table1 order by id desc") or die("表不能使用".mysql_error());
  while($row=mysql_fetch_object($result))
  {
  	echo "id:".$row->id;
  	echo "&nbsp&nbsp;name:".$row->name."\n";
  }
  echo "<br />记录行数:".mysql_num_rows($result);
  echo "<br />影响行数:".mysql_affected_rows();
  mysql_free_result($result); //释放内存
  mysql_close($link);
?>