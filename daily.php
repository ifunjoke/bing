<?php
    /*获取bing每天一张壁纸*/

date_default_timezone_set("PRC");//设置时区为中国
$json=file_get_contents("http://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1");//获取bing每日壁纸json
$dejson=json_decode($json,TRUE);//把字符对象转换为数组
$url=$dejson['images'][0]['url'];//获取壁纸地址,默认像素大小1920x1080,可修改为常用格式如1280x720;
    //Tips若当主机不是国内的，url不带主机头，需要拼接"http://s.cn.bing.net",即$url="http://s.cn.bing.net".$url;下面已经判断
$url=strpos($url, "http://")?$url:"http://s.cn.bing.net".$url;
header("Content-Type:text/html; charset=utf-8");
header("Location:".$url);//转跳到壁纸地址
?>
