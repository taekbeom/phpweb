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
        <div class="navbar-container">
            <nav class="navbar custom-navbar navbar-expand-lg ">
                <div class="col-4 nav-logo ms-4 me-4"></div>
                    <li class="nav-item">
                        <div class="nav-text">About someone</div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-a" href="https://github.com/taekbeom">Here's my github</a>
                    </li>
            </nav>
        </div>
        <div class="container container-style">
            <div class="row">
                <div class="button-js col-12 mt-3">
                    <button id="button-1">Change</button>
                    <p class="mt-2" id="demo"></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="h-start">
                        Hello, fellow user <?php echo ($_COOKIE['User']); ?>
                    </h1>
                </div>
                <div class="col-12">
                    <form method="POST" action="profile.php">
                        <div class="row mt-2">
                            <input class="form" type="text" name="title" placeholder="title">
                        </div>
                        <div class="row mt-2">
                            <textarea name="text" cols="30" rows="10" placeholder="post content"></textarea>
                        </div>
                        <button type="submit" class="btn-reg mt-4" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container container-style mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card card-h">
                        <div class="card-body">
                            <h3>Someone is inside. . .</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4>This could have been me but there's no way i'm uploading my photo.</h4>
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-3 text-style">
                    <p>The sealed nevus uses a Specialized Physics Bug (i. e. an Outer Magic Dark Summons Bug) to plant negative thoughts in the human race. And the reason is because the nevus will soon awaken. Bick Hazard is coming.</p>
                </div>
                <div class="col-6">
                    <div class="row img-1">
                        <div class="img-overlay">Lebedeva M.D.</div>
                    </div>
                </div>
                <div class="col-3">
                    <p>One is at ease thus,—but less proud the carriage!
                        The forehead, free from mainstay or coercion,
                        Bends here, there, everywhere. But I, embracing
                        Hatred, she lends,—forbidding, stiffly fluted,
                        The ruff’s starched folds that hold the head so rigid;
                        Each enemy—another fold—a gopher,
                        Who adds constraint, and adds a ray of glory;
                        For Hatred, like the ruff worn by the Spanish,
                        Grips like a vice, but frames you like a halo!</p>
                </div>
            </div>
            <div class="row mt-2 justify-content-center">
                <div class="col-8 div-list">
                    <h4 style="text-transform: capitalize;">
                        <a href="https://www.teapuppies.com/characters/">cool tea puppies</a>
                    </h4>
                    <div class="card-set">
                        <div class="card">
                            <h5 class="card-title">Ryoku</h5>
                            <div class="card-body">
                                <img class="card-img-top" src="image/small_ryoku.png" alt="Ryoku">
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-title">Aru</h5>
                            <div class="card-body">
                                <img class="card-img-top" src="image/small_aru.png" alt="Aru">
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-title">Hana</h5>
                            <div class="card-body">
                                <img class="card-img-top" src="image/small_hana.png" alt="Hana">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="js/button.js"></script>
</html>
<?php
    require_once('db.php');
    
    $link = mysqli_connect('127.0.0.1', 'root', 'eve@123', 'sqldb');

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $body = $_POST['text'];

        if (!$title || !$body) die ('Some fields are empty, think again');
    
        $sql = "INSERT INTO post (title, body) VALUES ('$title', '$body')";
        
        if (!mysqli_query($link, $sql)) die ("Post cannot be added");
    }
?>