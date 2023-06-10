<?php
 $link=mysql_connect("localhost","root","dvbbs");
 mysql_select_db("mytest");
 $result=mysql_query("select name from table1");
 $name=mysql_result($result,2);
 echo $name;
?>