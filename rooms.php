<?php
session_start();
include ("kozos.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Szobáink</title>
  <link rel="stylesheet" href="styles/styles.css" />
  <link rel="stylesheet" href="styles/rooms.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Atma&family=Merriweather&display=swap" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/cc61dadd4d.js" crossorigin="anonymous"></script>
</head>

<body>
  <aside id="side-drawer">
    <header>
      <div class="logo">Enigma</div>
      <a href="#" class="side-drawer-btn">
        <span class="lines"></span>
        <span class="lines"></span>
        <span class="lines"></span>
      </a>
    </header>
    <nav>
      <ul>
        <li><a href="index.php">Főoldal</a></li>
        <li><a href="" class="active-menu">Szobáink</a></li>
        <li><a href="about.php">Rólunk</a></li>
        <li><a href="booking_page.php">Foglalás</a></li>
        <?php if (!isset($_SESSION["user"]) || empty($_SESSION["user"])): ?>
          <li><a href="signin_page.php">Bejelentkezés/Regisztráció</a></li>
        <?php else: ?>
          <li><a href="user_page.php">Felhasználói adatmódosítás</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </aside>
  <header>
    <a href="#side-drawer" class="side-drawer-btn">
      <span class="lines"></span>
      <span class="lines"></span>
      <span class="lines"></span>
    </a>
    <div class="logo">Enigma</div>
    <ul>
      <li><a href="index.php">Főoldal</a></li>
      <li class="active-menu"><a href="">Szobáink</a></li>
      <li><a href="about.php">Rólunk</a></li>
      <li><a href="booking_page.php">Foglalás</a></li>
      <?php if (!isset($_SESSION["user"]) || empty($_SESSION["user"])): ?>
        <li><a href="signin_page.php" class="fa-regular fa-user"></a></li>
      <?php else: ?>
        <li><a href="user_page.php" class="fa-regular fa-user"></a></li>
      <?php endif; ?>
    </ul>
  </header>
  <main>
    <div class="h1">Szobáink</div>
    <div class="cards-container">
      <div class="card-container">
        <img src="img/church.jpg" alt="Piros ajtó" />
        <div class="text-container">
          <div class="h2">Elveszett templom</div>
          <div class="paragraph">
            A rejtvényekkel teli, őszi hangulatú szoba, melyben a
            résztvevőknek egy elveszett templom titkait kell felfedezniük. Az
            eldugott freskók, rejtett kapcsolók és titkos folyosók segítenek
            az útvesztőben.
          </div>
        </div>
        <div class="room-table-container">
          <table class="room-table">
            <tr>
              <td>Játékosok száma</td>
              <td>2-4</td>
            </tr>
            <tr>
              <td>Nehézség</td>
              <td>+++</td>
            </tr>
            <tr>
              <td>Időtartam</td>
              <td>90 perc</td>
            </tr>
            <tr>
              <td>Ár</td>
              <td>5000Ft/fő</td>
            </tr>
          </table>
          <a href="booking_page.php" class="btn btn-primary">Lefoglalom</a>
          <a href="room1.php" class="btn btn-secondary">Megnézem</a>
        </div>
      </div>
      <div class="card-container">
        <img src="img/palace.jpg" alt="Drága csillár" />
        <div class="text-container">
          <div class="h2">Gyémánt Birodalom</div>
          <div class="paragraph">
            Egy fényűző palota, tele drágakövekkel és titokzatos
            mechanizmusokkal. A játékosoknak meg kell találniuk a birodalom
            legértékesebb kincsét, a Gyémánt Koronát, mielőtt az idő lejár.
          </div>
        </div>
        <div class="room-table-container">
          <table class="room-table">
            <tr>
              <td>Játékosok száma</td>
              <td>2</td>
            </tr>
            <tr>
              <td>Nehézség</td>
              <td>++</td>
            </tr>
            <tr>
              <td>Időtartam</td>
              <td>60 perc</td>
            </tr>
            <tr>
              <td>Ár</td>
              <td>5000Ft/fő</td>
            </tr>
          </table>
          <a href="booking_page.php" class="btn btn-primary">Lefoglalom</a>
          <a href="room2.php" class="btn btn-secondary">Megnézem</a>
        </div>
      </div>
      <div class="card-container">
        <img src="img/forest.jpg" alt="Titokzatos erdő" />
        <div class="text-container">
          <div class="h2">Mágikus Erdő</div>
          <div class="paragraph">
            Egy varázslatos erdő mélyén rejtőzik ez a szoba, ahol a természet
            varázslatos erejét kell kihasználniuk a játékosoknak, hogy
            megtalálják az elrejtett varázslatos könyvet, mielőtt az idő
            lejárna.
          </div>
        </div>
        <div class="room-table-container">
          <table class="room-table">
            <tr>
              <td>Játékosok száma</td>
              <td>5-8</td>
            </tr>
            <tr>
              <td>Nehézség</td>
              <td>+++++</td>
            </tr>
            <tr>
              <td>Időtartam</td>
              <td>60 perc</td>
            </tr>
            <tr>
              <td>Ár</td>
              <td>5000Ft/fő</td>
            </tr>
          </table>
          <a href="booking_page.php" class="btn btn-primary">Lefoglalom</a>
          <a href="room3.php" class="btn btn-secondary">Megnézem</a>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <p class="fa fa-facebook"></p>
    <p class="fa fa-instagram"></p>
    <p class="fa fa-youtube"></p>
    <p class="fa fa-google"></p>
  </footer>
</body>

</html>