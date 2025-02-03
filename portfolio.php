<?php
  session_start();

  
  // getting data of user's name
  if($_SESSION['name'] == "Phopha"){
    $locationImg = "phopha.jpg";
    $about = "about1.txt";
    $education = "education1.txt";
    $experience = "experience1.txt";
    $hard = "hard1.txt";
    $soft = "soft1.txt";
    
  }
  else if($_SESSION['name'] == "Jib"){
    $locationImg = "girl.jpg";
    $about = "about2.txt";
    $education = "education2.txt";
    $experience = "experience2.txt";
    $hard = "hard2.txt";
    $soft = "soft2.txt";

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

</head>
<body>

  <div class="container d-flex flex-column">
    
    <!-- section navigation -->
    <header class="d-flex flex-column">
      <nav class="navbar bg-body-tertiary d-flex justify-content-center fixed-top py-2">
        <div class="container mx-0">
          <a class="navbar-brand" href="#">
            <img src="./picture/portfolio.svg" alt="Logo" width="30" class="d-inline-block align-text-top">
            Portfolio
          </a>

          <button type="button" class="btn btn-dark ms-auto" onclick="window.location.href='/'">
            logout
          </button>

        </div>

      </nav>

    </header> 

    <article class="container d-flex flex-column position-relative overflow-auto">

      <!-- info page -->
      <div class="container infoPage bg-white">
        <hr class="border border-dark border-2">
          <h1 class="point1 my-4 ms-5">Hello <?php echo $_SESSION['name'];?></h1>
        <hr class="border border-dark border-2">


        <!-- info of user's name -->
         <div class="scopeImage m-5 border border-dark border-5">
          <img class="img3" src="./picture/<?php echo $locationImg; ?>" alt="userPicture">
         </div>

        <h2 class="ms-5">Personal Information</h2>

        <hr class="border border-dark border-2">
          <p class="ms-5 pb-3 fs-3 font-family-base"><?php include($about);?></p>
        <hr class="border border-dark border-2">

        <h2 class="ms-5">Education</h2>

        <hr class="border border-dark border-2">
          <p class="ms-5 pb-3 fs-3 font-family-base"><?php include($education);?></p>
        <hr class="border border-dark border-2">

        <h2 class="ms-5">Experience Project</h2>

        <hr class="border border-dark border-2">
          <p class="ms-5 pb-3 fs-3 font-family-base"><?php include($experience);?></p>
        <hr class="border border-dark border-2">

        <h2 class="ms-5">Hard Skill</h2>

        <hr class="border border-dark border-2">
          <p class="ms-5 pb-3 fs-3 font-family-base"><?php include($hard);?></p>
        <hr class="border border-dark border-2">

        <h2 class="ms-5">Soft Skill</h2>

        <hr class="border border-dark border-2">
          <p class="ms-5 pb-3 fs-3 font-family-base"><?php include($soft);?></p>
        <hr class="border border-dark border-2">
      </div>


    </article>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </div>

</body>
</html>

<?php
  session_destroy();
?>