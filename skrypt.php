<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/styl.css">
</head>
<body>
    <header>
        <div class="row-fluid">
            <div class="span12">
                <div class="span6">
                    <h1 class="muted display-1 text-md-center">Ogórkowe marzenie</h1>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="">Nawigacja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="?pokaz=""">Strona Główna
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pokaz=2">Ogórki kiszone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pokaz=3">Ogórki korniszone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pokaz=4">Ogórki małosolne</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pokaz=5">Ogórki świeże</a>
                </li>
            </ul>
        </div>
    </nav>
    <section>
        <?php
            if($_GET['pokaz'] == ""){
                include("index.php");
            }
            if($_GET['pokaz'] == "2"){
                include("kiszone.php");
            }
            if($_GET['pokaz'] == "3"){
                include("korniszone.php");
            }
            if($_GET['pokaz'] == "4"){
                include("malosolne.php");
            }
            if($_GET['pokaz'] == "5"){
                include("swieze.php");
            }
        ?>
    </section>
    <div class="modal-footer">To jest strona o ogórkach wykonana przez Kamila Schilling</div>
</body>
</html>