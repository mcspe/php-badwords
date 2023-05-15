<?php
  $dirtyText = $_POST['dirtyText'];
  $dirtyWord = $_POST['dirtyWord'];
  // var_dump($dirtyText);
  $cleanText = str_replace(lcfirst($dirtyWord), "***", $dirtyText);
  $cleanText = str_replace(ucfirst($dirtyWord), "***", $cleanText);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FAVICON -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <!-- BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="style.css">
  <title>Parental Advisor</title>
</head>
<body>
  <header>
    <div class="container-fluid d-flex align-items-center justify-content-center gap-5">
      <img src="./logo.png" alt="LOGO">
      <h1>KEEP YOUR TEXT CLEAN</h1>
      <img src="./logo.png" alt="LOGO">
    </div>
  </header>
  <main>
    <div class="container my-3 text-center">
      <div class="ms-wrapper my-5">
      <div class="row align-items-center gap-5">
        <div class="ms-given-text col text-justify">
          <h3>Here's the <em>dirty</em> text, with
            <?php
              echo str_word_count($dirtyText)
            ?>
             words and 
            <?php
              echo strlen($dirtyText)
            ?>
             characters long.
          </h3>
          <p class="ms-paragrph m-3 p-4">
            <?php
              echo $dirtyText
            ?>
          </p>
        </div>
        <div class="ms-clean-text col text-justify">
          <h3>Here's the <em>clean</em> text, with 
            <?php
              echo str_word_count($cleanText)
            ?>
             words and 
            <?php
              echo strlen($cleanText)
            ?>
             characters long.
          </h3>
          <p class="ms-paragrph m-3 p-4">
            <?php
              echo $cleanText
            ?>
          </p>
        </div>
      </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="container-fluid py-3 text-center">
      <p>
        &copy;
        <a class="link mx-1" href="https://github.com/mcspe">@mcspe</a>
        <span>All Rights Reserved</span>
      </p>
    </div>
  </footer>
</body>
</html>