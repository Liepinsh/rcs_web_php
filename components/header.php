<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://resources/demos/style.css">
    <link rel="stylesheet" href="https://maps/documentation/javascript/demos/demos.css">
    <link rel="stylesheet" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
</head>
<body>
    <header class="header">
        <!-- conteiner-fluid: izmanto visu mājaslapas platumu -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 main-logo">
                    <a href="index.php?page=index" >
                        <img src="https://img-cache.cdn.gaiaonline.com/02744d6cbcc08ef4b0960f3bc8feaf4c/http://static.tumblr.com/986c01f269c6e5577b55bc3c088db60a/zjg7b8w/Jn2n58l52/tumblr_static_25r7daot4zmsw4wgskwkgcw0w.png">
                    </a>
                </div>
                <div class="col-xs-9">
                    <ul class="main-menu">
                        <li class="main-menu-item <?= $page == 'index' ? 'active' : ''; ?>">
                            <a href="index.php?page=index">Home</a>
                        </li>
                        <li class="main-menu-item <?= $page == 'articles' ? 'active' : ''; ?>">
                            <a href="index.php?page=articles">Articles</a>
                        </li>
                        <li class="main-menu-item <?= $page == 'chat' ? 'active' : ''; ?>">
                            <a href="index.php?page=chat">Chat</a>
                        </li>
                        <li class="main-menu-item <?= $page == 'register' ? 'active' : ''; ?>">
                            <a href="index.php?page=register">Register</a>
                        </li>
                        <li class="main-menu-item <?= $page == 'about-us' ? 'active' : ''; ?>">
                            <a href="index.php?page=about-us">About us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>