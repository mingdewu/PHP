<?php
  // 生成静态页的话,先打开页面缓存
  //ob_start();
  require "config.php";
  $tpl->assign("title","my test");
  $tpl->assign("content","This is a Smarty Test!");
  $tpl->display('test.tpl');
  //如下几行即可以生成静态页
  /*
  $tmp=ob_get_contents();
  ob_end_clean();
  $fo=fopen("D:/mytest.html","wb");
  fwrite($fo,$tmp);
  fclose($fo);  
  */
?>