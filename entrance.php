<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="entrance.css">
  <title>Document</title>
</head>

<body>

  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'blog';
  session_start();

  $link = mysqli_connect($host, $user, $pass, $db);

  ?>
  <div class="logo">
    <span>
      <h1>SoundScape</h1>
      <h3>Your Life. Your Sounds</h3>
    </span>
  </div>
  <div class="centered-form">
    <form method="POST">
      <h2 style="text-align: center;">Вход</h2>
      <label for="username">Имя пользователя</label>

      <input type="text" id="username" name="login" required>
      <label for="password">Пароль</label>
      <input type="password" id="password" name="password" required><br>

      <input type="submit" value="Войти">
      <?php
      if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE login='$login'";
        $query = "SELECT * FROM user WHERE password='$password'";
        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_assoc($result);
          $salt = $row['salt'];
          if (password_verify($salt . $password, $row['password'])) {
            $_SESSION['id'] = $row['id'];
            header('Location: main.php');
          } else {
            echo '<p><span style="color: red"> Неверное имя пользователя или пароль.</span></p>';
          }
        } else {
          echo '<p><span style="color: red"> Неверное имя пользователя или пароль.</span></p>';
        }
      }
      ?>
    </form>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"></script>
</body>

</html>