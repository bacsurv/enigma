<?php
session_start();
include ("kozos.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Elveszett Templom</title>
  <link rel="stylesheet" href="styles/styles.css" />
  <link rel="stylesheet" href="styles/room.css" />
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
        <li><a href="rooms.php" class="active-menu">Szobáink</a></li>
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
      <li class="active-menu"><a href="rooms.php">Szobáink</a></li>
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
    <div class="h1">Elveszett Templom</div>
    <div class="large-paragraph">
      A rejtvényekkel teli, őszi hangulatú szoba, melyben a résztvevőknek egy
      elveszett templom titkait kell felfedezniük. Az eldugott freskók,
      rejtett kapcsolók és titkos folyosók segítenek az útvesztőben.
    </div>
    <div class="paragraph">
      A csendes erdő mélyén, ahol a fák titkokat őriznek, áll egy ősi és
      titokzatos építmény: az Elveszett Templom. Legendák szerint ez a templom
      egykor egy hatalmas birodalom központja volt, amely most már csak
      romokban hever, és elveszett az idők homályában. Egy nap egy bátor
      felfedező csapat úgy dönt, hogy felderíti a Templom titkait. Mélyen a
      rengetegben járva, megtalálják az elveszettnek hitt építményt, melynek
      bejárata rég elrejtve maradt az idők során. Bár a bejutás nehézkes, a
      csapat végül sikeresen belép a templom falai közé. Ahogy felfedezik a
      Templom belsejét, rájönnek, hogy ez a hely tele van rejtélyekkel és
      kihívásokkal. Rejtvények, csapdák és titkos folyosók várnak rájuk,
      mindegyik egy újabb próbatétel a Templom titkainak felfedezéséhez. A
      csapat szorosan együtt dolgozik, mindenki hozzáteszi a tudását és
      képességeit a közös cél érdekében. Végül, miután megoldották az utolsó
      rejtvényt és legyőzték az utolsó akadályt, a csapat megtalálja az
      Elveszett Templom legnagyobb titkát: egy ősi könyvet, melyben a
      birodalom elveszett története és hatalmas kincsek rejlenek. Megszerezve
      a könyvet, a csapat sikeresen távozik a Templomból, hatalmas kalandjuk
      emlékét magukkal vihetik, miközben az ősi építmény újra a csendes erdő
      titkaivá válik.
    </div>
    <div class="img-container">
      <img src="img/church.jpg" alt="Piros ajtó" />
      <img src="img/church1.jpg" alt="Biblia" />
      <img src="img/church2.jpg" alt="Templom egy erdőben" />
    </div>
    <div class="h2">Szabad időpontok</div>
    <table id="table-desktop">
      <tr class="table-header">
        <th></th>
        <th>Hétfő</th>
        <th>Kedd</th>
        <th>Szerda</th>
        <th>Csütörtök</th>
        <th>Péntek</th>
        <th>Szombat</th>
        <th>Vasárnap</th>
      </tr>
      <tr class="table-row-1">
        <td>13.00 - 14.00</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
      </tr>
      <tr class="table-row-2">
        <td>14.00 - 15.00</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
      </tr>
      <tr class="table-row-3">
        <td>15.00 - 16.00</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#10060;</td>
      </tr>
      <tr class="table-row-4">
        <td>16.00 - 17.00</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#10060;</td>
      </tr>
      <tr class="table-row-5">
        <td>17.00 - 18.00</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#10060;</td>
      </tr>
    </table>
    <table id="table-mobile">
      <tr class="table-header">
        <th></th>
        <th>H</th>
        <th>K</th>
        <th>Sze</th>
        <th>Cs</th>
        <th>P</th>
        <th>Szo</th>
        <th>V</th>
      </tr>
      <tr class="table-row-1">
        <td>13.00</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
      </tr>
      <tr class="table-row-2">
        <td>14.00</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
      </tr>
      <tr class="table-row-3">
        <td>15.00</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#10060;</td>
      </tr>
      <tr class="table-row-4">
        <td>16.00</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#10060;</td>
      </tr>
      <tr class="table-row-5">
        <td>17.00</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#9989;</td>
        <td>&#10060;</td>
        <td>&#10060;</td>
      </tr>
    </table>
    <a href="rooms.php" class="btn btn-secondary">Megnézem a szobákat</a>
    <a href="booking_page.php" class="btn btn-primary">Lefoglalom</a>
  </main>
  <footer>
    <p class="fa fa-facebook"></p>
    <p class="fa fa-instagram"></p>
    <p class="fa fa-youtube"></p>
    <p class="fa fa-google"></p>
  </footer>
</body>

</html>