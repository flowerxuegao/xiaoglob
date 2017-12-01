<?php
header("Content-Type: text/html;charset=utf-8");
  $str = "就上岛简单来说附件番窠倒臼客服老师";
  if(strlen($str)>10){
    echo mb_substr($str,0,20)."...";
  }else{
    echo $str;
  }


?>