<?php
session_start();
$BASE_FOLDER = "/advertising_system/";
$BASE_URL = "http://" . $_SERVER['HTTP_HOST'] . $BASE_FOLDER;

// Ustalanie liczby rekordów na stronę
$records_per_page = 10;

// Ustalanie aktualnej strony (domyślnie 1)
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) {
    $current_page = 1;
}

// Obliczanie wartości offset
$offset = ($current_page - 1) * $records_per_page;

$connect = mysqli_connect("localhost", "root", "", "advertising_system");
$result = mysqli_query($connect, "SELECT * FROM advertising_offers
    INNER JOIN advertising_business ON advertising_business.business_id = advertising_offers.offers_business_id
    LIMIT $records_per_page OFFSET $offset;");

$totalRecordsResult  = mysqli_query($connect, "SELECT Count(*) FROM advertising_offers");
$totalRecords = $totalRecordsResult->fetch_array()[0];

$total_pages = ceil($totalRecords / $records_per_page);
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
    <div class="container mt-3">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg ">
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
                            <a class="nav-link" href="# ">Blog</a>
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
        <div class="container mt-4 bg-light p-4">
            <div class="row">
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <a class="d-block text-decoration-none text-black" href="<?php echo $BASE_FOLDER . "ItemPage.php?id=" . $row['offers_id'] ?>">
                        <div class="container">
                            <span class="fs-2 fw-bold"><?php echo $row['offers_name'] ?></span>
                            <span>,</span>
                            <span class="fs-5"><?php echo $row['business_name'] ?></span>
                            <br>
                            <div class="d-flex align-items-center">
                                <span><?php echo $row['offers_reward'] ?>&nbsp;PLN</span>
                            </div>
                        </div>
                        <hr>
                    </a>
                <?php endwhile; ?>
            </div>
            <div class="row">
                <div class="pagination">
                    <?php if ($current_page > 1) : ?>
                        <a href="?page=<?php echo $current_page - 1; ?>">&laquo; Poprzednia</a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                        <?php if ($i == $current_page) : ?>
                            <strong><?php echo $i; ?></strong>
                        <?php else : ?>
                            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if ($current_page < $total_pages) : ?>
                        <a href="?page=<?php echo $current_page + 1; ?>">Następna &raquo;</a>
                    <?php endif; ?>
                </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
        <script>
            function scrollToTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
</body>

</html>