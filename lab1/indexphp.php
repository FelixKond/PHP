<!doctype html>
    <head>
        <html lang="en">
        <title>Тестируем PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <header>
        <img alt="poly" src="https://www.akm.ru/upload/iblock/349/2.jpg" width="327">
        <h1 style="text-align: center">Ptivet, mir!!</h1>
    </header>
    <main>
        <?php
        foreach (range(0, 8) as $number) {
            echo $number . PHP_EOL;
            echo 'Hello, World!' . PHP_EOL;
            echo '<br>';
        }
        ?>

    </main>
    <footer>
        <p style="text-align: center; font-size: 20px">Создать веб-страницу с динамическим контентом. Загрузить код в удаленный репозиторий. Залить на хостинг.</p>
    </footer>
    </body>

</html>