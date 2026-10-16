<?php
//  main connection to the database
require __DIR__ . '/includes/db.php';

$stmt = $pdo->query('SELECT id, city, country, image, number_of_bookings
                     FROM destinations
                     ORDER BY number_of_bookings DESC');
$destinations = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamDestinations skillheroes </title>
    <link rel="stylesheet" href="./assets/css/style.css">
  
</head>
<body>


<header class="site-header">
  <div class="nav-container">
    <a href="index.php" class="logo">
      <img src="./assets/img/logo.png" alt="DreamDestinations logo">
    </a>
    <button class="menu-toggle" aria-label="Menu openen" aria-expanded="false" aria-controls="nav-links">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <nav>
      <ul class="nav-links" id="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="#bestemmingen">Bestemmingen</a></li>
        <li><a href="#aanbiedingen">Aanbiedingen</a></li>
        <li><a href="#over-ons">Over ons</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>


<main>
  <section class="hero">
    <div class="hero-content">
      <h1>Ontdek de wereld met DreamDestinations</h1>
      <p>De mooiste bestemmingen wereldwijd. Voor iedere reiziger de perfecte reis.</p>
      <a href="#bestemmingen" class="btn">Bekijk bestemmingen</a>

      <div class="counters">
        <div class="counter">
          <span class="counter-number" data-target="4000" data-suffix="+">0</span>
          <p>reizigers</p>
        </div>
        <div class="counter">
          <span class="counter-number" data-target="120">0</span>
          <p>bestemmingen</p>
        </div>
        <div class="counter">
          <span class="counter-number" data-target="98" data-suffix="%">0</span>
          <p>tevreden klanten</p>
        </div>
      </div>
    </div>
  </section>


  
  <section id="bestemmingen" class="section">
    <h2>Favoriete bestemmingen</h2>
    <div class="destinations">
      <?php if (empty($destinations)): ?>
        <p>Er zijn nog geen bestemmingen gevonden.</p>
      <?php else: ?>
        <?php foreach ($destinations as $destination): ?>
          <div class="card">
            <img src="./assets/img/destinations/<?= htmlspecialchars($destination['image']) ?>"
                 alt="<?= htmlspecialchars($destination['city']) ?>">
            <div class="card-body">
              <h3><?= htmlspecialchars($destination['city']) ?></h3>
              <p><?= htmlspecialchars($destination['country']) ?></p>
              <span><?= number_format($destination['number_of_bookings'], 0, ',', '.') ?> boekingen</span>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </section>
</main>


<footer id="contact" class="site-footer">
  <p>&copy; <?= date('Y') ?> DreamDestinations</p>
</footer>

<script src="./assets/js/main.js"></script>
</body>
</html>
