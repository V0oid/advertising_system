<?php
session_start();
$BASE_FOLDER = "/advertising_system/";
$BASE_URL = "http://" . $_SERVER['HTTP_HOST'] . $BASE_FOLDER;

if (isset($_GET['id'])) {
  $id =  $_GET['id'];
  $connect = mysqli_connect("localhost", "root", "", "advertising_system");
  $result = mysqli_query($connect, "SELECT * FROM `advertising_offers`
    LEFT JOIN advertising_business ON advertising_business.business_id = advertising_offers.offers_business_id
    WHERE offers_id = $id;");

  $languagesResult = mysqli_query($connect, "SELECT * FROM `advertising_languages`
    INNER JOIN advertising_languages_experience ON advertising_languages_experience.languages_experience_id = advertising_languages.languages_experience_id
    WHERE offer_id = $id");

  $additionalExperienceResult = mysqli_query($connect, "SELECT * FROM `advertising_additional_experience` WHERE offer_id = $id");

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  } else {
    echo "Nie znaleziono ogłoszenia";
    exit();
  }
} else {
  echo "Nie znaleziono ogłoszenia";
  exit();
}
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

    <div class="mt-3 bg-light p-3">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-2">
            <img src="https://recbot.pl/wp-content/uploads/recbold-logo_sample_3-1.png" class="img-fluid bg-white">
          </div>
          <div class="col-md-10">
            <h3><?php echo $row['offers_name'] ?></h3>
            <div class="d-flex align-items-center">
              <p class="mr-3 mb-0"><?php echo $row['business_name'] ?></p>
              <a href="#" class="link-info p-2 ">Pokaz Profil</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-4 bg-light p-4">
      <div class="row">
        <div class="col-md-12">
          <div class="banner">
            <h2 class="text-start text-primary ">DLACZEGO CIEBIE POTRZEBUJEMY?</h2>
            <hr>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-start p-3">FOR OUR CLIENT WE ARE RECRUITING FOR THE POSITION OF DEVOPS ENGINEER.
            This is a technology company dedicated serving one of the largest financial groups in the world.

            What they say about themselves:
            Our trademark is technology and experience. Our IT services include: IT security, business applications, hosting, cloud solutions.
            By joining the team you will be exposed to leading technologies: Microsoft Azure, Google Loud Platform, Java, .Net, Python, Linux, Kubernetes, Ansible, Kafka, Spark, ElasticSearch, VMware and many more.
            In many cases we are Beta-Testing company.
            In our organization, the world of technology goes hand in hand with business and operational services.

            Based in Katowice, you will join an international team. You will participate in agile work processes such as daily stand-ups, sprint reviews, and planning. Together with the Product Owner, the team (Squad) works on common goals and a shared backlog.
          </p>
        </div>
      </div>

      <div class="container mt-3">
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-primary">CO JEST DLA NAS WAŻNE</h2>
            <ul class="list-unstyled">
              <?php
              $wymagania = explode(';', $row['offers_requirements']);
              foreach ($wymagania as $w) :
              ?>
                <li><img src="done.png"><?php echo $w; ?></i></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="col-md-6">
            <h2 class="text-primary">DOCENIMY</h2>
            <ul class="list-unstyled">
              <?php while ($a = $additionalExperienceResult->fetch_assoc()) : ?>
                <li><img src="done.png"></i><?php echo $a['additional_experience_name']; ?></li>
              <?php endwhile; ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="container mt-3">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-primary">Profil Zadań</h2>
            <hr>
            <div class="d-flex align-items-center justify-content-between">
              <div class="col-6">
                <h5>Maintain standardized and</h5>
              </div>
              <div class="col-6">
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="col-6">
                <h5>Maintain standardized and highly automated infrastructure services</h5>
              </div>
              <div class="col-6">
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="col-6">
                <h5>Maintain standardized and highly automated</h5>
              </div>
              <div class="col-6">
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">20%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="banner">
              <h2 class="text-start text-primary ">ZNAJOMOŚĆ JĘZYKÓW</h2>
              <hr>
            </div>
          </div>
          <div class="row">
            <?php while ($l = $languagesResult->fetch_assoc()) : ?>
              <div class="col-12 col-md-6">
                <h3 class="p-2"><?php echo $l['languages_name'] ?></h3>
              </div>
              <div class="col-12 col-md-6">
                <div class="container d-flex flex-wrap p-3">
                  <p class="me-3 link-info"><?php echo $l['languages_experience_name'] ?></p>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>

      <div class="container mt-3">
        <div class="row">
          <div class="col-md-12">
            <div class="banner">
              <h2 class="text-start text-primary">BENEFITY</h2>
              <hr>
            </div>
          </div>
          <div class="row">
            <?php
            $benefity = explode(";", $row['business_benefits']);
            $totalElements = count($benefity);
            $columns = min($totalElements, 3);
            $colClass = "col-md-" . (12 / $columns);
            foreach ($benefity as $b) :
            ?>
              <div class="<?php echo $colClass ?>  benefit d-flex align-items-center">
                <img src="done.png" class="mr-3">
                <p class="mb-0"><?php echo $b; ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>


      <div class="container mt-4">
        <div class="row">
          <div class="col-md-12">
            <div class="banner">
              <h2 class="text-start text-primary">DOWIEDZ SIĘ WIĘCEJ</h2>
              <hr>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-4 d-flex align-items-center">
            <h7 class="text-secondary">Lokalizacja główna:</h7>
          </div>
          <div class="col-4 d-flex align-items-center">
            <h7 class="text-secondary">Rok założenia:</h7>
          </div>
          <div class="col-4 d-flex align-items-center">
            <h7 class="text-secondary">Wielkość firmy:</h7>
          </div>
        </div>

        <div class="row">
          <div class="col-4 d-flex align-items-center">
            <img src="l.png" class="mr-2">
            <h7 class="text-secondary"><?php echo $row['business_address'] ?></h7>
          </div>
          <div class="col-4">
            <img src="s.png" class="mr-2">
            <h7 class="text-secondary">2019</h7>
          </div>
          <div class="col-4">
            <img src="g.png" class="mr-2">
            <h7 class="text-secondary">11</h7>
          </div>
        </div>
        <p class="text-start mt-3"> <?php echo $row['business_description'] ?></p>
      </div>
      <div class="container mt-3 text-center">
        <button onclick="scrollToTop()" class="btn scroll-to-top-btn">
          <img src="a.png">
        </button>
      </div>

      <div class="container text-center">
        <div class="mt-2">
          <button class="btn btn-primary me-2">Aplikuj Teraz</button>
          <button class="btn btn-success">Poleć Kandydata</button>
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