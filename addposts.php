<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addposts.css">
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
        <?php
        session_start();
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $db_name = 'blog';

        $link = mysqli_connect($host, $user, $password, $db_name);


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category_id = $_POST['category_id'];

            if (!empty($title) && !empty($content) && !empty($category_id)) {
                $query = "INSERT INTO posts (name, text, category_id) VALUES ('$title', '$content', $category_id)";
                $result = mysqli_query($link, $query);

                if ($result) {
                    echo 'Пост успешно добавлен';
                    header('Location: posts.php');
                } else {
                    echo 'Ошибка при добавлении поста: ' . mysqli_error($link);
                }
            } else {
                echo 'Заполните все поля формы';
            }
        }
        ?>

        <div class="centered-form">
            <form method="POST" action="">
                <label for="title">Заголовок поста:</label>
                <input type="text" id="title" name="title" required>

                <label for="post-content">Текст поста:</label>
                <textarea id="content" name="content" required></textarea>
                <br>
                <label for="category_id" class="cat">Выберите категорию:</label>
                <select name="category_id" id="category_id">
                    <option value="1">Артисты</option>
                    <option value="2">Музыка</option>
                    <option value="3">Новости</option>
                    <option value="4">Другое</option>

                </select>
                <br> <input type="submit" value="Опубликовать">
            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="footer">
            <p>&copy;
                <?php
                $current_year = date('Y');
                echo $current_year;
                ?> М. Пивненко
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
</body>

</html>