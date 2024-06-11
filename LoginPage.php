<?php
session_start();
$BASE_FOLDER = "/advertising_system/";
$BASE_URL = "http://" . $_SERVER['HTTP_HOST'] . $BASE_FOLDER;

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecBot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3 ">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo $BASE_FOLDER . "MainPage.php" ?>">TPRACA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-wrap">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo $BASE_FOLDER . "Offers.php" ?>">Oferty pracy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pracodawcy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Misja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontakt</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-lg-0">
                        <li class="nav-item">
                            <button class="btn btn-danger rounded-2 me-3 mb-2 mb-lg-0 ">Dodaj ofertę</button>
                        </li>
                        <li class="nav-item">
                            <?php if (isset($_SESSION['user_id'])) : ?>
                                <a class="btn btn-info rounded-2 me-3" href="<?php echo $BASE_FOLDER . "userPage.php" ?>">Profil użytkownika</a>
                                <a class="btn btn-danger rounded-2 me-3" href="<?php echo $BASE_FOLDER . "logout.php" ?>">Wyloguj się</a>
                            <?php else : ?>
                                <a class="btn btn-danger rounded-2 me-3" href="<?php echo $BASE_FOLDER . "LoginPage.php" ?>">Zaloguj się</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NAVBAR -->

        <!-- ITEM -->
        <div class="container mt-5 mb-3">
            <div class="row">
                <h2>Logowanie</h2>
                <form action="login.php" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br><br>
                    <label for="password">Hasło:</label>
                    <input type="password" id="password" name="password" required><br><br>
                    <button type="submit">Zaloguj</button>
                </form>
            </div>
        </div>
        <!-- ITEM -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</body>

</html>
<style>
    .card {
        border: none;
        background: #eee;
    }

    .search {
        width: 100%;
        margin-bottom: auto;
        margin-top: 20px;
        height: 50px;
        background-color: #fff;
        padding: 10px;
        border-radius: 5px;
    }

    .search-input {
        color: white;
        border: 0;
        outline: 0;
        background: none;
        width: 0;
        margin-top: 5px;
        caret-color: transparent;
        line-height: 20px;
        transition: width 0.4s linear
    }

    .search .search-input {
        padding: 0 10px;
        width: 100%;
        caret-color: #536bf6;
        font-size: 19px;
        font-weight: 300;
        color: black;
        transition: width 0.4s linear;
    }

    .search-icon {
        height: 34px;
        width: 34px;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        background-color: #536bf6;
        font-size: 10px;
        bottom: 30px;
        position: relative;
        border-radius: 5px;
    }

    .search-icon:hover {

        color: #fff !important;
    }

    a:link {
        text-decoration: none
    }

    .card-inner {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
        border: none;
        cursor: pointer;
        transition: all 2s;
    }

    .card-inner:hover {

        transform: scale(1.1);

    }

    .mg-text span {

        font-size: 12px;

    }

    .mg-text {

        line-height: 14px;
    }
</style>