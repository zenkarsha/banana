<?php

$config = array
(
  'site' => array(
    'parent' => '../../',
    'path' => 'http://'.$_SERVER['HTTP_HOST'].str_replace('index.php','',$_SERVER['PHP_SELF']),
    'url' => 'https://banana.unlink.men/',
    'name'  => '太陽花頭子產生器',
    'title' => '太陽花頭子產生器',
    'description' => '啊，寫錯，是香蕉頭子產生器',
    'copyright' => 'just for fun',
    'shortcut-icon' => 'https://banana.unlink.men/images/favicon.png',
    'apple-touch-icon' => ''
  ),
  'setting' => array(
    'enable-database' => false,
    'enable-navbar-search' => false,
    'enable-member-system' => false
  ),
  'member' => array(
    'default-page' => 'member'
  ),
  'database' => array(
    'host'  => 'localhost',
    'user'  => '',
    'pass'  => '',
    'db'  => ''
  ),
  'admin' => array(
    '000000000000000'
  ),
  'google' => array(
    'analytics-id'  => 'UA-00000000-0'
  ),
  'facebook' => array(
    'fanpage' => '',
    'app-id' => '',
    'app-secret' => '',
    'privacy-policy' => ''
  ),
  'og' => array(
    'title' => '太陽花頭子產生器',
    'type'  => 'website',
    'url' => 'https://banana.unlink.men/',
    'image' => 'https://banana.unlink.men/images/fb.png',
    'sitename'  => '太陽花頭子產生器',
    'description' => '啊，寫錯，是香蕉頭子產生器'
  )
);

?>
