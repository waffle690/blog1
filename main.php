<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

  <?php
  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db_name = 'blog';

  $link = mysqli_connect($host, $user, $password, $db_name);

  $query = "SELECT * FROM users";
  $result = mysqli_query($link, $query);
  ?>

  <div class="body">
    <div class="container custom-padding ">
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
          <a href="#info" class="aa">О проекте</a>
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

      <h3 id="info">О проекте</h3>

      <p>Мы, впервую очередь некоммерческий проект,<br> ориентированный на музыкантов и людей, работающих со звуком.
        <br> Мы — сообщество музыкантов, на страницах нашего ресурса,<br> мы делимся полезной и актуальной информацией
        с
        нашими<br> посетителями и говорим о способах продвижения.<br> SoundScape — является A&R компанией, энтузиастом
        <br>в
        помощи по изданию музыки.<br> Мы являемся партнером дистрибьютора музыкального и видео контента<br>
        RecordUnion,
        который размещается бесплатно на 1 год у наших партнеров<br> (для получения 1 года бесплатно — запросите у нас
        инвайт) в мировых онлайн магазинах <br> (Amazon, iTunes, 7Digital, и прочих), в маркетинговых сетях<br> (Best
        Buy,
        MediaMarkt) и стриминговых сервисах (Napster).<br> В наших целях нет соперничества с дистрибьюторами мирового
        масштаба,<br> мы легально размещаем вашу музыку у наших партнеров, за что партнеры<br> получают 15% c продаж +
        первые
        $5 заработанные артистом,<br> после которых музыканты и лейблы получают свои 85%.<br> В любой момент договор с
        нами
        может быть свободно<br> расторгнут по вашему желанию. Мы сотрудничаем как с рекорд лейблами, <br> так и с
        независмыми
        музыкантами. Сотрудничая с нами, вы имеете <br> рекордный минимум затрат и 85% c продаж альбомов и
        синглов.<br>
        Мы
        намерены делиться опытом в продажах, обсуждать, отвечать на задаваемые вопросы,<br> затрагивать интересующие и
        волнующие темы на нашем ресурсе.<br> Мы информационное поле, где будет сосредотачиваться материал,<br> который
        вам
        прийдется осваивать самостоятельно для своего продвижения.<br> Все мы музыканты с общими целями. У нас сегодня
        есть<br> огромная возможность по обсуждению вопросов продвижения, издания и продаж.<br> Если у Вас имеется
        удачный
        опыт, обязательно поделитесь им.<br> В наши времена наибольший итог зависит от качества материала, и бояться
        выдать тайну,<br> которая делает успешным Вас, не стоит. Однако, Вы можете поспособствовать продвижению
        молодых
        музыкантов и групп. Мы будем рады дать старт вашему продвижению, и пусть Вы со временем добъетесь всех
        желаемых успехов!
      </p>
    </div>
    <br>
    <div class="footer">
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