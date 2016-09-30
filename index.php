<?php 
$images = [
  "beachgrass" => "dark",
  "carnival"   => "light",
  "pampas"     => "dark",
  "parkgrass"  => "light",
  "pool"       => "light"
];
if( $_GET["theme"] ) {
  $theme = $_GET["theme"];
} else {
  $theme = "beachgrass";
}
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <!-- Consider removing -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Breathe: Mindfulness in 10kB</title>
    <meta name="description" content="A site that loads fast so you can slow down. Created for 10k Apart.">

    <link rel="stylesheet" href="css/style.css">
    <?php if ($images[$theme] == "dark") : ?>
    <style>
      body, button { color: #002; }
      main { background-image: radial-gradient(transparent, rgba(255,255,235,0.1) 50%, rgba(255, 255, 235, 0.8)); }
      #arrow { stroke: #002; }
    </style>
    <?php endif; ?>    

    <!-- Icons -->
    <link rel="shortcut icon" href="/images/favicon.ico">
    
  </head>
  <body style="background-image:url('img/<?php echo $theme ?>.gif')">
    <main>
      <h1>Breathe</h1>
      <p class="subheading"><span class="chunk">Mindfulness in 10 Kilobytes. </span>
        <span class="chunk">Additional controls below.</span></p>
      <a class="arrow-link" href="#controls">
        <svg id="arrow" viewbox="0 0 100 30" width="100">
          <path d="M5 5l45 20l45 -20"/>
        </svg>
      </a>
      <!-- <div class="overlay"></div> -->
    </main>
    <form action = "<?php $_PHP_SELF ?>" method = "GET" id="controls">
      <button type="submit" name="theme" value="carnival">Carnival</button>
      <button type="submit" name="theme" value="pampas">Pampas</button>
      <button type="submit" name="theme" value="parkgrass">Grassy Field</button>
      <button type="submit" name="theme" value="pool">Pool</button>
      <button type="submit" name="theme" value="beachgrass">Beach Grass</button>
    </form>
    <footer>
      <p>A <a href="http://verythorough.com" target="_blank">VeryThorough</a> project.  More info on <a href="https://github.com/verythorough/breathe" target="_blank">GitHub</a>.<p>
    </footer>
  </body>
</html>
