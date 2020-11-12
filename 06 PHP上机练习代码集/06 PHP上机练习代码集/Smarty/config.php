<?php
  require "libs/Smarty.class.php";
  $tpl=new Smarty();
  $tpl->template_dir="Templates/";
  $tpl->compile_dir="Templates_C/";
  $tpl->config_dir="Configs/";
  $tpl->cache_dir="Cache/";
  $tpl->left_delimiter="<{";
  $tpl->right_delimiter="}>";
?>