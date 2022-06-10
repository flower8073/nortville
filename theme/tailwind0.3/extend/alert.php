<?php
if (!defined('G5_IS_ADMIN')) {
    add_event('alert', 'popup_alert',10,4); 
    function popup_alert($msg='', $url='', $error=true, $post=false)
    {
        global $g5, $config, $member;
        global $is_admin;
        
        $msg = $msg ? strip_tags($msg, '<br>') : '올바른 방법으로 이용해 주십시오.';

        $header = '';
        if (isset($g5['title'])) {
            $header = $g5['title'];
        }
        include_once(G5_THEME_PATH.'/lib/alert.php');
        exit;
    }

    add_event('alert_close', 'popup_alert_close',10,2); 

    function popup_alert_close($msg, $error=true)
    {
        global $g5;
        
        $msg = strip_tags($msg, '<br>');

        $header = '';
        if (isset($g5['title'])) {
            $header = $g5['title'];
        }
        include_once(G5_THEME_PATH.'/lib/alert_close.php');
        exit;
    }

    add_event('alert_close', 'popup_confirm',10,4); 

    // confirm 창
    function popup_confirm($msg, $url1='', $url2='', $url3='')
    {
        global $g5;

        if (!$msg) {
            $msg = '올바른 방법으로 이용해 주십시오.';
            alert($msg);
        }

        if(!trim($url1) || !trim($url2)) {
            $msg = '$url1 과 $url2 를 지정해 주세요.';
            alert($msg);
        }

        if (!$url3) $url3 = clean_xss_tags($_SERVER['HTTP_REFERER']);

        $msg = str_replace("\\n", "<br>", $msg);

        $header = '';
        if (isset($g5['title'])) {
            $header = $g5['title'];
        }
        include_once(G5_THEME_PATH.'/lib/confirm.php');
        exit;
    }
}
function move_add_style(){
    add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/default.css">', 0);
}
add_event('move_html_footer', 'move_add_style');
?>