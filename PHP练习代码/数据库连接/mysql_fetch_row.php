<?php
   /*
   mysql_fetch_row 返回的是数组,如果没有更多行则返回false
  且只能用偏移量来访问
  这个时候相当于用mysql_fetch_array($result,MYSQL_NUM)
  如果要用字段名访问,那么可以用
  mysql_fetch_assoc
  mysql_fetch_array($result,MYSQL_ASSOC);
   */
?>
<?php
  $link=mysql_connect("localhost","root","dvbbs");
  mysql_select_db("mytest");
  $result=mysql_query("select id,name from table1 order by id desc") or die("表不能使用".mysql_error());
  //while($row=mysql_fetch_object($result))
  //{
  //	echo "id:".$row->id;
  //	echo "&nbsp&nbsp;name:".$row->name."\n";
 // }
  while($row=mysql_fetch_row($result))
  {
  	echo "id:".$row[0];
  	echo "name:".$row[1]."\n";
  }
  echo "<br />记录行数:".mysql_num_rows($result);
  echo "<br />影响行数:".mysql_affected_rows();
  mysql_free_result($result); //释放内存
  mysql_close($link);
?>