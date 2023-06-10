<?php
  $start=microtime(true);
  echo realpath("file_cache.php"); //realpath()获取绝对物理路径--
  $end=microtime(true);
  $runtime=$end-$start;
  echo "运行时间:".$runtime.'毫秒';
?>