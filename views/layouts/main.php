<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Library</title>
</head>
<body>
<header>
    <div class="container">
        <div class="header_inner">
            <h1>Библиотека</h1>
            <nav class="header_nav">
                <?php
                if (!app()->auth::check()):
                    ?>
                    <a class="header_a" href="<?= app()->route->getUrl('/books') ?>">Просмотр книг</a>
                    <a class="header_a" href="<?= app()->route->getUrl('/login') ?>">Войти</a>
                <?php
                else:
                    if (app()->auth::checkRole()):
                    ?>
                        <a class="header_a" href="<?= app()->route->getUrl('/signup') ?>">Добавить сотрудника</a>
                    <?php
                    else:
                    ?>
                        <a class="header_a" href="#">Добавить читателя</a>
                    <?php
                    endif;
                    ?>
                <a class="header_a" href="#">Читатели</a>
                <a class="header_a" href="#">Добавить автора</a>
                <a class="header_a" href="#">Добавить книгу</a>
                <a class="header_a" href="<?= app()->route->getUrl('/logout')?>">Выход</a>
                <?php
                endif;
                ?>
            </nav>
        </div>
    </div>
</header>

<main>
    <?= $content ?? '' ?>
</main>

<footer>
    <div class="container">
        <p>Лицензия: №ЛО-77-01-005469 от 15 ноября 2018 г.</p>
        <p>Адрес: г.Томск, ул. Герцена, 18, стр. 2</p>
        <p>Телефон: 8 (495) 257-04-84</p>
        <p>Email: library@mail.ru</p>
        <p class="footer_role">© Библиотека 2023. Все права защищены.</p>
    </div>
</footer>

</body>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        height: 98vh;
    }

    .container {
        width: 1200px;
        margin: 0 auto;
    }

    /* header */
    header {
        background-color: lightblue;
        height: auto;
        padding: 20px 0;
    }

    .header_inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header_nav {
        display: flex;
    }

    .header_a {
        text-decoration: none;
        margin: 0 20px;
        color: black;
    }

    main {
        min-height: 79vh;
    }

    footer {
        background-color: lightblue;
        padding: 18px 0;
        font-size: 12px;
    }

    .footer_role {
        margin-top: 15px;
        font-size: 11px;
    }
</style>
</html>