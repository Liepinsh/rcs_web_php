<?php
session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'index';

// header
require_once 'components/header.php';

//content
switch($page){
    case('index');
        require_once 'components/index.php';
        break;
    case('articles');
        require_once 'components/articles.php';
        break;
    case('article1');
        require_once 'components/article1.php';
        break;
    case('article2');
        require_once 'components/article2.php';
        break;
    case('article3');
        require_once 'components/article3.php';
        break;
    case('chat');
        require_once 'components/chat.php';
        break;
    case('register');
        require_once 'components/register.php';
        break;
    case('about-us');
        require_once 'components/about-us.php';
        break;
    default:
        require_once 'components/404.php';
        break;
}
//footer
require_once 'components/footer.php';
