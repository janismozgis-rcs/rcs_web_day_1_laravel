<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css">

    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 main-logo">
                    <a href="index.php?page=index">
                        <img src="http://www.geekadelphia.com/wp-content/uploads/2017/06/SUPERLOGO-NEW.png" alt="">
                    </a>
                </div>
                <div class="col-xs-9">
                    <ul class="main-menu">
                        <li class="main-menu-item <?= $page == 'index' ? 'active' : '';  ?>">
                            <a href="index.php?page=index">Home</a>
                        </li>
                        <li class="main-menu-item <?= $page == 'articles' ? 'active' : '';  ?>">
                            <a href="index.php?page=articles">Articles</a>
                        </li>
                        <li class="main-menu-item <?= $page == 'chat' ? 'active' : '';  ?>">
                            <a href="index.php?page=chat">Chat</a>
                        </li>
                        <li class="main-menu-item <?= $page == 'registration' ? 'active' : '';  ?>">
                            <a href="index.php?page=registration">Register</a>
                        </li>
                        <li class="main-menu-item <?= $page == 'about_us' ? 'active' : '';  ?>">
                            <a href="index.php?page=about_us">About us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        &copy; Super cat page, 2018, All rights reserved
                    </div>
                </div>    
            </div>
        </footer>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>