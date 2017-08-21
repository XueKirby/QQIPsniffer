<?php 
 $conn = mysql_connect("localhost",xuekirby","505515") or die("数据库链接错误".mysql_error());
 mysql_select_db("info_db",$conn) or die("数据库访问错误".mysql_error());
 mysql_query("set names gb2312");
?>