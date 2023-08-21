<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="post.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
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
      <?php
      error_reporting(E_ALL);
      ini_set('display_errors', '1');

      $host = 'localhost';
      $user = 'root';
      $pass = '';
      $db = 'blog';

      $conn = new mysqli($host, $user, $pass, $db);
      if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
      }

      $post_id = (int) $_GET['id'];

      if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['comment_text'])) {
        $comment_text = $_POST['comment_text'];

        $stmt = $conn->prepare("INSERT INTO comments (post_id, text) VALUES (?, ?)");
        $stmt->bind_param("is", $post_id, $comment_text);
        $stmt->execute();
      }

      $query = "SELECT * FROM posts WHERE id = $post_id";
      $result = $conn->query($query);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <div class="card" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo htmlspecialchars($row["name"]); ?>
            </h5>
            <p class="card-text">
              <?php
              echo htmlspecialchars($row["text"]);
              ?>
            </p>
            <button id="myButton" type="submit" name="likeButton">Лайк</button>
            <button id="myButton1" type="submit" name="dislikeButton">Дизлайк</button>
          </div>
        </div>
        <h6 class="card-subtitle mb-2 text-muted">Комментарии:</h6>
        <?php
        $comments_query = "SELECT * FROM comments WHERE post_id = $post_id ORDER BY timestamp";
        $comments_result = $conn->query($comments_query);

        if ($comments_result->num_rows > 0) {
          while ($comment_row = $comments_result->fetch_assoc()) {
            ?>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
              <?php echo htmlspecialchars($comment_row["text"]); ?>
            </div>
            <?php
          }
        } else {
          echo "Нет комментариев";
        }
        ?>

        <form method="post" action="">
          <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
          <div class=" form-group">
            <label for="comment_<?php echo $post_id; ?>">Добавить комментарий:</label>
            <input class=" form-control" id="comment_<?php echo $post_id; ?>" name=" comment_text" rows="3"></input>
          </div>
          <button type="submit" class="btn btn-dark">Отправить комментарий</button>
        </form>

        <?php
      } else {
        echo "Пост не найден";
      }

      $conn->close();
      ?>
    </div>
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