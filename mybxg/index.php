<?php
  header('Content-Type:text/html;charset=utf-8');

    // $path = $_SERVER['PATH_INFO'];
    // Ĭ��Ŀ¼����
    $dir = 'main';
    // Ĭ���ļ�������
    $filename = 'index';

    // ���� URL ��·��
    if(array_key_exists('PATH_INFO', $_SERVER)){
        // PATH_INFO���Դ���
        // ��ȡ����·��
        $path = $_SERVER['PATH_INFO'];// main/index
        // ȥ��һ��б��
        $str = substr($path, 1);// main/index
        // �ַ����ָ�, �� js �� split ��������
        $ret = explode('/', $str);
        if(count($ret) == 2){
            // ·��������
            $dir = $ret[0]; // ����Ŀ¼
            $filename = $ret[1]; // �����ļ�����
        }else {
            // ���������ת����ҳ��
            $filename = 'login';
        }
    }
    include('./views/'.$dir.'/'.$filename.'.html');
?>
