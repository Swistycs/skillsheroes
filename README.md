# DreamDestinations

Dit is mijn website voor de voorronde van Skills Heroes Web Developer 2026-2027. Het is een website voor het reisbureau DreamDestinations waarop hun 6 favoriete bestemmingen staan.

 Wat heb je nodig

- PHP 8
- MySQL
- Een webserver zoals XAMPP, MAMP of Docker

 Opstarten

1. Zet de map `skillsheroes` in je htdocs map (of waar je webserver zijn bestanden uit haalt).

2. Maak een database aan die `skillheroes` heet. In de sql file zit alleen de data, dus je moet eerst de tabel nog aanmaken:

sql
CREATE TABLE destinations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  city VARCHAR(100),
  country VARCHAR(100),
  image VARCHAR(255),
  number_of_bookings INT
);
```

3. Importeer daarna `destinations.sql` in de database, bijvoorbeeld via phpMyAdmin.

4. Check of de gegevens in `includes/db.php` kloppen. Ik gebruik Docker dus bij mij is de host `mysql_db`. Als je XAMPP of MAMP gebruikt moet je dat veranderen naar `localhost`. Gebruikersnaam en wachtwoord staan op `root` / `root`.

5. Ga naar `http://localhost/skillsheroes/` en dan zou het moeten werken.

 Wat ik heb gemaakt

header
Bovenaan staat het logo en de navigatie. De header blijft staan als je scrollt en wordt dan iets kleiner.

Hero
Een grote afbeelding met de titel, de tekst en een knop die naar de bestemmingen scrollt.

Bestemmingen
De bestemmingen haal ik uit de database met PHP (PDO). Ze staan op volgorde van aantal boekingen, de meeste boekingen staat als eerste. Bij elke bestemming zie je de stad, het land, de foto en hoeveel boekingen er zijn. Als je er met je muis overheen gaat schuift de kaart een stukje omhoog.

Responsive
De website werkt op desktop (1920x1080), tablet (768x1024) en mobiel (360x800). Op desktop staan er 3 bestemmingen naast elkaar, op tablet 2 en op mobiel 1. Op tablet en mobiel zit de navigatie in een hamburgermenu.

Counters
Er staan 3 counters op de site: 4000+ reizigers, 120 bestemmingen en 98% tevreden klanten. Die tellen op van 0 naar het getal als ze in beeld komen. Dat gebeurt maar 1 keer, en als je de pagina refresht begint het weer opnieuw.

 Bestanden

- `index.php` - de homepage
- `includes/db.php` - verbinding met de database
- `assets/css/style.css` - alle styling
- `assets/js/main.js` - de header, het hamburgermenu en de counters
- `assets/img/` - het logo, de hero foto en de foto's van de bestemmingen
- `destinations.sql` - de data van de bestemmingen

 Gebruikt

PHP, MySQL, HTML, CSS en JavaScript.
