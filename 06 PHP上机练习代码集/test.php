<?php
  error_reporting(E_ALL);
  set_magic_quotes_runtime(0);
  //Report("PHP版本",phpversion());
  Report('php版本',PHP_VERSION);
  Report("当前文件路径",__FILE__);
  Report("当前代码所在行",__LINE__);
  Report("当前正在执行的文件名",$_SERVER['PHP_SELF']);
  Report('环境',PHP_OS);
  function Report($msg,$value)
  {
  	 print $msg.":".$value."<br />";
  }
 ?>