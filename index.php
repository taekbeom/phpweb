<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lebedeva M.D.</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class=container>
            <div class="row">
                <div class="col-12 index mt-3" style="text-align: center;">
                    <h1 style="text-transform: uppercase;">Welcome</h1>
                    <?php
                        if (!isset($_COOKIE['User'])) {
                    ?>
                        <a href="/registration.php">Sign up</a> or <a href="/login.php">Log in</a>
                    <?php
                        } else {
                            $link = mysqli_connect('127.0.0.1', 'root', 'eve@123', 'sqldb');
                            $sql = "SELECT * FROM post";
                            $res = mysqli_query($link, $sql);
                            if (mysqli_num_rows($res) >  0) {
                                while ($post = mysqli_fetch_array($res)) {
                                    echo "<a href='/posts.php?id=" . $post["id"] . "'>" . $post['title'] . "</a><br>";
                                }
                               } else {
                                    echo "No posts";
                               }
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>