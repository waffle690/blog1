<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="register.css">
  <title>Document</title>
</head>

<body>


  <div class="logo">
    <span>
      <h1>SoundScape</h1>
      <h3>Your Life. Your Sounds</h3>
    </span>
  </div>
  <div class="centered-form">
    <form method="POST">
      <h2 style="text-align: center;">Регистрация</h2>
      <label for="username">Имя пользователя (от 4 до 10 символов):</label>

      <input type="text" id="username" name="login" required>
      <label for="password">Пароль (от 8 до 16 символов):</label>

      <input type="password" id="password" name="password" required><br>
      <label for="password">Подтверждение пароля:</label>

      <input type="password" id="confirm" name="confirm" required><br>


      <input type="submit" value="Зарегистрироваться">

      <?php
      error_reporting(E_ALL);
      ini_set('display_errors', 'on');

      $host = 'localhost';
      $user = 'root';
      $pass = '';
      $db = 'blog';
      session_start();

      $link = mysqli_connect($host, $user, $pass, $db);

      function generateSalt()
      {
        $salt = '';
        $saltLength = 8;

        for ($i = 0; $i < $saltLength; $i++) {
          $salt .= chr(mt_rand(33, 126));
        }

        return $salt;
      }

      if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['confirm'])) {
        if ($_POST['password'] == $_POST['confirm']) {
          if (mb_strlen($_POST['login']) >= 4 && mb_strlen($_POST['login']) < 10 && mb_strlen($_POST['password']) >= 8 && mb_strlen($_POST['password']) <= 16) {

            $login = $_POST['login'];
            $salt = generateSalt();
            $password = password_hash($salt . $_POST['password'], PASSWORD_DEFAULT);
            $query = "SELECT * FROM user WHERE login='$login'";
            $result = mysqli_query($link, $query);

            if (mysqli_num_rows($result) == 0) {
              $query = "INSERT INTO user SET login='$login', password='$password', salt='$salt'";
              mysqli_query($link, $query) or die(mysqli_error($link));
              $id = mysqli_insert_id($link);
              $_SESSION['id'] = $id;
              header('Location: entrance.php');
            } else {
              echo '<p><span style="color: red"> Этот логин уже используется, выберите другой.</span></p>';
            }
          } else {
            echo '<p><span style="color: red"> Логин или пароль несоответствует требованиям.</span></p>';
          }
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