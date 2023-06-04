<!doctype html>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <?php include('/home/s/s913704h/s913704h.beget.tech/public_html/scripts/version.php'); ?>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../styles/main - monitor.css<?php getVersion();?>">
    <link rel="stylesheet" href="../styles/main - smartfon.css<?php getVersion();?>">
</head>
<body>
    <div id="cap">
        <div id="menu">
            <div class="item">Главная</div>
            <div class="item">Мой кабинет</div>
            <div class="item">Создать тему</div>
            <div class="item">Помощь</div>
        </div>
    </div>
    <div id="content">
        <?php
            include '/home/s/s913704h/s913704h.beget.tech/public_html/scripts/forum/view.php';
            $section = $_GET['sect'];
            $subs = $_GET['subs'];
            $html = '';
            if($section == "") { echo '<div id="error"><h3>Ошибка!</h3>Не указан индентификатор раздела или темы!</div>'; return; }
            echo '<h5 style="background: none; color: #024FE1; justify-content: left; ">Форумы > ' . show_section() . '</h5>';
            $html = '<table><tr style="background-color: #01318C; color: white;"><td width="75%">Название</td><td width="15%">Дата создания</td><td width="10%">Кол-во ответов</td></tr>';
            $mysqli = @new mysqli('localhost', 's913704h_main', 'Nesmotry9', 's913704h_main');
            if(!($res = $mysqli->query('SELECT Title, Date_create, Posts FROM topics WHERE (Section = 1) AND (SubSection = 1) ORDER BY Date_create DESC'))) echo "Неудача: " . $mysqli->error;
            while($pages = mysqli_fetch_row($res)) {
                /*for($ind = 0; $ind < count($pages); $ind++) {
                    echo $pages[$ind] . ' ';
                }*/
                $html .= '<tr><td>' . $pages[0] . '</td><td>' . $pages[1] . '</td><td>' . $pages[2] . '</td></tr>';
            }
            $html .= '</table>';
            echo $html;
        ?>
    </div>
</body>