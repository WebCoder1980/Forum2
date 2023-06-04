<!doctype html>
<html>
<head>
    <?php include('/home/s/s913704h/s913704h.beget.tech/public_html/scripts/version.php'); 
    include '/home/s/s913704h/s913704h.beget.tech/public_html/scripts/forum/view.php';?>
    <link rel="stylesheet" href="../styles/main - monitor.css<?php getVersion();?>">
    <link rel="stylesheet" href="../styles/main - smartfon.css<?php getVersion();?>">
    <meta charset="utf-8">
    <title>Компьютерный форум</title>
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
        <div class="section">
            <h6><img src="images/word.png">Вопросы по программам</h6>
            <ul>
            <a href="page.php?sect=1"><li><?php echo show_section(1)?></li></a>
                <li>Adobe:
                    <ul>
                        <a href="page.php?sect=1&subs=1"><li>Photoshop</li></a>
                        <a href="page.php?sect=1&subs=2"><li>Illustrator</li></a>
                        <a href="page.php?sect=1&subs=3"><li>Premiere</li></a>
                    </ul>
                </li>
                <a href="page.php?sect=2"><li>Другие</li></a>
            </ul>
        </div>
        <div class="section">
            <h6><img src="images/system.png">Вопросы по системе</h6>
            <ul>
                <a href="page.php"><li>Избавление от вирусов</li></a>
                <a href="page.php"><li>Помогите разобраться с проблемой!</li></a>
                <a href="page.php"><li>Установка системы или драйверов</li></a>
                <a href="page.php"><li>Другое</li></a>
            </ul>
        </div>
        <div class="section">
            <h6><img src="images/programming.png">Программирование</h6>
            <ul>
                <li>Web-программирование:
                    <ul>
                        <a href="page.php"><li>WordPress</li></a>
                        <a href="page.php"><li>Вопросы по HTML и CSS.</li></a>
                        <a href="page.php"><li>Скриптовое программирование на JS</li></a>
                        <a href="page.php"> <li>Серверное направление PHP</li></a>
                        <a href="page.php"><li>Другие направления</li></a>
                    </ul>
                </li>
                <li>Прикладное программирование:
                    <ul>
                        <a href="page.php"><li>Java <span style="color: var(--color-grey4);">(не JavaScript!)</span></li></a>
                        <a href="page.php"><li>C#</li></a>
                        <a href="page.php"><li>C++</li></a>
                        <a href="page.php"><li>Qt C++</li></a>
                        <a href="page.php"><li>C</li></a>
                    </ul>
                </li>
                <li>Другие отросли</li>
            </ul>
        </div>
        <div class="section">
            <h6><img src="images/question.png">Вопросы/предложения/жалобы о форуме</h6>
            <ul>
                <a href="page.php"><li>У меня возник вопрос</li></a>
                <a href="page.php"> <li>У меня есть идея по улучшению форума</li></a>
                <a href="page.php"><li>Пожаловаться на работоспособность данного форума, пользователей или представителей администрации</li></a>
            <ul>
        </div>
    </div>
</body>
</html>