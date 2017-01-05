<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Видеошкола 3.14</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
$arr_courses=[
    ["1","Demo Игры", "images/demo.png","ссылка на покупк"],
    ["3","Микроигры", "images/mikrogame.jpg","ссылка на покупк"],
    ["2","Сокобан  ", "images/soko.png","ссылка на покупк"],
    ["3","Игры со спрайтами", "images/spite.png","ссылка на покупк"],
    ["3","Теория ООП", "images/oop.png","ссылка на покупк"],
    ["3","МикроШахматы", "images/shah.png","ссылка на покупк"],
    ["4","Морской бой", "images/morboy.png","ссылка на покупк"],
    ["4","Морской флот", "images/ship3.png","ссылка на покупк"],
    ["3","Java Xonix", "images/xonix.png","ссылка на покупк"],
    ["3","Сапер", "images/mine2.png","ссылка на покупк"],
    ["3","ООФрукты", "images/fruits2.png","ссылка на покупк"],
    ["4","Игрушки на JavaScript", "images/js.png","ссылка на покупк"],
    ["4","Бинарная жизнь", "images/life.png","ссылка на покупк"],
    ["4","API ВКонтакте", "images/vk.png","ссылка на покупк"],
    ["4","Секундомер", "images/sekundomer.png","ссылка на покупк"],
    ["4","Графоциклы", "images/grapho.png","ссылка на покупк"],


];

$arr_group=[

    ["1","C# Игры", "images/groop_game.png","ссылка на покупк"],
    ["1","C# Прикладные", "images/groop_priklad.png","ссылка на покупк"],
    ["1","Java", "images/groop_java.png","ссылка на покупк"],
    ["1","ASP.NET", "images/groop_aspnet.png","ссылка на покупк"],
    ["1","PHP&HTML", "images/groop_php.png","ссылка на покупк"],
    ["1","Консольные уроки", "images/groop_console.png","ссылка на покупк"],
    ["1","Мотивация", "images/groop_motivate.png","ссылка на покупк"],
    ["1","Шахматные курсы", "images/shah.png","ссылка на покупк"],
];
?>

<div class="container">
    <div class="row">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#MyTopMenu" >
                        <span class="sr-only">Открыть меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="MyTopMenu">
                    <ul class="nav navbar-nav">
                        <li><a href="#" id="logo" title="Видеошкола 3.14">
                                <img src="images/fmap.png" style="width: 30px; height: 30px;" alt="fmzp">
                            </a></li>
                        <li><a href="#">Начало</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Курсы<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">C#</a></li>
                                <li><a href="#">Java</a></li>
                                <li><a href="#">ASP.NET</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Вебинары<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Расписание</a></li>
                                <li><a href="#">Подключение</a></li>
                                <li><a href="#">Архив</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Консоль</a></li>
                        <li><a href="#">Магазин</a></li>

                    </ul>
                   <!-- <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="https://www.videosharp.info/users/1/avatar/1_avatar_1.jpg" class="img-circle" style="width: 30px; height: 30px;">&nbsp;&nbsp;Игромистр <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Панель управления</a></li>
                                <li><a href="#">Управление ролями пользователей</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Выход</a></li>
                            </ul>

                        </li>
                    </ul>-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <h2>&nbsp;</h2>
        <h2>&nbsp;</h2>
    </div>
    <div class="row">
        <hr>
        <h2>Популярные курсы</h2>
        <hr>
       <?php for($i=0; $i<count($arr_courses);$i++)
          {
           ?>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
            <a href="#" title="Игры">
                <div class="thumbnail">
                    <image src="<?=$arr_courses[$i][2]?>" class="image-butt-cl">
                        <div class="caption" style="text-align: center">
                            <h4><?=$arr_courses[$i][1]?></h4>
                        </div>
                </div>
            </a>
        </div>
        <?php } ?>


    </div>
    <div class="row">
      <hr>
      <h2>Группы курсов</h2>
      <hr>
        <?php for($i=0; $i<count($arr_group);$i++)
        {
            ?>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <a href="#" title="Группы курсов">
                    <div class="thumbnail">
                        <image src="<?=$arr_group[$i][2]?>" class="image-butt-cl">
                            <div class="caption" style="text-align: center">
                                <h4><?=$arr_group[$i][1]?></h4>
                            </div>
                    </div>
                </a>
            </div>
        <?php } ?>

    </div>


</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>