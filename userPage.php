<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: LoginPage.php");
}
$BASE_FOLDER = "/advertising_system/";
$BASE_URL = "http://" . $_SERVER['HTTP_HOST'] . $BASE_FOLDER;
$id = $_SESSION['user_id'];
$connect = mysqli_connect("localhost", "root", "", "advertising_system");
$result = mysqli_query($connect, "SELECT * FROM advertising_users WHERE users_id = '$id'");
$user = $result->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UserPage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3 ">
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
  </div>


  <section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://i1.kwejk.pl/k/obrazki/2020/12/moH4v2EmnwT0MmYQ.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3"><?php echo $user['users_name'] . " " . $user['users_surname'] ?></h5>
              <p class="text-muted mb-1">Full Stack Developer</p>
              <p class="text-muted mb-4"><?php echo $user['users_residence']; ?></p>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary">Obserwuj</button>
                <button type="button" class="btn btn-outline-primary ms-1">Napisz</button>
              </div>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning">STRONA</i>
                  <p class="mb-0">https://mdbootstrap.com</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg" style="color: #333333;">GITHUB</i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;">TWITTER</i>
                  <p class="mb-0">@mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;">INSTAGRAM</i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;">FACEBOOK</i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Imie Nazwisko</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $user['users_name'] . " " . $user['users_surname'] ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $user['users_mail'] ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Numer Telfonu</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $user['users_phone_number'] ?></p>
                </div>
              </div>
              <hr>


              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Addres</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $user['users_residence']; ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <h3>OPIS</h3>
                  <hr>
                  <?php echo $user['users_description']; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">Doswiadczenie</span>
                  </p>
                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">Jezyki</span>
                  </p>
                  <p class="mb-1" style="font-size: .77rem;">Jezyk ang</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Jezyk niemiecki</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</html>