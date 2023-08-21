<?php
error_reporting(E_ALL);
ini_set("display_errors", "on");

$host = "localhost";
$user = "root";
$pass = "";
$db = "blog";
session_start();

$link = mysqli_connect($host, $user, $pass, $db);

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
            <link rel="stylesheet" href="music.css">
</head>

<body>
    <div class="body">
        <div class="container custom-padding">
            <div class="row justify-content-center">
                <div class="col">
                    <h1>SoundScape</h1>
                </div>
                <div class="col">
                    <a href="music.php" class="aa">Музыка</a>
                </div>
                <div class="col">
                    <a href="posts.php" class="aa">Посты</a>
                </div>
                <div class="col">
                    <a href="main.php" class="aa">О проекте</a>
                </div>
            </div>
        </div>
        <div class="logo">
            <span>
                <h1>SoundScape</h1>
                <h3>Your Life. Your Sounds</h3>
            </span>
        </div>
        <div class="oproekte">
            <h3>Как писать песни: памятка для новичков</h3>
            <div class="img-container">
                <img src="https://skillbox.ru/upload/setka_images/13405302082021_332dedb84ed7b93c55004c0084af50db76142086.jpg"
                    alt="actor" width="200px" height="150px">
                <div class="text-container">
                    <p>Gfire M - преподаёт и исполняет музыку уже более 25 лет. Даёт уроки вокала и сочинительства
                        песен, игры на фортепиано и фолк-гитаре, диджеинга и йоги ученикам от пяти до ста пяти лет : —
                        как онлайн, так и очно. Живёт в «мировой столице живой музыки» Остине, штат Техас, США.</p>
                </div>
            </div>
            <h3>Как написать слова песни</h3>
            <p>Песня — лаконичная творческая форма. Поэтому важно, чтобы её текст был объединён какой-то общей идеей.
                Если мыслей много, не пытайтесь все их вместить в одну песню — лучше напишите несколько разных.</p>
            <br>
            <p>С чего бы вы ни начинали, полезно описать идею песни одним-двумя предложениями — сделать логлайн. Он
                соберёт вас, поможет не растечься мыслью по древу, всегда напомнит о сути.
                Для песни «Битлз» Ticket to ride подобный логлайн мог бы выглядеть так: «Моя девушка уходит от меня. И
                мне грустно, но ей всё равно» (в оригинале: «My girlfriend is moving away from me and I am sad, but she
                doesn’t care». — Пер.).</p>
            <br>
            <p>Кстати, вовсе не обязательно писать все слова за один присест: многие сонграйтеры ограничиваются куплетом
                или припевом и продолжают работу позднее, когда вернётся вдохновение.</p>
            <br>
            <h3>Сочиняем мелодию, подбираем аккорды</h3>
            <br>
            <p>Для музыкальных экспериментов отлично подходит диктофон на смартфоне или компьютере. Напевайте свой текст
                на разные лады. Проделайте это хотя бы трижды и переслушайте, что получилось.</p>
            <br>
            <p>А кто-то, наоборот, предпочитает начинать с аккордов. Сыграйте несколько аккордов на гитаре или пианино и
                запишите на диктофон. Напевайте текст под них, сравнивайте.
                Или попробуйте совместить всё сразу: текст, придуманную мелодию и выбранные аккорды.</p>
            <br>
            <p>Если не получается придумать удачную последовательность аккордов, можно позаимствовать её из другой песни
                с похожим стилем и ритмом. Главное — не копировать саму мелодию: она защищена авторским правом (а вот
                последовательность аккордов как таковая — нет).</p>
            <h3>Придумываем название</h3>
            <br>
            <p>Песне нужно хорошее название! Кто-то выносит в него хук (самую цепляющую строчку), кто-то — повторяющиеся
                слова из припева. Единого рецепта тут нет: название может быть даже описательным, отвлечённым, то есть
                без единого слова из самого текста.</p>
            <br>
            <h3>Полируем результат</h3>
            <br>
            <p>Первая версия готова? Теперь дайте своей песне отлежаться. Хотя бы пару дней даже не вспоминайте о ней.
                Вы вернётесь со свежим взглядом и слухом — и песня предстанет перед вами в новом свете. Скорее всего,
                вам захочется доработать текст или заменить какие-то аккорды — и ваше творение зазвучит ещё круче.
                Готовую песню можно испытать на публике. Например, исполнить на вечере свободного микрофона или хотя бы
                перед вашим музыкальным наставником. Реальное исполнение и обратная связь помогут исправить недочёты и
                сгладить неровности, которых вы сами не замечали.</p>
            <br>
            <p>Ещё одна отличная идея — записать своё исполнение и выложить в интернет. В наш век это легко сделать даже
                дома (достаточно хорошего микрофона и специального софта). Пусть вашу работу оценят потенциальные
                поклонники и другие артисты. А может, талант ваш приглянётся даже музыкальным продюсерам.</p>
            <h4>Слушать топ 3 хитов лучших жанров</h4>
            <?php
            $selectedGenre = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $selectedGenre = $_POST["genre"];
            }
            ?>
            <form action="music.php" method="post">
                <label for="genre">Выберите жанр:</label>
                <select name="genre" id="genre">
                    <option value="Рок музыка">Рок музыка</option>
                    <option value="Поп музыка">Поп музыка</option>
                    <option value="Хип-Хоп музыка">Хип-Хоп музыка</option>
                </select>
                <input type="submit" value="Выбрать">
            </form>
            <?php
            if (!empty($selectedGenre)) {
                echo "<p>Вы выбрали: " . $selectedGenre . "</p>";

                if ($selectedGenre == "Рок музыка") {
                    echo '<p>Песня 1</p><audio controls><source src="musix/rok1.mp3" type="audio/mpeg"></audio><br><br>';
                    echo '<p>Песня 1</p><audio controls><source src="musix/rok2.mp3" type="audio/mpeg"></audio><br><br>';
                    echo '<p>Песня 1</p><audio controls><source src="musix/rok3.mp3" type="audio/mpeg"></audio><br><br>';
                } elseif ($selectedGenre == "Поп музыка") {
                    echo '<p>Песня 1</p><audio controls><source src="musix/pop1.mp3" type="audio/mpeg"></audio><br><br>';
                    echo '<p>Песня 1</p><audio controls><source src="musix/pop2.mp3" type="audio/mpeg"></audio><br><br>';
                    echo '<p>Песня 1</p><audio controls><source src="musix/pop3.mp3" type="audio/mpeg"></audio><br><br>';
                } elseif ($selectedGenre == "Хип-Хоп музыка") {
                    echo '<p>Песня 1</p><audio controls><source src="musix/xipxop1.mp3" type="audio/mpeg"></audio><br><br>';
                    echo '<p>Песня 1</p><audio controls><source src="musix/xipxop2.mp3" type="audio/mpeg"></audio><br><br>';
                    echo '<p>Песня 1</p><audio controls><source src="musix/xipxop3.mp3" type="audio/mpeg"></audio><br><br>';
                }
            }
            ?>

            <br>
            <br>
        </div>
        <div class=" footer">
            <p>©
                <?php
                $current_year = date('Y');
                echo $current_year;
                ?> М. Пивненко
            </p>
        </div>
    </div>
</body>

</html>