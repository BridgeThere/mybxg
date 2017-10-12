<?php
  header('Content-Type:text/html;charset=utf-8');

    // $path = $_SERVER['PATH_INFO'];
    // 默认目录名称
    $dir = 'main';
    // 默认文件夹名称
    $filename = 'index';

    // 处理 URL 的路径
    if(array_key_exists('PATH_INFO', $_SERVER)){
        // PATH_INFO属性存在
        // 获取请求路径
        $path = $_SERVER['PATH_INFO'];// main/index
        // 去掉一个斜杠
        $str = substr($path, 1);// main/index
        // 字符串分割, 和 js 中 split 方法很像
        $ret = explode('/', $str);
        if(count($ret) == 2){
            // 路由有两成
            $dir = $ret[0]; // 覆盖目录
            $filename = $ret[1]; // 覆盖文件名称
        }else {
            // 其他情况跳转其他页面
            $filename = 'login';
        }
    }
    include('./views/'.$dir.'/'.$filename.'.html');
?>
