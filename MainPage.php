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

    <!-- SEARCHBAR -->
    <div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-9">
          <div class="card p-4 mt-3">
            <h3 class="heading mt-5 text-center">Jakiej Pracy Szukasz?</h3>
            <div class="d-flex justify-content-center px-5">
              <div class="search">
                <input type="text" class="search-input form-control" placeholder="Search..." name="">
                <button class="btn btn-primary search-icon">SZUKAJ</button>
              </div>
            </div>
            <div class="row mt-4 g-1 px-4 mb-5">
              <div class="col-md-4">
                <div class="card-inner p-3 d-flex flex-column align-items-center">
                  <img src="https://i.imgur.com/Mb8kaPV.png" width="50">
                  <div class="text-center mg-text">
                    <span class="mg-text">Kategoria</span>
                    <div class="dropdown mt-2">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Wybierz kategorie
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                        <li><input type="checkbox" class="form-check-input" id="category1"><label class="form-check-label" for="category1">Kategoria 1</label></li>
                        <li><input type="checkbox" class="form-check-input" id="category2"><label class="form-check-label" for="category2">Kategoria 2</label></li>
                        <li><input type="checkbox" class="form-check-input" id="category3"><label class="form-check-label" for="category3">Kategoria 3</label></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-inner p-3 d-flex flex-column align-items-center">
                  <img src="https://i.imgur.com/ueLEPGq.png" width="50">
                  <div class="text-center mg-text">
                    <span class="mg-text">Wynagrodzenie</span>
                    <div class="dropdown mt-2">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="salaryDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Wybierz wynagrodzenie
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="salaryDropdown">
                        <li><input type="checkbox" class="form-check-input" id="salary1"><label class="form-check-label" for="salary1">Wynagrodzenie 1</label></li>
                        <li><input type="checkbox" class="form-check-input" id="salary2"><label class="form-check-label" for="salary2">Wynagrodzenie 2</label></li>
                        <li><input type="checkbox" class="form-check-input" id="salary3"><label class="form-check-label" for="salary3">Wynagrodzenie 3</label></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-inner p-3 d-flex flex-column align-items-center">
                  <img src="https://i.imgur.com/tmqv0Eq.png" width="50">
                  <div class="text-center mg-text">
                    <span class="mg-text">Lokalizacja</span>
                    <div class="dropdown mt-2">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="locationDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Wybierz lokalizację
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="locationDropdown">
                        <li><input type="checkbox" class="form-check-input" id="location1"><label class="form-check-label" for="location1">Lokalizacja 1</label></li>
                        <li><input type="checkbox" class="form-check-input" id="location2"><label class="form-check-label" for="location2">Lokalizacja 2</label></li>
                        <li><input type="checkbox" class="form-check-input" id="location3"><label class="form-check-label" for="location3">Lokalizacja 3</label></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SEARCHBAR -->

    <!-- ITEM -->
    <div class="container mt-5 mb-3">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-3 mb-2">
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                <div class="ms-2 c-details">
                  <h6 class="mb-0">Mailchimp</h6> <span>1 days ago</span>
                </div>
              </div>
              <div class="badge"> <span>Design</span> </div>
            </div>
            <div class="mt-5">
              <h3 class="heading">Senior Product<br>Designer-Singapore</h3>
              <a href="ItemPage.php"><button class="btn btn-primary mt-2">Sprawdź</button> </a>
              <div class="mt-3">
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="mt-3"> <span class="text1">32 Applied <span class="text2">of 50 capacity</span></span> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 mb-2">
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                <div class="ms-2 c-details">
                  <h6 class="mb-0">Mailchimp</h6> <span>1 days ago</span>
                </div>
              </div>
              <div class="badge"> <span>Design</span> </div>
            </div>
            <div class="mt-5">
              <h3 class="heading">Senior Product<br>Designer-Singapore</h3>
              <button class="btn btn-primary mt-2 ">Sprawdź</button>
              <div class="mt-3">
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="mt-3"> <span class="text1">32 Applied <span class="text2">of 50 capacity</span></span> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 mb-2">
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                <div class="ms-2 c-details">
                  <h6 class="mb-0">Mailchimp</h6> <span>1 days ago</span>
                </div>
              </div>
              <div class="badge"> <span>Design</span> </div>
            </div>
            <div class="mt-5">
              <h3 class="heading">Senior Product<br>Designer-Singapore</h3>
              <button class="btn btn-primary mt-2 ">Sprawdź</button>
              <div class="mt-3">
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="mt-3"> <span class="text1">32 Applied <span class="text2">of 50 capacity</span></span> </div>
              </div>
            </div>
          </div>
        </div>
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