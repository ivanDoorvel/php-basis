<?php
  // displays types
  $name = (string) 'Ivan';
  $isDev = (bool) true;
  $age = (int) 32;

  $name = 'Ivan';
  $isDev = true;
  $age = 32;

  // error are displayed by default with a lot of information which would get risk your application --

  // displays types and var info --
  var_dump($name);
  var_dump($isDev);
  var_dump($age);


  // displays only types --
  echo gettype($name);
  echo gettype($isDev);
  echo gettype($age);

  const NOMBRE = 'Ivan';

  define('PHP_LOGO', 'https://www.php.net/images/logos/php-logo-white.svg');

  $age = 42;
  $isOld = $age > 20;



// This is a way to make conditional, but there's some better to use for templates system
  if ($isOld) {
    echo "<h2>You're older</h2>";
  } else if ($isDev) {
    echo "<h2>Not too old, but you're Dev so you'll fucked up</h2>";
  } else {
    echo "<h2>Too younger</h2>";
  }

// ternary function
  $outputAge = $isOld
    ? 'Eres viejo'
    : 'Eres Joven';
// match
  $outputAge = match(true) {
    $age < 2    => "You're a baby, $name",
    $age < 10   => "You're a kid, $name",
    $age < 18   => "You're teen, $name",
    $age === 18 => "You're an adult, $name",
    $age < 40   => "You're an adult young, $name",
    $age > 40   => "You're an adult old, $name",
    default     => "Hueles más a madera jeje, $name"
  };

  // Arrays

  $bestLanguages = ["PHP", "JavaScript", "Python", 1, 2];

  $bestLanguages[3] = "Java";

  $bestLanguages[] = "TypeScript";

  // Arrays associatives
  $person = [
    "name" => "Miguel",
    "age" => 78,
    "isDev" => true,
    "languages" => ["PHP", "Javascript"]
  ];

  $person["name"] = "Iván";
  $person["languages"][1] = "TypeScript";
?>å


<ul>
  <?php foreach ($bestLanguages as $key => $language) : ?>
    <li><?= $key . " " . $language ?></li>
  <?php endforeach; ?>
</ul>

<h1>
  <!-- interprets echo in console and DOM. -->
  <?= $name; ?>
  <?= $isDev; ?>
  <?= $age; ?>
</h1>

<h2>
  <?= $outputAge ?>
</h2>

<?php if ($isOld) : ?>
  <h2>You're older</h2>
<?php elseif ($isDev) : ?>
  <h2>Not too old, but you're Dev so you'll fucked up</h2>
<?php else : ?>
  <h2>Too younger</h2>
<?php endif; ?>

<img src="<?= PHP_LOGO ?>">

<style>

  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>