<?php
session_start();
include ("kozos.php");

if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
  header("location: signin_page.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Foglalás</title>
  <link rel="stylesheet" href="styles/styles.css" />
  <link rel="stylesheet" href="styles/booking.css" />
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
        <li><a href="rooms.php">Szobáink</a></li>
        <li><a href="about.php">Rólunk</a></li>
        <li><a href="" class="active-menu">Foglalás</a></li>
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
      <li><a href="rooms.php">Szobáink</a></li>
      <li><a href="about.php">Rólunk</a></li>
      <li class="active-menu"><a href="booking_page.php">Foglalás</a></li>
      <?php if (!isset($_SESSION["user"]) || empty($_SESSION["user"])): ?>
        <li><a href="signin_page.php" class="fa-regular fa-user"></a></li>
      <?php else: ?>
        <li><a href="user_page.php" class="fa-regular fa-user"></a></li>
      <?php endif; ?>
  </header>
  <main>
    <div class="h1">Foglalj időpontot</div>
    <form action="booking.php" method="POST">
      <div class="h2">Foglalás menete</div>
      <ol>
        <li class="paragraph">Válassz szobát</li>
        <li class="paragraph">Válassz időpontot</li>
        <li class="paragraph">Add meg az adataid</li>
        <li class="paragraph">Küldd be az űrlapot</li>
      </ol>
      <div class="h2">Válassz szobát</div>
      <select name="room" id="rooms" required>
        <option value="" selected>Válassz egy szobát!</option>
        <option value="elveszett-templom">Elveszett Templom</option>
        <option value="gyemant-birodalom">Gyémánt Birodalom</option>
        <option value="magikus-erdo">Mágikus Erdő</option>
      </select>
      <div class="h2">Válassz időpontot</div>
      <div class="paragraph important">
        Mielőtt foglalsz, győződj meg róla
        <a href="rooms.php">az aktuális szoba</a> oldalán, hogy szabad az időpont!
      </div>
      <div class="paragraph">Válassz dátumot:</div>
      <input type="date" name="date" id="date" required min="2024-05-06" max="2024-05-12" />
      <div class="paragraph">Válaszd ki az órát:</div>
      <div id="hours">
        <input type="radio" name="time" id="13" value="13" />
        <label for="13">13.00 - 14.00</label><br />
        <input type="radio" name="time" id="14" value="14" />
        <label for="14">14.00 - 15.00</label><br />
        <input type="radio" name="time" id="15" value="15" />
        <label for="15">15.00 - 16.00</label><br />
        <input type="radio" name="time" id="16" value="16" />
        <label for="16">16.00 - 17.00</label><br />
        <input type="radio" name="time" id="17" value="17" />
        <label for="17">17.00 - 18.00</label><br />
      </div>
      <div class="h2">Add meg az adataid</div>
      <div class="form-elements-container">
        <div class="form-element">
          <label for="group-name" class="paragraph">Csapatnév:</label>
          <input type="text" name="group_name" id="group-name" placeholder="Csipet Csapat" required />
        </div>
        <div class="form-element">
          <label for="quantity" class="paragraph">Csapat létszám:</label>
          <input type="number" name="quantity" id="quantity" min="2" max="8" placeholder="2" required />
        </div>
        <div class="form-element">
          <label for="email" class="paragraph">Email cím:</label>
          <input type="email" name="email" id="email" placeholder="elek@gmail.com"
            value="<?php if (isset($_SESSION['email']))
              echo $_SESSION['email']; ?>" required />
        </div>
        <div class="form-element">
          <label for="phone" class="paragraph">Telefonszám:</label>
          <input type="tel" name="phone" id="phone" placeholder="06201234567"
            value="<?php if (isset($_SESSION['phone']))
              echo $_SESSION['phone']; ?>" required pattern="[0][6][0-9]{9}" />
        </div>
        <div class="form-element message">
          <label for="message" class="paragraph">Megjegyzés:</label>
          <textarea name="message" id="message" cols="30" rows="5"
            placeholder="Írj nekünk valami vicceset..."></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="booking">Lefoglalom</button>
      <a href="rooms.php" class="btn btn-secondary">Megnézem a szobákat</a>
      <button type="reset">Törlöm az adataimat!</button>
    </form>
  </main>
  <footer>
    <p class="fa fa-facebook"></p>
    <p class="fa fa-instagram"></p>
    <p class="fa fa-youtube"></p>
    <p class="fa fa-google"></p>
  </footer>
</body>

</html>