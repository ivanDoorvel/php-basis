<?php


CONST API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializar curl session
$ch = curl_init(API_URL);

# receive only in server not in dom
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

# exect code
$result = curl_exec($ch);

// alternative to async fetch
//  $result = file_get_contents(API_URL); // to only make a get from an API
$data = json_decode($result, true);

curl_close($ch);
?>

<head>
  <meta charset="UTF-8" />
  <title>Next Marvel movie</title>
  <meta name="description" content="Next Marvel movie" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Fluid viewport --> 
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.fluid.classless.min.css"
  />
</head>

<main style="display: flex; justify-content: center; align-items: center; flex-direction: column; padding: 2rem;">
  <section style="width: fit-content;">
    <img
      src="<?= $data["poster_url"]; ?>"
      width="300"
      alt="Poster de <?= $data["title"]; ?>"
      style="margin: 0 auto;"
    />
  </section>

  <hgroup>
    <h3>
      <?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días
    </h3>
    <p>
      Fecha de estreno: <?= $data["release_date"]; ?>
    </p>
    <p>
      La siguiente es: <?= $data["following_production"]["title"]; ?>
    </p>
  </hgroup>

  <pre style="font-size: 12px; max-width: 800px; width: auto;">
    <?php var_dump($data); ?>
  </pre>
</main>
<style>

  :root {
    color-scheme: light dark;
  }
</style>