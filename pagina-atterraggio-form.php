<?php
  
  $paragrafo = $_POST['paragrafo'];
  $parola = $_POST['parola'];

  $lunghezza_paragrafo = strlen($paragrafo);
  $paragrafo_senza_parola = str_replace($parola, '***', $paragrafo)

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina atterraggio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <a href="form.html">Torna al form</a>
  <div class="container my-5 bg-info">    
    <h1>Il paragrafo inserito è: "<?php echo $paragrafo ?>" ed è lungo <?php echo $lunghezza_paragrafo ?> caratteri.</h1>
  </div>
  <div class="container bg-primary ">
    <h1>Il paragrafo originale è : "<?php echo $paragrafo ?>"</h1>
    <h2>Il paragrafo con la parola censurata è : "<?php echo $paragrafo_senza_parola ?>"</h2>
  </div>
</body>
</html>