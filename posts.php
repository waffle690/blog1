<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="posts.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
        <a href="addposts.php" class="aa1">Добавить свой пост +</a>
      </span>
    </div>
    <div class="oproekte">
      <h3 id="info">Посты</h3>
      <div class="sort-options">
        <a href="?sort=asc" class="sort-option" class="aa3">Сортировать по времени &uarr;</a>
        <span>|</span>
        <a href="?sort=desc" class="sort-option" class="aa3">Сортировать по времени &darr;</a>
      </div>
      <?php
      error_reporting(E_ALL);
      ini_set('display_errors', 'on');

      $host = 'localhost';
      $user = 'root';
      $pass = '';
      $db = 'blog';

      $conn = new mysqli($host, $user, $pass, $db);
      if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
      }

      $order_by = isset($_GET['sort']) && strtolower($_GET['sort']) == 'desc' ? 'DESC' : 'ASC';
      $query = "SELECT * FROM posts ORDER BY timestamp $order_by";
      $result = $conn->query($query);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          ?>
          <div class="posti">
            <div class="card" style="width: 100%;">
              <div class="card-body">
                <h5 class="card-title">
                  <a class="aa2" href="post.php?id=<?php echo $row['id']; ?>">
                    <?php echo htmlspecialchars($row["name"]); ?>
                  </a>
                </h5>
              </div>
            </div>
          </div>
          <br>
          <?php
        }
      } else {
        echo "Нет постов для отображения";
      }

      $conn->close();
      ?>
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